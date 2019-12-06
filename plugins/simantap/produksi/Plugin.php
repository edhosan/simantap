<?php namespace SIMANTAP\Produksi;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['SIMANTAP.Datareferensi'];

    public function registerComponents()
    {
        return [
            '\SIMANTAP\Produksi\Components\EntryForm' => 'entryForm',
            '\SIMANTAP\Produksi\Components\FormDataProduksi' => 'filterDataProduksi'
        ];
    }

    public function registerSettings()
    {
    }
}
