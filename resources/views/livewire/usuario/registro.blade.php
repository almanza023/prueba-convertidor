<div>
    <center>
        <h2><b>REGISTRO DE USUARIOS<h2><b></b></h2>
    </center>
<div class="p-3">

        <div class="form-group row">
            <div class="col-12">
                <label for="">Nombre</label>
                <input class="form-control" type="text"  wire:model="name" placeholder=" ">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-12">
                <label for="">Correo</label>
                <input class="form-control" type="email"  wire:model="email" placeholder=" ">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-12">
                <label for="">Contraseña</label>
                <input class="form-control" type="password"  wire:model="password" placeholder="Contraseña">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group text-center row m-t-20">
            <div class="col-12">
                <button class="btn btn-primary btn-block waves-effect waves-light"
                wire:click="store"
                type="button">REGISTRAR </button>
            </div>
        </div>

</div>
