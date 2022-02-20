<?php

namespace App\Http\Livewire\SubCategoria;

use App\Models\SubCategoria;

use App\Models\Categoria;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class CreateSubCategoria extends Component
{

    use WithFileUploads;

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public $estado;
    public $open = false;

    public $nombre;
    public $descripcion;
    public $image;
    public $categoria_id;

    public function render()
    {

        $arrayCategoria = Categoria::where('estado','=','1')
        ->select('id','nombre')
        ->orderBy($this->sort, $this->direction)
        ->get();

        return view('livewire.sub-categoria.create-sub-categoria', compact('arrayCategoria'))
        ->layout('layouts.paneldos');

    }

    protected $rules = [
        'categoria_id' => 'required|not_in:---',
        'nombre' => 'required|max:50|min:2|unique:subcategorias',
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

        $image= $this->image->store('public/subcategorias');

        /*$image_path = $image->getClientOriginalName();

        \Storage::disk('images')->put($image_path,\File::get($image));*/

        //$image = $request->file('image')->store('public');

        SubCategoria::create([
          
            'nombre' => $this->nombre,  
            'descripcion' => $this->descripcion,
            'image' => Storage::url($image),
            'categoria_id' => $this->categoria_id,
            /*'image' => $image_path*/
            
        ]);

        
        
        $this->emit('render');

        $this->reset(['nombre','descripcion']);

        $this->emit('alert');

        return redirect()->route('subcategoria.index');
    }

}
