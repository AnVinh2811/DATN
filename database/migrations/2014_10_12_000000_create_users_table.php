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
            $table->String('Username')->nullable()->chance();
            $table->String('email')->nullable();
            $table->String('password')->nullable();
            $table->String('image')->nullable();
            $table->String('address')->nullable()->default('Chưa nhập thông tin');
            $table->String('phone')->nullable()->default('Chưa nhập thông tin');
            $table->integer('loaitaikhoan_id')->nullable()->default('1');
            $table->bigInteger('trang_thai')->default('1');
            $table->timestamps();
            $table->softDeletes();
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
