<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class IndexComponent extends Component
{
    use WithPagination;

    // Variable a ejecutar para recargar pagina
    public $prompt;

    public $action;
    public $selectedItem;

    // Variable a ejecutar para recargar pagina
    protected $listeners = [
        'refreshParent'
    ];

    // Funcion para editar y eliminar
    public function selectItem($itemId, $action){
        $this->selectedItem = $itemId;
        if($action =='update'){
            $this->emit('getModelId', $this->selectedItem);
            $this->dispatchBrowserEvent('openModal');
        }
    }

    // Funcion a ejecutar para recargar pagina ver continuacion en ModalExcelComponent
    public function refreshParent(){
        $this->prompt = " ";
    }

    public function render()
    {
        //$datos = Data::latest('id')->paginate(10);
        return view('livewire.index-component', [
            'datos' => Data::latest('id')->paginate(10)
        ]);
    }
}
