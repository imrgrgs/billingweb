<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Grupo
 * @package App\Models
 * @version April 15, 2020, 12:14 pm UTC
 *
 * @property string gru_descricao
 */
class Grupo extends Model
{
    use SoftDeletes;

    public $table = 'grupos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gru_descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gru_id' => 'integer',
        'gru_descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
