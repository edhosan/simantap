<?php namespace SIMANTAP\Produksi\Models;

use Model;

use SIMANTAP\Datareferensi\Models\Kategori as Kategori;
use SIMANTAP\Datareferensi\Models\Indikator as Indikator;

/**
 * Model
 */
class MasterProduksi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simantap_produksi_master';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'kategori_id'                  => 'required',
        'indikator_id'                  => 'required',
        'tahun'                  => 'required'
    ];

    /**
     * @var array relations
    */
    public $belongsTo = [
        'kategori'  => [
            'SIMANTAP\Datareferensi\Models\Kategori',
            'table' => 'simantap_datareferensi_kategori'
        ],
        'indikator'  => [
            'SIMANTAP\Datareferensi\Models\Indikator',
            'table' => 'simantap_datareferensi_indikator'
        ]
    ];

    public $hasMany = [
        'komoditas'  => [
            'SIMANTAP\Produksi\Models\KomoditasProduksi',
            'table' => 'simantap_produksi_komoditas',
            'delete' => true
        ],
        'kecamatan_produksi' => [
            'SIMANTAP\Produksi\Models\KecamatanMaster',
            'table' => 'simantap_produksi_kecamatan',
            'delete' => true
        ]
    ];

    public function komoditas()
    {
        return $this->hasMany('SIMANTAP\Produksi\Models\KomoditasProduksi','master_id','id');
    }
    
/*    public static function boot()
    {
        parent::boot();

        static::deleting(function($masterproduksi) {
            $masterproduksi->komoditas->delete();
        });

        
    } */

    /**
     * Function get kategori
     */
    public function getKategoriIdOptions()
    {
        return Kategori::lists('nm_kategori', 'id');
    }

    public function getIndikatorIdOptions()
    {
        if(!empty($this->kategori_id))
        {
            return Indikator::whereKategori_id($this->kategori_id)->lists('nm_indikator', 'id');
        }
        else
        {
            return Indikator::lists('nm_indikator', 'id');
        }
    }
}
