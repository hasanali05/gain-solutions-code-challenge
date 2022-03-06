<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('segment_id')->nullable();
            $table->integer('line')->default(0); // line > and query line number.
            $table->integer('field'); // must fill any field
            $table->integer('operator'); // must fill any operator
            $table->string('first_query')->nullable();
            $table->string('second_query')->nullable();
            $table->timestamps();

            $table->foreign('segment_id')
                ->references('id')
                ->on('segments')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
