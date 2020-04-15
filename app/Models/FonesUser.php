<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FonesUser
 * @package App\Models
 * @version April 15, 2020, 12:14 pm UTC
 *
 * @property string fne_telefone
 * @property integer fne_user_id
 * @property string retornar_callingcard
 */
class FonesUser extends Model
{
    use SoftDeletes;

    public $table = 'fonesusers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fne_telefone',
        'fne_user_id',
        'retornar_callingcard'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fne_telefone' => 'string',
        'fne_user_id' => 'integer',
        'retornar_callingcard' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'retornar_callingcard' => 'required'
    ];

    
}
