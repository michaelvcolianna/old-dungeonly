<x-jet-action-section>
    <x-slot name="title">
        Delete Campaign
    </x-slot>

    <x-slot name="description">
        Permanently delete this campaign.
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Once a campaign is deleted, all of its resources and data will be
            permanently deleted.
        </div>

        <div class="mt-5">
            <x-jet-danger-button
                wire:click="$toggle('confirmingTeamDeletion')"
                wire:loading.attr="disabled"
            >
                Delete Campaign
            </x-jet-danger-button>
        </div>

        <!-- Delete Campaign Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                Delete Campaigb
            </x-slot>

            <x-slot name="content">
                Are you sure you want to delete this campaign? Once a campaign
                is deleted, all of its resources and data will be permanently
                deleted.
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button
                    wire:click="$toggle('confirmingTeamDeletion')"
                    wire:loading.attr="disabled"
                >
                    Cancel
                </x-jet-secondary-button>

                <x-jet-danger-button
                    class="ml-2" wire:click="deleteTeam"
                    wire:loading.attr="disabled"
                >
                    Delete Campaign
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
