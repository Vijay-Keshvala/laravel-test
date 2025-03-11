<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'state',
        'google_map',
        'name_slug',
        'location',
        'status',
        'site_measurements',
        'video',
    ];
    public function layout()
    {
        return $this->belongsTo(Layout::class, 'layout_id');

    }
    public function nearbyLocations()
    {
        return $this->hasMany(NearByLocation::class, 'layout_id');
    }
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
