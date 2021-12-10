<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{ $componentName }} | {{ $pageTitle }}</b>
                </h4>
                <ul class="tabs tab-pills">
                    
                        <a href="javascript:void(0)" class="btn btn-dark" data-toggle="modal"
                        data-target="#theModal">Agregar</a>
                    
                </ul>
            </div>
            @include('common.searchbox')

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-unbordered table-hover mt-2">
                        <thead class="text-white" style="background: #3B3F5C">
                            <tr>
                                <th class="table-th text-wHite">USUARIO</th>
                                <th class="table-th text-wHite text-center">TELÉFONO</th>
                                <th class="table-th text-wHite text-center">EMANIL</th>                                
                                <th class="table-th text-wHite text-center">PERFIL</th>
                                <th class="table-th text-wHite text-center">ESTATUS</th>
                                <th class="table-th text-wHite text-center">IMAGEN</th>
                                <th class="table-th text-wHite text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $r)
                                <tr>
                                    <td>
                                        <h6>{{ $r->name }}</h6>
                                    </td>
                                    <td><h6 class="text-center">{{ $r->phone }}</h6></td>                            
                                    <td><h6 class="text-center">{{ $r->email }}</h6></td>                            
                                    <td><h6 class="text-center">{{ $r->profile }}</h6></td>
                                    <td>
                                        <span class="badge {{$r->status=='ACTIVE'?'badge-success':'badge-danger'}} text-uppercase">
                                            {{$r->status}}</span>
                                    </td>

               {{--                      <td class="text-center">
                                        @if($r->image !=null)
                                            <img src="{{ asset('storage/users/' . $r->imagen) }}"
                                                alt="imagen de ejemplo" class="card-img-top img-fluid">
                                        @endif
                                    </td> --}}
                                    <td class="text-center">
                                        <span>
                                            <img src="{{ asset('storage/usuarios/' . $r->imagen) }}"
                                                alt="imagen de ejemplo" height="70" width="80">
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" wire:click="Edit({{ $r->id }})"
                                            class="btn btn-dark mtmobile" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="Confirm('{{ $r->id }}','{{ $r->name }}')" 
                                            class="btn btn-dark" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.users.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        window.livewire.on('item-added', msg => {
            $('#theModal').modal('hide')
            noty(msg)
        });
        window.livewire.on('item-updated', msg => {
            $('#theModal').modal('hide')
            noty(msg)
        });
        window.livewire.on('item-deleted', msg => {
            noty(msg)
        });
        window.livewire.on('modal-show', msg => {
            $('#theModal').modal('show')
        });
        window.livewire.on('modal-hide', msg => {
            $('#theModal').modal('hide')
        });        
        window.livewire.on('user-withsales', msg => {
            noty(msg)
        });        
        

    });

    function Confirm(id, name) {
        
        swal.fire({
            title: 'CONFIRMAR',
            icon: 'warning',
            text: 'Confirmar eliminar al usuario ' + '"' + name + '"',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#383838',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'
        }).then(function(result) {
            if (result.value) {
                window.livewire.emit('deleteRow', id)
                Swal.close()
            }
        })
    }
</script>
