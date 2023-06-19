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
        Schema::create('members_interest_areas', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')
                  ->on('members')->onDelete('cascade');        
            $table->integer('interest_area_id')->unsigned();
            $table->foreign('interest_area_id')->references('id')
                  ->on('interest_areas')->onDelete('cascade');
                  $table->timestamps();
                  $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members_interest_areas');
    }
};
