<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('beeftype');
            $table->string('doneness');
            $table->string('sidedish');
            $table->json('sauces');             
            $table->string('customername');               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steaks');
    }
}
