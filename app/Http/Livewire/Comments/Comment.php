<?php


namespace App\Http\Livewire\Comments;

use App\Models\Comments;
use Livewire\Component;


class Comment extends Component
{

    public $allComment;
    public $listeners = ['updateComment' => "updateComment"];

    public function mount($post_id)
    {
        $response = Comments::where('post', '=', $post_id)->join('users', 'users.id', '=', 'comments.author')->select('comments.*', 'users.*', 'comments.id as comment_id')->get();
        $this->allComment = $response;
    }

    public function updateComment($post_id)
    {
        $response = Comments::where('post', '=', $post_id)->join('users', 'users.id', '=', 'comments.author')->select('comments.*', 'users.*', 'comments.id as comment_id')->get();
        $this->allComment = $response;
    }

    public function render()
    {
        return view('components.comments.comment', ['allComment' => $this->allComment]);
    }
}
