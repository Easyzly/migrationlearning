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
        Schema::create('to_do_list_items', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('note');
            $table->boolean('done')->default(false);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('priority')->default(0);
            $table->unsignedBigInteger('to_do_list_id');
            $table->foreign('to_do_list_id')->references('id')->on('to_do_lists');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_do_list_items');
    }
};
