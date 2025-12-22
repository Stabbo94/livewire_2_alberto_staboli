<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ArticleCreate extends Component
{
    
    use WithFileUploads;
    
    public $title;
    public $body;
    public $user_id;
    public $img;
    
    protected $rules = [
        'title'=>'required',
        'body'=>'required'
    ];
    
    protected $messages =[
        '*.required'=>'Il campo :attribute è obbligatorio'
    ];
    
    public function articleStore()
    {
        $this->user_id=Auth::user()->id;
        
        if($this->img){
            $this->validate(['img'=>'image']);
        }else{
            $this->validate();
        }
        
        $imgPath = $this->img ? $this->img->store('img', 'public') : null;
        
        Article::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'user_id'=>$this->user_id,
            'img' => $imgPath,
        ]);
        return redirect()->route('homepage')->with('successMessage', 'Articolo caricato correttamente');
        
    }
    
    public function render()
    {
        return view('livewire.article-create');
    }
}
