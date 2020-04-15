<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ataque
 * @package App\Models
 * @version April 14, 2020, 9:35 pm UTC
 *
 * @property string ata_data
 * @property time ata_hora
 * @property string ata_login
 * @property string ata_ip
 * @property string ata_temp
 */
class Ataque extends Model
{
    use SoftDeletes;

    public $table = 'ataque';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ata_data',
        'ata_hora',
        'ata_login',
        'ata_ip',
        'ata_temp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ata_id' => 'integer',
        'ata_data' => 'date',
        'ata_login' => 'string',
        'ata_ip' => 'string',
        'ata_temp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
