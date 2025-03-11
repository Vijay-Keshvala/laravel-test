<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'layout_id',
        'url',
        'media_location',
    ];

    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
}
