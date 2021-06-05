<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'age',
        'd_o_b',
        'phone',
        'address',
        'blood_group',
        'genotype',
        'allergy',
        'user_id'

    ];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
