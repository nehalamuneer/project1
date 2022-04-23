<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('packagename',100);
            $table->string('place',100);
            $table->string('person',100);
            $table->string('hotel',100);
            $table->string('description',100);
            $table->string('numberofdays',100);
            $table->string('numberofnights',100);
            $table->string('image',100);
            $table->string('amount',100);
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
        Schema::dropIfExists('packages');
    }
}
