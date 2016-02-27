<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title' , 60);
            $table->string('name' , 60);
			$table->timestamps();
		});

        Schema::create('category_work' , function(Blueprint $table)
            {
                $table->integer('work_id')->unsigned()->index();
                $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
               // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

                $table->integer('category_id')->unsigned()->index();
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

                $table->timestamps();
            }
        );

        Schema::create('category_post', function(Blueprint $table)
        {
            $table->integer('post_id')->unsigned()->index();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
        Schema::drop('tags');
	}

}
