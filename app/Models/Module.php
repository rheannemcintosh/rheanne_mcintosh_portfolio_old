<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'degree_modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'degree_id',
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
