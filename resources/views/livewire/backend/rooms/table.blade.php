<div>
    <x-header title="Room List">
        <x-slot:middle class="!justify-end">
            <x-button wire:navigate link="/admin/rooms/create" label="Add Room" icon="lucide.circle-plus" class="btn-primary"/>
        </x-slot:middle>
    </x-header>
    <x-card class="border shadow-lg">
        {{-- You can use any `$wire.METHOD` on `@row-click` --}}
        <x-table :headers="$headers" :rows="$rooms"  striped with-pagination >
            @scope('actions', $rooms)
                <x-button icon="lucide.trash" class="btn-sm bg-red-500"
                wire:click="deleteRoom({{ $rooms->id }})"
                wire:confirm="Are you damn sure?" />
                <x-button icon="lucide.eye" wire:navigate link="/admin/rooms/{{ $rooms->id }}/view" class="btn-sm bg-cyan-500" />
            @endscope
        </x-table>
    </x-card>
</div>
q
