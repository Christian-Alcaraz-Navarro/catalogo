<div>
    <form wire:submit.prevent="submit">
        <div class="px-6 py-4">
            <div class="text-lg">
                {{ __($title) }}
            </div>

            <div class="mt-4 space-y-5">
                <div x-data="{}" x-init="() => setTimeout(() => $refs.autofocus.focus(), 250)" class="space-y-2">
                    <x-jet-label for="name" value="Nombre" />
                    <x-jet-input x-ref="autofocus" id="name" type="text" class="block w-full" wire:model.defer="form.name" autocomplete="off"/>
                    <x-jet-input-error for="name" class="" />
                </div>
                <div class="w-20 space-y-2">
                    <x-jet-label for="order" value="Orden" />
                    <x-jet-input id="order" type="number" min="1" placeholder="1" class="block w-full" wire:model.defer="form.order"/>
                    <x-jet-input-error for="order" class="" />
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 text-right space-x-2">
            <x-jet-secondary-button type="button" wire:click="cancel" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-button wire:loading.attr="disabled">
                Guardar
            </x-jet-button>
        </div>
    </form>
</div>
