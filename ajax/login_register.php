<?php 
 require ("../admin/inc/db_config.php");
 require ("../admin/inc/essentials.php");
 

 
if(isset($_POST['register']))
{
  $name = $_POST['name']; 
	$email = $_POST['email']; 
	$adress= $_POST['adress']; 
  $phonenum= $_POST['phonenum']; 
  $pincode= $_POST['pincode']; 
  $dob= $_POST['dob']; 
	$profile = $_FILES['profile_picture']['name']; 
  $password= $_POST['password']; 
  $token=bin2hex(random_bytes(16));
  $insert = "INSERT INTO `user`(`name`, `email`, `adress`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `token`)
 VALUES ($name,$email,$adress,$phonenum,$pincode,$dob,$profile,$password,'$token')";
 $res = mysqli_query($con,$insert);



  $data = filteration($_POST);


   //match password and confirm password fieled
  ($data['pass'] != $data['cpass']){
   echo 'pass_mismatch';
   exit;
  }
   vheck user exists or not
  $u_exist= select("SELECT * FROM `user` WHERE `email` = ? AND `phonenum` = ? LIMIT 1",
   [$data['email'],$data['phonenum']],"ss" );

  if(mysqli_num_rows($u_exist)!=0){
    $u_exist_fetch = mysqli_fetch_assoc($u_exist);
    echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already' ;
   exit;
  }
 // upload user image (profile) to server
  $img = uploadUserImage($_FILES['profile']);

  if($img == 'inv_img'){
    echo 'inv_img';
    exit;
  }
  else if($img == 'upd_failed'){
    echo 'upd_failed';
    exit;
  }

  // send confirmation link to user,s email
  


  $enc_pass=password_hash($data['pass'],PASSWORD_BCRYPT);
  $token=bin2hex(random_bytes(16));

  
 
  //------------------
  $query = "INSERT INTO `user`(`name`, `email`, `adress`, `phonenum`, `pincode`, `dob`, `profile`,
  `password`, `token`) VALUES (?,?,?,?,?,?,?,?,?)";
   $values =[$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['pincode'],$data['dob'],$img, $data['pass'],$token];

  if(insert($query,$values,'sssssssss')){
   echo 1;
   }
   else{
    echo 'ins_failed';
  }




}

?>


