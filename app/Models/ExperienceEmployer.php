<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceEmployer extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'experience_employers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
      'employer_name',
      'start_date',
      'end_date',
      'location',
      'country',
      'example',
    ];
}
