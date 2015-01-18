<?php require_once('core/core.php'); ?>
<?php
$error='';
if(isset($_POST['submit'])){
	### Assigning ####
	
	$co_name = $_POST['co_name'];
	$co_type = $_POST['co_type'];
	$co_owner = $_POST['co_owner'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$answer = $_POST['answer'];
	
	$register_date = time();
	
	#######  INSERT INTO DB ########
	$query = "INSERT INTO 
	`admin`(`id`, `co_name`, `co_type`, `co_owner`, `phone`, `mobile`, `answer`, `date`) VALUES 
					('','$co_name','$co_type','$co_owner','$phone','$mobile','$answer',$register_date)";
					
	$result = $mysqli->query($query);
	echo $mysqli->error;
	if($result){
		$error = 'اطلاعات با موفقیت ثبت شد';
		}else{
			$error = 'خطایی در ثبت اطلاعات رخ داده است';
			}
}
?>
	<div>
    	<form dir="rtl" method="post" role="form">
        	<div>
                <label>نام شرکت :</label>
                <input type="text" name="co_name">
            </div>
            <div>
                <label>نوع شرکت :</label>
                <select name="co_type">
                  <option>ثبت شرکت</option>
                  <option>انتقادات</option>
                  <option>پیشنهادات</option>
                </select>
            </div>
            <div>
                <label>نام طرف صاحب شرکت :</label>
                <input type="text" name="co_owner">
            </div>
            <div>
                <label>شماره تلفن ثابت :</label>
                <input type="text" name="phone">
            </div>
            <div>
                <label>شماره تلفن همراه :</label>
                <input type="text" name="mobile">
            </div>
            <div>
                <label>پاسخ :</label>
                <textarea name="answer"></textarea>
            </div>
            	<input type="submit" value="ثبت" name="submit">
        </form>
    </div>
    <hr>
    <?php echo $error; ?>
    <div>
    <?PHP include('table.php'); ?>	
    </div>