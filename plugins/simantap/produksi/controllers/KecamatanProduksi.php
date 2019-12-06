<?php namespace SIMANTAP\Produksi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Produksi\Models\KomoditasProduksi;

class KecamatanProduksi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    protected $komoditas_id;

    public $requiredPermissions = [
        'master-produksi' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SIMANTAP.Produksi', 'main-menu-item', 'side-menu-item');
        $this->addJs("/plugins/simantap/produksi/assets/js/custom.js", "1.0.0");
    }

    public function index($komoditas_id = null)
    {
        $this->komoditas_id = $komoditas_id;
        $komoditas = KomoditasProduksi::whereId($komoditas_id)->first();
        $this->vars['komoditas'] = $komoditas;        
        $this->asExtension('ListController')->index();

    }

    public function listExtendQuery($query)
    {
        if($this->komoditas_id)
            $query->where('komoditas_id', $this->komoditas_id);
    }
}
