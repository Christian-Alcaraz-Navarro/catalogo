<div class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Licencias') }}
                </h2>
                <x-jet-button wire:click="create">
                    {{ __('Nueva licensia') }}
                </x-jet-button>
            </div>
        </div>
    </header>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 space-y-3">
                <x-table style="min-width: 750px">
                    <x-slot name="head">
                        <x-table.heading sortable wire:click="sortBy('order')"
                                         :direction="$sortField === 'order' ? $sortDirection : null">
                            Orden
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('name')"
                                         :direction="$sortField === 'name' ? $sortDirection : null">
                            Licensia
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('summary')"
                                         :direction="$sortField === 'summary' ? $sortDirection : null">
                            resumen
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('updated_at')"
                                         :direction="$sortField === 'updated_at' ? $sortDirection : null">
                            ultima actualizacion
                        </x-table.heading>
                        <x-table.heading></x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($licenses as $license)
                            <x-table.row wire:key="{{ $license->id }}" wire:loading.class.delay="opacity-50" class="transition">
                                <x-table.cell>
                                    {{ $license->order }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $license->name }}
                                </x-table.cell>
                                <x-table.cell>
                                    {{ $license->summary }}
                                </x-table.cell>
                                <x-table.cell>
                                    @dateforhumans($license->updated_at)
                                </x-table.cell>
                                <x-table.cell class="flex justify-end space-x-1">
                                    <x-jet-secondary-button wire:click="edit({{ $license->id }})">
                                        Editar
                                    </x-jet-secondary-button>
                                    <x-jet-secondary-button wire:click="confirmDelete({{ $license->id }})">
                                        Eliminar
                                    </x-jet-secondary-button>
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="4">
                                    <div class="text-xl py-8 text-gray-400 text-center">
                                        Es necesario crear una licencia...
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table>

                <div class="flex items-center justify-between space-x-5">
                    <x-input.page-size wire:model="pageSize"/>
                    <div class="flex-1">
                        {{ $licenses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
