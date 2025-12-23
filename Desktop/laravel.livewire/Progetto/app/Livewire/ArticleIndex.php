<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleIndex extends Component
{
    public $search = '';
    public function render()
    {
        
        $articles = Article::where('title', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get();
        
        return view('livewire.article-index', compact('articles'));
    }
}