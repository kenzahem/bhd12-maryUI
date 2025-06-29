<div>
    <div>
        <x-card class="border border-accent">
            <x-form wire:submit="updateProfile">
                <x-input wire:model="name" label="Name" />
                <x-input wire:model="email" label="email" />
            </x-form>
        </x-card>
    <x-card class="border border-accent">
        @livewire('profile.change-password')
    </x-card>
    </div>

</div>
