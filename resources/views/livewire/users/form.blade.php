@include('common.modalHead')
<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Luis Ramirez">
            @error('name') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Telefono</label>
            <input type="text" wire:model.lazy="phone" class="form-control" placeholder="ej: 4406985" maxlength="8">
            @error('phone') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Email</label>
            <input type="text" wire:model.lazy="email" class="form-control" placeholder="ej: luisRamirez@gmail.com">
            @error('email') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" date-type='currency' wire:model.lazy="password" class="form-control"
                placeholder="ej: 123">
            @error('password') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Status</label>
            <select wire:model.lazy="status" class="form-control">
                <option value="Elegir" selected>Elegir</option>
                <option value="ACTIVE">Activo</option>
                <option value="LOCKED">Bloqueado</option>
            </select>
            @error('status') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Asignar Role</label>
            <select wire:model.lazy="profile" class="form-control">
                <option value="Elegir" selected>Elegir</option>                
                @foreach($roles as $role)
                <option value="{{$role->name}}">{{$role->name}}</option>            
                @endforeach
            </select>
            @error('profile') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-8">
        <div class="form-group custom-file">
            <input type="file" class="custom-file-input form-control" wire:model="image"
                accept="image/x-png,image/gif,image/jpeg">
            <label class="custom-file-label">Imagen {{ $image }}</label>
            
        </div>
    </div>

    @include('common.modalFooter')