<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email');
            $table->text('content');
            // Polymorphic relation: currently used by "articles" (commentable_type = App\Models\Article)
            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type');
            $table->boolean('is_approved')->default(false);
            $table->timestamp('created_at')->nullable();

            $table->index(['commentable_id', 'commentable_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
