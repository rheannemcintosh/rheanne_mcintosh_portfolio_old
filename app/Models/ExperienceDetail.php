<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceDetail extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'experience_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail',
        'cv_flag,'
    ];

    /**
     * Get the Experience that is connected to the detail.
     */
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
