<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameContactfromToContactform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contactform', function (Blueprint $table) {
            //
            Schema::rename('contact_froms', 'contact_forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactform', function (Blueprint $table) {
            //
            Schema::rename('contact_forms', 'contact_froms');
        });
    }
}
