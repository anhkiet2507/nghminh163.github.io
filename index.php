 <?php
 $url=$_GET['link'];
 $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL,$url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
          $result = curl_exec($ch);
         
          curl_setopt($ch, CURLOPT_URL, $url);
$demo = curl_exec($ch);
preg_match('/<meta property="og:image" content="(.*?)" \/>/',$demo,$arr);
 $description=$arr[1];
 print_r($arr);

$array=array('messages'=>array('attachment'=>array('type'=>'image','payload'=>array('url'=>$description))));
//echo json_encode($array);
?>
