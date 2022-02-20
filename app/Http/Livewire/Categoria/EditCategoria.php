<?php

namespace App\Http\Livewire\Categoria;

use App\Models\Categoria;

use Livewire\Component;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class EditCategoria extends Component
{

    use WithFileUploads;

    public $nombre;
    public $descripcion;
    public $image;
    public $categoria;

    public function mount($id = null)
    {
        $this->init($id);
    }

    public function render()
    {
        return view('livewire.categoria.edit-categoria')
        ->layout('layouts.paneldos');
    }

    protected $rules = [
        'nombre' => 'required|max:50|min:2',
        //'image' => 'required|image',
        /*'descripcion' => 'required|max:256',*/
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }

    public function editar(/*Request $request, Categoria $categoria*/)
    {

        if ($this->categoria){
            $this->rules['nombre'] = 'required|max:50|min:2|unique:categorias,nombre,'.$this->categoria->id;
        }else{
            $this->rules['nombre'] = 'required|max:50|min:2|unique:categorias,nombre,'.$this->categoria->id;
        }    

        $this->validate();



        if ($this->image)
        {
            Storage::delete([$this->categoria->image]);

            $image= $this->image->store('public/categorias');
            $this->categoria->image = Storage::url($image);
        }
        
        

        $this->categoria->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            
        ]);

        $this->emit('render');

        $this->reset(['nombre','descripcion','image']);

        $this->emit('alertEdit');

        return redirect()->route('categoria.index');

          

    }

    private function init($id)
    {

        $categoria = null;

        if($id)
        {
            $categoria = Categoria::findOrFail($id);
        }

        $this->categoria = $categoria;

        if ($this->categoria) {

            $this->nombre = $this->categoria->nombre;
            $this->descripcion = $this->categoria->descripcion;
        }

    }

}
