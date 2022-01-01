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
            $table->uuid('id');
            $table->foreignUuid('user_id')->contrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->text('food_description');
            $table->string('food_image');
            $table->string('food_type');
            $table->decimal('old_price');
            $table->decimal('new_price');
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
