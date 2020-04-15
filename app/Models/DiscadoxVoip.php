<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DiscadoxVoip
 * @package App\Models
 * @version April 15, 2020, 12:08 pm UTC
 *
 * @property string dis_numerodiscado
 * @property string dis_login_voip
 * @property integer dis_representante_id
 * @property integer dis_fornecedor_id
 */
class DiscadoxVoip extends Model
{
    use SoftDeletes;

    public $table = 'discadoxvoip';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dis_numerodiscado',
        'dis_login_voip',
        'dis_representante_id',
        'dis_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dis_id' => 'integer',
        'dis_numerodiscado' => 'string',
        'dis_login_voip' => 'string',
        'dis_representante_id' => 'integer',
        'dis_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
