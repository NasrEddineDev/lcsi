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
        Schema::create('collaborations', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->string('name_lt');
            $table->string('organization');
            $table->string('organization_lt');
            $table->string('type');//Lab, University, ...etc
            $table->string('mobile');
            $table->string('address');
            $table->string('address_lt');
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
        Schema::dropIfExists('collaborations');
    }
};
