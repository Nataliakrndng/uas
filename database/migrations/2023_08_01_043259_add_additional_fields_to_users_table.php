<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('hobbies')->nullable();
            $table->string('instagram')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            // Add other fields as needed
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['gender', 'hobbies', 'instagram', 'mobile', 'image']);
            // Drop other fields if needed
        });
    }
}
