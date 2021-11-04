<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Psy\Shell;

class RecycledTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recycled_targets', function(Blueprint $table){
            $table->id();
            $table->foreignId('plastic_type_id')->constrained('plastic_types')
            ->onDelete('cascade'); //Type of plastic for this thing
            $table->string('name'); // Name of the target object
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recycled_targets');
    }
}
