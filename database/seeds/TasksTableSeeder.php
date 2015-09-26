<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $tasks = array(
            ['id' => 1, 'name' => 'Tarefa 1', 'slug' => 'task-1', 'project_id' => 1, 'completed' => false, 'description' => 'Minha tarefa um', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Tarefa 2', 'slug' => 'task-2', 'project_id' => 1, 'completed' => false, 'description' => 'Minha tarefa dois', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Tarefa 3', 'slug' => 'task-3', 'project_id' => 1, 'completed' => false, 'description' => 'Minha tarefa três', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Tarefa 4', 'slug' => 'task-4', 'project_id' => 1, 'completed' => true, 'description' => 'Minha tarefa quatro', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Tarefa 5', 'slug' => 'task-5', 'project_id' => 1, 'completed' => true, 'description' => 'Minha tarefa cinco', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Tarefa 6', 'slug' => 'task-6', 'project_id' => 2, 'completed' => true, 'description' => 'Minha tarefa seis', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Tarefa 7', 'slug' => 'task-7', 'project_id' => 2, 'completed' => false, 'description' => 'Minha tarefa sete', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }

}