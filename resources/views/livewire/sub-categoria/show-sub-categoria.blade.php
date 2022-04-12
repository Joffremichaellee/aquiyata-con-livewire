<div class="intro-y">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('subCategoria') }}
        </h2>
    </x-slot>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');

    </style>
     
    <div
        style="padding: 0px 22px;min-height: 100vh;min-width: 0px;flex: 1 1 0%;--tw-bg-opacity: 1;    padding-bottom: 2.5rem;">
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href={{route('subcategoria.create')}} class="btn btn-primary shadow-md mr-2">Nueva subCategoria</a>
               
                <div class="dropdown">
                    <div class="relative">
                        <x-jet-dropdown align="right" width="36">
                            <x-slot name="trigger">
                                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                                    <span class="w-5 h-5 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus w-4 h-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" style="width:8.2rem"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer w-4 h-4 mr-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> Print </a>
                                    <a href="" style="width:8.2rem"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Export to Excel </a>
                                    <a href="" style="width:8.2rem"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Export to PDF </a>
                                </div>
                            </x-slot>          
                        </x-jet-dropdown>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-gray-600"></div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-500 dark:text-gray-300">
                        <input type="text" class="form-control w-56 box pr-10 placeholder-theme-13"
                            placeholder="Search..." wire:model="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">

                @if ($subcategorias->count())

                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="cursor-pointer whitespace-nowrap">
                                    IMAGES
                                </th>
                                <th wire:click="order('id')" class="cursor-pointer whitespace-nowrap items-center">
                                    ID

                                    @if ($sort == 'id')
                                        @if ($direction == 'desc')
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">
                                            <path d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V7z"/>
                                            <path fill-rule="evenodd" d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371h-1.781zm1.57-.785L11 9.688h-.047l-.652 2.156h1.351z"/>
                                            <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                        </svg></span></i>
                                        @else
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                            <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z"/>
                                        </svg></span></i>
                                        @endif
                                    @else
                                    <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                      </svg></span></i>
                                    @endif

                                    
                                </th>
                                <th wire:click="order('nombre')" class="cursor-pointer whitespace-nowrap">
                                    SUBCATEGORIA

                                    @if ($sort == 'nombre')
                                        @if ($direction == 'desc')
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">
                                            <path d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V7z"/>
                                            <path fill-rule="evenodd" d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371h-1.781zm1.57-.785L11 9.688h-.047l-.652 2.156h1.351z"/>
                                            <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                          </svg></span></i>
                                        @else
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                            <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z"/>
                                          </svg></span></i>
                                        @endif
                                    @else
                                    <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                      </svg></span></i>
                                    @endif
                                </th>
                                <th wire:click="order('categoria_id')" class="cursor-pointer whitespace-nowrap">
                                    CATEGORIA

                                    @if ($sort == 'categoria_id')
                                        @if ($direction == 'desc')
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">
                                            <path d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V7z"/>
                                            <path fill-rule="evenodd" d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371h-1.781zm1.57-.785L11 9.688h-.047l-.652 2.156h1.351z"/>
                                            <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                          </svg></span></i>
                                        @else
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                            <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z"/>
                                          </svg></span></i>
                                        @endif
                                    @else
                                    <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                      </svg></span></i>
                                    @endif
                                </th>
                                <th wire:click="order('descripcion')" class="cursor-pointer whitespace-nowrap">
                                    DESCRIPCION

                                    @if ($sort == 'descripcion')
                                        @if ($direction == 'desc')
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">
                                            <path d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V7z"/>
                                            <path fill-rule="evenodd" d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371h-1.781zm1.57-.785L11 9.688h-.047l-.652 2.156h1.351z"/>
                                            <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                          </svg></span></i>
                                        @else
                                        <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 bi bi-sort-alpha-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                            <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707V13.5z"/>
                                          </svg></span></i>
                                        @endif
                                    @else
                                    <i class="float-right"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                      </svg></span></i>
                                    @endif

                                </th>
                                <th class="cursor-pointer text-center whitespace-nowrap">    
                                    ESTADO
                                </th>
                                <th class="cursor-pointer text-center whitespace-nowrap">
                                    ACCIONES
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($subcategorias as $sc)
                                @if ($sc->nombre_estado == 0)



                                    mal
                                    <tr class="intro-x" style="">
                                        <td class="w-10" style="background-color: rgb(209 213 219);">
                                            <div class="flex justify-center">
                                                <!--<div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 23 December 2022">
                                                </div>-->
                                                <div class="w-10 h-10 image-fit zoom-in rounded-full">
                                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ $sc->image }}" title="Uploaded at 23 December 2022">
                                                </div>
                                                <!--<div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 23 December 2022">
                                                </div>-->
                                            </div>
                                        </td>
                                        <td class="w-40" style="background-color: rgb(209 213 219);">
                                            <div class="flex">
                                                <div class="w-10 h-10">
                                                    {{ $sc->id }}
                                                    {{--{{ $loop->pending }}--}}
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(209 213 219);">
                                            <p href="" class="font-medium whitespace-nowrap w-32">{{ $sc->nombre }}</p>
                                            <!--<div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet
                                </div>-->
                                        </td>
                                        <td style="background-color: rgb(209 213 219);">
                                            <p href="" class="font-medium whitespace-nowrap">{{ $sc->nombre_categoria }}</p>
                                            <!--<div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet
                                </div>-->
                                        </td>
                                        <td style="background-color: rgb(209 213 219);">
                                            <p class="font-medium whitespace-nowrap w-28">{{ $sc->descripcion }}</p> 
                                        </td>
                                        <td class="w-40 text-center" style="background-color: rgb(209 213 219);">
                                            @if ($sc->estado === 1)
                                                <button wire:click="activar({{$sc->id}})"
                                                    class="px-2 items-center inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>Activo
                                                </button>
                                                {{$estado}}
                                            @elseif($sc->estado === 0)
                                                <button wire:click="desactivar({{$sc->id}})"
                                                    class="px-2 items-center inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>Desactivado
                                                </button>
                                            @endif

                                        </td>
                                        <td class="table-report__action w-56" style="background-color: rgb(209 213 219);">
                                            <div class="flex justify-center items-center">
                                                
                                                <a href="{{ route('subcategoria.edit', $sc->id) }}" class="flex items-center mr-3" href="javascript:;"><!--href="javascript:;"-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="14" height="14" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                        <line x1="16" y1="5" x2="19" y2="8" />
                                                    </svg>Edit 
                                                </a>

                                                <a wire:click="$emit('alertDeleteSubCategoria', {{$sc}})" class="flex items-center text-theme-6" href="javascript:;"
                                                    data-toggle="modal" data-target="#delete-confirmation-modal"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash text-red-500" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF2C16"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="4" y1="7" x2="20" y2="7" />
                                                        <line x1="10" y1="11" x2="10" y2="17" />
                                                        <line x1="14" y1="11" x2="14" y2="17" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg> Delete </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                @if ($sc->nombre_estado == 1)
                                    
                                    bien
                                    <tr class="intro-x">
                                        <td class="w-10">
                                            <div class="flex justify-center">
                                                <!--<div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-11.jpg" title="Uploaded at 23 December 2022">
                                                </div>-->
                                                <div class="w-10 h-10 image-fit zoom-in rounded-full">
                                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ $sc->image }}" title="Uploaded at 23 December 2022">
                                                </div>
                                                <!--<div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Tinker Tailwind HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 23 December 2022">
                                                </div>-->
                                            </div>
                                        </td>
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10">
                                                    {{ $sc->id }}
                                                    {{--{{ $loop->pending }}--}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p href="" class="font-medium whitespace-nowrap w-32">{{ $sc->nombre }}</p>
                                            <!--<div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet
                                </div>-->
                                        </td>
                                        <td>
                                            <p href="" class="font-medium whitespace-nowrap">{{ $sc->nombre_categoria }}</p>
                                            <!--<div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet
                                </div>-->
                                        </td>
                                        <td>
                                            <p class="font-medium whitespace-nowrap w-28">{{ $sc->descripcion }}</p> 
                                        </td>
                                        <td class="w-40 text-center">
                                            @if ($sc->estado === 1)
                                                <button wire:click="activar({{$sc->id}})"
                                                    class="px-2 items-center inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>Activo
                                                </button>
                                                {{$estado}}
                                            @elseif($sc->estado === 0)
                                                <button wire:click="desactivar({{$sc->id}})"
                                                    class="px-2 items-center inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>Desactivado
                                                </button>
                                            @endif

                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                
                                                <a href="{{ route('subcategoria.edit', $sc->id) }}" class="flex items-center mr-3" href="javascript:;"><!--href="javascript:;"-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="14" height="14" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                        <line x1="16" y1="5" x2="19" y2="8" />
                                                    </svg>Edit 
                                                </a>

                                                <a wire:click="$emit('alertDeleteSubCategoria', {{$sc}})" class="flex items-center text-theme-6" href="javascript:;"
                                                    data-toggle="modal" data-target="#delete-confirmation-modal"> <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-trash text-red-500" width="14"
                                                        height="14" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF2C16"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="4" y1="7" x2="20" y2="7" />
                                                        <line x1="10" y1="11" x2="10" y2="17" />
                                                        <line x1="14" y1="11" x2="14" y2="17" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg> Delete </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>

                @else

                    <!--<div class=" intro-x w-full h-20 bg-white items-center">
                        <p class="absolute top-1/2 left-1/2"
                            style="transform: translate(-50%, -50%); font-family: 'Open Sans', sans-serif;">No existe
                            ningun registro coincidente</p>
                    </div>-->

                    <div class="grid w-full h-20 bg-white items-center ">
                        <p class="text-center" style=" font-family: 'Open Sans', sans-serif;top:2px">
                            No existe ningun registro coincidente
                        </p>
                    </div>

                @endif

                @if ($subcategorias->hasPages())

                    <div class="px-6 py-3">
                        {{$subcategorias->links()}}
                    </div>

                @endif

            </div>


            <!--<div class="intro-y col-span-12 flex justify-between flex-wrap sm:flex-row sm:flex-nowrap items-center">
                    {{--{{$categorias->links()}}--}}
            </div>-->

            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <!--<div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4"
                                data-feather="chevrons-right"></i>
                        </a>
                    </li>
                </ul>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>-->
            <!-- END: Pagination -->
        </div>
    </div>

</div>
