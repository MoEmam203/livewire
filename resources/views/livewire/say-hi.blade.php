<div>
    {{-- <input type="text" wire:model = "name"> --}}
    Hello {{ $contact->name }} : {{ now() }}

    {{-- <button wire:click="$refresh">Refresh</button> --}}
    <button wire:click="emitFoo">Refresh</button>
</div>
