<!-- WhatsApp Information Form -->
<div class="mt-4">
    <x-form-section submit="updateWhatsappInformation">
        <x-slot name="title">
            {{ __('Update WhatsApp Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Update your WhatsApp number and related settings.') }}
        </x-slot>

        <x-slot name="form">
            <!-- WhatsApp Number -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="whatsapp_number" value="{{ __('WhatsApp Number') }}" />
                <x-input id="whatsapp_number" type="text" class="mt-1 block w-full" wire:model.defer="state.whatsapp_number" autocomplete="whatsapp_number" />
                <x-input-error for="whatsapp_number" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button>
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-form-section>
</div>
