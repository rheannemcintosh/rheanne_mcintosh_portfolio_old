<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'portfolio_projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'colour_id',
        'skill_id',
        'image_path',
        'github_url',
        'url',
    ];

    public function colour()
    {
        return $this->belongsTo(Colour::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
