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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 255)->nullable();
            // 1st way to make a one-to-one relationship
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id') 
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // 2nd way to create a one-to-one relationship.
            // $table->foreignId('user_id')->constrained();

            // We should use the 1st way unless we are are
            // following laravel conventions which normally
            // it's not always the case.
            // Both are equivalentes
            
            // After this, we should execute a migration
            // by typing on the console
            // php artisan migrate
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
