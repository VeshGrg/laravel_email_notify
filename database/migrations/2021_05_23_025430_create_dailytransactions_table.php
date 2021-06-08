<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailytransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailytransactions', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->unsignedBigInteger('shareName_id')->nullable();
//            $table->foreignId('shareName_id')->nullable()->constrained('shares', 'id')
//                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->enum('type', ['hydropower', 'bfi', 'investment', 'hotel']);
            $table->float('op_price');
            $table->float('cl_price');
            $table->integer('tot_transaction');
            $table->float('turnover');
            $table->timestamps();

            $table->foreign('shareName_id')->references('id')
                ->on('shares')
                ->onDelete('set null')
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
        Schema::dropIfExists('dailytransactions');
    }
}
