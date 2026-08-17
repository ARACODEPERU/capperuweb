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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id');
            $table->string('description');
            $table->string('number');
            $table->string('cci')->nullable();
            // Debe coincidir con sunat_currency_types.id (utf8 / utf8_spanish_ci)
            // para que MySQL permita crear la foreign key (errno 150 si no coincide).
            $table->string('currency_type_id')->charset('utf8')->collation('utf8_spanish_ci')->default('PEN');
            $table->boolean('status')->default(true);
            $table->boolean('invoice_show')->default(false)->comment('para que sea visualizado en las boletas y facturas');
            $table->timestamps();
        });

        Schema::table('bank_accounts', function (Blueprint $table) {
            $table->foreign('currency_type_id')->references('id')->on('sunat_currency_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
