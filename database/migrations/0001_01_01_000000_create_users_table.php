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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('last_name')->nullable();
            $table->string('name');
            $table->string('middle_name')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('home_address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('land_line_no')->nullable();
            $table->string('email')->unique();
            $table->string('facebook_account')->nullable();

            $table->string('year_graduate')->nullable();
            $table->string('graduate_school_campus')->nullable();
            $table->string('major_in')->nullable();

            $table->string('present_occupation')->nullable();
            $table->string('name_of_company')->nullable();
            $table->string('employment_address')->nullable();
            $table->string('reference_person_workplace')->nullable();
            $table->string('reference_person_workplace_contact_no')->nullable();
            
            $table->string('person_to_notify')->nullable();
            $table->string('person_to_notify_contact_no')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
