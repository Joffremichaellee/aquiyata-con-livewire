<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('subCategoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">Editar subCategoria</h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Form Validation -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">Implementation</h2>
                                <!--<div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                                    <input id="show-example-1" data-target="#form-validation" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                                </div>-->
                            </div>
                            <div id="form-validation" class="p-5">
                                <div class="preview">
                                    <!-- BEGIN: Validation Form -->      
                                    
                                    <div class="input-form" wire:ignore>
                                        <label for="descripcion" class="form-label w-full flex flex-col sm:flex-row">
                                            Categoria
                                        </label>
                                        <select id="select2" class="form-control w-full" wire:model="categoria_id" >

                                                <option></option>

                                            @foreach ($arrayCategoria as $categoria)

                                                <option value="{{ $categoria->id }}" > {{ $categoria->nombre }} </option>             
                                                
                                            @endforeach

                                            
                                        </select>

                                        
                                            
                                        <script>
                                            document.addEventListener('livewire:load', function(){
                                                $("#select2").select2({
                                                    placeholder: "---"
                                                });
                                                $('#select2').on('change', function(){
                                                    let texto = $('#select2 option:selected').text();
                                                    /*alert(this.value);*/
                                                    @this.set('categoria_id', this.value);
                                                });
                                            })
                                        </script>
                                        
                                    </div>

                                    <x-jet-input-error for="categoria_id" />

                                        <div class="input-form mt-3">
                                            <label for="nombre" class="form-label w-full flex flex-col sm:flex-row">
                                                subCategoria<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, nombre 2 characters</span>
                                            </label>
                                            <input type="text" name="nombre"  wire:model="nombre" id="nombre" class="form-control" placeholder="Nombre">
                                        </div>

                                        <x-jet-input-error for="nombre" />

                                        {{--{{$nombre}}--}}
                                        <div class="input-form mt-3">
                                            <label for="descripcion" class="form-label w-full flex flex-col sm:flex-row">
                                                descripcion
                                            </label>
                                            <input type="text" name="descripcion" wire:model="descripcion" id="descripcion" class="form-control" placeholder="descripcion" maxlength="65">
                                        </div>
                                        <div class="input-form mt-3">
                                            <label for="image" class="form-label w-full flex flex-col sm:flex-row">
                                                Image
                                            </label>
                                            <input type="file" name="image" wire:model="image" id="image">

                                            <div class="w-20 h-20 image-fit zoom-in mt-5">
                                                <img alt="image" class="tooltip rounded-full" src="{{ ($subcategoria->image) }}" title="Uploaded at 23 December 2022">
                                            </div>
                                        </div>
                                        <x-jet-input-error for="image" />
                                        
                                        <a href="{{ route('subcategoria.index') }}" type="button" class="btn btn-outline-secondary rounded-full mr-1">Cancel</a>
                                        <button wire:click="editar({{$subcategoria->id}})"  class="btn btn-primary rounded-full mt-5">Agregar</button>

                                    <!-- END: Validation Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Form Validation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
