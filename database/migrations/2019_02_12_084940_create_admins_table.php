<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {     
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('contact_number', 20);
            $table->string('status', 20);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('accepted_terms_at')->nullable();
            $table->timestamp('accepted_privacy_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
}
