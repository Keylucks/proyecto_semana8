<?php

namespace App\Repositories;

use App\Models\Citas;
use App\Repositories\BaseRepository;

/**
 * Class CitasRepository
 * @package App\Repositories
 * @version October 5, 2021, 2:00 am UTC
*/

class CitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_paciente',
        'fecha_cita',
        'id_doctor'
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
        return Citas::class;
    }
}
