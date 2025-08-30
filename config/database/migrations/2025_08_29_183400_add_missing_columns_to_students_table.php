<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            if (!Schema::hasColumn('students', 'student_name')) {
                $table->string('student_name')->after('id');
            }
            if (!Schema::hasColumn('students', 'student_id')) {
                $table->string('student_id')->after('student_name');
            }
            if (!Schema::hasColumn('students', 'project_title')) {
                $table->string('project_title')->after('student_id');
            }
            if (!Schema::hasColumn('students', 'supervisor')) {
                $table->string('supervisor')->after('project_title');
            }
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['student_name', 'student_id', 'project_title', 'supervisor']);
        });
    }
};
