<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up() {
		Schema::create('items', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 60);
			$table->string('detail', 250);
			$table->string('price', 10);
			$table->string('stock', 3);
			$table->softDeletes();
			$table->timestamps();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
	public function down() {
		Schema::dropIfExists('items');
	}
}
