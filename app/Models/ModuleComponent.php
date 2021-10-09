<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleComponent extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'degree_module_components';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'degree_module_id',
        'name',
        'description',
        'grade',
    ];

    /**
     * Get the Module that is connected to the module component.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    /**
     * Get the components for each module.
     */
    public function components()
    {
        return $this->hasMany(ModuleComponent::class);
    }
}
