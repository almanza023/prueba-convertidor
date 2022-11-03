<div>
    <div>
        <center>
            <h2><b>CONVERTIDOR DE MONEDAS<h2><b></b></h2>
        </center>
    <div class="p-3">

            <div class="row">
                    <div class="col-4">
                        <label for="">Moneda Inicial</label>
                       <select class="form-control" wire:model.defer="monedaInicial">
                        <option value="">Seleccionela Moneda</option>
                        @foreach ($monedas as $item)
                            <option value="{{ $item['id'] }}">{{ $item['valor'] }}</option>
                        @endforeach
                       </select>
                        @error('monedaInicial') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="col-4">
                        <label for="">Moneda Final</label>

                       <select class="form-control" wire:model.defer="monedaFinal">
                        <option value="">Seleccionela Moneda</option>
                        @foreach ($monedas as $item)
                            <option value="{{ $item['id'] }}">{{ $item['valor'] }}</option>
                        @endforeach
                       </select>
                        @error('monedaFinal') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="col-4">
                        <label for="">Valor a Convertir</label>
                      <input type="number" class="form-control" wire:model.defer="valorInicial">
                        @error('valorInicial') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

            </div>
            <div class="row">
                <br><br>
                <div class="col-4">
                    <br>
                    <button class="btn btn-primary btn-block waves-effect waves-light"
                    wire:click="convertidor"
                    type="button">Convertir </button>

                </div>
                <div class="col-4">
                    <br>
                    <button class="btn btn-warning btn-block waves-effect waves-light"
                    wire:click="nuevo"
                    type="button">Nuevo </button>
                </div>
                <div class="col-4">
                    <br>
                    <a class="btn btn-danger btn-block waves-effect waves-light"
                    href="{{ route('logout') }}">Salir </a>
                </div>


            </div>

            @if($mostrar)
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <tr>
                            <th colspan="2">RESULTADO DE CONVERSION</th>
                        </tr>
                        <tr>
                            <th>
                                FECHA
                            </th>
                            <td>
                                {{ $fecha }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                VALOR CONVERTIDO
                            </th>
                            <td>
                                $ {{ number_format($valorFinal) }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            @endif



    </div>

</div>
