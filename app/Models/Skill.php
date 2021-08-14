<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skills';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'skill_type',
        'skill_proficiency'
    ];

    /**
     * Get the type for the skill.
     */
    public function type()
    {
        return $this->hasOne(SkillType::class);
    }

    /**
     * Get the proficiency for the skill.
     */
    public function proficiency()
    {
        return $this->hasOne(SkillProficiency::class);
    }
}
