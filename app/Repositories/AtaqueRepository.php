<?php

namespace App\Repositories;

use App\Models\Ataque;
use App\Repositories\BaseRepository;

/**
 * Class AtaqueRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:35 pm UTC
*/

class AtaqueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ata_data',
        'ata_hora',
        'ata_login',
        'ata_ip',
        'ata_temp'
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
        return Ataque::class;
    }
}
