<?php

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('beritas');
    }
};

Berita::create([
    'title' => 'Judul ketiga',
    'category_id' => 3,
    'author' => 'Faris',
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo porro assumenda inventore iusto, klik selengkapnya',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo porro assumenda inventore iusto, dolores mollitia, ea velit ipsam, sed obcaecati repellat quam quasi voluptatum fuga ipsa. Voluptates accusamus voluptatum rem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quo inventore omnis culpa maiores maxime error saepe pariatur magni amet reprehenderit modi obcaecati fugit doloremque, corporis ut quidem totam minima.</p>'
]);


