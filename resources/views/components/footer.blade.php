<footer class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 divide-y divide-gray-300">
    @public
    <div class="h-0"></div>
    <div class="py-8">
        <div class="flex flex-col md:flex-row lg:items-center lg:justify-between space-y-6 md:space-y-0">
            <div class="flex-1">
                <p class="font-medium">
                    <h2 class="text-gray-700 lg:text-lg w-3/4 md:w-auto my-1 mt-4">
                        {{ __('Escribenos:') }}
                    </h2>
                    <div class="btn btn-primary align-middle align-items-center" style="text-decoration: none; color: white;">
                        <div style="display: flex; align-items: center;">
                            <a href="https://api.whatsapp.com/send?phone=523122712478&text=Hola%20buenas%20tardes,%20me%20interesa%20información."
                                class="btn btn-primary d-flex align-middle align-items-center ml-1"
                                style="text-decoration: none; color: white;">
                                    <img src="{{ asset('storage/whatsapp.jpeg') }}" alt="Icono" class="me-2 img-fluid mr-2" style="max-width: 30px;">
                                    <span>312-2712478</span>
                            </a>
                        </div>
                    </div>                                                         
                </p>
                <p>
                    {{ __('Nos encontramos en col. andares de Jazmin,Colima.') }}
                </p>
            </div>
            <div class="flex-1 mt-5">
                <p class="">
                    <form class="flex space-x-2" method="POST" action="{{ route('subscribe') }}">
                        <div hidden>
                            @csrf
                        </div>
                        <div class="flex-1 md:w-64">
                            <x-jet-input name="email" type="email" placeholder="Email" class="w-full" required/>
                        </div>
                        <x-jet-button type="submit">
                            Suscribir
                        </x-jet-button>  
                    </form>
                </p>    
                <p>
                    {{ __('Recibiras email con los nuevos productos y promociones.') }}
                </p>
            </div>
        </div>        
    </div>
    @endif
    <nav class="py-4">
        {{-- <ul class="text-xs text-gray-500 flex flex-wrap">
            <li class="my-2 mr-6 lg:mr-8">
                <a href="{{ route('orders.page') }}" class="transition text-blue-500 hover:text-blue-700">
                    Redownload templates
                </a>
            </li>
            <li class="my-2 mr-6 lg:mr-8">
                <a href="#" class="transition hover:text-gray-800">
                    Help Center
                </a>
            </li>
            <li class="my-2 mr-6 lg:mr-8">
                <a href="#" class="transition hover:text-gray-800">
                    Terms of Service
                </a>
            </li>
            <li class="my-2 mr-6 lg:mr-8">
                <a href="{{ route('licenses') }}" class="transition hover:text-gray-800">
                    Licenses
                </a>
            </li>
        </ul> --}}
    </nav>
</footer>
