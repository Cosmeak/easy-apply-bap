<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_sectors', function (Blueprint $table) {
          $table->id();
          $table->timestamps();

          $table->foreignId('candidate_id')->constrained('candidates');
          $table->foreignId('sector_id')->constrained('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_sectors');
    }
}
