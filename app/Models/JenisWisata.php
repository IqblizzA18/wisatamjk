<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisWisata extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function wisatas()
    {
        return $this->hasMany(Wisata::class);
    }
}
