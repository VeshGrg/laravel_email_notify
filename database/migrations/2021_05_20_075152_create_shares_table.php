<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->id();
            $table->enum('name_of_company', ['nabil', 'himal', 'sikles', 'chilime', 'soaltee', 'barahi', 'cdec', 'tourism']);
            $table->integer('share_no');
            $table->integer('amt');
            $table->timestamps();
        });

        Schema::create('share_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('share_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->unique(['share_id', 'user_id']);

            $table->foreign('share_id')->references('id')
                ->on('shares')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shares');
    }
}
