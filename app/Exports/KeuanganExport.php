<?php

namespace App\Exports;

use App\Keuangan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KeuanganExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($hasil,$total,$kat){
		$this->hasil = $hasil;
		$this->total = $total;
		$this->kat = $kat;
	}

	public function view(): View{
		return view('exports.cetakkeuangan',[
			'hasil' => $this->hasil,
			'total' => $this->total,
			'kat' => $this->kat
		]);		
		
	}
}
