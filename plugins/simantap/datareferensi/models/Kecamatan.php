<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Kecamatan extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_kecamatan';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'id'                  => 'required',
        'kabupaten_id'                  => 'required',
        'name'                  => 'required'
    ];

    /**
     * @var array relations
     */
    public $belongsTo = [
        'kabupaten'  => [
            'SIMANTAP\Datareferensi\Models\Kabupaten',
            'table' => 'simantap_datareferensi_kabupaten'
        ]
    ];

    public $hasMany = [
        'kampung'  => [
            'SIMANTAP\Datareferensi\Models\Kampung',
            'table' => 'simantap_datareferensi_kampung',
            'delete' => true
        ],
        'kecamatan_master'  => [
            'SIMANTAP\Produksi\Models\KecamatanMaster',
            'table' => 'simantap_produksi_kecamatan',
            'delete' => true
        ]
    ];

    /**
     * Function get Kabupaten List
     */
    public function getKabupatenIdOptions()
    {
        return Kabupaten::lists('name', 'id');
    }
}
