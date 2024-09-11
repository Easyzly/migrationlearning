<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Project;
use App\Models\To_do_list;
use App\Models\To_do_list_item;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jamie van Gulik',
            'email' => 'jamievangulik2006@gmail.com',
            'username' => 'Easyzly'
        ]);

        User::factory(9)->create();

        foreach(User::all() as $user) {
            Project::factory(2)->create([
                'user_id' => $user->id
            ]);

            Category::factory(3)->create([
                'user_id' => $user->id
            ]);
        }

        foreach(Project::all() as $project) {
            $lists = To_do_list::factory(3)->create([
                'project_id' => $project->id,
                'user_id' => $project->user->id,
            ]);

            foreach ($lists as $list)
            {
                To_do_list_item::factory(3)->create([
                    'to_do_list_id' => $list->id,
                ]);
            }
        }
        }
}
