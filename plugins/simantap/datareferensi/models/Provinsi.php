<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Provinsi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_provinsi';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'id'                  => 'required|numeric',
        'name'                  => 'required'
    ];

    /**
     * @var array relations
     */
    public $hasMany = [
        'kabupaten'  => [
            'SIMANTAP\Datareferensi\Models\Kabupaten',
            'table' => 'simantap_datareferensi_kabupaten',
            'delete' => true
        ]
    ];
}
