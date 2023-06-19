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
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('firstname');
            $table->string('firstname_lt');
            $table->string('lastname');
            $table->string('lastname_lt');
            $table->string('title');
            $table->string('grade');
            $table->string('dipoma');
            $table->string('major');
            $table->string('type');//Leader, Researcher, ...etc
            $table->string('mobile');
            $table->string('email');
            $table->string('gender');
            $table->string('birthday');
            $table->string('address');
            $table->string('address_lt');
            $table->string('working_at');
            $table->string('picture');
            $table->string('language');
            $table->integer('team_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
