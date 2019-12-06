<?php namespace SIMANTAP\Produksi\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Produksi\Models\KampungProduksi;
use SIMANTAP\Produksi\Models\NilaiProduksi as NilaiModel;

class NilaiProduksi extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',   'Backend\Behaviors\FormController',     'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $formConfig = 'config_form.yaml';
    protected $kampung_id;

    public $requiredPermissions = [
        'master-produksi' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SIMANTAP.Produksi', 'main-menu-item', 'side-menu-item');
        $this->addJs("/plugins/simantap/produksi/assets/js/custom.js", "1.0.0");
    }

    public function index($kampung_id = null)
    {
        $this->kampung_id = $kampung_id;
        $kampung = KampungProduksi::whereId($kampung_id)->first();
        $this->vars['kampung'] = $kampung;       
        $this->asExtension('ListController')->index();

    }

    public function listExtendQuery($query)
    {
        if($this->kampung_id)
            $query->where('kampung_id', $this->kampung_id);
    }

    public function onUpdate()
    {
        $this->asExtension('FormController')->update_onSave(post('record_id'));
        return ['success' => true, 'message' => 'Data berhasil diubah !!'];
    }

    public function onUpdateForm()
    {
        $this->asExtension('FormController')->update(post('record_id'));
        $this->vars['recordId'] = post('record_id');
        $this->vars['kampungId'] = post('kampung_id');
        return $this->makePartial('update_form');
    }
}
