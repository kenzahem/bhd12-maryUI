<div>
    <x-header title="Room Listing" subtitle="Use custom search or filtering to your needs" separator>
        <x-slot:middle class="!justify-end">
            <x-input icon="o-bolt" placeholder="Search..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-select icon="lucide.map-pin" placeholder="Location" />
            <x-button icon="o-plus" class="btn-primary" />
        </x-slot:actions>
    </x-header>
        <x-card>
            <div class="grid grid-cols-3 gap-3">
                @foreach ($rooms as $room)
                <x-card title="{{ $room->title }}" class="col border">
                    I am using slots here.

                    <x-slot:figure>
                        <img src="https://picsum.photos/500/200" />
                    </x-slot:figure>
                    <x-slot:menu>
                        <x-button icon="o-share" class="btn-circle btn-sm" />
                        <x-icon name="o-heart" class="cursor-pointer" />
                    </x-slot:menu>
                    <x-slot:actions separator>
                        <x-button label="View" icon="lucide.eye" class="btn-primary" />
                    </x-slot:actions>
                </x-card>
                @endforeach
            </div>
        </x-card>
    </div>
</div>
