<?php namespace SIMANTAP\Datareferensi\Controllers;

use Illuminate\Support\Facades\Input;
use Backend\Classes\Controller;
use BackendMenu;
use SIMANTAP\Datareferensi\Models\Kategori as KategoriModel;
use Request;
use Flash;

class Kategori extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    //public $listConfig = 'config_list.yaml';
    public $listConfig = [
        'list' => 'config_list.yaml',
        'trashed' => 'config_trashed.yaml'
    ];
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SIMANTAP.Datareferensi', 'main-menu-item', 'side-menu-item');
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
        KategoriModel::onlyTrashed()->whereIn('id', $checked)->forceDelete();

        Flash::success('Data berhasil dihapus permanent!');       
            
        return $this->listRefresh('trashed');
    }

    public function trashed_onRestore()
    {
        $checked = Request::input('checked',[]);
        KategoriModel::onlyTrashed()->whereIn('id', $checked)->restore();

        Flash::success('Data berhasil dikembalikan!');       
            
        return $this->listRefresh('trashed');
    }

}
