<?php namespace SIMANTAP\Produksi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Produksi\Models\MasterProduksi;
use SIMANTAP\Produksi\Models\KomoditasProduksi as KomoditasProduksiModel;

class KomoditasProduksi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    protected $master_id;

    public $requiredPermissions = [
        'master-produksi' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SIMANTAP.Produksi', 'main-menu-item', 'side-menu-item');
    }

    public function index($master_id = null)
    {        
        $master = MasterProduksi::whereId($master_id)->first();
        $this->master_id = $master_id;
        $this->vars['master'] = $master;        

/*        $config = $this->makeConfig('$/simantap/produksi/models/komoditasproduksi/columns.yaml');
        $config->model = new KomoditasProduksiModel;
        $widget = $this->makeWidget('Backend\Widgets\Lists', $config);
        $widget->bindEvent('list.extendQueryBefore', function ($query) use ($master_id)  {
            return $this->listExtendQuery($query, $master_id);
        });
        $widget->bindToController();
        $this->vars['widget'] = $widget;*/
        $this->asExtension('ListController')->index();

    }

    public function listExtendQuery($query)
    {
        if($this->master_id)
            $query->where('master_id', $this->master_id);
    }
}
