<div>
    <x-header title="Create User">
        <x-slot:middle class="!justify-end">
            <x-button wire:navigate link="/admin/users" label="Add Room" icon="lucide.circle-plus" class="btn-primary"/>
        </x-slot:middle>
    </x-header>
    <x-card>
        <x-form wire:submit="createUser" >
            <x-input wire:model="name" label="Name" />
            <x-input wire:model="email" label="Email Address" />
            <x-password wire:model="password" label="Password" />
            <x-password wire:model="confirm_password" label="Confirm Password" />
        </x-form>
    </x-card>
</div>
