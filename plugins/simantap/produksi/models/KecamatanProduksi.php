<?php namespace SIMANTAP\Produksi\Models;

use Model;

/**
 * Model
 */
class KecamatanProduksi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_produksi_kecamatan';

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
        'kecamatan'  => [
            'SIMANTAP\Datareferensi\Models\Kecamatan',
            'table' => 'simantap_datareferensi_kecamatan'
        ],
        'komoditas'  => [
            'SIMANTAP\Produksi\Models\KomoditasProduksi',
            'table' => 'simantap_produksi_komoditas'
        ]
    ];
}
