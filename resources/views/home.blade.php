
<!DOCTYPE html>
<html>
    <head>
        @include('theme.estilos')
        @livewireStyles
        <title>CONVERTIDOR</title>
    </head>
    <body  >

        <!-- Begin page -->
        <div class="page-content-wrapper ">
            @include("theme.topbar")
        <div class="container-fluid" >
            <div class="card">
                <div class="card-body">
                        <livewire:convertidor.convertidor />
                    </div>
                </div>
            </div>
        </div>

    </body>
    @livewireScripts
</html>

