<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('phone')->nullable();
            // $table->unsignedBigInteger('sub_id')->nullable();
            $table->integer('role')->nullable()->default(0); // Setting default value to 0
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('sub_id')
            //         ->references('id')
            //         ->on('subscriptions')
            //         ->onDelete('cascade');
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
};
