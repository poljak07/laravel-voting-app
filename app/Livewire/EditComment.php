<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class EditComment extends Component
{
    public Comment $comment;
    public $body;

    protected $rules = [
        'body' => 'required|min:4',
    ];

    protected $listeners = ['setEditComment'];

    public function setEditComment($commentId)
    {
        $this->comment = Comment::findOrFail($commentId);
        $this->body = $this->comment->body;

        $this->dispatch('editCommentWasSet');
    }

    public function updateComment()
    {
        if (auth()->guest() || auth()->user()->cannot('update', $this->comment)) {
            abort(403);
        }

        $this->validate();

        $this->comment->body = $this->body;
        $this->comment->save();

        $this->dispatch('commentWasUpdated');
    }

    public function render()
    {
        return view('livewire.edit-comment');
    }
}
