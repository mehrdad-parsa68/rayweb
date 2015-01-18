<div class="col-xs-12">
<h3 class="sub-header">پیگیری</h3>
<?php require_once('core/core.php'); ?>

<?php
$error='';
if(isset($_POST['submit'])){
	### Assigning ####
	
	$co_name = $_POST['co_name'];
	$co_type = $_POST['co_type'];
	$co_owner = $_POST['co_owner'];
	$phone = $_POST['phone'];
	$fax = $_POST['fax'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$answer = $_POST['answer'];
	
	$register_date = time();
	
	#######  INSERT INTO DB ########
	$query = "INSERT INTO 
	`admin`(`id`, `co_name`, `co_type`, `co_owner`, `phone`, `fax`, `mobile`, `answer`,`address`, `date`) VALUES 
					('','$co_name','$co_type','$co_owner','$phone','$fax','$mobile','$answer','$address',$register_date)";
					
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
    	<form dir="rtl" method="post" role="form" class="form-inline label_sabt">
        	<div>
                <label>نام شرکت :</label>
                <input type="text" name="co_name" class="form-control">
            </div>
            <div>
                <label>نوع شرکت :</label>
                <select name="co_type" class="form-control" style="width:184px">
                  <option>ثبت شرکت</option>
                  <option>انتقادات</option>
                  <option>پیشنهادات</option>
                </select>
            </div>
            <div>
                <label>نام طرف صاحب شرکت :</label>
                <input type="text" name="co_owner" class="form-control">
            </div>
            <div>
                <label>شماره تلفن ثابت :</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div>
                <label>شماره فکس :</label>
                <input type="text" name="fax" class="form-control">
            </div>
            <div>
                <label>شماره تلفن همراه :</label>
                <input type="text" name="mobile" class="form-control">
            </div>
            <div>
                <label>آدرس :</label>
                <textarea name="address" class="form-control" style="width:184px"></textarea>
            </div>
            <div>
                <label>پاسخ :</label>
                <textarea name="answer" class="form-control" style="width:184px"></textarea>
            </div>
            	<input type="submit" value="ثبت" name="submit" class="form-control btn btn-primary">
        </form>
    </div>
    <hr>
    <?php echo $error; ?>
    <div class="col-xs-12">
    <?PHP include('table.php'); ?>	
    </div></div>