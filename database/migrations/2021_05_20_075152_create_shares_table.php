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
            $table->string('name_of_company');
            $table->enum('company_type', ['Hydropower', 'BFIs', 'Investment', 'Hotels']);
            $table->foreignId('user_id')->constrained('users', 'id')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('share_no')->nullable();
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
        Schema::dropIfExists('shares');
    }
}
