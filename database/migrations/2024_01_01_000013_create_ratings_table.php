<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->unsignedTinyInteger('rating');
            // Polymorphic relation: currently used by "projects" (rateable_type = App\Models\Project)
            $table->unsignedBigInteger('rateable_id');
            $table->string('rateable_type');
            $table->timestamp('created_at')->nullable();

            $table->index(['rateable_id', 'rateable_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
