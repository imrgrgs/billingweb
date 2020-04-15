<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FaxVirtual
 * @package App\Models
 * @version April 15, 2020, 12:10 pm UTC
 *
 * @property string fax_descricao
 * @property string fax_status
 * @property string fax_documento
 * @property string fax_data_ini
 * @property time fax_hora_ini
 * @property integer fax_terminacao_id
 * @property integer fax_fornecedor_id
 * @property integer fax_representante_id
 * @property string fax_login
 */
class FaxVirtual extends Model
{
    use SoftDeletes;

    public $table = 'faxvirtual';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fax_descricao',
        'fax_status',
        'fax_documento',
        'fax_data_ini',
        'fax_hora_ini',
        'fax_terminacao_id',
        'fax_fornecedor_id',
        'fax_representante_id',
        'fax_login'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fax_id' => 'integer',
        'fax_descricao' => 'string',
        'fax_status' => 'string',
        'fax_documento' => 'string',
        'fax_data_ini' => 'date',
        'fax_terminacao_id' => 'integer',
        'fax_fornecedor_id' => 'integer',
        'fax_representante_id' => 'integer',
        'fax_login' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
