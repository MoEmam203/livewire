<div>
    <input wire:model="name" type="text">

    <input type="checkbox" wire:model="loud">

    {{-- <select wire:model="greeting"> --}}
    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{-- {{ $greeting }} --}}
    {{ implode(', ',$greeting) }}
    {{ $name }} @if($loud) ! @endif

</div>
