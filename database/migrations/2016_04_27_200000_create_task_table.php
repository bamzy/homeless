<?php
/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 27/04/2016
 * Time: 9:26 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();

            $table->string('email')->index()->unique();
            $table->string('token')->index();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user');

            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('task');
    }
}
