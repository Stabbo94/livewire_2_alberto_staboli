<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center my-3">Dettagli dell'articolo: {{$article->title}}</h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p>{{$article->body}}</p>
                <p class="fst-italic">Scritto da: {{$article->user->name}}</p>
            </div>
            
            <div class="col-auto text-center">
                <img src="{{ !$article->img ? 'https://picsum.photos/200/300' : Storage::url($article->img) }}" 
                class="img-fluid rounded object-fit-cover w-50 h-50" 
                alt="Immagine dell'articolo {{$article->title}}">
                
                @auth
                @if(Auth::id() == $article->user->id)
                <div class="mt-3">
                    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-outline-warning w-25">Modifica articolo</a>
                </div>

                <div>
                    <livewire:article-delete :article="$article">
                </div>
                
                @endif
                @endauth
            </div>
        </div>
        
        
        @if(session()->has('successMessage'))
        <div class="alert alert-success text-center mt-3">
            {{ session('successMessage') }}
        </div>
        @endif
        
        @if(session()->has('errorMessage'))
        <div class="alert alert-danger text-center mt-3">
            {{ session('errorMessage') }}
        </div>
        @endif
        
    </div>
</x-layout>
