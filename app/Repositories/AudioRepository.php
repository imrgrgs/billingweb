<?php

namespace App\Repositories;

use App\Models\Audio;
use App\Repositories\BaseRepository;

/**
 * Class AudioRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:35 pm UTC
*/

class AudioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aud_data',
        'aud_hora',
        'aud_assinante',
        'aud_destino',
        'aud_tempo',
        'aud_arquivo'
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
        return Audio::class;
    }
}
