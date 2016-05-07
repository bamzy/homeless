<?php
/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 07/05/2016
 * Time: 1:24 PM
 */

namespace database\seeds;


class TaskTableSeeder extends Seeder {
    public function run(){
        factory(App\User::class, 50)->create()->each(function($u) {
            $u->posts()->save(factory(App\Task::class)->make());
        });
    }
}

