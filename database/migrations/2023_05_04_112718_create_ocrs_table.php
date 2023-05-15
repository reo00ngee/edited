↓コマンドで生成しました
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
        ↓自分でコーディングしました
        Schema::create('ocrs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('status');
            $table->string('image');
            $table->text('content');
            $table->text('fixed_content');
            $table->text('point_of_content');
            $table->timestamps();

        });
        ↑自分でコーディングしました
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocrs');
    }
};
↑コマンドで生成しました
