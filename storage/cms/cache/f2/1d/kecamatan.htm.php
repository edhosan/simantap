<?php 
use SIMANTAP\Produksi\Models\KomoditasProduksi;
class Cms5deb8e58ba1b9849276406_44f57a467e92536b19afc5ca0dbaf7baClass extends Cms\Classes\PageCode
{
public function onStart()
{
    $komoditas_produksi = KomoditasProduksi::with('kecamatan_produksi')->whereId($this->param('komoditas_id'))->first();
    $this['komoditas_produksi'] = $komoditas_produksi;
    $this->page->title = "Komoditas ". $komoditas_produksi->komoditas->nm_komoditi .' '. $komoditas_produksi->master->tahun;
}
}
