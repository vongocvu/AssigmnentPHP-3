<?php


namespace App\Http\Livewire\Comments;

use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class InputComment extends Component
{
    public $value = "";
    public $post_id, $comment_parent, $level;

    public function saveComment()
    {
        if ($this->value !== "") {
            Comments::create([
                'author' => Auth::user()->id,
                'content' => $this->value,
                'like' => 0,
                'dislike' => 0,
                'comment_parent' => $this->comment_parent,
                'level' => $this->level,
                'post' => $this->post_id
            ]);
            $this->value = "";
            $this->emit('updateComment', $this->post_id);
        }
    }

    public function mount($post_id, $comment_parent, $level)
    {
        $this->comment_parent = $comment_parent;
        $this->level = $level;
        $this->post_id = $post_id;
    }


    public function render()
    {
        return view('components.comments.input-comment');
    }
}
