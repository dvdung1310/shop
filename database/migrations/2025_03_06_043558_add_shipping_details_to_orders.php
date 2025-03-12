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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('total_price', 10, 2);
            $table->string('status')->default('pending'); // pending, processing, completed, canceled
            $table->string('payment_method')->nullable(); // COD, Credit Card, PayPal...
            // Thêm thông tin địa chỉ nhận hàng
            $table->string('receiver_name'); // Tên người nhận
            $table->string('phone_number'); // Số điện thoại người nhận
            $table->string('city'); // Thành phố
            $table->string('district'); // Quận/Huyện
            $table->string('address_detail'); // Địa chỉ cụ thể (Số nhà, đường, phường)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
