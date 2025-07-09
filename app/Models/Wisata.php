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
        'visit_count', 'jenis_wisata_id', 'uploaded_at',
    ];

    protected $appends = ['cbf_score']; // agar bisa diakses langsung

    public function jenisWisata()
    {
        return $this->belongsTo(JenisWisata::class, 'jenis_wisata_id');
    }

    public function images()
    {
        return $this->hasMany(WisataImage::class);
    }

    public function incrementVisitCount()
    {
        $this->increment('visit_count');
    }

    // Accessor untuk skor rekomendasi CBF
    public function getCbfScoreAttribute()
    {
        return ($this->rating * 10) + ($this->visit_count * 0.5);
    }
}
