<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class App\posts extends Seeder
{
    public function run()
    {
         TestDummy::times(50)->create('App\Post');
    }
}
