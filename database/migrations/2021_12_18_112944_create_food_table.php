<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('food_image');
            $table->string('food_type');
            $table->string('quantity');
            $table->decimal('old_price', 5, 2);
            $table->decimal('new_price', 5, 2);
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
        Schema::dropIfExists('food');
    }
}
