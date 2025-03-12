<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên Affiliate
            $table->string('email')->unique(); // Email (bắt buộc)
            $table->string('password'); // Mật khẩu
            $table->string('phone')->nullable(); // Số điện thoại
            $table->string('referral_code')->unique(); // Mã giới thiệu của chính họ
            $table->foreignId('referrer_id')->nullable()->constrained('user_affiliates')->onDelete('set null'); // Người giới thiệu (nếu có)
            $table->integer('level')->default(0); // Cấp bậc (F0, F1, F2...)
            $table->decimal('total_commission', 10, 2)->default(0); // Tổng hoa hồng kiếm được
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_affiliates');
    }
};
