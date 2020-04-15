<?php

namespace App\Repositories;

use App\Models\DiscadoxVoip;
use App\Repositories\BaseRepository;

/**
 * Class DiscadoxVoipRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:08 pm UTC
*/

class DiscadoxVoipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dis_numerodiscado',
        'dis_login_voip',
        'dis_representante_id',
        'dis_fornecedor_id'
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
        return DiscadoxVoip::class;
    }
}
