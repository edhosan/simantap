<?php namespace SIMANTAP\Produksi\Models;

use Model;

/**
 * Model
 */
class KomoditasProduksi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_produksi_komoditas';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array relations
    */
    public $belongsTo = [
        'master'  => [
            'SIMANTAP\Produksi\Models\MasterProduksi',
            'table' => 'simantap_produksi_master'
        ],
        'indikator'  => [
            'SIMANTAP\Datareferensi\Models\Indikator',
            'table' => 'simantap_datareferensi_indikator'
        ],
        'komoditas'  => [
            'SIMANTAP\Datareferensi\Models\Komoditas',
            'table' => 'simantap_datareferensi_komoditas'
        ]
    ];

    public $hasMany = [

    ];
}
