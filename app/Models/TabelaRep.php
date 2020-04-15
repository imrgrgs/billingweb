<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TabelaRep
 * @package App\Models
 * @version April 15, 2020, 12:32 pm UTC
 *
 * @property integer tbr_tarifacao_id
 * @property number tbr_valor
 * @property integer tbr_terminacao_id
 */
class TabelaRep extends Model
{
    use SoftDeletes;

    public $table = 'tabelarep1';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tbr_tarifacao_id',
        'tbr_valor',
        'tbr_terminacao_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tbr_representante_id' => 'integer',
        'tbr_tarifacao_id' => 'integer',
        'tbr_valor' => 'float',
        'tbr_terminacao_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tbr_tarifacao_id' => 'required',
        'tbr_valor' => 'required'
    ];

    
}
