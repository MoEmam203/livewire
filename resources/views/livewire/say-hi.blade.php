<div>
    {{-- <input type="text" wire:model = "name"> --}}
    Hello {{ $contact->name }} : {{ now() }}

    <button wire:click="$refresh">Refresh</button>
</div>
