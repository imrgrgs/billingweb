<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FaxVirtualParam
 * @package App\Models
 * @version April 15, 2020, 12:11 pm UTC
 *
 * @property integer pfv_id
 * @property integer pfv_qtd_simult_noite
 * @property integer pfv_qtd_simult_dia
 */
class FaxVirtualParam extends Model
{
    use SoftDeletes;

    public $table = 'faxvirtualparam';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pfv_id',
        'pfv_qtd_simult_noite',
        'pfv_qtd_simult_dia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pfv_id' => 'integer',
        'pfv_qtd_simult_noite' => 'integer',
        'pfv_qtd_simult_dia' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pfv_id' => 'required'
    ];

    
}
