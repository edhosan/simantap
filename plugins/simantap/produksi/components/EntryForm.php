<?php namespace SIMANTAP\Produksi\Components;

use Cms\Classes\ComponentBase;
use SIMANTAP\Produksi\Controllers\MasterProduksi as EntryController;
use SIMANTAP\Produksi\Models\MasterProduksi as Model;

class EntryForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'EntryForm Component',
            'description' => 'Backend form used in the front-end'
        ];
    }

    public function onRun()
    {
        // Build a back-end form with the context of 'frontend'
        $formController = new EntryController();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Append the missing style file so that our front-end forms would look
        // just like back-end
        $this->addCss('/modules/backend/assets/css/controls.css', 'core');
    }

    public function onSave()
    {
        return ['error' => Entry::create(post('Entry'))];
    }

}
