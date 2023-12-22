<?php

namespace App\Http\Livewire;

use Illuminate\Console\View\Components\Alert;
use Livewire\Component;

class Comments extends Component
{


    public $comments = [];
    public $newComment;
    public $textNull = false;
    public $index = -1;

    public function addComment()
    {
        if($this->newComment == "")
        {
            $this->textNull = true;
        }else
        {
            $this->textNull = false;
            array_unshift($this->comments,[
                'index' => $this->index += 1,
                'body' => $this->newComment,
            ]);
            $this->newComment = "";

        }

    }

    public function delete($index)
    {
        dd($this->comments);
        $indexArray = array_search($index, array_column($this->comments, 'index'));
        dd($this->comments[$indexArray]);

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
