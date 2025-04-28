<div>
    <div class="grid grid-cols-2 gap-4">
        <x-card title="User Info" class="border border-accent-content col-auto">
            Name: {{ $name }} <br>
            Email: {{ $email }} <br>
            Status:
            @if ($verified == 1)
                <x-icon name="lucide.badge-check" class="text-green-500" tooltip="Verified"/>
                @else
                <x-icon name="lucide.shield-alert" class="text-red-500" tooltip="Not Verified" />
            @endif
        </x-card>
        <x-card title="Profile Photo" class="border border-accent-content col-auto">
            Test
        </x-card>
      </div>
</div>
