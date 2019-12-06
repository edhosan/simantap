<?php namespace SIMANTAP\Produksi\Models;

use Model;

/**
 * Model
 */
class NilaiProduksi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_produksi_nilai';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'nilai' => "required|regex:/^\d*(\.\d{1,2})?$/"
    ];

    /**
     * @var array relations
    */
    public $belongsTo = [
        'bulan'  => [
            'SIMANTAP\Datareferensi\Models\Bulan',
            'table' => 'simantap_datareferensi_bulan'
        ]
    ];
}
