<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     /*   User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        User::factory()->create([
           'name' => 'Domagoj',
           'email' => 'test@test.com'
        ]);

        User::factory(19)->create();

        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'In progress', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red text-white']);

        Idea::factory(100)->existing()->create();

        // Generate unique votes. Ensure idea_id and user_id are unique for each row
        foreach(range(1, 20) as $user_id ) {
            foreach(range(1, 100) as $idea_id) {
                if($idea_id % 2 == 0) {
                Vote::factory()->create([
                    'user_id' => $user_id,
                   'idea_id' => $idea_id,
                ]);
                }
            }
        }
        // Generate comments for ideas
        foreach(Idea::all() as $idea) {
            Comment::factory(5)->existing()->create(['idea_id' => $idea->id]);
        }
    }
}
