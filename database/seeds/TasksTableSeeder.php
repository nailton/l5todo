<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('tasks')->delete();

      $tasks = array(
        ['id' => 1, 'name' => 'Taks 1', 'slug' => 'task-1', 'project-id' => 1, 'completed' => false, 'description' => 'My'],
        );
    }
}
