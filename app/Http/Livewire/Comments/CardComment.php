<?php


namespace App\Http\Livewire\Comments;

use App\Models\Comments;
use Livewire\Component;


class CardComment extends Component
{
    public $comment;
    public function mount($comment)
    {
        $this->comment = $comment;
    }

    public function render()
    {
        return view('components.comments.card-comment');
    }
}
