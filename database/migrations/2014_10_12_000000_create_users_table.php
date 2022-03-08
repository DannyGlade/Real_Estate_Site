<?php

use App\Models\User;
use App\Models\UserData;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->enum('type', ['U', 'R', 'A'])->comment('R=Root, A=Admin, U=User');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User;
        $user->name = 'Admin User';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('admin123');
        // $user->password = '$2y$10$2LhsQAcYRgUtaZaDxFnHdumQZAUVEScFap9tDxSCDePSyclbRXJp6';
        $user->type = 'R';
        $user->save();

        $user_data = new UserData;
        $user_data->id = $user->id;
        $user_data->save();
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
