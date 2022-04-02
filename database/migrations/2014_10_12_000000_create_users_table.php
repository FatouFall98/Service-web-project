<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',50);
            $table->string('prenom',50);
            $table->string('nom',50);
            $table->integer('cni');
            $table->string('adresse',50);
            $table->string('sexe',50);
            $table->date('datenaiss');
            $table->rememberToken();
            $table->foreignId('bureaudevotes_id')->constrained('bureaudevotes')->cascadeOnDelete();
            $table->foreignId('votes_id')->constrained('votes_id')->cascadeOnDelete();
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
        Schema::dropIfExists('users');
    }
}
