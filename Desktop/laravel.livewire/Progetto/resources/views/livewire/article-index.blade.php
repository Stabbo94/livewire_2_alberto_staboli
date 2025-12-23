<div> 
    <div class="row justify-content-center my-4">
        <div class="col-12 col-md-6">
            <input type="text" class="form-control" placeholder="Ricerca articolo per titolo..." wire:model.live.debounce.300ms="search">
        </div>
    </div>
    
    <div class="row justify-content-center align-items-center my-5">
        @if($articles->count() > 0)
        @foreach ($articles as $article)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card h-100 w-100">
                <div class="ratio ratio-1x1">
                    <img src="{{ !$article->img ? 'https://picsum.photos/200/300' : Storage::url($article->img) }}" 
                    class="card-img-top object-fit-cover" 
                    alt="Immagine dell'articolo {{$article->title}}">
                </div>
                <div class="card-body d-flex flex-column p-2">
                    <h5 class="card-title fs-6">{{ $article->title }}</h5>
                    
                    <div class="mt-auto">
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary btn-sm my-1 w-100">Leggi di più</a>
                        
                        @auth
                        @if(Auth::id() == $article->user->id)
                        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-info btn-sm w-100 my-1">Modifica</a>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-12 text-center">
            <p class="lead text-muted">Nessun articolo trovato per "{{ $search }}"</p>
        </div>
        @endif
    </div>
</div>