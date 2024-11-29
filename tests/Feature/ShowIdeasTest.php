<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Idea;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->ideaOne = Idea::factory()->create([
        'title' => 'My First Idea',
        'description' => 'Description of my first Idea',
    ]);

    $this->ideaTwo = Idea::factory()->create([
        'title' => 'My Second Idea',
        'description' => 'Description of my second Idea',
    ]);
});

test('list of ideas shows on main page', function () {
    $response = $this->get(route('idea.index'));

    $response->assertSuccessful();
    $response->assertSee($this->ideaOne->title);
    $response->assertSee($this->ideaTwo->title);
});

