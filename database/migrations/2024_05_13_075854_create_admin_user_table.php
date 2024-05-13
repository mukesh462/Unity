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
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->text('access_menu')->default('[]');
            $table->integer('user_type')->default(2);
            $table->timestamps();
        });
        Schema::create('admin_menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name')->nullable();
            $table->string('url')->nullable();
            $table->integer('menu_type')->default(1)->comment('1 -> for parent ,2 -> for child');
            $table->integer('parent_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_users');
        Schema::dropIfExists('admin_menus');
    }
};
