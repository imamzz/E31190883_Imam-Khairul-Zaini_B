<?php 
// Declare class
class kendaraan {
	// prropreties
	public $jenis_kendaraan;
    public $jumlah_roda;
	public $merk;
    public $bahan_bakar;
    public $harga;
    public $tahun_pembuatan;

    public function subsidiBBM()
    {
        if ($this->bahan_bakar=="Premium" && $this->tahun_pembuatan<2005 ){
            return  "Ya";
        }else{
            return "Tidak";
        }
    }

    public function hargaSecond()
    {
        if ($this->tahun_pembuatan>2010){
            $second = $this->harga-($this->harga*(20/100));
            return $second;
        }
        elseif ($this->tahun_pembuatan>=2005 && $this->tahun_pembuatan<=2010){
            $second = $this->harga-($this->harga*(30/100));
            return $second;
        }
        elseif ($this->tahun_pembuatan<2005){
            $second = $this->harga-($this->harga*(40/100));
            return $second;
        }
    }

}
    $kendaraan1 = new kendaraan();
    $kendaraan2 = new kendaraan();
    $kendaraan3 = new kendaraan();
    
    $kendaraan1 -> jenis_kendaraan = 'Mobil';
    $kendaraan1 -> jumlah_roda = '4';
	$kendaraan1 -> merk = 'Honda';
    $kendaraan1 -> bahan_bakar = 'Premium';
    $kendaraan1 -> harga = '50000000';
    $kendaraan1 -> tahun_pembuatan = '2004';

    $kendaraan2 -> jenis_kendaraan = 'Motor';
    $kendaraan2 -> jumlah_roda = '2';
	$kendaraan2 -> merk = 'Yamaha';
    $kendaraan2 -> bahan_bakar = 'Pertalite';
    $kendaraan2 -> harga = '24000000';
    $kendaraan2 -> tahun_pembuatan = '2012';

    $kendaraan3 -> jenis_kendaraan = 'Mobil';
    $kendaraan3 -> jumlah_roda = '4';
	$kendaraan3 -> merk = 'Honda';
    $kendaraan3 -> bahan_bakar = 'Pertamax';
    $kendaraan3 -> harga = '150000000';
    $kendaraan3 -> tahun_pembuatan = '2008';

    echo "Kendaraan 1";
    echo "<br />";
    echo "Subsidi = ".$kendaraan1->subsidiBBM();
    echo "<br />";
    echo "Harga second = ".$kendaraan1->hargaSecond();
    echo "<hr />";

    echo "Kendaraan 2";
    echo "<br />";
    echo "Subsidi = ".$kendaraan2->subsidiBBM();
    echo "<br />";
    echo "Harga second = ".$kendaraan2->hargaSecond();
    echo "<hr />";

    echo "Kendaraan 3";
    echo "<br />";
    echo "Subsidi = ".$kendaraan3->subsidiBBM();
    echo "<br />";
    echo "Harga second = ".$kendaraan3->hargaSecond();
    echo "<hr />";
 ?>