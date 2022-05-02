<?php

namespace App\Http\Livewire\Empresa;

use App\Models\Empresa;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class CreateEmpresa extends Component
{

    use WithFileUploads;

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public $estado;
    public $open = false;

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

    public function render()
    {

        return view('livewire.empresa.create-empresa')
        ->layout('layouts.paneldos');

    }

    protected $rules = [
        'nombre' => 'required|max:50|min:2',
        'dni_ruc' => 'required|integer',        
        'telefono' => 'required|integer',
        'celular' => 'required|integer',
        'email' => 'required|email',
        'whatsapp' => 'required|integer',
        'slogan' => 'required|string',
        'descripcion' => '',
        'descripcion_breve' => '',
        'titulo' => 'required',
        'title' => 'required',
        'keywords' => 'required',
        'empresascol' => 'required',
        'slug' => '',
        'logo' => 'required|image',
        /*'descripcion' => 'required|max:256',*/
    ];



    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }

    public function agregar()
    {

        $this->validate();

        //$image = Storage::disk('categorias')->put('avatars/1');

        $logo= $this->logo->store('public/empresa');

        /*$image_path = $image->getClientOriginalName();

        \Storage::disk('images')->put($image_path,\File::get($image));*/

        //$image = $request->file('image')->store('public');

        Empresa::create([
          
            'nombre' => $this->nombre, 
            'dni_ruc' => $this->dni_ruc,  
            'telefono' => $this->telefono,  
            'celular' => $this->celular,
            'email' => $this->email,    
            'whattsap' => $this->whatsapp,    
            'slogan' => $this->slogan,    
            'descripcion' => $this->descripcion,
            'estrellas' => $this->estrellas,
            'descripcion_breve' => $this->descripcion_breve,
            'titulo' => $this->titulo,
            'title' => $this->title,
            'keywords' => $this->keywords,
            'empresascol' => $this->empresascol,
            'slug' => $this->slug,
            'logo' => Storage::url($logo),
            'categoria_id' => $this->categoria_id,
            /*'image' => $image_path*/
            
        ]);

         
        
        $this->emit('render');

        $this->reset(['nombre','descripcion']);

        $this->emit('alert');

        return redirect()->route('empresa.index');
    }

}
