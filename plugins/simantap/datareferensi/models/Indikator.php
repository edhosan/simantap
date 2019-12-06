<?php namespace SIMANTAP\Datareferensi\Models;

use Model;

/**
 * Model
 */
class Indikator extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_datareferensi_indikator';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'kategori_id'                  => 'required',
        'nm_indikator'                  => 'required'
    ];

    /**
     * @var array relations
     * $category = Category::find([3, 4]);
     * $product->categories()->attach($category);

    */
    public $belongsTo = [
        'kategori'  => [
            'SIMANTAP\Datareferensi\Models\Kategori',
            'table' => 'simantap_datareferensi_kategori'
        ]
    ];

    public $belongsToMany = [
        'komoditas'  => [
            'SIMANTAP\Datareferensi\Models\Komoditas',
            'table' => 'simantap_datareferensi_indikator_komoditas'
        ]
    ];

    public $hasMany = [
        'master'  => [
            'SIMANTAP\Produksi\Models\MasterProduksi',
            'table' => 'simantap_produksi_master',
            'delete' => true
        ],
        'komoditas_produksi'  => [
            'SIMANTAP\Produksi\Models\KomoditasProduksi',
            'table' => 'simantap_produksi_komoditas',
            'delete' => true
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
