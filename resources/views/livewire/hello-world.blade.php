<div>
    {{-- <input wire:model="name" type="text">

    <input type="checkbox" wire:model="loud"> --}}

    {{-- <select wire:model="greeting"> --}}
    {{-- <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select> --}}

    {{-- {{ $greeting }} --}}
    {{-- {{ implode(', ',$greeting) }}
    {{ $name }} @if($loud) ! @endif --}}

    {{-- Actions --}}

    {{-- 1- --}}
    {{-- <button wire:click="resetName">Reset Name</button> --}}

    {{-- 2- --}}
    {{-- <form wire:submit.prevent = "resetName">
        <button>Reset</button>
    </form> --}}

    {{-- 3- send paramater --}}
    {{-- <form wire:submit.prevent = "resetName('Sara')">
        <button>Reset Name</button>
    </form> --}}

    {{-- 4- shorthand if method is one line --}}
    {{-- <form wire:submit.prevent = "$set('name','Sara')">
        <button>Reset Name</button>
    </form> --}}

    {{-- lifecycle hooks --}}
    {{-- Hydrated: Hello {{ $hydratedName }} --}}


    {{-- Nested --}}
    @foreach ($contacts as $contact )
        <div class="">
            @livewire("say-hi",['contact'=>$contact],key($contact->name))
            <button wire:click="removeContact({{ $contact->id }})" >remove</button>
        </div>
    @endforeach

    <hr>

    {{-- <button wire:click="refreshChildren">Refresh</button> --}}
    <button wire:click="$emit('refreshChildren')">Refresh</button>

    {{ now() }}
</div>
