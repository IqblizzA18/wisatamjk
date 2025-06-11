<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
    'title', 'slug', 'short_description',
    'paragraph_1', 'paragraph_2', 'paragraph_3', 'paragraph_4', 'paragraph_5',
    'google_maps_url', 'opening_hours', 'rating',
    'is_recommended', 'jenis_wisata_id', 'uploaded_at'
];

public function jenisWisata()
{
    return $this->belongsTo(JenisWisata::class, 'jenis_wisata_id');
}

public function images()
{
    return $this->hasMany(WisataImage::class);
}
}

