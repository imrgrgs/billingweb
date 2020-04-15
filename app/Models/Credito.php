<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Credito
 * @package App\Models
 * @version April 15, 2020, 11:15 am UTC
 *
 * @property number crd_saldo
 */
class Credito extends Model
{
    use SoftDeletes;

    public $table = 'creditos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'crd_saldo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'crd_assinante_id' => 'integer',
        'crd_saldo' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
