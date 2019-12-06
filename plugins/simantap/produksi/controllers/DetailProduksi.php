<?php namespace SIMANTAP\Produksi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Produksi\Models\MasterProduksi;

class DetailProduksi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
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
        $this->master_id = $master_id;
        $master = MasterProduksi::whereId($this->master_id)->first();
        $this->vars['master'] = $master;
        $this->asExtension('ListController')->index();

    }

    public function listExtendQuery($query)
    {
        if($this->master_id)
            $query->where('master_id', $this->master_id);
    }
}
