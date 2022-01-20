<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('first_member');
            $table->string('second_member');
            $table->string('first_member_email');
            $table->string('second_member_email');
            $table->integer('first_member_grade');
            $table->integer('second_member_grade');
            $table->string('category');
            $table->boolean('is_admin')->default(false);
            $table->integer('question_on')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('auth_token')->nullable();
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
        Schema::dropIfExists('users');
    }
}
