<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Operadora
 * @package App\Models
 * @version April 15, 2020, 12:19 pm UTC
 *
 * @property integer opr_id
 * @property string opr_nome
 */
class Operadora extends Model
{
    use SoftDeletes;

    public $table = 'operadoras';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'opr_id',
        'opr_nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'opr_id' => 'integer',
        'opr_nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'opr_id' => 'required',
        'opr_nome' => 'required'
    ];

    
}
