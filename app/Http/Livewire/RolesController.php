<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;
use App\Models\User;
use DB;

class RolesController extends Component
{
    use WithPagination;
    public $roleName,$search,$selected_id,$pageTitle,$componentName;
    private $pagination=5;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Roles';
        
    }

    public function render()
    {
        if(strlen($this->search)>0){
            $roles=Role::where('name','like','%'.$this->search.'%')->paginate($this->pagination);            
        }else{
            $roles=Role::orderBy('name','asc')->paginate($this->pagination);
        }
        return view('livewire.roles.component',[
            'roles'=>$roles,
        ])
        ->extends('layouts.theme.app')
        ->section('content');
    }
}
