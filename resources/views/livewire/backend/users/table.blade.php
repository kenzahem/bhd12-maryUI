<div>
    <x-card>
        <x-table :headers="$headers" :rows="$users" >
            @scope('actions', $users)
                <x-button icon="lucide.trash" class="btn-error btn-sm" />
            @endscope
        </x-table>
    </x-card>
</div>
