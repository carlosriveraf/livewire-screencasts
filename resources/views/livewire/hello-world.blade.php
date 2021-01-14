<div>
    
    {{-- bug 1 --}}
    <form action="{{route('view_button')}}">
        <input wire:model="name" type="text" name="id"><br>
        You entered 1: {{ $name }}
        <button type="submit">button</button>
    </form>

    {{-- bug 2 --}}
    
    {{-- <form action="">
        <input wire:model="name" type="text" id="id"><br>
        You entered 2: {{ $name }}
    </form> --}}
    

    {{-- no bug --}}
    {{-- <input wire:model="name" type="text" id="id"><br>
    You entered 3: {{ $name }} --}}
    


    {{-- <input wire:model="name" type="text"> --}}

    {{-- <input wire:model="loud" type="checkbox">  --}}
    
    {{-- <input type="text" name="random"> --}}

    {{-- <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    {{ implode(', ', $greeting) }} {{ $name }} @if ($loud) ! @endif

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button>Reset Name</button>
    </form> --}}

    {{-- Hello {{ $name }} --}}

    {{-- @foreach ($names as $name)
        @livewire('say-hi', ['name' =>$name], key())    
    @endforeach --}}

</div>
