<?php

namespace App\Http\Livewire\SubCategoria;

use App\Models\SubCategoria;

use App\Models\Categoria;

use Livewire\Component;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Validator;

class EditSubCategoria extends Component
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
    public $subcategoria;
    public $categoria;

    public function mount($id = null)
    {
        $this->init($id);
    }

    public function render()
    {

        $arrayCategoria = Categoria::where('estado','=','1')
        ->select('id','nombre')
        ->orderBy($this->sort, $this->direction)
        ->get();

        return view('livewire.sub-categoria.edit-sub-categoria', compact('arrayCategoria'))
        ->layout('layouts.paneldos');
    }

    /*public function rules() {
        return [
            'categoria_id' => ['required','not_in:---'],
            //'nombre' => ['required','max:50','min:2',

            'nombre' => ['required','max:50','min:2'],
        
            
            //'image' => 'required|image',
            'descripcion' => [''],
            /*'descripcion' => 'required|max:256',*/
        /*];
    }*/

    protected $rules = [
        'categoria_id' => 'required|not_in:---',
        'nombre' => 'required|max:50|min:2',
        //'image' => 'required|image',
        'descripcion' => '',
        /*'descripcion' => 'required|max:256',*/
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName); 
    }

    public function editar()
    {

        if ($this->subcategoria){
            $this->rules['nombre'] = 'required|max:50|min:2|unique:subcategorias,nombre,'.$this->subcategoria->id;
        }else{
            $this->rules['nombre'] = 'required|max:50|min:2|unique:subcategorias,nombre,'.$this->subcategoria->id;
        }     

        $this->validate();



        if ($this->image)
        {
            Storage::delete([$this->subcategoria->image]);

            $image= $this->image->store('public/subcategorias');
            $this->subcategoria->image = Storage::url($image);
        }
        
        

        $this->subcategoria->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'categoria_id' => $this->categoria_id,
            
        ]);

        $this->emit('render');

        $this->reset(['nombre','descripcion','image']);

        $this->emit('alertEdit');

        return redirect()->route('subcategoria.index');

          

    }

    private function init($id)
    {

        $subcategoria = null;

        if($id)
        {
            $subcategoria = SubCategoria::findOrFail($id);
        }

        $this->subcategoria = $subcategoria;

        if ($this->subcategoria) {

            $this->nombre = $this->subcategoria->nombre;
            $this->descripcion = $this->subcategoria->descripcion;
            $this->categoria_id = $this->subcategoria->categoria_id;
        }

    }

}
