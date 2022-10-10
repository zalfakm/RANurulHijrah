<?php

if(isset($_POST['submit'])){
        $namalengkap = $_POST['namalengkap'];
        $jk = $_POST['jeniskelamin'];
        $userid = $_POST['id'];

        $tempatlahir = $_POST['tempatlahir'];
        $tgllahir = $_POST['tgllahir'];
        $alamat = $_POST['alamat'];
        $provinsi = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];

        $agama = $_POST['agama'];
        $telepon = $_POST['telepon'];

        $ayahnik = $_POST['ayahnik'];
        $ayahnama = $_POST['ayahnama'];
        $ayahpendidikan = $_POST['ayahpendidikan'];
        $ayahpekerjaan = $_POST['ayahpekerjaan'];
        $ayahpenghasilan = $_POST['ayahpenghasilan'];
        $ayahtelepon = $_POST['ayahtelepon'];

        $ibunik = $_POST['ibunik'];
        $ibunama = $_POST['ibunama'];
        $ibupendidikan = $_POST['ibupendidikan'];
        $ibupekerjaan = $_POST['ibupekerjaan'];
        $ibupenghasilan = $_POST['ibupenghasilan'];
        $ibutelepon = $_POST['ibutelepon'];

        $walinik = $_POST['walinik'];
        $walinama = $_POST['walinama'];
        $walipekerjaan = $_POST['walipekerjaan'];
        $walitelepon = $_POST['walitelepon'];

            
                $submitdata = mysqli_query($conn,"insert into userdata (userid, namalengkap, jeniskelamin, tempatlahir, tanggallahir, alamat, provinsi, kabupaten, kecamatan, kelurahan, agama, telepon, ayahnik, ayahnama, ayahpendidikan, ayahpekerjaan, ayahpenghasilan, ayahtelepon, ibunik, ibunama, ibupendidikan, ibupekerjaan, ibupenghasilan, ibutelepon, walinik, walinama, walipekerjaan, walitelepon) 
                values('$userid','$namalengkap','$jk','$tempatlahir','$tgllahir','$alamat','$provinsi','$kota','$kecamatan','$kelurahan','$agama','$telepon','$ayahnik','$ayahnama','$ayahpendidikan','$ayahpekerjaan','$ayahpenghasilan','$ayahtelepon','$ibunik','$ibunama','$ibupendidikan','$ibupekerjaan','$ibupenghasilan','$ibutelepon','$walinik','$walinama','$walipekerjaan','$walitelepon')");
                
              if($submitdata){ 

                //berhasil bikin
                echo " <div class='alert alert-success'>
                        Berhasil submit data.
                    </div>
                    <meta http-equiv='refresh' content='2; url= daftar.php'/>  ";  

              }else{

                echo "<div class='alert alert-warning'>
                        Gagal submit data. Silakan coba lagi nanti.
                    </div>
                    <meta http-equiv='refresh' content='3; url= daftar.php'/> ";
                }
    };

    //kalau update
    if(isset($_POST['update'])){
      $id = $_POST['id'];
      $alamat = $_POST['alamat'];
      $telepon = $_POST['telepon'];
      $ayahpendidikan = $_POST['ayahpendidikan'];
        $ayahpekerjaan = $_POST['ayahpekerjaan'];
        $ayahpenghasilan = $_POST['ayahpenghasilan'];
        $ayahtelepon = $_POST['ayahtelepon'];
      $ibupendidikan = $_POST['ibupendidikan'];
        $ibupekerjaan = $_POST['ibupekerjaan'];
        $ibupenghasilan = $_POST['ibupenghasilan'];
        $ibutelepon = $_POST['ibutelepon'];

      $walinik = $_POST['walinik'];
        $walinama = $_POST['walinama'];
        $walipekerjaan = $_POST['walipekerjaan'];
        $walitelepon = $_POST['walitelepon'];

    $update = mysqli_query($conn,"update userdata
    set alamat='$alamat', telepon='$telepon', ayahpendidikan='$ayahpendidikan', ayahpenghasilan='$ayahpenghasilan', ayahpekerjaan='$ayahpekerjaan',
    ayahtelepon='$ayahtelepon', ibupendidikan='$ibupendidikan', ibupekerjaan='$ibupekerjaan', ibupenghasilan='$ibupenghasilan', ibutelepon='$ibutelepon',
    walinik='$walinik', walinama='$walinama', walipekerjaan='$walipekerjaan', walitelepon='$walitelepon' where userid='$id'");

    if($update){ 

      //berhasil bikin
      echo " <div class='alert alert-success'>
              Berhasil submit data.
          </div>
          <meta http-equiv='refresh' content='1; url= mydata.php'/>  ";  

    }else{

      echo "<div class='alert alert-warning'>
              Gagal submit data. Silakan coba lagi nanti.
          </div>
          <meta http-equiv='refresh' content='3; url= mydata.php'/> ";
      }

    };
   
//get timezone jkt
date_default_timezone_set("Asia/Bangkok");
$today = date("Y-m-d"); //now

    //kalau konfirmasi
    if(isset($_POST['ok'])){
      $id = $_POST['id'];
      $updateaja = mysqli_query($conn,"update userdata set status='Verified', tglkonfirmasi='$today' where userid='$id'");

      if($updateaja){
        //berhasil bikin
          echo " <div class='alert alert-success'>
          Berhasil submit data.
      </div>
      <meta http-equiv='refresh' content='1; url= mydata.php'/>  ";  
      } else {
        echo "<div class='alert alert-warning'>
              Gagal submit data. Silakan coba lagi nanti.
          </div>
          <meta http-equiv='refresh' content='3; url= mydata.php'/> ";
      }
    };

?>