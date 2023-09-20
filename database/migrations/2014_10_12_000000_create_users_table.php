<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    1	닉네임
    2	휴대전화
    3	이메일
    4	대표자이름
    5	상호명
    6	사업자번호
    7	주소1
    8	주소2
    9	주소3(우편)
    10	담당자번호
    */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nickname')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('owner')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_number')->nullable();
            $table->string('addr1')->nullable();
            $table->string('addr2')->nullable();
            $table->string('addr3')->nullable();
            $table->integer('level')->default(0);
            $table->integer('is_admin')->default(0);
            $table->integer('role_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
