
<!DOCTYPE html>
<html>
    <head>
        @include('theme.estilos')
        @livewireStyles
        <title>REGISTRO DE USUARIOS</title>
    </head>
    <body class="fixed-left" >
        <!-- Begin page -->
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                        <livewire:usuario.registro />
                    </div>
                </div>
            </div>
        </div>
    </body>
    @livewireScripts
</html>
