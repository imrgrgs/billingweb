<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Server
 * @package App\Models
 * @version April 15, 2020, 12:29 pm UTC
 *
 * @property string ip_number
 * @property string type_access
 * @property string alias
 * @property string ssh_user_access
 * @property string ssh_password_access
 * @property string ssh_port
 * @property integer admin_id
 * @property string name
 * @property string description
 * @property string|\Carbon\Carbon date_created
 * @property string|\Carbon\Carbon date_updated
 * @property string status
 */
class Server extends Model
{
    use SoftDeletes;

    public $table = 'server';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ip_number',
        'type_access',
        'alias',
        'ssh_user_access',
        'ssh_password_access',
        'ssh_port',
        'admin_id',
        'name',
        'description',
        'date_created',
        'date_updated',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ip_number' => 'string',
        'type_access' => 'string',
        'alias' => 'string',
        'ssh_user_access' => 'string',
        'ssh_password_access' => 'string',
        'ssh_port' => 'string',
        'admin_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'date_created' => 'datetime',
        'date_updated' => 'datetime',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip_number' => 'required',
        'type_access' => 'required'
    ];

    
}
