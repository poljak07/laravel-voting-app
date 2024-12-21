<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Livewire\Component;

class AddComment extends Component
{
    public $idea;
    public $comment;
    protected $rules = [
        'comment' => 'required|min:4',
    ];

    public function mount(Idea $idea)
    {
        $this->idea = $idea;
    }

    public function addComment()
    {
        if(auth()->guest()) {
            abort(403);
        }

        $this->validate();

        Comment::create([
            'user_id' => auth()->id(),
            'idea_id' => $this->idea->id,
            'body' => $this->comment
        ]);

        $this->reset('comment');

        $this->dispatch('commentWasAdded', 'Comment was posted!');

    }

    public function render()
    {
        return view('livewire.add-comment');
    }
}
