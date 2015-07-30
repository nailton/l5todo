<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      DB::table('projects')->delete();
      $projects = array(
        ['id' => 1, 'name' => 'Project 1', 'slug' => 'Project-1', 'created_at' = new DateTime, 'updated_at' => new DateTime],
        ['id' => 2, 'name' => 'Project 2', 'slug' => 'Project-2', 'created_at' = new DateTime, 'updated_at' => new DateTime],
        ['id' => 3, 'name' => 'Project 3', 'slug' => 'Project-3', 'created_at' = new DateTime, 'updated_at' => new DateTime],
        );
      DB::table('prjects')->insert($projects);
    }
}
