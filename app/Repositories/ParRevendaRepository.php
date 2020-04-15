<?php

namespace App\Repositories;

use App\Models\ParRevenda;
use App\Repositories\BaseRepository;

/**
 * Class ParRevendaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:21 pm UTC
*/

class ParRevendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ParRevenda::class;
    }
}
