<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurtnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CURTNERS', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('ORIGIN_ID');
            $table->integer('ADMIN_ID');

            //content
            $table->string('NAME_CURT');
            $table->string('EMAIL_CURT')->unique();
            $table->string('PASSWD_CURT');
            $table->string('ADDRESS_CURT');
            $table->string('PHONENUMB_CURT');
            $table->string('OWNERNAME_CURT');
            $table->string('OWNERIDNUMB_CURT');
            $table->rememberToken();
            $table->timestamps();

            /*
              PIC = ADMIN
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curtners');
    }
}
