<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Singer
 *
 * @property $id_singers
 * @property $name
 * @property $gender
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Singer extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_singers', 'name', 'gender'];


}
