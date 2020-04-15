<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VoipToVoip
 * @package App\Models
 * @version April 15, 2020, 12:37 pm UTC
 *
 * @property string vtov_origem
 * @property string vtov_destino
 * @property integer vtov_representante_id
 * @property integer vtov_fornecedor_id
 */
class VoipToVoip extends Model
{
    use SoftDeletes;

    public $table = 'voiptovoip';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'vtov_origem',
        'vtov_destino',
        'vtov_representante_id',
        'vtov_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vtov_id' => 'integer',
        'vtov_origem' => 'string',
        'vtov_destino' => 'string',
        'vtov_representante_id' => 'integer',
        'vtov_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
