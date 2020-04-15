<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ParRevenda
 * @package App\Models
 * @version April 15, 2020, 12:21 pm UTC
 *
 * @property integer prv_representante_id
 * @property number prv_reais_inclusao
 * @property number prv_perc_acrescimo
 * @property string prv_emitir_boleto
 * @property number prv_vlr_avisar
 * @property number prv_reais_gratis
 * @property string prv_avisar_pospagos
 * @property integer prv_dias_creditos_vencem
 * @property integer prv_tempo_ligacao
 * @property string prv_linkassinantesonline
 * @property string prv_tocar_anuncios
 * @property string prv_brpay
 * @property string prv_webcallback
 * @property string prv_obriga_documento
 * @property integer prv_tempo_ligacao_cel
 * @property number prv_taxa_conexao
 * @property number prv_taxa_desconexao
 * @property string prv_assinante_incluir_ass
 * @property number prv_perc_assin_inclui_ass
 * @property string prv_transf_creditos
 */
class ParRevenda extends Model
{
    use SoftDeletes;

    public $table = 'parrevenda';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'prv_representante_id',
        'prv_reais_inclusao',
        'prv_perc_acrescimo',
        'prv_emitir_boleto',
        'prv_vlr_avisar',
        'prv_reais_gratis',
        'prv_avisar_pospagos',
        'prv_dias_creditos_vencem',
        'prv_tempo_ligacao',
        'prv_linkassinantesonline',
        'prv_tocar_anuncios',
        'prv_brpay',
        'prv_webcallback',
        'prv_obriga_documento',
        'prv_tempo_ligacao_cel',
        'prv_taxa_conexao',
        'prv_taxa_desconexao',
        'prv_assinante_incluir_ass',
        'prv_perc_assin_inclui_ass',
        'prv_transf_creditos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'prv_representante_id' => 'integer',
        'prv_reais_inclusao' => 'float',
        'prv_perc_acrescimo' => 'float',
        'prv_emitir_boleto' => 'string',
        'prv_vlr_avisar' => 'float',
        'prv_reais_gratis' => 'float',
        'prv_avisar_pospagos' => 'string',
        'prv_dias_creditos_vencem' => 'integer',
        'prv_tempo_ligacao' => 'integer',
        'prv_linkassinantesonline' => 'string',
        'prv_tocar_anuncios' => 'string',
        'prv_brpay' => 'string',
        'prv_webcallback' => 'string',
        'prv_obriga_documento' => 'string',
        'prv_tempo_ligacao_cel' => 'integer',
        'prv_taxa_conexao' => 'float',
        'prv_taxa_desconexao' => 'float',
        'prv_assinante_incluir_ass' => 'string',
        'prv_perc_assin_inclui_ass' => 'float',
        'prv_transf_creditos' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'prv_representante_id' => 'required',
        'prv_vlr_avisar' => 'required',
        'prv_dias_creditos_vencem' => 'required',
        'prv_tempo_ligacao' => 'required',
        'prv_linkassinantesonline' => 'required',
        'prv_tocar_anuncios' => 'required',
        'prv_brpay' => 'required',
        'prv_webcallback' => 'required',
        'prv_obriga_documento' => 'required',
        'prv_tempo_ligacao_cel' => 'required',
        'prv_taxa_conexao' => 'required',
        'prv_taxa_desconexao' => 'required',
        'prv_assinante_incluir_ass' => 'required',
        'prv_perc_assin_inclui_ass' => 'required',
        'prv_transf_creditos' => 'required'
    ];

    
}
