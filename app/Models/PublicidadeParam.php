<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PublicidadeParam
 * @package App\Models
 * @version April 15, 2020, 12:26 pm UTC
 *
 * @property integer ppm_id
 * @property integer ppm_qtd_simult_noite
 * @property integer ppm_qtd_simult_dia
 */
class PublicidadeParam extends Model
{
    use SoftDeletes;

    public $table = 'publicidadeparam';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ppm_id',
        'ppm_qtd_simult_noite',
        'ppm_qtd_simult_dia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ppm_id' => 'integer',
        'ppm_qtd_simult_noite' => 'integer',
        'ppm_qtd_simult_dia' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ppm_id' => 'required'
    ];

    
}
