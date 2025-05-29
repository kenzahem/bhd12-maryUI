<div>
    <x-header title="Post Room">
        <x-slot:middle class="!justify-end">
            <x-button wire:navigate link="/rooms/browse" label="Back" icon="lucide.arrow-left" class="btn-secondary" />
        </x-slot:middle>
    </x-header>
    <x-card class="border-1 border-gray-400 shadow-lg" separator progress-indicator>
        <x-form wire:submit="createRoom" >
            <x-input wire:model="uid" value="{{ Auth::user()->id }}" hidden />
            <x-input wire:model.live="title" label="Room Title" />
            <x-textarea wire:model.live="short_desc" label="Short Description" placeholder="Here ..." hint="Max 200 chars" rows="3" />
            <x-textarea wire:model.live="full_desc" label="Full Description" placeholder="Here ..." hint="Max 500 chars" rows="5" />
            <x-checkbox label="Personal Bathroom" wire:model="p_bathroom" />
            <x-checkbox label="Personal Kitchen" wire:model="p_kitchen" />
            <x-checkbox label="Personal Laundry" wire:model="p_laundry" />
            <x-input label="Price" wire:model="price" prefix="PHP" money />
            <x-slot:actions>
                <x-button type="submit" label="Submit" icon="lucide.send-horizontal" class="btn-primary" spinner="createRoom" />
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
