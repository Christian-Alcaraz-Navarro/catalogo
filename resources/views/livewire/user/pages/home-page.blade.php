<div>
    <!--  sales heading-->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-0 md:py-0">
        <div class="text-center flex flex-col items-center">
            <div class="flex justify-center items-center mb-1">
                <img src="storage/principal.jpg" alt="Icono" class="me-2 img-fluid" style="max-width:50%;">
            </div>
            <h1 class="text-3xl md:text-4xl font-bold tracking-tight my-1"> 
                Muebles a bajo costo.
            </h1>
            <h2 class="text-gray-700 lg:text-lg w-3/4 md:w-auto my-1 mt-5">
                Contactanos:
            </h2>
            <a href="#" class="btn btn-primary d-flex align-items-center">
                <img src="storage/whatsapp.jpeg" alt="Icono" class="me-2 img-fluid mr-2
                " style="max-width: 30px;">
                <span>312-2712478</span>
            </a>
        </div>
    </section>    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5 divide-y">
        <!--    latest section-->
        <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start">
            <header class="flex-1">
                <p class="text-lg font-medium">
                    Lo ultimó
                </p>
                <p class="text-gray-500 text-sm">
                    Las Novedades más recientes.
                </p>
            </header>
            <a href="{{ route('shop.page', ['orderby' => 'date']) }}"
               class="order-last md:order-none w-full md:w-auto btn-secondary justify-center space-x-1 h-10">
                <span>Ver todos</span>
                <span class="md:hidden">latest templates</span>
            </a>
            <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                @foreach($latest_products as $product)
                    <li class="@if($loop->index > 1) hidden xl:block @endif">
                        <x-product-card :product="$product"/>
                    </li>
                @endforeach
            </ul>
        </section>
        <!--    popular section-->
        <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start">
            <header class="flex-1">
                <p class="text-lg font-medium">
                    Popular
                </p>
                <p class="text-gray-500 text-sm">
                    Top-ventas en la semana actual!
                </p>
            </header>
            <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full my-6">
                @foreach($popular_products as $product)
                    <li>
                        <x-product-card :product="$product"/>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</div>
