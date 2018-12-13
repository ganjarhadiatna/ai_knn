<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'hasil_knn';

    function scopeGetAll($query, $k)
    {
    	return $this
    	->select(
    		'penerimaan_modal.nama_ukm',
    		'penerimaan_modal.lama_usaha',
    		'penerimaan_modal.jumlah_pekerja',
    		'penerimaan_modal.omzet',
    		'penerimaan_modal.jumlah_aset',
    		'penerimaan_modal.hasil_keputusan',
    		'hasil_knn.id_penerimaan_modal',
    		'hasil_knn.jarak'
    	)
    	->join('penerimaan_modal', 'penerimaan_modal.id_penerimaan_modal', '=', 'hasil_knn.id_penerimaan_modal')
    	->limit($k)
    	->orderBy('hasil_knn.jarak', 'asc')
    	->get();
    }
    function scopeRemove($query)
    {
    	return $this->delete();
    }
}
