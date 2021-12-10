<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;
use App\Models\User;

class PermisosController extends Component
{
    use WithPagination;

    public $PermissionName, $search, $selected_id, $pageTitle, $componentName;
    private $pagination = 5;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Permisos';
    }

    public function render()
    {
        if (strlen($this->search) > 0) {
            $permisos = Permission::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        } else {
            $permisos = Permission::orderBy('name', 'asc')->paginate($this->pagination);
        }
        return view('livewire.permisos.component', [
            'data' => $permisos
        ])
            ->extends('layouts.theme.app')
            ->section('content');
    }
    public function CreatePermission()
    {
        
        $rules = ['PermissionName' => 'required|min:2|unique:permissions,name'];
        $messages = [
            'PermissionName.required' => 'El nombre del permiso es requerido',
            'PermissionName.unique' => 'El permiso ya existe',
            'PermissionName.min' => 'El nombre del permiso debe tener al menos 2 caracteres'
        ];
        $this->validate($rules, $messages);

        Permission::create(['name' => $this->PermissionName]);

        $this->emit('item-added', 'Se registró el permiso con existo');
        $this->resetUI();
    }
    public function Edit(Permission $permiso)
    {
        $this->selected_id = $permiso->id;
        $this->PermissionName = $permiso->name;

        $this->emit('show-modal', 'Show modal');
    }
    public function UpdatePermission()
    {
        $rules = ['PermissionName' => "required|min:2|unique:permissions,name,{$this->selected_id}"];
        $messages = [
            'PermissionName.required' => 'El nomre del permiso es requerido',
            'PermissionName.unique' => 'El permiso ya existe',
            'PermissionName.min' => 'El nombre del permiso debe tener al menos 2 caracteres'
        ];
        $this->validate($rules, $messages);
        $permiso = Permission::find($this->selected_id);
        $permiso->name=$this->PermissionName;
        $permiso->save();

        $this->emit('item-updated', 'Se actualizó el permiso con exito');
        $this->resetUI();
    }
    protected $listeners = ['deleteRow' => 'Destroy'];

    public function Destroy($id)
    {
        $rolesCount = Permission::find($id)->getRoleNames()->count();
        if ($rolesCount > 0) {
            $this->emit('item-error', 'No se puede eliminar el permiso porque tiene permisos asociados');
            return;
        }
        Permission::find($id)->delete();
        $this->emit('item-deleted', 'Se eliminó el permiso con exito');
    }
    /* public function AsignarRoles($rolesList) 
    {
        if ($this->selected_id > 0) {
            $user = User::find($this->userSelected);
            if ($user) {

                $user->syncRoles($rolesList);
                $this->emit('msg-ok', 'Roles asignados correctamente');
                $this->resetInput();
            }
        }
    } poner en el controlador users*/
    public function resetUI(){
        $this->PermissionName='';
        $this->search='';
        $this->selected_id=0;
        $this->resetValidation();
    }
}
