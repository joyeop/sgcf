<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
			$table->string ( 'logradouro' )->nullable()->default(null);
			$table->string ( 'complemento' )->nullable()->default(null);
			$table->integer ( 'numero' )->nullable()->default(null);
			$table->string ( 'bairro' )->nullable()->default(null);
			$table->integer ( 'cep' )->nullable()->default(00000000);
			$table->string ( 'cidade' )->nullable()->default(null);
			$table->string ( 'estado' )->nullable()->default(null);
            $table->timestamps();
			$table->SoftDeletes ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enderecos');
    }
}
