<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('subscribed_newsletters', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255);
            $table->uuid('unsubscribe_token');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscribed_newsletters');
    }

};
