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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id(); // id del contacto
            $table->string('nombre'); // Nombre del contacto
            $table->string('email')->nullable(); // Email (opcional)
            $table->string('telefono')->nullable(); // Teléfono (opcional)
            $table->string('direccion')->nullable(); // Dirección (opcional)
            $table->text('notas')->nullable(); // Notas (opcional)
            $table->unsignedBigInteger('entidad_id')->nullable();
            $table->foreign('entidad_id')->references('id')->on('entidades')->onDelete('set null');
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento (opcional)
            $table->unsignedBigInteger('creado_por')->nullable(); // Relación con usuarios (opcional)
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
