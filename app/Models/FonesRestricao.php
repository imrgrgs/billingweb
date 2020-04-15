<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FonesRestricao
 * @package App\Models
 * @version April 15, 2020, 12:13 pm UTC
 *
 * @property integer fonesrestricao_user_id
 * @property string fonesrestricao_telefone
 */
class FonesRestricao extends Model
{
    use SoftDeletes;

    public $table = 'FonesRestricao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fonesrestricao_user_id',
        'fonesrestricao_telefone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fonesrestricao_id' => 'integer',
        'fonesrestricao_user_id' => 'integer',
        'fonesrestricao_telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
