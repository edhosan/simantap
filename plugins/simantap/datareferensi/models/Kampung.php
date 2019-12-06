<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Kampung extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_kampung';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'id'                  => 'required',
        'kecamatan_id'                  => 'required',
        'name'                  => 'required'
    ];

    /**
     * @var array relations
     */
    public $belongsTo = [
        'kecamatan'  => [
            'SIMANTAP\Datareferensi\Models\Kecamatan',
            'table' => 'simantap_datareferensi_kecamatan'
        ]
    ];

     /**
     * Function get Kecamatan List
     */
    public function getKecamatanIdOptions()
    {
        return Kecamatan::lists('name', 'id');
    }
}
