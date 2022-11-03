
<!DOCTYPE html>
<html>
    <head>
        @include('theme.estilos')
        <title>INICIO DE SESIÓN</title>
    </head>
    <body class="fixed-left" >
        <!-- Begin page -->
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                        <center>
                            <h2><b>INICIO DE SESIÓN<h2><b></b></h2>
                        </center>
                    <div class="p-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form class="form-horizontal m-t-20" autocomplete="off" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="">Correo</label>
                                    <input class="form-control" type="email"  name="email" placeholder=" ">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="">Contraseña</label>
                                    <input class="form-control" type="password"  name="password" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="text-center">
                                <a href="{{ route('view.registro') }}">Registarse</a>
                              </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">INGRESAR <i class="mdi mdi-arrow-right-bold-circle"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
