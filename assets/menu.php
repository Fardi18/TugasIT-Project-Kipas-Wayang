<?php



/**
 * 
 */
class Test{
// variable
   public $kode_kelas = array();
   public $sks = array();
   public $kode_dosen = array(); 
   public $kode_matkul = array();
   public $plot_kelas = array();

   public $kode_hari = array(); 
   public $kode_jam = array();
   public $kode_ruangan = array(); 

   private $populasi = 10;
   private $individu = array(array(array()));


   
// end variable

   // function Data
   public function Data(){

    include '../vendors/koneksi.php';

    // data polot kelas
     $sql_kelas =  "SELECT a.kode_kelas, a.matakuliah, a.dosen, b.jml_sks FROM plot_kelas as a, matakuliah as b where a.matakuliah = b.kode_matkul;";

        $execute_kelas = $db_con->query($sql_kelas) or die (mysql_error());
        
        $ekse_kelas = $execute_kelas->fetchAll(PDO::FETCH_OBJ);
  
        $i = 0;
        foreach ( $ekse_kelas as $data ) {

            $this->kode_kelas[$i]     = intval($data->kode_kelas);
            $this->sks[$i]          = intval($data->jml_sks);
            $this->kode_dosen[$i]        = intval($data->dosen);
            $this->kode_matkul[$i]     = $data->matakuliah;
            $i++;

        }
        // end data plot


           
        // data jam
        $sql_jam=  "SELECT * FROM jam;";
        $execute_jam = $db_con->query($sql_jam) or die (mysql_error());
        
        $ekse_jam = $execute_jam->fetchAll(PDO::FETCH_OBJ);
  
        $i = 0;
        foreach ( $ekse_jam as $data ) {

            $this->kode_jam[$i]     = intval($data->kode_jam);
            $i++;

        }
        // end data jam


        // data hari
        $sql_hari=  "SELECT * FROM hari;";
        $execute_hari = $db_con->query($sql_hari) or die (mysql_error());
        
        $ekse_hari = $execute_hari->fetchAll(PDO::FETCH_OBJ);
  
        $i = 0;
        foreach ( $ekse_hari as $data ) {

            $this->kode_hari[$i]     = intval($data->kode_hari);
            $i++;

        }
        // end data hari


        // end data ruang
        $sql_ruangan=  "SELECT * FROM ruang_belajar;";
        $execute_ruangan = $db_con->query($sql_ruangan) or die (mysql_error());
        
        $ekse_ruangan = $execute_ruangan->fetchAll(PDO::FETCH_OBJ);
  
        $i = 0;
        foreach ( $ekse_ruangan as $data ) {

            $this->kode_ruangan[$i] = $data->kode_ruangan;
            $i++;

        }
        // end data ruang

            // $this->plot_kelas[0] = $this->kode_kelas;
            // $this->plot_kelas[1] = $this->sks;
            // $this->plot_kelas[2] = $this->kode_dosen;
            // $this->plot_kelas[3] = $this->kode_matkul;

            // echo $this->plot_kelas[0];
            // echo $this->plot_kelas[1];
            // echo $this->plot_kelas[2];
            // echo $this->plot_kelas[3];


        // $this->plot_kelas[0] = $this->kode_jam;
        // echo $this->kode_ruangan;
        // echo $this->kode_hari;
        // echo $this->kode_jam;

   }
   // end function data


   // function inisialisasi
    public function Inisialisai()
    {
        
        $jumlah_pengampu = count($this->kode_kelas);        
        $jumlah_jam = count($this->kode_jam);
        $jumlah_hari = count($this->kode_hari);
        $jumlah_ruang = count($this->kode_ruangan);
        
        for ($i = 0; $i < $this->populasi; $i++) {
            
            for ($j = 0; $j < $jumlah_pengampu; $j++) {
                
                $sks = $this->sks[$j];
                
                $this->individu[$i][$j][0] = $j;
                
                // Penentuan jam secara acak ketika 1 sks 
                if ($sks == 1) {
                    $this->individu[$i][$j][1] = mt_rand(0,  $jumlah_jam - 1);
                }
                
                // Penentuan jam secara acak ketika 2 sks 
                if ($sks == 2) {
                    $this->individu[$i][$j][1] = mt_rand(0, ($jumlah_jam - 1) - 1);
                }
                
                // Penentuan jam secara acak ketika 3 sks
                if ($sks == 3) {
                    $this->individu[$i][$j][1] = mt_rand(0, ($jumlah_jam - 1) - 2);
                }
                
                // Penentuan jam secara acak ketika 4 sks
                if ($sks == 4) {
                    $this->individu[$i][$j][1] = mt_rand(0, ($jumlah_jam - 1) - 3);
                }
                
                $this->individu[$i][$j][2] = mt_rand(0, $jumlah_hari - 1); // Penentuan hari secara acak 
                $this->individu[$i][$j][3] = mt_rand(0, $jumlah_ruang - 1);

                   
                
            }

        }
                    echo $this->individu[$i][$j][0];
                    echo $this->individu[$i][$j][1];
                    echo $this->individu[$i][$j][2];
                    echo $this->individu[$i][$j][3];
   
    }
    // end function inisialisasi

        private function CekFitness($indv)
    {
        $penalty = 0;
        
        $jumlah_pengampu = count($this->pengampu);
        
             for ($i = 0; $i < $jumlah_pengampu; $i++)
        {
          
          $sks = intval($this->sks[$i]);
          
          $jam_a = intval($this->individu[$indv][$i][1]);
          $hari_a = intval($this->individu[$indv][$i][2]);
          $ruang_a = intval($this->individu[$indv][$i][3]);
          $dosen_a = intval($this->kode_dosen[$i]);        
          
          
            for ($j = 0; $j < $jumlah_pengampu; $j++) {                 
              
                $jam_b = intval($this->individu[$indv][$j][1]);
                $hari_b = intval($this->individu[$indv][$j][2]);
                $ruang_b = intval($this->individu[$indv][$j][3]);
                $dosen_b = intval($this->kode_dosen[$j]);
                  
                  
                //1.bentrok ruang dan waktu dan 3.bentrok dosen
                
                //ketika pemasaran matakuliah sama, maka langsung ke perulangan berikutnya
                if ($i == $j)
                    continue;
                
                //#region Bentrok Ruang dan Waktu
                //Ketika jam,hari dan ruangnya sama, maka penalty + satu
                if ($jam_a == $jam_b &&
                    $hari_a == $hari_b &&
                    $ruang_a == $ruang_b)
                {
                    $penalty += 1;
                }
                
                //Ketika sks  = 2, 
                //hari dan ruang sama, dan 
                //jam kedua sama dengan jam pertama matakuliah yang lain, maka penalty + 1
                if ($sks >= 2)
                {
                    if ($jam_a + 1 == $jam_b &&
                        $hari_a == $hari_b &&
                        $ruang_a == $ruang_b)
                    {
                        $penalty += 1;
                    }
                }
                
                
                //Ketika sks  = 3, 
                //hari dan ruang sama dan 
                //jam ketiga sama dengan jam pertama matakuliah yang lain, maka penalty + 1
                if ($sks >= 3) {
                    if ($jam_a + 2 == $jam_b &&
                        $hari_a == $hari_b &&
                        $ruang_a == $ruang_b)
                    {
                        $penalty += 1;
                    }
                }
                
                //Ketika sks  = 4, 
                //hari dan ruang sama dan 
                //jam ketiga sama dengan jam pertama matakuliah yang lain, maka penalty + 1
                if ($sks >= 4) {
                    if ($jam_a + 3 == $jam_b &&
                        $hari_a == $hari_b &&
                        $ruang_a == $ruang_b)
                    {
                        $penalty += 1;
                    }
                }
                
                //______________________BENTROK DOSEN
                if (
                //ketika jam sama
                    $jam_a == $jam_b && 
                //dan hari sama
                    $hari_a == $hari_b && 
                //dan dosennya sama
                    $dosen_a == $dosen_b)
                {
                  //maka...
                  $penalty += 1;
                }
                
                
                
                if ($sks >= 2) {
                    if (
                    //ketika jam sama
                      ($jam_a + 1) == $jam_b && 
                    //dan hari sama
                      $hari_a == $hari_b && 
                    //dan dosennya sama
                      $dosen_a == $dosen_b)
                    {
                      //maka...
                      $penalty += 1;
                    }
                }
                
                if ($sks >= 3) {
                    if (
                    //ketika jam sama
                      ($jam_a + 2) == $jam_b && 
                    //dan hari sama
                      $hari_a == $hari_b && 
                    //dan dosennya sama
                      $dosen_a == $dosen_b)
                    {
                      //maka...
                      $penalty += 1;
                    }
                }
                
                if ($sks >= 4) {
                    if (
                    //ketika jam sama
                      ($jam_a + 3) == $jam_b && 
                    //dan hari sama
                      $hari_a == $hari_b && 
                    //dan dosennya sama
                      $dosen_a == $dosen_b)
                    {
                      //maka...
                      $penalty += 1;
                    }
                }                
            }
        
        }      
        
        $fitness = floatval(1 / (1 + $penalty));   
        return $fitness;        
    }


     public function HitungFitness()
    {        
        for ($indv = 0; $indv < $this->populasi; $indv++)
        {            
            $fitness[$indv] = $this->CekFitness($indv);            
        }
        
        return $fitness;
    }



      public function Seleksi($fitness)
    {
        $jumlah = 0;
        $rank   = array();
        
        
        for ($i = 0; $i < $this->populasi; $i++)
        {
          //proses ranking berdasarkan nilai fitness
            $rank[$i] = 1;
            for ($j = 0; $j < $this->populasi; $j++)
            {
              //ketika nilai fitness jadwal sekarang lebih dari nilai fitness jadwal yang lain,
              //ranking + 1;
              //if (i == j) continue;
                
                $fitnessA = floatval($fitness[$i]);
                $fitnessB = floatval($fitness[$j]);
                
                if ( $fitnessA > $fitnessB)
                {
                    $rank[$i] += 1;                    
                }
            }
            
            $jumlah += $rank[$i];
        }
        
        $jumlah_rank = count($rank);
        for ($i = 0; $i < $this->populasi; $i++)
        {
            //proses seleksi berdasarkan ranking yang telah dibuat
            //int nexRandom = random.Next(1, jumlah);
            //random = new Random(nexRandom);
            $target = mt_rand(0, $jumlah - 1);           
          
            $cek    = 0;
            for ($j = 0; $j < $jumlah_rank; $j++) {
                $cek += $rank[$j];
                if (intval($cek) >= intval($target)) {
                    $this->induk[$i] = $j;
                    break;
                }
            }
        }
    }


      public function StartCrossOver()
    {
        $individu_baru = array(array(array()));
        $jumlah_pengampu = count($this->kode_kelas);
        
        for ($i = 0; $i < $this->populasi; $i += 2) //perulangan untuk jadwal yang terpilih
        {
            $b = 0;
            
            $cr = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
            
            //Two point crossover
            if (floatval($cr) < floatval($this->crossOver)) {
                //ketika nilai random kurang dari nilai probabilitas pertukaran
                //maka jadwal mengalami prtukaran
                
                $a = mt_rand(0, $jumlah_pengampu - 2);
                while ($b <= $a) {
                    $b = mt_rand(0, $jumlah_pengampu - 1);
                }
                
                
                //var_dump($this->induk);
                
                
                //penentuan jadwal baru dari awal sampai titik pertama
                for ($j = 0; $j < $a; $j++) {
                    for ($k = 0; $k < 4; $k++) {                        
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
                
                //Penentuan jadwal baru dai titik pertama sampai titik kedua
                for ($j = $a; $j < $b; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i + 1]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i]][$j][$k];
                    }
                }
                
                //penentuan jadwal baru dari titik kedua sampai akhir
                for ($j = $b; $j < $jumlah_pengampu; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
            } else { //Ketika nilai random lebih dari nilai probabilitas pertukaran, maka jadwal baru sama dengan jadwal terpilih
                for ($j = 0; $j < $jumlah_pengampu; $j++) {
                    for ($k = 0; $k < 4; $k++) {
                        $individu_baru[$i][$j][$k]     = $this->individu[$this->induk[$i]][$j][$k];
                        $individu_baru[$i + 1][$j][$k] = $this->individu[$this->induk[$i + 1]][$j][$k];
                    }
                }
            }
        }
        
        $jumlah_pengampu = count($this->pengampu);
        
        for ($i = 0; $i < $this->populasi; $i += 2) {
          for ($j = 0; $j < $jumlah_pengampu ; $j++) {
            for ($k = 0; $k < 4; $k++) {
                $this->individu[$i][$j][$k] = $individu_baru[$i][$j][$k];
                $this->individu[$i + 1][$j][$k] = $individu_baru[$i + 1][$j][$k];
            }
          }
        }
    }
    
    public function Mutasi()
    {
        $fitness = array();
        //proses perandoman atau penggantian komponen untuk tiap jadwal baru
        $r       = mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
        $jumlah_pengampu = count($this->kode_kelas);
        $jumlah_jam = count($this->kode_jam);
        $jumlah_hari = count($this->kode_hari);
        $jumlah_ruangan = count($this->kode_ruangan);
        
        for ($i = 0; $i < $this->populasi; $i++) {
            //Ketika nilai random kurang dari nilai probalitas Mutasi, 
            //maka terjadi penggantian komponen
            
            if ($r < $this->mutasi) {
                //Penentuan pada matakuliah dan kelas yang mana yang akan dirandomkan atau diganti
                $krom = mt_rand(0, $jumlah_pengampu - 1);
                
                $j = intval($this->sks[$krom]);
                
                switch ($j) {
                    case 1:
                        $this->individu[$i][$krom][1] = mt_rand(0, $jumlah_jam - 1);
                        break;
                    case 2:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 1);
                        break;
                    case 3:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 2);
                        break;
                    case 4:
                        $this->individu[$i][$krom][1] = mt_rand(0, ($jumlah_jam - 1) - 3);
                        break;
                }
                //Proses penggantian hari
                $this->individu[$i][$krom][2] = mt_rand(0, $jumlah_hari - 1);
                
                //proses penggantian ruang               
                $this->individu[$i][$krom][3] = mt_rand(0, $jumlah_ruangan - 1);
               
                
                
            }
            
            $fitness[$i] = $this->CekFitness($i);
        }
        return $fitness;
    }


    public function GetIndividu($indv)
    {
        //return individu;
        
        //int[,] individu_solusi = new int[mata_kuliah.Length, 4];
        $individu_solusi = array(array());
        
        for ($j = 0; $j < count($this->kode_kelas); $j++)
        {
            $individu_solusi[$j][0] = intval($this->kode_kelas[$this->individu[$indv][$j][0]]);
            $individu_solusi[$j][1] = intval($this->kode_jam[$this->individu[$indv][$j][1]]);
            $individu_solusi[$j][2] = intval($this->kode_hari[$this->individu[$indv][$j][2]]);                        
            $individu_solusi[$j][3] = intval($this->individu[$indv][$j][3]);            
        }
        
        return $individu_solusi;
    }



   // end class
}

$a = new Test;


        ?>

        <p>Test <?= $a->Inisialisai() ?></p>