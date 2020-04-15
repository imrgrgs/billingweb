<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PopsReveAssi
 * @package App\Models
 * @version April 15, 2020, 12:23 pm UTC
 *
 * @property integer popar_fornecedor_id
 * @property integer popar_representante_id
 * @property string popar_assinante
 * @property integer popar_tarifas_id
 * @property integer popar_terminacao1_id
 * @property integer popar_terminacao2_id
 * @property integer popar_terminacao3_id
 */
class PopsReveAssi extends Model
{
    use SoftDeletes;

    public $table = 'popsreveassi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'popar_fornecedor_id',
        'popar_representante_id',
        'popar_assinante',
        'popar_tarifas_id',
        'popar_terminacao1_id',
        'popar_terminacao2_id',
        'popar_terminacao3_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'popar_id' => 'integer',
        'popar_fornecedor_id' => 'integer',
        'popar_representante_id' => 'integer',
        'popar_assinante' => 'string',
        'popar_tarifas_id' => 'integer',
        'popar_terminacao1_id' => 'integer',
        'popar_terminacao2_id' => 'integer',
        'popar_terminacao3_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
