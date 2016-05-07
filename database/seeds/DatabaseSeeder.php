<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        $this->call(PriorityTableSeeder::class);

        Model::reguard();
    }
}


class PriorityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('priority')->insert([
            'name' => 'Low',

        ]);
        DB::table('priority')->insert([
            'name' => 'Medium',

        ]);
        DB::table('priority')->insert([
            'name' => 'High',

        ]);
    }
}


class TaskTableSeeder extends Seeder
{
    public function run()
    {
//        factory(App\Task::class, 50)->create()->each(function($u) {
//            $u->posts()->save(factory(App\Task::class)->make());
//        });
    }
}


class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("user")->insert([
            'name' => 'Bamdad Deh',
            'email' => 'bamdad.ag@gmail.com',
            'password' => Hash::make('salam'),
        ]);

    }
}
