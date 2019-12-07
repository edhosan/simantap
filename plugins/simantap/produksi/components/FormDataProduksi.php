<?php namespace SIMANTAP\Produksi\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use SIMANTAP\Produksi\Controllers\MasterProduksi as MasterProduksi;
use SIMANTAP\Produksi\Models\MasterProduksi as MasterProduksiModel;
use SIMANTAP\Datareferensi\Models\Kategori;

class FormDataProduksi extends ComponentBase
{
    public $master_produksi;

    public function componentDetails()
    {
        return [
            'name'        => 'Filter Data Produksi Component',
            'description' => 'Form filter untuk menampilkan data produksi'
        ];
    }

    public function onRun()
    {
        $this->master_produksi = $this->getMasterProduksi();

        $this->addCss('/modules/backend/assets/css/controls.css', 'core');
        $this->addCss('/bower_components/select2/dist/css/select2.min.css');
        $this->addJs('/bower_components/select2/dist/js/select2.min.js');
    }

    public function onSave()
    {
        return ['error' => Entry::create(post('Entry'))];
    }

    public function getMasterProduksi()
    {
        return MasterProduksiModel::with('komoditas')->whereKategori_id(1)->get();
    }

}
