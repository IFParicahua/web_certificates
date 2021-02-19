<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;

class ModalExcelComponent extends Component
{
    use WithFileUploads;
    public $excelid;
    public $icon_file = "fa-folder-open";
    public $mensaje = "Suelte o seleccione el archivo xlsx o xls";

    public function render()
    {
        return view('livewire.modal-excel-component');
    }

    public function submit(){
        $this->validate([
            'excelid' => 'required|mimes:xlsx,xls'
        ]);
        Excel::import(new DataImport, $this->excelid);
        // Sejecuta el emit para recargar un componente en este caso IndexComponent
        $this->emit('refreshParent');
        $this->excelid="";
    }
}
