<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $primaryKey = 'id';

    public function Users()
    {
        return $this->hasMany(User::class, 'id', 'u_id')->with('Data');
    }
    public function Property()
    {
        return $this->hasOne(Property::class, 'id', 'pro_id')->select('id', 'title', 'title_slug');
    }
}
