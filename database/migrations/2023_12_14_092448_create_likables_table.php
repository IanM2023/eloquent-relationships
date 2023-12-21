<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Post;

class CreateLikablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likables', function (Blueprint $table) {
            $table->primary(['user_id', 'likable_id', 'likable_type']); 
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('likable_id');
            $table->string('likable_type'); // model name of the likeable object, e.g., App\Models\Post or
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
        Schema::dropIfExists('likables');
    }
}
