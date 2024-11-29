<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Idea;

uses(RefreshDatabase::class);

test('single idea shows correctly on the show page', function () {
    $idea = Idea::factory()->create([
        'title' => 'My First Idea',
        'description' => 'Description of my first idea',
    ]);

    $response = $this->get(route('idea.show', $idea));

    $response->assertSuccessful();
    $response->assertSee($idea->title);
    $response->assertSee($idea->description);
});
