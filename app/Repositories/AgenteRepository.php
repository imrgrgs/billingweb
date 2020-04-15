<?php

namespace App\Repositories;

use App\Models\Agente;
use App\Repositories\BaseRepository;

/**
 * Class AgenteRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:33 pm UTC
*/

class AgenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'age_nome',
        'age_login',
        'age_senha',
        'age_comissao',
        'age_endereco',
        'age_bairro',
        'age_cidade',
        'age_estado',
        'age_cep',
        'age_email',
        'age_status',
        'age_data',
        'age_telefone1',
        'age_telefone2',
        'age_celular',
        'age_mudasenha',
        'age_representante_id',
        'age_linguagem',
        'age_incluir_users',
        'age_alterar_users',
        'age_acesso_cabines',
        'age_acesso_creditos',
        'age_tabelaespecial_id',
        'age_percacrescimo',
        'age_saldoreal',
        'age_atualizado',
        'age_tptarifacao',
        'age_com_ident_nome',
        'age_ligacoes_emcurso',
        'age_liberar_inicializar',
        'age_controle_lastro',
        'age_qtde_colunas',
        'age_como_revenda'
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
        return Agente::class;
    }
}
