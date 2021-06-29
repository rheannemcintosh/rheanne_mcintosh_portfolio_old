<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'grade',
        'stage',
    ];

    /**
     * Get the Degree that is connected to the module.
     */
    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }
}