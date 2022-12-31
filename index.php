<?php
    include 'header.php';
?>
<?php
// Mendapatkan IP pengunjung menggunakan getenv()
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}
// Mendapatkan jenis web browser pengunjung
function get_client_browser() {
    $browser = '';
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
        $browser = 'Netscape';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
        $browser = 'Firefox';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
        $browser = 'Chrome';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
        $browser = 'Opera';
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
        $browser = 'Internet Explorer';
    else
        $browser = 'Other';
    return $browser;
}
?>
        <hr>        
        <font class="tmd"><marquee scrollamount="10"><h2>Welcome To CTF-x3</h2></marquee></font>  
        <center>
              <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <center>
        <h3 style="color: black;">Information User</h3>
        </center>
<table class="table table-striped">
  <thead>
  </thead>
  <tbody>
    <tr>
        // Menampilkan IP Adress
      <th scope="row">IP ADDRESS:</th>
      <td><?php echo get_client_ip(); ?></td>
    </tr>
    <tr>
        // Menampilkan Sistem Operasi
      <th scope="row">Sistem Operasi:</th>
      <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
    </tr>
    <tr>
        // Menampilkan jenis browser
      <th scope="row">Browser:</th>
      <td><?php echo get_client_browser(); ?></td>
    </tr>
    <tr>
        // Menampilkan realtime
        <th scope="row">RealTime</th>
        <td><?php 
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    echo " | Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=6) && ($a<=11)) {
        echo " <b>, Selamat Pagi !! </b>";
    }else if(($a>=11) && ($a<=15)){
        echo " , Selamat  Siang !! ";
    }elseif(($a>15) && ($a<=18)){
        echo ", Selamat Sore !!";
    }else{
        echo ", <b> Selamat Malam</b>";
    }
 ?></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
        </center>      
        <hr>
        <b><center><h1>Choose Tipe</h1></center></b>
        <br>
        <div class="contentadmin">          
               <a href="/challenge/tipe1"><button class="btn-content">Tipe 1</button></a>
               <a href="/challenge/tipe2"><button class="btn-content">Tipe 2</button></a>
               <a href="/challenge/tipe3"><button class="btn-content">Tipe 3</button></a>
        </div>        
        <br>
            <br>
                <br>        
                    <br>
        </div>
    </body>
</html>