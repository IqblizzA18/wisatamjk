<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataImage extends Model
{
    use HasFactory;

    protected $fillable = ['wisata_id', 'image_path'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}

