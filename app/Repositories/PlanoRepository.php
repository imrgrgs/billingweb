<?php

namespace App\Repositories;

use App\Models\Plano;
use App\Repositories\BaseRepository;

/**
 * Class PlanoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:22 pm UTC
*/

class PlanoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pln_descricao',
        'pln_adesao',
        'pln_mensalidade',
        'pln_limite_fixo',
        'pln_limite_celular',
        'pln_status',
        'pln_detalhes',
        'pln_geral',
        'pln_imagem1',
        'pln_imagem2',
        'pln_imagem3',
        'pln_extensao1',
        'pln_extensao2',
        'pln_extensao3',
        'pln_vlrfixo_excedente',
        'pln_vlrcel_excedente',
        'pln_representante_id',
        'pln_sem_limites',
        'pln_bloquear_atingiu_franquia',
        'pln_tabespecial_id'
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
        return Plano::class;
    }
}
