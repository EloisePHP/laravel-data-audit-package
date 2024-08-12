<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        $this->createAuditableClassTestTable();
    }

    public function createAuditableClassTestTable(): void
    {
        Schema::create('test_eloise_auditable_model', function (Blueprint $table) {
            $table->id();
            $table->string('test_name', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_eloise_auditable_model');
    }
};
