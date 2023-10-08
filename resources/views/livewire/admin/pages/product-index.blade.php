<div x-data class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Productos') }}
                </h2>
                <x-jet-button wire:click="create">
                    {{ __('Nuevo Producto') }}
                </x-jet-button>
            </div>
        </div>
    </header>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 space-y-3">
                <div class="flex space-x-3">
                    <x-jet-input class="block w-full md:w-auto" type="text" placeholder="Buscar producto..."
                                 wire:model="search"/>
                    <x-input.select wire:model="filters.category">
                        <option value="">
                            Todas las categorias
                        </option>
                        @foreach($categories as $category)
                            <option value="{{ $category['id'] }}">
                                {{ $category['name'] }}
                            </option>
                        @endforeach
                    </x-input.select>
                </div>

                <x-table style="min-width: 1000px">
                    <x-slot name="head">
                        <x-table.heading>
                            Imagen
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('id')"
                                         :direction="$sortField === 'id' ? $sortDirection : null">
                            id
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name')"
                                         :direction="$sortField === 'name' ? $sortDirection : null">
                            Descripcion
                        </x-table.heading>
                        <x-table.heading>
                            Costo
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('updated_at')"
                                         :direction="$sortField === 'updated_at' ? $sortDirection : null">
                            Fecha ult. actualizacion
                        </x-table.heading>
                        <x-table.heading></x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($products as $product)
                            <x-table.row wire:key="{{ $product->id }}" wire:loading.class.delay="animate-pulse"
                                         class="transition">
                                <x-table.cell>
                                    <a href="{{ route('product', ['slug' => $product->slug]) }}" target="_blank">
                                        <img src="{{ Storage::url($product->cover_image_path) }}"
                                             alt={{ $product->name }}
                                                     class="w-20 rounded-md border border-gray-100 shadow-sm">
                                    </a>
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $product->id }}
                                </x-table.cell>
                                <x-table.cell class="max-w-sm xl:max-w-md">
                                    <a href="{{ route('product', ['slug' => $product->slug]) }}" target="_blank">
                                        {{ $product->name }}
                                    </a>
                                </x-table.cell>
                                <x-table.cell>
                                    ${{ $product->starting_price }}
                                </x-table.cell>
                                <x-table.cell>
                                    @dateforhumans($product->updated_at)
                                </x-table.cell>
                                <x-table.cell class="text-right space-x-1">
                                    <x-jet-secondary-button wire:click="edit({{ $product->id }})">
                                        Editar
                                    </x-jet-secondary-button>
                                    <x-jet-secondary-button wire:click="confirmDelete({{ $product->id }})">
                                        Eliminar
                                    </x-jet-secondary-button>
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="6">
                                    <div class="text-xl py-8 text-gray-400 text-center">
                                        No se encontraron productos...
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table>

                <div class="flex items-center justify-between space-x-5">
                    <x-input.page-size wire:model="pageSize"/>
                    <div class="flex-1"> <!-- Añade la clase "text-right" para alinear a la derecha -->
                        <span>
                            Mostrando {{ $products->firstItem() }} al {{ $products->lastItem() }} de {{ $products->total() }} resultados
                        </span>
                        <span class ="flex-1 text-right">
                           {{ $products->links('pagination::bootstrap-4') }} 
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
