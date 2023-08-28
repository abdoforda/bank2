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
            // 0=Individual || 1=Company
            $table->set('type', [0, 1])->default(0);
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('lastname')->nullable();
            $table->string('code_phone')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('passport')->nullable();
            $table->text('emirates_id')->nullable();
            $table->text('driving_license')->nullable();
            $table->text('bank_statement')->nullable();
            $table->text('utility_bill')->nullable();
            $table->text('other_documents')->nullable();
            $table->boolean('doc_profile')->default(0);
            $table->boolean('is_admin')->nullable();
            $table->text('message')->nullable();
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
};
