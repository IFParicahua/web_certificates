<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormPostComponent extends Component
{
    public $modelId;
    public $dimension;
    public $colada;
    public $masal;

    protected $listeners = [
        'getModelId'
    ];

    public function getModelId($modelId){
        $this->modelId = $modelId;
        $data = DB::table('data')->find($this->modelId);
        $this->dimension = $data->dimension;
        $this->colada = $data->colada;
        $this->masal = $data->masa_lineal;
    }

    // public function hydrate(){
    //     $this->validate([
    //         'dimension' => 'required',
    //         'colada' => 'required',
    //         'masal' => 'required',
    //     ]);
    // }

    public function save(){
        $this->validate([
            'dimension' => 'required',
            'colada' => 'required',
            'masal' => 'required',
        ]);

        $datos = Data::find($this->modelId);
        $datos->dimension = $this->dimension;
        $datos->colada = $this->colada;
        $datos->masa_lineal = $this->masal;
        $datos->save();
        $this->emit('refreshParent');
    }

    public function render()
    {
        return view('livewire.form-post-component');
    }
}
