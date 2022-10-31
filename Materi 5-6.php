<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>
    <?php 
// MATERI 5
//--- tipe data array ---
  $angka = [5, 10, 2, 1, 6];
  $kotak = array('anjing','hewan','kurakura','koala','anjing');
  $nama  = ['Hilman','Endy','Tiqa'];

//print_r($kotak);
//echo $nama[2];

//--- metode array ---
//array_uique,_reverse, shuffle, count, sort

sort($angka);
print_r( $angka);

//echo count($nama);

//--- Associatuve array ---
// key => isi

$data = array("nama" => "hilman" ,
              "umur" => 21 ,
              "kerja" => "pengacara"
             );

$data2 = array("istri" => "belum ada" ,
               "laptop" => "ChromeBook"
              );

//print_r($data);
//$data['nama'] = "Hilman Ramadhan";
//echo "Nama adalah" . $data['nama'];

//--- methode assosiatif array ---
// array_values array_keys array_merge
print_r( array_merge($data, $data) );

// MATERI 6

//--- Associative array ---


$data01 = array("istri" => "hilman" ,
              "umur" => 21 ,
              "kerja" => "pengacara"
             );

$data02 = array("nama" => "hilman" ,
                "laptop" => "ChromeBook" ,

             );

//print_r($data01);
//$data01['nama'] = "Hilman Ramadhan";
//echo"nama adalah" . $data['nama'];

//--- methode assosiatif array ---
// array_values array_keys array_merge
print_r( array_merge ($data01, $data02) );

///--- multi dimensi array---
$data00 = array(
          array("progammer", "21", "males"),
          array ("designer", "24", "rajin""),
          array("manager", "34", "males banget")
  );

// 00 01 02
// 10 11 12
// 20 21 22

$data00[2][0] ="proyek manager";
echo $data00[2][0];

// --- superglobal array ---

session_start();

$user = 'hilman';
$password = '123';

if ( isset($_POST['submit']) ){

  if( $_POST['submit']) ){

    if( $_POST['nama'] == $user&& 
        $_POST['password'] == $password)}
      
   

    ?> 

  </body>
</html>
