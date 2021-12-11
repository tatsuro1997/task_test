<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFromsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_froms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('your_name', 20);
            $table->string('email', 255);
            $table->longText('url')->nullable($value = true);
            $table->boolean('gender');
            $table->tinyInteger('age');
            $table->string('contact', 200);
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
        Schema::dropIfExists('contact_froms');
    }
}
