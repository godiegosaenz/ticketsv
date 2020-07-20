<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedInteger('status_id');

            $table->foreign('status_id')->references('id')->on('statuses');

            $table->unsignedInteger('priority_id');

            $table->foreign('priority_id')->references('id')->on('priorities');

            $table->unsignedInteger('category_id');

            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedInteger('assigned_to_user_id')->nullable();

            $table->foreign('assigned_to_user_id')->references('id')->on('users');

            $table->unsignedInteger('subcategories_id');
            
            $table->foreign('subcategories_id')->references('id')->on('sub_categories');
        });
    }
}
