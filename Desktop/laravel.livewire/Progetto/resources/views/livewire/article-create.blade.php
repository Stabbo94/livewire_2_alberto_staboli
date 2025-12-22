<form class="my-3" enctype="multipart/form-data" wire:submit.prevent="articleStore">
    
    @csrf
    
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    
    @endif
    <div class="my-3">
        <label for="title" class="form-label">Nome</label>
        <input type="text" id="title" wire:model="title" class="form-control">
    </div>
    
    <div class="my-3">
        <label for="body" class="form-label">Descrizione</label>
        <textarea id="body" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
    </div>
    
    <div class="my-3">
        <label for="img" class="mb-2">Allegare un'immagine</label>
        <input type="file" wire:model="img" class="form-control">
    </div>
    
    <div class="my-3">
        <button type="submit" class="btn btn-primary">Carica il prodotto</button>
    </div>
    
    
    
    
</form>
