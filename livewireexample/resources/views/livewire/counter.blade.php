<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>{{ $count }}</h1>
    <button wire:click="increment">Increment</button>
    <button wire:click="decrement">Decrement</button>

    <input type="text" wire:model="username"/>
    <br />
    <h3>{{  $username }}</h3>
</div>
