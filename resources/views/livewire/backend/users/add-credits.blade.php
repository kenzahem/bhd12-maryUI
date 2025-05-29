<div>
    <x-header title="Add Credit To User">
        <x-slot:middle class="!justify-end">
            <x-button wire:navigate link="/admin/users" label="Back" icon="lucide.arrow-left" class="btn-secondary" />
        </x-slot:middle>
    </x-header>
    <x-card>
        <x-form wire:submit="">
            <x-choices
                label="Select User"
                wire:model="user_searchable_id"
                :options="$usersSearchable"
                placeholder="Search ..."
                single
                searchable />
            <x-slot:actions>
                <x-button type="submit" label="Add Credit(s)"/>
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
