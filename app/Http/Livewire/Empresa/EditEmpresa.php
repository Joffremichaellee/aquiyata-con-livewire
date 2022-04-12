<?php

namespace App\Http\Livewire\Empresa;

use App\Models\Empresa;

use Livewire\Component;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class EditEmpresa extends Component
{

    use WithFileUploads;

    public $nombre;
    public $empresa;
    public $descripcion;
    public $dni_ruc;
    public $telefono;
    public $logo;

    
    public function mount($id = null)
    {
        $this->init($id);
    }

    public function render()
    {
        return view('livewire.empresa.edit-empresa')
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

        if ($this->empresa){
            $this->rules['nombre'] = 'required|max:50|min:2|unique:categorias,nombre,'.$this->empresa->id;
        }else{
            $this->rules['nombre'] = 'required|max:50|min:2|unique:categorias,nombre,'.$this->empresa->id;
        }    

        $this->validate();



        if ($this->logo)
        {
            Storage::delete([$this->categoria->logo]);

            $logo= $this->logo->store('public/categorias');
            $this->categoria->logo = Storage::url($logo);
        }
        
        

        $this->empresa->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            
        ]);

        $this->emit('render');

        $this->reset(['nombre','descripcion','logo']);

        $this->emit('alertEdit');

        return redirect()->route('categoria.index');

          

    }

    private function init($id)
    {

        $empresa = null;

        if($id)
        {
            $empresa = Empresa::findOrFail($id);
        }

        $this->empresa = $empresa;

        if ($this->empresa) {

            $this->nombre = $this->empresa->nombre;
            $this->descripcion = $this->empresa->descripcion;
        }

    }

}
