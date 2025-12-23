<x-layout>
    
    <div class="container-fluid">
        
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center my-3">Homepage con tutti gli articoli</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12">
                <x-flash-messages/>
            </div>
        </div>
        
        <livewire:article-index>
        
        
        
        
    </div>
    
</x-layout>