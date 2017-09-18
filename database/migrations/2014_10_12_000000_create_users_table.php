<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*
        nullable();
      */
        Schema::create('USERS', function (Blueprint $table) {
            $table->string('USER_ID')->primary();

            //foreign
            $table->string('ADMIN_ID');

            //content
            $table->string('EMAIL_CUST', 150);
            $table->string('PASSWD_CUST');
            $table->string('NAME_CUST', 150);
            $table->enum('GENDER_CUST', ['PRIA', 'WANITA']);
            $table->string('ADDRESS_CUST', 200);
            $table->string('ADDRESS_TAG_CUST', 30);
            $table->string('PHONENUMB_CUST', 15);
            $table->string('IMAGE_CUST')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //constraint
            $table->foreign('ADMIN_ID')->references('ADMIN_ID')->on('ADMINS');

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
        Schema::dropIfExists('users');
    }
}
