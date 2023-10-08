<div x-data class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Categorias') }}
                </h2>
                <x-jet-button wire:click="create">
                    {{ __('Nueva categoria') }}
                </x-jet-button>
            </div>
        </div>
    </header>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 space-y-3">
                <div class="flex">
                    <x-jet-input class="block w-full md:w-auto" type="text" placeholder="Buscar Categoria..."
                                 wire:model="search"/>
                </div>

                <x-table style="min-width: 500px">
                    <x-slot name="head">
                        <x-table.heading sortable wire:click="sortBy('order')"
                                         :direction="$sortField === 'order' ? $sortDirection : null">
                            Orden
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name')"
                                         :direction="$sortField === 'name' ? $sortDirection : null">
                            Categoria
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('updated_at')"
                                         :direction="$sortField === 'updated_at' ? $sortDirection : null">
                            Ultima actualización
                        </x-table.heading>
                        <x-table.heading></x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($categories as $category)
                            <x-table.row wire:key="{{ $category->id }}" wire:loading.class.delay="opacity-50" class="transition">
                                <x-table.cell>
                                    {{ $category->order }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $category->name }}
                                </x-table.cell>
                                <x-table.cell>
                                    @dateforhumans($category->updated_at)
                                </x-table.cell>
                                <x-table.cell class="flex justify-end space-x-1">
                                    <x-jet-secondary-button wire:click="edit({{ $category->id }})">
                                        Editar
                                    </x-jet-secondary-button>
                                    <x-jet-secondary-button wire:click="confirmDelete({{ $category->id }})">
                                        Eliminar
                                    </x-jet-secondary-button>
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="4">
                                    <div class="text-xl py-8 text-gray-400 text-center">
                                        No hay categorias...
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table>
                <div class="flex items-center justify-between space-x-5">
                    <x-input.page-size wire:model="pageSize"/>
                    <div class="flex-1"> 
                        <span>
                            Mostrando {{ $categories->firstItem() }} al {{ $categories->lastItem() }} de {{ $categories->total() }} resultados
                        </span>
                        <span class ="flex-1 text-right">
                           {{ $categories->links('pagination::bootstrap-4') }} 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
