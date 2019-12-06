<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Kabupaten extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_kabupaten';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array relations
     */
    public $belongsTo = [
        'provinsi'  => [
            'SIMANTAP\Datareferensi\Models\Provinsi',
            'table' => 'simantap_datareferensi_provinsi'
        ]
    ];

    public $hasMany = [
        'kecamatan'  => [
            'SIMANTAP\Datareferensi\Models\Kecamatan',
            'table' => 'simantap_datareferensi_kecamatan',
            'delete' => true
        ]
    ];

    /**
     * Function get provinsi
     */
    public function getProvinsiIdOptions()
    {
        return Provinsi::lists('name', 'id');
    }



}
