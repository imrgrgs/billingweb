<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CreditoAdm
 * @package App\Models
 * @version April 15, 2020, 11:16 am UTC
 *
 * @property integer cca_fornecedor_id
 * @property string cca_data
 * @property time cca_hora
 * @property number cca_valor
 */
class CreditoAdm extends Model
{
    use SoftDeletes;

    public $table = 'creditosadm';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cca_fornecedor_id',
        'cca_data',
        'cca_hora',
        'cca_valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cca_id' => 'integer',
        'cca_fornecedor_id' => 'integer',
        'cca_data' => 'date',
        'cca_valor' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cca_valor' => 'required'
    ];

    
}
