<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'experiences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'experience_employer_id',
        'role',
        'employment_type',
        'start_date',
        'end_date',
        'example',
    ];

    /**
     * Get the details for each experience.
     */
    public function details()
    {
        return $this->hasMany(ExperienceDetail::class);
    }
}
