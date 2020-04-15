<?php

namespace App\Repositories;

use App\Models\PublicidadeAudio;
use App\Repositories\BaseRepository;

/**
 * Class PublicidadeAudioRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:26 pm UTC
*/

class PublicidadeAudioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pub_id',
        'pbaud_seq',
        'pbaud_descricao',
        'pbaud_status',
        'pbaud_gingle_wav',
        'pbaud_tempo_gingle',
        'pbaud_checar_satisfacao',
        'pbaud_desvio_tipo',
        'pbaud_desvio_chamar'
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
        return PublicidadeAudio::class;
    }
}
