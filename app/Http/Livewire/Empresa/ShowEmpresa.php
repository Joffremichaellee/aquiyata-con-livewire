<?php

namespace App\Http\Livewire\Empresa;

use App\Models\Empresa;

use Livewire\Component;

use Livewire\WithPagination;

use Auth;

use Image;

class ShowEmpresa extends Component
{

    use WithPagination;

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public $estado;
    public $open = false;

    public $nombre;
    public $descripcion;
    public $image;

    protected $listeners = ['render' => 'render', 'eliminar'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $empresas = Empresa::where('nombre','like','%'.$this->search.'%')
                                ->orWhere('descripcion','like','%'.$this->search.'%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate(10);   

        return view('livewire.empresa.show-empresa', compact('empresas'), array('user' => Auth::user()) )
        ->layout('layouts.paneldos');
    }
}
