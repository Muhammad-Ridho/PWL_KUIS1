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
<<<<<<< HEAD
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->index();
            $table->string('slug', 100)->index();
            $table->text('content');
            $table->boolean('draft')->default(false);
            $table->timestamps();
            });
        
        
           
=======
    //    Schema::create('posts', function (Blueprint $table) {
    //       $table->id();
    //        $table->string('title', 100)->index();
    //       $table->string('slug', 100)->index();
    //        $table->text('content');
    //        $table->boolean('draft')->default(false);
    //        $table->timestamps();
    //        });
    
            Schema::create('daftarPegawai', function (Blueprint $table) {
                $table->id();
                $table->string('title', 100)->index();
                $table->string('slug', 100)->index();
                $table->text('content');
                $table->boolean('draft')->default(false);
                $table->timestamps();
                });

                Schema::create('daftarSupplier', function (Blueprint $table) {
                    $table->id();
                    $table->string('title', 100)->index();
                    $table->string('slug', 100)->index();
                    $table->text('content');
                    $table->boolean('draft')->default(false);
                    $table->timestamps();
                    });
>>>>>>> b7a1cb30db4f86b146a30d1e9d36e00ae9ce1713
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::dropIfExists('posts');
       
=======
        Schema::dropIfExists('daftarPegawai');
>>>>>>> b7a1cb30db4f86b146a30d1e9d36e00ae9ce1713
    }
}
