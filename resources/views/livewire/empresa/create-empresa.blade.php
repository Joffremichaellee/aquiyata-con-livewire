<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresa') }}
        </h2>
    </x-slot>

    <style>

        #form {
        width: 250px;
        margin: 0 auto;
        height: 50px;
        }

        #form p {
        text-align: center;
        }

        #form label {
        font-size: 20px;
        }

        input[type="radio"] {
        display: none;
        }

        .clasificacion {
            direction: rtl;
            unicode-bidi: bidi-override;
        }

        form label:hover,
        form label:hover ~ label {
        color: orange;
        }

        input[type="radio"]:checked ~ label {
        color: orange;
        }

        input{
            border:1px solid #BBCDD2;
        }

        input:focus{
            border: 1px solid #6875F5;
        }

        div.input-form{         margin-top: 20px;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br>
                <div >
                    <!--<div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">Nueva Categoria</h2>
                    </div>-->
                    <div class="grid md:grid-cols-6 gap-4">
                        <div class="intro-y md:col-start-2 md:col-span-4 ">
                            <!-- BEGIN: Form Validation -->
                            <div class="intro-y box">
                                
                                <div id="form-validation">
                                    
                                    <div>
    
                                        <div  wire:loading wire:target="logo" class="w-full">
                                            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                <div>
                                                    <span class="font-medium">Logo cargando!</span>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="preview">
                                            <!-- BEGIN: Validation Form -->                                        
                                                <div class="input-form  ">
                                                    <label for="nombre" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Nombre: <!--<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, nombre 2 characters</span>-->
                                                    </label>
                                                    <input type="text" name="nombre" wire:model="nombre" id="nombre" class="form-control rounded-none " placeholder="nombre">
                                                </div>
        
                                                <x-jet-input-error for="nombre" />
        
                                                <div class="input-form ">
                                                    <label for="dni_ruc" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        dni_ruc
                                                    </label>
                                                    <input type="number" name="dni_ruc" wire:model="dni_ruc" id="dni_ruc" class="form-control rounded-none" placeholder="dni_ruc" maxlength="65">
                                                </div>
        
                                                <x-jet-input-error for="dni_ruc" />
        
                                                <div class="input-form ">
                                                    <label for="telefono" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Telefono
                                                    </label>
                                                    <input type="number" name="telefono" wire:model="telefono" id="telefono" class="form-control rounded-none" placeholder="telefono" maxlength="65">
                                                </div>
        
                                                <x-jet-input-error for="telefono" />
        
                                                {{--{{$nombre}}--}}
                                                <div class="input-form ">
                                                    <label for="celular" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Celular
                                                    </label>
                                                    <input type="number" name="celular" wire:model="celular" id="celular" class="form-control rounded-none" placeholder="celular" maxlength="65">
                                                </div>
        
                                                <x-jet-input-error for="celular" />
        
                                                <div class="input-form ">
                                                    <label for="email" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Email
                                                    </label>
                                                    <input type="email" name="email" wire:model="email" id="email" class="form-control rounded-none" placeholder="email" maxlength="65">
                                                </div>
        
                                                <x-jet-input-error for="email" />
    
                                                <div class="input-form ">
                                                    <label for="whatsapp" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Whatsapp
                                                    </label>
                                                    <input type="number" name="whatsapp" wire:model="whatsapp" id="whatsapp" class="form-control rounded-none" placeholder="whatsapp" maxlength="65">
                                                </div>
        
                                                <x-jet-input-error for="whatsapp" />
    
                                                <div class="input-form ">
                                                    <label for="slogan" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Slogan <!--<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, slogan 2 characters</span>-->
                                                    </label>
                                                    <input type="text" name="slogan" wire:model="slogan" id="slogan" class="form-control rounded-none focus:border-black" placeholder="slogan">
                                                </div>
        
                                                <x-jet-input-error for="slogan" />
    
                                                <div class="input-form ">
                                                    <label for="descripcion" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Descripcion
                                                    </label>
                                                    <input type="text" name="descripcion" wire:model="descripcion" id="descripcion" class="form-control rounded-none" placeholder="descripcion" maxlength="65">
                                                </div>
    
                                                <div class="input-form ">
                                                    <label for="descripcion" class="form-label flex flex-col sm:flex-row mb-1 mr-2.5">
                                                        Calificacion
                                                    </label>
                                                    <form>
                                                        <p class="clasificacion flex">
                                                            <input id="radio5" type="radio" name="estrellas" value="5" wire:model="estrellas"><!--
                                                            --><label for="radio5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </label>
                                                            <!--
                                                            --><input id="radio4" type="radio" name="estrellas" value="4" wire:model="estrellas"><!--
                                                            --><label for="radio4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </label>
                                                            <!--
                                                            --><input id="radio3" type="radio" name="estrellas" value="3" wire:model="estrellas"><!--
                                                            --><label for="radio3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </label>
                                                            <!--
                                                            --><input id="radio2" type="radio" name="estrellas" value="2" wire:model="estrellas"><!--
                                                            --><label for="radio2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </label>
                                                            <!--
                                                            --><input id="radio1" type="radio" name="estrellas" value="1" wire:model="estrellas"><!--
                                                            --><label for="radio1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                            </label>
        
                                                        </p>
                                                        </form>
                                                </div>
                                                
                                                <div class="input-form ">
                                                    <label for="descripcion_breve" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Descripcion_breve
                                                    </label>
                                                    <input type="text" name="descripcion_breve" wire:model="descripcion_breve" id="descripcion_breve" class="form-control rounded-none" placeholder="descripcion_breve" maxlength="65">
                                                </div>
    
                                                <x-jet-input-error for="descripcion_breve" />
    
                                                <div class="input-form ">
                                                    <label for="titulo" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Titulo
                                                    </label>
                                                    <input type="text" name="titulo" wire:model="titulo" id="titulo" class="form-control rounded-none" placeholder="titulo" maxlength="65">
                                                </div>
    
                                                <x-jet-input-error for="titulo" />
    
                                                <div class="input-form ">
                                                    <label for="title" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Title
                                                    </label>
                                                    <input type="text" name="title" wire:model="title" id="title" class="form-control rounded-none" placeholder="title" maxlength="65">
                                                </div>
    
                                                <x-jet-input-error for="title" />
    
                                                <div class="input-form ">
                                                    <label for="keywords" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Keywords
                                                    </label>
                                                    <input type="text" name="keywords" wire:model="keywords" id="keywords" class="form-control rounded-none" placeholder="keywords" maxlength="65">
                                                </div>
    
                                                <x-jet-input-error for="keywords" />
    
                                                <div class="input-form ">
                                                    <label for="empresascol" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Empresascol
                                                    </label>
                                                    <input type="text" name="empresascol" wire:model="empresascol" id="empresascol" class="form-control rounded-none" placeholder="empresascol" maxlength="65">
                                                </div>
    
                                                <x-jet-input-error for="empresascol" />
    
                                                <div class="input-form ">
                                                    <label for="slug" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Slug
                                                    </label>
                                                    <input type="text" name="slug" wire:model="slug" id="slug" class="form-control rounded-none" placeholder="slug" maxlength="65" disabled>
                                                </div>
    
                                                <x-jet-input-error for="slug" />
    
                                                <div class="input-form ">
                                                    <label for="logo" class="form-label flex flex-col sm:flex-row mt-2.5 mr-2.5">
                                                        Logo
                                                    </label>
                                                    <input type="file" name="logo" wire:model="logo" id="logo" class="w-full" style="border:none;margin-top:7px">
                                                
                                                    @if ($logo)
                                                        <div class="w-20 h-20 image-fit zoom-in mt-5 rounded-full">
                                                            <img alt="logo" class="tooltip rounded-full" src="{{ $logo->temporaryURL() }}" title="Uploaded at 23 December 2022">
                                                        </div>
                                                    @endif
        
                                                </div>
                                                <x-jet-input-error for="logo" />
                                                
                                                
                                                
                                            <!-- END: Validation Form -->
                                        </div>
    
                                    </div>
                                    
                                </div>
    
                                <!--<br><hr class="border-4">-->                    
    
                                <div class="card-footer" style="text-align-last: justify;padding:0 25px">
    
                                    <a href="{{ route('empresa.index') }}" type="button" class="btn btn-outline-secondary rounded-full mr-1">Cancel</a>
                                    <button wire:click="agregar" wire:loading.attr="disabled" wire:target="agregar, image" class="disabled:opacity-25 btn btn-primary rounded-full mt-5">Agregar</button>
    
                                </div>
    
                                <br>
    
                            </div>
                            <!-- END: Form Validation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</div>
