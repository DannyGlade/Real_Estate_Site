<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallary extends Model
{
    use HasFactory;
    protected $table = 'gallaries';
    protected $primaryKey = 'id';

    public function Pro()
    {
        return $this->belongsTo(Property::class, 'pro_id');
    }
}
