<?php namespace SIMANTAP\Produksi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Produksi\Models\KecamatanProduksi;
use SIMANTAP\Datareferensi\Models\Bulan;

class KampungProduksi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',  'Backend\Behaviors\FormController',      'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    protected $kecamatan_id;

    public $requiredPermissions = [
        'master-produksi' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SIMANTAP.Produksi', 'main-menu-item', 'side-menu-item');
        $this->addJs("/plugins/simantap/produksi/assets/js/custom.js", "1.0.0");
    }

    public function index($kecamatan_id = null)
    {
        $this->kecamatan_id = $kecamatan_id;
        $kecamatan = KecamatanProduksi::whereId($kecamatan_id)->first();
        $this->vars['kecamatan'] = $kecamatan;   
        $this->vars['bulan'] =  Bulan::all();    
        $this->asExtension('ListController')->index();

    }

    public function listExtendQuery($query)
    {
        if($this->kecamatan_id)
            $query->where('kecamatan_id', $this->kecamatan_id);
    }
}
