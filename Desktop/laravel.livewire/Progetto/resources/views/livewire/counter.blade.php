<div class="col-12 mb-2 d-flex flex-column align-items-center">

    <h3 class="mb-3">Numero: {{$value}}</h3>
    
    <button class="btn btn-success my-3 w-25" wire:click="increment">
        Aggiungi +1
    </button>

    <button class="btn btn-danger my-3 w-25" wire:click="decrement">
        Rimuovi -1
    </button>

    <button class="btn btn-success my-3 w-25" wire:click="incrementByNumber(10)">
        Aggiungi +10
    </button>

    <button class="btn btn-danger my-3 w-25" wire:click="decrementByNumber(10)">
        Rimuovi -10
    </button>

</div>
