<?php

namespace App\Repositories;

use App\Models\CitaDetalle;
use App\Repositories\BaseRepository;

/**
 * Class CitaDetalleRepository
 * @package App\Repositories
 * @version October 5, 2021, 2:14 am UTC
*/

class CitaDetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cita'
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
        return CitaDetalle::class;
    }
}
