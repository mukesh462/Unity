<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryItemHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_item_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('user_type');
            $table->integer('item_id');
            $table->char('ref_type');
            $table->text('note');
            $table->integer('status')->default(1);
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory_item_histories');
    }
}
