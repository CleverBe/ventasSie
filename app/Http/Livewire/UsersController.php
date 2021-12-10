<?php

namespace App\Http\Livewire;

use App\Models\Sale;
use Spatie\Permission\Models\Role;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;

class UsersController extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $phone, $email, $status, $image, $password, $selected_id, $fileLoaded, $profile;
    public $pageTitle, $componentName, $search;
    private $pagination = 3;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }
    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->status = "Elegir";
        $this->profile = "Elegir";
        $this->componentName = "Usuarios";
    }

    public function render()
    {
        if (strlen($this->search) > 0) {
            $data = User::where('name', 'like', '%' . $this->search . '%')
                ->select('*')->orderBy('id', 'desc')->paginate($this->pagination);
        } else {
            $data = User::select('*')->orderBy('id', 'desc')->paginate($this->pagination);
        }

        return view('livewire.users.component', [
            'data' => $data,
            'roles' => Role::orderBy('name', 'asc')->get()
        ])
            ->extends('layouts.theme.app')
            ->section('content');
    }

    public function Edit(User $user)
    {
        $this->selected_id = $user->id;
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->profile=$this->profile;
        $this->status = $user->status;
        $this->email = $user->email;
        $this->password = '';

        $this->emit('modal-show', 'open!');
    }

    protected $listeners = ['deleteRow' => 'Destroy', 'resetUI' => 'resetUI'];

    public function Store()
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'status' => 'required|not_in:Elegir',
            'profile' => 'required|not_in:Elegir',
            'password' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'Ingrese un nombre',
            'name.min' => 'El nombre del usuario debe tener al menos 3 caracteres',
            'email.required' => 'Ingresa un correo electronico',
            'email.email' => 'Ingresa un correo valido',
            'email.unique' => 'El email ya existe',
            'status.required' => 'Seleccione un estado para el usuario',
            'status.not_in' => 'Seleccione el estatus',
            'profile.required' => 'Selecciona el perfil/role del usuario',
            'profile.not_in' => 'Seleccione un perfil/role distinto de elegir',
            'password.required' => 'Ingrese el password',
            'password.min' => 'El password debe tener al menos 3 caracteres',

        ];
        $this->validate($rules, $messages);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => $this->status,
            'profile' => $this->profile,
            'password' => bcrypt($this->password)
        ]);
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/usuarios', $customFileName);
            $user->image = $customFileName;
            $user->save();
        }
        $this->resetUI();
        $this->emit('item-added', 'Usuario Registrado');
    }
    public function Update()
    {
        $rules = [
            'email' => "required|email|unique:users,email,{$this->selected_id}",
            'name' => 'required|min:3',
            'status' => 'required|not_in:Elegir',
            'profile' => 'required|not_in:Elegir',
            'password' => 'required|min:3'
        ];
        $messages = [
            'name.required' => 'Ingrese un nombre',
            'name.min' => 'El nombre del usuario debe tener al menos 3 caracteres',
            'email.required' => 'Ingresa un correo electronico',
            'email.email' => 'Ingresa un correo valido',
            'email.unique' => 'El email ya existe',
            'status.required' => 'Seleccione un estado para el usuario',
            'status.not_in' => 'Seleccione el estatus',
            'profile.required' => 'Selecciona el perfil/role del usuario',
            'profile.not_in' => 'Seleccione un perfil/role distinto de elegir',
            'password.required' => 'Ingrese el password',
            'password.min' => 'El password debe tener al menos 3 caracteres',
        ];
        $this->validate($rules, $messages);
        $user = User::find($this->selected_id);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => $this->status,
            'profile' => $this->profile,
            'password' => bcrypt($this->password)
        ]);
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/usuarios', $customFileName);
            $imageTemp = $user->image;
            $user->image = $customFileName;
            $user->save();

            if ($imageTemp != null) {
                if (file_exists('storage/usuarios/' . $imageTemp)) {
                    unlink('storage/usuarios/' . $imageTemp);
                }
            }
        }
        $this->resetUI();
        $this->emit('item-updated', 'Usuario actualizado');
    }

    public function Destroy(User $user)
    {
        if ($user) {
            $sales = Sale::where('user_id', $user->id)->count();
            if ($sales > 0) {
                $this->emit('user-withsales', 'No es posible eliminar el usuario porque tiene ventas registradas');
            } else {
                $imageTemp = $user->image;
                $user->delete();
                if ($imageTemp != null) {
                    if (file_exists('storage/usuarios/' . $imageTemp)) {
                        unlink('storage/usuarios/' . $imageTemp);
                    }
                }
                $user->delete();
                $this->resetUI();
                $this->emit('item-deleted', 'Usuario Eliminado');
            }
        }
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

    public function resetUI()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->phone = '';
        $this->status = 'Elegir';
        $this->search = '';
        $this->image = null;
        $this->selected_id = 0;
        $this->resetValidation();
        $this->resetPage();
    }
}
