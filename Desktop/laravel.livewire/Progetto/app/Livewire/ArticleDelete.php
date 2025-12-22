<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleDelete extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function deleteArticle()
    {
        $this->article->delete();

        session()->flash('successMessage', "Articolo '{$this->article->title}' eliminato con successo.");

        return redirect()->route('homepage')->with('successMessage', 'Articolo eliminato correttamente');
    }

    public function render()
    {
        return view('livewire.article-delete');
    }
}
