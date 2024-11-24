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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');

            $table->foreignId('user_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamp('created_at')->useCurrent(); // Default to current time on creation
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate(); // Null by default, updates on modification
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
