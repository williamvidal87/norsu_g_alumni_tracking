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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('sex_id')->nullable()->after('middle_name');
            $table->unsignedBigInteger('civil_status_id')->nullable()->after('birth_place');
            $table->unsignedBigInteger('educational_level_id')->nullable()->after('year_graduate');
            $table->unsignedBigInteger('course_id')->nullable()->after('graduate_school_campus');
            $table->unsignedBigInteger('type_work_id')->nullable()->after('present_occupation');


            $table->foreign('sex_id')->references('id')->on('sexes');
            $table->foreign('civil_status_id')->references('id')->on('civil_statuses');
            $table->foreign('educational_level_id')->references('id')->on('educational_levels');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('type_work_id')->references('id')->on('type_works');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_sex_id_foreign');
            $table->dropForeign('users_civil_status_id_foreign');
            $table->dropForeign('users_educational_level_id_foreign');
            $table->dropForeign('users_course_id_foreign');
            $table->dropForeign('users_type_work_id_foreign');

            $table->dropColumn('users_sex_id_foreign');
            $table->dropColumn('users_civil_status_id_foreign');
            $table->dropColumn('users_educational_level_id_foreign');
            $table->dropColumn('users_course_id_foreign');
            $table->dropColumn('users_type_work_id_foreign');
        });
    }
};
