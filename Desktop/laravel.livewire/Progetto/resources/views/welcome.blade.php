<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork Livewire Contatore</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-8 mb-2">
            <h1 class="text-center">Selfwork Livewire!</h1>
        </div>
    </div>
    
    
    
    <div class="row">
        <livewire:counter>
    </div>
    
    
    
    @livewireScripts
</body>

</html>