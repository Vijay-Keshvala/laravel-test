<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class NearByLocation extends Model
{    use HasFactory;
    protected $fillable = [
        'layout_id',
        'location_name',
        'distance',
    ];

    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
  
}
