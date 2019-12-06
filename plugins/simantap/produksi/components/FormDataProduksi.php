<?php namespace SIMANTAP\Produksi\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Http\Request;
use SIMANTAP\Produksi\Controllers\MasterProduksi as MasterProduksi;
use SIMANTAP\Produksi\Models\MasterProduksi as Model;
use SIMANTAP\Datareferensi\Models\Kategori;

class FormDataProduksi extends ComponentBase
{
    public $kategori;

    public function componentDetails()
    {
        return [
            'name'        => 'Filter Data Produksi Component',
            'description' => 'Form filter untuk menampilkan data produksi'
        ];
    }

    public function getKategori()
    {
        return Kategori::select('nm_kategori','id')->get();
    }

    public function onRun()
    {
        $this->kategori = $this->getKategori();
        $formController = new MasterProduksi();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Append the missing style file so that our front-end forms would look
        // just like back-end
        $this->addCss('/modules/backend/assets/css/controls.css', 'core');
        $this->addCss('/bower_components/select2/dist/css/select2.min.css');
        $this->addJs('/bower_components/select2/dist/js/select2.min.js');
    }

    public function onSave()
    {
        return ['error' => Entry::create(post('Entry'))];
    }

    public function kategoriSelect(Request $request)
    {
        $search = $request->search;

        $data = Kategori::where('nm_kategori','like','%'.$search.'%')->select('id','nm_kategori')->get();
        return response()->json($data);
    }

}
