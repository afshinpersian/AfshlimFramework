<?php

use Phpmig\Migration\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class UsersMigration extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        Capsule::schema()->create('users', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('api_token');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        Capsule::schema()->drop('users');
    }
}