<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Languages', function (Blueprint $table) {
            // $table->integer('id')->unsigned()->primary()->autoIncrement();
            $table->id();
            $table->string('name', 100)->index();
            $table->string('locale', 30)->unique()->index();
            $table->boolean('status')->default(1);
            $table->string('flag', 50)->nullable();
            $table->string('text_direction', 30)->default('ltr')->nullable();
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
        Schema::dropIfExists('languages');
    }
}
