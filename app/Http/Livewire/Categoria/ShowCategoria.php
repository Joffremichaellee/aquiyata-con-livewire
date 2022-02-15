<?php

namespace App\Http\Livewire\Categoria;

use App\Models\Categoria;

use Livewire\Component;

use Livewire\WithPagination;

class ShowCategoria extends Component
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
        $categorias = Categoria::where('nombre','like','%'.$this->search.'%')
                                ->orWhere('descripcion','like','%'.$this->search.'%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate(10);
                                

        return view('livewire.categoria.show-categoria', compact('categorias')) 
        ->layout('layouts.paneldos');
    }


    public function order($orden){

        if ($this->sort = $orden) {
            
            if ($this->direction == 'desc') {
                $this->direction= 'asc';
            }else{
                $this->direction= 'desc';
            }

        }
        
    }

    public function activar($id)
    {
        // if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = 0;
        $categoria->save(); 
    }

    public function desactivar($id)
    {
        // if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = 1;
        $categoria->save();
    }

    public function eliminar(Categoria $categoria)
    {
        $categoria->delete();
    }

}
