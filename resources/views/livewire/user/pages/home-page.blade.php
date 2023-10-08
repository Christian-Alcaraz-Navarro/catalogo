<div class="d-flex justify-content-center"> 
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="width: 35%;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/principal1.jpg" class="d-block w-45" alt="...">
            </div>
            <div class="carousel-item">
                <img src="storage/principal2.jpg" class="d-block w-45" alt="...">
            </div>
            <div class="carousel-item">
                <img src="storage/principal3.jpg" class="d-block w-45" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </button>
   </div>
</div>
<div>
    <!--  sales heading-->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-0 md:py-0 mt-2">
        <div class="text-center flex flex-col items-center">
            <h1 class="text-3xl md:text-4xl font-bold tracking-tight my-1"> 
                Muebles y vehículos a bajo costo
            </h1>
            <div class="d-flex align-items-center justify-center flex-wrap mt-3"> <!-- Añadimos justify-center para centrar horizontalmente -->
                <h2 class="text-gray-700 lg:text-lg w-3/4 md:w-auto my-1 mb-2 mr-2"> <!-- Agregamos mb-2 para dar espacio debajo -->
                    Escríbenos:
                </h2>
                <a href="https://api.whatsapp.com/send?phone=523122712478&text=Hola%20buenas%20tardes,%20me%20interesa%20información."
                    class="btn btn-primary d-flex align-items-center"
                    style="text-decoration: none; color: white;">
                     <img src="{{ asset('storage/whatsapp.jpeg') }}" alt="Icono" class="me-2 img-fluid mr-2" style="max-width: 30px;">
                     <span>312-2712478</span>
                </a>
            </div>
            <a href="https://www.facebook.com/profile.php?id=100068093682470" target="_blank" class="btn btn-primary mt-3"> <!-- Agregamos mt-3 para dar espacio arriba -->
                <img src="{{ asset('storage/facebook.png') }}" alt="Icono" class="me-2 img-fluid mr-2" style="max-width: 245px;">
            </a>
        </div>
    </section>
    
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5 divide-y">
        <!-- Sección de Productos más Recientes -->
        <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start">
            <header class="flex-1">
                <p class="text-lg font-medium">
                    Lo último
                </p>
                <p class="text-gray-500 text-sm">
                    Las novedades más recientes.
                </p>
            </header>
            <a href="{{ route('shop.page', ['orderby' => 'date']) }}"
               class="order-last md:order-none w-full md:w-auto btn-secondary justify-center space-x-1 h-10">
                <span>Ver todos</span>
                <span class="md:hidden">últimas plantillas</span>
            </a>
            <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                @foreach($latest_products as $product)
                    <li class="@if($loop->index > 1) hidden xl:block @endif">
                        <x-product-card :product="$product">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                                 class="w-10 h-20 object-cover"
                            >
                        </x-product-card>
                    </li>
                @endforeach
            </ul>
        </section>
    
        <!-- Sección de Productos Populares -->
        <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start">
            <header class="flex-1">
                <p class="text-lg font-medium">
                    Popular
                </p>
                <p class="text-gray-500 text-sm">
                    Top-ventas en la semana actual
                </p>
            </header>
            <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                @foreach($popular_products as $product)
                    <li>
                        <x-product-card :product="$product">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                            class="w-10 h-20 object-cover"
                            >
                        </x-product-card>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>    
</div>
