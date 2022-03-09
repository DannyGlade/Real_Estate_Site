<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallary extends Model
{
    use HasFactory;
    protected $table = 'gallaries';
    protected $primaryKey = 'id';

    public function Property()
    {
        return $this->hasOne(Property::class, 'id', 'pro_id')->select('id', 'title', 'title_slug');
    }
}
