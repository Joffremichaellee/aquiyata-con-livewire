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

    public $empresa;
    public $nombre;
    public $dni_ruc;
    public $telefono;
    public $celular;
    public $email;
    public $whatsapp;
    public $slogan;
    public $descripcion;
    public $logo;
    public $categoria_id;
    public $descripcion_breve;
    public $titulo;
    public $title;
    public $keywords;
    public $empresascol;
    public $slug;
    public $estrellas;

    
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
            'dni_ruc' => $this->descripcion,
            'telefono' => $this->nombre,
            'celular' => $this->celular,
            'email' => $this->email,
            'whatsapp' => $this->whattsap,
            'slogan' => $this->slogan,
            'descripcion' => $this->descripcion,
            'estado' => $this->estado,
            'estrellas' => $this->estrellas,
            'descripcion_breve' => $this->descripcion_breve,
            'titulo' => $this->titulo,
            'title' => $this->title,
            'keywords' => $this->keywords,
            'empresascol' => $this->empresascol,
            'slug' => $this->slug,
            'logo' => $this->slug,
            
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
            $this->dni_ruc = $this->empresa->dni_ruc;
            $this->telefono = $this->empresa->telefono;
            $this->celular = $this->empresa->celular;
            $this->email = $this->empresa->email;
            $this->whatsapp = $this->empresa->whattsap;
            $this->slogan = $this->empresa->slogan;
            $this->descripcion = $this->empresa->descripcion;
            $this->estado = $this->empresa->estado;
            $this->estrellas = $this->empresa->estrellas;
            $this->descripcion_breve = $this->empresa->descripcion_breve;
            $this->titulo = $this->empresa->titulo;
            $this->title = $this->empresa->title;
            $this->keywords = $this->empresa->keywords;
            $this->empresascol = $this->empresa->empresascol;
            $this->slug = $this->empresa->slug;
        }

    }

}
