<?php namespace SIMANTAP\Produksi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Produksi\Models\MasterProduksi as MasterProduksiModel;
use SIMANTAP\Datareferensi\Models\Indikator as Indikator;
use SIMANTAP\Datareferensi\Models\Kecamatan as Kecamatan;
use SIMANTAP\Datareferensi\Models\Kampung as Kampung;
use SIMANTAP\Datareferensi\Models\Bulan as Bulan;
use SIMANTAP\Produksi\Models\KomoditasProduksi as KomoditasProduksi;
use SIMANTAP\Produksi\Models\KecamatanProduksi as KecamatanProduksi;
use SIMANTAP\Produksi\Models\KampungProduksi as KampungProduksi;
use SIMANTAP\Produksi\Models\NilaiProduksi as NilaiProduksi;
use Request;
use Flash;

class MasterProduksi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = [
        'list' => 'config_list.yaml',
        'trashed' => 'config_trashed.yaml'
    ];
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'master-produksi' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SIMANTAP.Produksi', 'main-menu-item', 'side-menu-item');
    }

    public function trashed()
    {
        $this->pageTitle = trans('simantap.datareferensi::lang.simantap.datareferensi.menu.recycle');
        $this->bodyClass = 'slim-container';
        $this->makeLists();
    }

    public function listExtendQuery($query, $definition)
    {
        if ($definition == 'trashed')
        {
            $query->onlyTrashed();
        }
    }

    public function trashed_onDelete()
    {
        $checked = Request::input('checked',[]);
        MasterProduksiModel::onlyTrashed()->whereIn('id', $checked)->forceDelete();

        Flash::success('Data berhasil dihapus permanent!');       
            
        return $this->listRefresh('trashed');
    }

    public function trashed_onRestore()
    {
        $checked = Request::input('checked',[]);
        MasterProduksiModel::onlyTrashed()->whereIn('id', $checked)->restore();

        Flash::success('Data berhasil dikembalikan!');       
            
        return $this->listRefresh('trashed');
    }

    public function formAfterSave($model)
    {
        $indikator = Indikator::whereId($model->indikator_id)->get();
        foreach($indikator as $indi)
        {
            $komoditas = $indi->komoditas()->get();
            foreach($komoditas as $item)
            {
                $komoditas_produksi = new KomoditasProduksi;
                $komoditas_produksi->master_id = $model->id;
                $komoditas_produksi->indikator_id = $indi->id;
                $komoditas_produksi->komoditas_id = $item->id;
                $komoditas_produksi->save();

                $kecamatan = Kecamatan::whereKabupaten_id('6405')->get();
                foreach($kecamatan as $kec)
                {
                    $master_kecamatan = new KecamatanProduksi;
                    $master_kecamatan->master_id = $model->id;
                    $master_kecamatan->komoditas_id = $komoditas_produksi->id;
                    $master_kecamatan->kecamatan_id = $kec->id;
                    $master_kecamatan->save();

                    $kampung = Kampung::whereKecamatan_id($kec->id)->get();
                    foreach($kampung as $kam)
                    {
                        $kampung_produksi = new KampungProduksi;
                        $kampung_produksi->master_id = $model->id;
                        $kampung_produksi->komoditas_id = $komoditas_produksi->id;
                        $kampung_produksi->kecamatan_id = $master_kecamatan->id;
                        $kampung_produksi->kampung_id = $kam->id;
                        $kampung_produksi->save();

                        $bulan = Bulan::all();
                        foreach($bulan as $b)
                        {
                            $nilai = new NilaiProduksi;
                            $nilai->kampung_id = $kampung_produksi->id;
                            $nilai->bulan_id = $b->id;
                            $nilai->nilai = 0;
                            $nilai->save();
                        }
                    }
                }
            }
        }
    }
}
