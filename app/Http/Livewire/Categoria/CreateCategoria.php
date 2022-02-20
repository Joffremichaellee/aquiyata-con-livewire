<?php

namespace App\Http\Livewire\Categoria;

use App\Models\Categoria;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class CreateCategoria extends Component
{

    use WithFileUploads;

    public $nombre;
    public $descripcion;
    public $image;
    //public $open = false;

    public function render()
    {
                                

        return view('livewire.categoria.create-categoria') 
        ->layout('layouts.paneldos');
    }

    protected $rules = [
        'nombre' => 'required|max:50|min:2|unique:categorias',
        'image' => 'required|image',
        'descripcion' => '',
        /*'descripcion' => 'required|max:256',*/
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }

    public function agregar()
    {

        $this->validate();

        //$image = Storage::disk('categorias')->put('avatars/1');

        $image= $this->image->store('public/categorias');

        /*$image_path = $image->getClientOriginalName();

        \Storage::disk('images')->put($image_path,\File::get($image));*/

        //$image = $request->file('image')->store('public');

        Categoria::create([
          
            'nombre' => $this->nombre,  
            'descripcion' => $this->descripcion,
            'image' => Storage::url($image),
            /*'image' => $image_path*/
            
        ]);

        
        
        $this->emit('render');

        $this->reset(['nombre','descripcion']);

        $this->emit('alert');

        return redirect()->route('categoria.index');
    }

}
