<?php namespace SIMANTAP\Produksi\Models;

use Model;

/**
 * Model
 */
class KampungProduksi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_produksi_kampung';

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
            'SIMANTAP\Produksi\Models\KecamatanProduksi',
            'table' => 'simantap_produksi_kecamatan'
        ],
        'kampung'  => [
            'SIMANTAP\Datareferensi\Models\Kampung',
            'table' => 'simantap_datareferensi_kampung'
        ]
    ];
}
