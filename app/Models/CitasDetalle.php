<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CitasDetalle
 * @package App\Models
 * @version October 5, 2021, 2:32 am UTC
 *
 * @property string $id_cita
 */
class CitasDetalle extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'citas_detalle';
    protected $primaryKey= 'idcitas_detalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas_detalle' => 'integer',
        'id_cita' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cita' => 'nullable|string|max:45'
    ];

    
}
