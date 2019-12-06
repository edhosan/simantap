<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Komoditas extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_komoditas';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'id'                  => 'required',
        'nm_komoditi'                  => 'required'
    ];

    /**
     * @var array relations
    */
    public $belongsTo = [
        'kategori'  => [
            'SIMANTAP\Datareferensi\Models\Kategori',
            'table' => 'simantap_datareferensi_kategori'
        ]
    ];

    public $belongsToMany = [
        'indikator'  => [
            'SIMANTAP\Datareferensi\Models\Indikator',
            'table' => 'simantap_datareferensi_indikator_komoditas'
        ]
    ];

   /**
     * Function get provinsi
     */
    public function getKategoriIdOptions()
    {
        return Kategori::lists('nm_kategori', 'id');
    }
}
