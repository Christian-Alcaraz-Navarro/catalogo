<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-5 divide-y">
    <section class="pt-8 flex flex-col md:flex-row flex-wrap items-start divide-y space-y-6">
        <header class="flex-1 flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0 w-full">
            <div>
                <p class="text-gray-500 text-xs">
{{--                    Now Showing:--}}
                    Categoria
                </p>
                <p class="text-2xl font-medium">
{{--                    All Templates--}}
                    {{ $category->name }}
                </p>
                @forelse ($products as $product)                
                    <div class="flex items-center justify-between space-x-5">
                        <div class="flex-1"> 
                            <span>
                                Mostrando {{ $products->firstItem() }} al {{ $products->lastItem() }} de {{ $products->total() }} resultados
                            </span>
                        </div>
                    </div>
                @empty
                @endforelse
        </header>
        <ul class="grid grid-cols-2 xl:grid-cols-3 gap-6 w-full py-6">
            @forelse ($products as $product)
                <li>
                    <x-product-card :product="$product"/>
                </li>
            @empty
                <div class="col-span-2 xl:col-span-3 text-center py-20 space-y-3">
                    <div>
                        <p class="text-2xl">
                            Sin productos
                        </p>
                        <p class="text-sm text-gray-500">
                            No hay productos actualmente en esta categoria
                        </p>
                    </div>
                    <a href="{{ route('shop.page') }}"
                       class="btn-secondary w-full lg:w-auto justify-center">
                        Ir a Inicio
                    </a>
                </div>
            @endforelse
        </ul>
    </section>
</div>
