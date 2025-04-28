<div>
    <x-card title="Login">
        <x-form wire:submit="authUser">
            <x-input wire:model="email" label="E-Mail Address" />
            <x-password wire:model="password" label="Password" right/>
            <x-slot:actions>
                <x-button type="submit" label="Login" class="btn btn-primary" />
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
