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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->e   num('type', ['tablet', 'sirup', 'kapsul']);
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps(); //akan menghasilkan dua column : created_at (auto terisi tgl pembuatan data), 
            //updata_at (auto terisi tgl data diubah)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
