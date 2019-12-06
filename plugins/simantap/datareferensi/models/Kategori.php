<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Kategori extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_kategori';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'id'                  => 'required|numeric',
        'nm_kategori'                  => 'required'
    ];

    /**
     * @var array relations
     */
    public $hasMany = [
        'indikator'  => [
            'SIMANTAP\Datareferensi\Models\Indikator',
            'table' => 'simantap_datareferensi_indikator',
            'delete' => true
        ],
        'komoditas'  => [
            'SIMANTAP\Datareferensi\Models\Komoditas',
            'table' => 'simantap_datareferensi_komoditas',
            'delete' => true
        ]
    ];
}
