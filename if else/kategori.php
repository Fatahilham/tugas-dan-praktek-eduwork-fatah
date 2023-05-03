<?php 
    if(isset($_GET['proses'])){
        $tbp = $_GET['tb'];
        $bb = $_GET['bb'];
        $nama = $_GET['nama'];

        $tb = $tbp/100;
        $hitung = $bb / ($tb * $tb);
        if($hitung <= 18.4){
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            "Halo, '.$nama.'. Nilai BMI anda adalah '.number_format($hitung,1).', anda termasuk Kurus "
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
         </div>
         ';
        }elseif($hitung <= 25){
          echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              "Halo, '.$nama.'. Nilai BMI anda adalah '.number_format($hitung,1).', anda termasuk Sedang "
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
           </div>
           ';
        }elseif($hitung <= 27){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                "Halo, '.$nama.'. Nilai BMI anda adalah '.number_format($hitung,1).', anda termasuk Gemuk "
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }elseif($hitung > 27 ){
            echo'
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Tinggi Badan: '.$tbp.' Cm<br>
                Berat Badan : '.$bb.' Kg<br>
                BMI         : '.number_format($hitung,1).'<br>
                Keterangan : Obesitas
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ';
        }
    }
