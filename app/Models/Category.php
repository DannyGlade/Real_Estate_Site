<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "id";

    public function Pro()
    {
        return $this->hasMany(Property::class, 'category', 'id')->latest();
            // ->limit(6)
            // ->get();
    }
}
