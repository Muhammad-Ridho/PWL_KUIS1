<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('posts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title', 100)->index();
        //     $table->string('slug', 100)->index();
        //     $table->text('content');
        //     $table->boolean('draft')->default(false);
        //     $table->timestamps();
        //     });
        
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->index();
            $table->string('slug', 100)->index();
            $table->string('image', 255)->nullable();
            $table->text('content');
            $table->boolean('draft')->default(false);
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
        Schema::dropIfExists('posts');
    }
}
