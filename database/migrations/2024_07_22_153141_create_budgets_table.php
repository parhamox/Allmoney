<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Budgets', function (Blueprint $table) {
            $table->id(); // Page number
            $table->unsignedBigInteger('user_id'); // Who spent the money
            $table->unsignedBigInteger('category_id'); // Type of expense
            $table->decimal('amount', 10, 2); // Amount spent
            $table->text('description')->nullable(); // Details about the expense
            $table->date('expense_date'); // Date of the expense
            $table->timestamps(); // Automatically added date and time

            // Linking to the users and categories sections
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
