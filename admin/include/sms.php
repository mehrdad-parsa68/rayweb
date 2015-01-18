<div class="col-lg-6">
<br><br><br><br>
<form role='form' class='form-inline' method='post'>
						<label>متن اس ام اس</label>
						<textarea  type='textarea' name='insert_text' class='form-control'></textarea>
						<input type='submit' class='form-control btn btn-success' name='insert' value='افزودن اس ام اس'>
                	</form></div>

<div class="col-lg-6">
<h3 class="sub-header">مدیریت اس ام اس ها</h3>
<?php require_once('core/core.php');
error_reporting(E_ALL);
 ?>

<?php
echo "میزان موجودی : ".rayweb_get_credit().'<hr>';

if(isset($_POST['submit'])){
	$to = $_POST['to'];
	$message = $_POST['message'];
	rayweb_send_sms($to,$message);
	}
?>
<?php
################update temp sms  #################
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$text = $_POST['text'];
$update_query="UPDATE `sms_temp` SET `text`='$text' WHERE id='$id' ; ";
$update_result = $mysqli->query($update_query);
if($update_result){
	echo 'anjam shod';
	
	}else{
	echo 'anjam nashod';	
		}
}
?>
<?php
################delete temp sms  #################
if(isset($_POST['delete'])){
	$id = $_POST['id'];
$delete_query="DELETE FROM `sms_temp` WHERE id='$id' ; ";
$delete_result = $mysqli->query($delete_query);
echo $mysqli->error;
if($delete_result){
	echo 'pak shod';
	
	}else{
	echo 'pak nashod';	
		}
}
?>
<?php 
################insert temp sms  #################
if(isset($_POST['insert'])){
	$text=$_POST['insert_text'];
	$insert_query="INSERT INTO `sms_temp`(`id`, `text`) VALUES ('','$text')";
	$insert_result=$mysqli->query($insert_query);
	if($insert_result){
		echo 'anjam shod';
		}
		else 
			echo 'anjam nashod';
	}


?>
<?php
################ show temp #################
$show_query="SELECT * FROM sms_temp";
$show_result = mysqli_query($connection,$show_query);
?>


<form role="form" class="form-inline" method="post">
<label>شماره : </label>&nbsp;&nbsp;<input type="text" class="form-control" name="to"><br><br>
<label>متن : </label>&nbsp;&nbsp;<textarea class="form-control" name="message"></textarea><br><br>
<input type="submit" class="form-control btn btn-primary" name="submit" value="ارسال"><br>
</form>
</div><br><br><br><br>

<?php
while($show_row = $show_result->fetch_assoc()){
		
			echo	 "<form role='form' class='form-inline' method='post'>
						<label>اس ام اس شماره ".$show_row['id'].":</label>
						<textarea  type='textarea' name='text' class='form-control'>".$show_row['text']."</textarea>
						<input type='hidden' value='".$show_row['id']."' name='id'>
						<input type='submit' class='form-control btn btn-success' name='update' value='change'>
						<input type='submit' class='form-control btn btn-danger' onclick='return confirm(\"آیا مطمئنی؟\")' name='delete' value='delete'>
                	</form>"; 
            }    
                
            
?></div>
