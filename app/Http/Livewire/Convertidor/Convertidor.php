<?php

namespace App\Http\Livewire\Convertidor;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Convertidor extends Component
{
    public $monedaInicial, $monedaFinal, $valorInicial, $valorFinal, $fecha, $mostrar=false;
    public $url="https://api.apilayer.com/fixer/";
    public $apiKey="pmcspXVN4i2oo3ci6Zh5ykjEwmnrHiJc";
    public function render()
    {
        $response = Http::withHeaders([
            "apikey"=>$this->apiKey
        ])->get($this->url."symbols");
        $data=$response["symbols"];

        $monedas=[];
        foreach ($data as $key => $value) {
            $temp=[
                'id'=>$key,
                'valor'=>$value
            ];
            array_push($monedas, $temp);
        }

        return view('livewire.convertidor.convertidor', compact('monedas'));
    }

    public function convertidor(){

        $validated = $this->validate([
            'monedaInicial' => 'required',
            'monedaFinal' => 'required',
            'valorInicial' => 'required',
        ]);

        $response = Http::withHeaders([
            "apikey"=>$this->apiKey
        ])->get($this->url."convert?to=".$this->monedaFinal."&from=".$this->monedaInicial."&amount=".$this->valorInicial."");
        $this->valorFinal=($response["result"]);
        $this->fecha=($response["date"]);
        $this->mostrar=true;
    }

    public function nuevo(){
            $this->monedaInicial="";
            $this->monedaFinal="";
            $this->valorFinal="";
            $this->valorInicial="";
            $this->fecha="";
            $this->mostrar=false;

    }


}
