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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->time('hour');

            $table->foreignId('id_local_club')
            ->nullable()
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_visitor_club')
            ->nullable()
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->string('referee');
            $table->string('score')->nullable();
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
        Schema::dropIfExists('competitions');
    }
};
