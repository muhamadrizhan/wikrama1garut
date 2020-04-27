<?php
  error_reporting(0);
  include "config/koneksi.php";
  session_start();


  if(isset($_POST['simpan'])){
      $nama_lengkap = $_POST['nama_lengkap'];
      $nama_panggilan = $_POST['nama_panggilan'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $tgl_lahir = $_POST['tgl_lahir'];
      $agama = $_POST['agama'];
      $cita_cita = $_POST['cita_cita'];
      $hoby = $_POST['hoby'];
      $anak_ke = $_POST['anak_ke'];
      $jumlah_saudara = $_POST['jumlah_saudara'];
      $berat_badan = $_POST['berat_badan'];
      $tinggi_badan = $_POST['tinggi_badan'];
      $golongan_darah = $_POST['golongan_darah'];
      $alamat = $_POST['alamat'];
      $rt = $_POST['rt'];
      $rw = $_POST['rw'];
      $kelurahan = $_POST['kelurahan'];
      $kecamatan = $_POST['kecamatan'];
      $kota = $_POST['kota'];
      $prov = $_POST['prov'];
      $tinggal_dengan = $_POST['tinggal_dengan'];
      $penyakit = $_POST['penyakit'];
      $kelainan_jasmani = $_POST['kelainan_jasmani'];
      $nama_ayah = $_POST['nama_ayah'];
      $ttl = $_POST['ttl'];
      $pekerjaan = $_POST['pekerjaan'];
      $pendidikan = $_POST['pendidikan'];
      $ka = $_POST['ka'];
      $no_hp = $_POST['no_hp'];
      $nama_ibu = $_POST['nama_ibu'];
      $ttlr = $_POST['ttlr'];
      $kerjaan = $_POST['kerjaan'];
      $didikan = $_POST['didikan'];
      $kewarganegaraan_agama = $_POST['kewarganegaraan_agama'];
      $no_hppp = $_POST['no_hppp'];
      $nama_wali = $_POST['nama_wali'];
      $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
      $pekerjaaan = $_POST['pekerjaaan'];
      $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
      $hub_murid = $_POST['hub_murid'];
      $kewarganegaraan = $_POST['kewarganegaraan'];
      $no_hpp = $_POST['no_hpp'];
      $email = $_POST['email'];
      $pai1 = $_POST['pai1'];
      $pai2 = $_POST['pai2'];
      $pai3 = $_POST['pai3'];
      $pai4 = $_POST['pai4'];
      $pai5 = $_POST['pai5'];
      $indo1 = $_POST['indo1'];
      $indo2 = $_POST['indo2'];
      $indo3 = $_POST['indo3'];
      $indo4 = $_POST['indo4'];
      $indo5 = $_POST['indo5'];
      $inggris1 = $_POST['inggris1'];
      $inggris2 = $_POST['inggris2'];
      $inggris3 = $_POST['inggris3'];
      $inggris4 = $_POST['inggris4'];
      $inggris5 = $_POST['inggris5'];
      $mtk1 = $_POST['mtk1'];
      $mtk2 = $_POST['mtk2'];
      $mtk3 = $_POST['mtk3'];
      $mtk4 = $_POST['mtk4'];
      $mtk5 = $_POST['mtk5'];
      $ipa1 = $_POST['ipa1'];
      $ipa2 = $_POST['ipa2'];
      $ipa3 = $_POST['ipa3'];
      $ipa4 = $_POST['ipa4'];
      $ipa5 = $_POST['ipa5'];
      $ips1 = $_POST['ips1'];
      $ips2 = $_POST['ips2'];
      $ips3 = $_POST['ips3'];
      $ips4 = $_POST['ips4'];
      $ips5 = $_POST['ips5'];
      $prestasi = $_POST['prestasi'];
      // Insert user data into table
      $result = mysqli_query($con, 
                  "INSERT INTO daftars(
                        nama_lengkap,nama_panggilan,jenis_kelamin,tgl_lahir,agama,cita_cita,hoby,anak_ke,jumlah_saudara,berat_badan,tinggi_badan,golongan_darah,alamat,rt,rw,kelurahan,kecamatan,kota,prov,tinggal_dengan,penyakit,kelainan_jasmani,nama_ayah,ttl,pekerjaan,pendidikan,ka,no_hp,nama_ibu,ttlr,kerjaan,didikan,kewarganegaraan_agama,no_hppp,nama_wali,tempat_tanggal_lahir,pekerjaaan,pendidikan_terakhir,hub_murid,kewarganegaraan,no_hpp,email,pai1,pai2,pai3,pai4,pai5,indo1,indo2,indo3,indo4,indo5,inggris1,inggris2,inggris3,inggris4,inggris5,mtk1,mtk2,mtk3,mtk4,mtk5,ipa1,ipa2,ipa3,ipa4,ipa5,ips1,ips2,ips3,ips4,ips5,prestasi
                  )
                   VALUES(
                        '$nama_lengkap','$nama_panggilan','$jenis_kelamin','$tgl_lahir','$agama','$cita_cita','$hoby','$anak_ke','$jumlah_saudara','$berat_badan','$tinggi_badan','$golongan_darah',
                        '$alamat','$rt','$rw','$kelurahan',
                        '$kecamatan','$kota','$prov','$tinggal_dengan',
                        '$penyakit','$kelainan_jasmani','$nama_ayah','$ttl',
                        '$pekerjaaan','$pendidikan','$ka','$no_hp',
                        '$nama_ibu','$ttlr','$kerjaan','$didikan',            
                        '$kewarganegaraan_agama','$no_hppp','$nama_wali','$tempat_tanggal_lahir',
                        '$pekerjaaan','$pendidikan_terakhir','$hub_murid','$kewarganegaraan',
                        '$no_hpp','$email','$pai1','$pai2','$pai3','$pai4','$pai5','$indo1','$indo2','$indo3','$indo4','$indo5','$inggris1','$inggris2','$inggris3','$inggris4','$inggris5','$mtk1','$mtk2','$mtk3','$mtk4','$mtk5','$ipa1','$ipa2','$ipa3','$ipa4','$ipa5','$ips1','$ips2','$ips3','$ips4','$ips5','$prestasi'
                   )

                  ");

      // Show message when user added
   if ($result) {
      echo "<script>alert('Berhasil Daftar');
      document.location.href='daftar.php'</script>";
    }else{
      echo "<script>alert('Gagal Daftar');
      document.location.href='daftar.php'</script>";
    }
  }
  ?>


<html>
      <head>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <title>Pendaftaran Online</title>
            <h3 class="jumbotron jumbotron-fluid text-center">PENDAFTARAN PESERTA DIDIK BARU SMK WIKRAMA 1 GARUT</h3>

      </head>
      <body>
            <div class="container">
            <form method="post" action="daftar.php">
                  <table class="table" required>
                        <tbody>
                        <tr>
                        <th scope="col">Data Diri Siswa</th>
                        </tr>
                  </tbody>
                  </table>
                  <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Siswa" required>
                  </div>

                        <div class="form-group">
                        <label>Nama Panggilan</label>
                        <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan"required >
                  </div>

                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                              <input type="radio" name="jenis_kelamin" value="l" class="form-check-input" required>
                              <label>L</label>
                        </div>

                        <div class="form-check">
                              <input type="radio" name="jenis_kelamin" value="" class="form-check-input"required >
                              <label>P</label>
                        </div>
                  </div>

                  <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control" placeholder="Tempat Tanggal Lahir" required >
                  </div>

                  <div class="form-group">
                        <label>Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                  </div>

                   <div class="form-group">
                        <label>Cita-Cita</label>
                        <input type="text" name="cita_cita" class="form-control" placeholder="Cita-Cita" required >
                  </div>

                   <div class="form-group">
                        <label>Hobi</label>
                        <input type="text" name="hoby" class="form-control" placeholder="Hobi Anda"required >
                  </div>

                        <div class="form-group">
                        <label>Anak Ke</label>
                        <input type="number" name="anak_ke" class="form-control" placeholder="Anak ke"required >
                  </div>

                  <div class="form-group">
                        <label>Jumlah Saudara</label>
                        <input type="number" name="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara" required>
                  </div>

                  <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="number" name="berat_badan" class="form-control" placeholder="Kg"required >
                  </div>

                  <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="number" name="tinggi_badan" class="form-control" placeholder="Cm" required>
                  </div>

                  <div class="form-group">
                        <label>Golongan Darah</label>
                        <div class="form-check">
                              <input type="radio" name="golongan_darah" value="A" class="form-check-input"required >
                              <label>A</label>
                        </div>

                              <div class="form-check">
                              <input type="radio" name="golongan_darah" value="B" class="form-check-input"required >
                              <label>B</label>
                        </div>      

                        <div class="form-check">
                              <input type="radio" name="golongan_darah" value="AB" class="form-check-input"required >
                              <label>AB</label>
                        </div>

                        <div class="form-check">
                              <input type="radio" name="golongan_darah" value="O" class="form-check-input"required >
                              <label>O</label>
                        </div>                  
                  </div>
                  <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">KETERANGAN TEMPAT TINGGAL</th>
                        </tr>
                  </tbody>
                  </table>    
                  <div class="form-group">
                        <label>Alamat Rumah</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Anda" required>
                  </div>

                        <div class="form-group">
                        <label>RT</label>
                        <input type="text" name="rt" class="form-control" placeholder="Rt"required >
                  </div>

                  <div class="form-group">
                        <label>RW</label>
                        <input type="text" name="rw" class="form-control" placeholder="Rw"required >
                  </div>

                  <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan"required>
                  </div>

                  <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"required>
                  </div>

                  <div class="form-group">
                        <label>Kota</label>
                        <input type="text" name="kota" class="form-control" placeholder="Kota"required>
                  </div>

                  <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" name="prov" class="form-control" placeholder="Provinsi"required>
                  </div>

                  <div class="form-group">
                        <label>Tinggal Dengan</label>
                        <div class="form-check">
                              <input type="radio" name="tinggal_dengan" value="Orang Tua" class="form-check-input"required >
                              <label>Orang Tua</label>
                        </div>

                              <div class="form-check">
                              <input type="radio" name="tinggal_dengan" value="Asrama" class="form-check-input"required >
                              <label>Asrama</label>
                        </div>      

                        <div class="form-check">
                              <input type="radio" name="tinggal_dengan" value="Saudara" class="form-check-input"required >
                              <label>Saudara</label>
                        </div>

                  <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">KETERANGAN KESEHATAN </th>
                        </tr>
                  </tbody>
                  </table> 
                  <div class="form-group">
                        <label>Penyakit yang pernah diderita :</label>
                        <input type="text" name="penyakit" class="form-control" placeholder="Penyakit yang pernah diderita"required>
                  </div>   
                  <div class="form-group">
                        <label>Kelainan Jasmani</label>
                        <input type="text" name="kelainan_jasmani" class="form-control" placeholder="Kelainan Jasmani"required>
                  </div>
                  <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">DATA ORANG TUA/WALI</th>
                        </tr>
                  </tbody>
                  </table> 

                  <div class="form-group">
                       <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">A. Nama Ayah</th>
                        </tr>
                  </tbody>
                  </table> 
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah"required>
                  </div>
                  
                  <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="text" name="ttl" class="form-control" placeholder="Tempat Tanggal Lahir"required>
                  </div>       
   

                  <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan"required>
                  </div>    

                  <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan Terakhir"required>
                  </div>      

                  <div class="form-group">
                        <label>Kewarganegaraan/agama</label>
                        <input type="text" name="ka" class="form-control" placeholder="Kewarganegaraan/agama"required>
                  </div>    

                  <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Kewarganegaraan/agama"required>
                  </div>    

                  <div class="form-group">
                        <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">B. Nama Ibu</th>
                        </tr>
                  </tbody>
                  </table> 
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu"required>
                  </div>    

                  <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="text" name="ttlr" class="form-control" placeholder="Tempat Tanggal Lahir"required>
                  </div>

                  <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="kerjaan" class="form-control" placeholder="Pekerjaan"required>
                  </div>    

                  <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="didikan" class="form-control" placeholder="Pendidikan Terakhir"required>
                  </div>  

                  <div class="form-group">
                        <label>Kewarganegaraan/agama</label>
                        <input type="text" name="kewarganegaraan_agama" class="form-control" placeholder="Kewarganegaraan/agama"required>
                  </div>   

                  <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="no_hppp" class="form-control" placeholder="No Hp"required>
                  </div>      

                  <div class="form-group">
                        <table class="table">
                        <tbody>
                        <tr>
                        <th scope="col">C. Nama Wali</th>
                        </tr>
                  </tbody>
                  </table> 
                        <input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali" >
                  </div>    

                  <div class="form-group">
                        <label>Tempat Tanggal Lahir</label>
                        <input type="text" name="tempat_tanggal_lahir" class="form-control" placeholder="Tempat Tanggal Lahir" >
                  </div>  

                  <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaaan" class="form-control" placeholder="Pekerjaan" >
                  </div>   
                  <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Pendidikan Terakhir" >
                  </div>        

                  <div class="form-group">
                        <label>Hubungan Dengan Murid</label>
                        <input type="text" name="hub_murid" class="form-control" placeholder="Hubungan Dengan Murid" >
                  </div>    

                  <div class="form-group">
                        <label>Kewarganegaraan/Agama</label>
                        <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan/Agama" >
                  </div>  

                  <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="no_hpp" class="form-control" placeholder="No Hp" >
                  </div>    

                  <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" >
                  </div>  

                  <div class="form-group">
                        <table class="table table-bordered table-responsive">
                              <thead>
                                    <tr">
                                          <th rowspan="2" class="text-center">NO</th>
                                          <th rowspan="2" class="text-center">Mata Pelajaran</th>
                                          <th colspan="2" class="text-center">Kelas 7</th>  
                                          <th colspan="2" class="text-center">Kelas 8</th>
                                          <th class="text-center">Kelas 9</th>
                                    </tr>
                                    <tr>
                                          <th>Smt-1</th>
                                          <th>Smt-2</th>
                                          <th>Smt-1</th>
                                          <th>Smt-2</th>
                                          <th class="text-center">Smt-1</th>
                                    </tr>
                                    <tr>
                                          <th>1</th>
                                          <th>PAI</th>
                                          <th><input type="number" name="pai1"></th>
                                          <th><input type="number" name="pai2"></th>
                                          <th><input type="number" name="pai3"></th>
                                          <th><input type="number" name="pai4"></th>
                                          <th><input type="number" name="pai5"></th>
                                   </tr>
                                    <tr>
                                          <th>2</th>
                                          <th>Bahasa Indonesia</th>
                                          <th><input type="number" name="indo1"></th>
                                          <th><input type="number" name="indo2"></th>
                                          <th><input type="number" name="indo3"></th>
                                          <th><input type="number" name="indo4"></th>
                                          <th><input type="number" name="indo5"></th>
                                    </tr>
                                    <tr>
                                          <th>3</th>
                                          <th>Bahasa Inggris</th>
                                          <th><input type="number" name="inggris1"></th>
                                          <th><input type="number" name="inggris2"></th>
                                          <th><input type="number" name="inggris3"></th>
                                          <th><input type="number" name="inggris4"></th>
                                          <th><input type="number" name="inggris5"></th>
                                    </tr>
                                    <tr>
                                          <th>4</th>
                                          <th>Matematika</th>
                                          <th><input type="number" name="mtk1"></th>
                                          <th><input type="number" name="mtk2"></th>
                                          <th><input type="number" name="mtk3"></th>
                                          <th><input type="number" name="mtk4"></th>
                                          <th><input type="number" name="mtk5"></th>
                                    </tr>
                                    <tr>
                                          <th>5</th>
                                          <th>IPA</th>
                                          <th><input type="number" name="ipa1"></th>
                                          <th><input type="number" name="ipa2"></th>
                                          <th><input type="number" name="ipa3"></th>
                                          <th><input type="number" name="ipa4"></th>
                                          <th><input type="number" name="ipa5"></th>
                                    </tr>
                                    <tr>
                                          <th>6</th>
                                          <th>IPS</th>
                                          <th><input type="number" name="ips1"></th>
                                          <th><input type="number" name="ips2"></th>
                                          <th><input type="number" name="ips3"></th>
                                          <th><input type="number" name="ips4"></th>
                                          <th><input type="number" name="ips5"></th>
                                    </tr>
                                    <tr>
                                          <th>7</th>
                                          <th>Prestasi Yg Pernah Diraih</th>
                                          <th colspan="5"><input type="text" name="prestasi"></th>
                                    </tr>
 

                        <button type="submit"  name="simpan" class="btn btn-warning">SIMPAN</button>
                        <button type="reset" name="reset" class="btn btn-dark">RESET</button>
             
            </form>
         </div>     
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
      </body>
</html>