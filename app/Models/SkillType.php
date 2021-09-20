<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillType extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'ordering',
        'cv_flag',
    ];

    /**
     * Get the skills for each skill type.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
