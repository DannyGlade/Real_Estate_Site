<?php

use App\Models\User;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type', ['U', 'R', 'A']);
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User;
        $user->name = 'Admin User';
        $user->email = 'admin@admin.com';
        $user->password = '$2y$10$2LhsQAcYRgUtaZaDxFnHdumQZAUVEScFap9tDxSCDePSyclbRXJp6';
        $user->save();
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
