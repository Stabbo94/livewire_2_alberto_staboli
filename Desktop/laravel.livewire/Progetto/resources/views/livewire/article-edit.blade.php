<form class="my-3" enctype="multipart/form-data" wire:submit.prevent="articleUpdate">
    
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
        @if($article->img)
        <p>Immagine precedente</p>
        <div class="ratio ratio-1x1 w-100">
            <img src="{{Storage::url($article->img)}}" alt="Immagine di {{$article->title}}">
        </div>
        @else
        <p class="fw-bold text-center">L'articolo non ha immagini associate!</p>
        @endif
    </div>
    
    
    <div class="my-3">
        <label for="img" class="mb-2">Allegare un'immagine</label>
        <input type="file" wire:model="img" class="form-control">
    </div>
    
    <div class="my-3">
        <button type="submit" class="btn btn-primary">Modifica il prodotto</button>
    </div>
    
    
    
    
</form>
