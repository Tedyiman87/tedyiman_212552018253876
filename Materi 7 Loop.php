<html>
  <head>
    <title>Materi Looping</title>
  </head>

  <body>

    <?php

    //variable
    $hewan = ['anjing','kumbang','tokek','laba laba'];

    //for($i=0; $i < count($hewan) -1; $i++)
      //{
        //echo "-----------";
        //echo $hewan [$i];
        //echo "-----------<br>";
      //}


    //foreach($hewan as $h)
      //{
       // echo "-----------";
       // echo $h;
        //echo "-----------<br>";
    //  }


  //$data = ['nama' => 'sebastian',
          //'umur' =>20,
        //  'sifat'=>'malas'];
 // foreach($data as $key => $value){
 //   echo $value. "<br>";
 // }


$i = 5;
//while($i < count($hewan)){
 // echo $hewan[$i]. "<br>";
 // $i++;
//}


do{
  echo '----------';
  echo $hewan[$i]. "<br>";
  $i++;
}while( $i < count($hewan));



?>
  </body>
</html>