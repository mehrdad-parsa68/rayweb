

<?php
$error='';
if(isset($_POST['project_submit'])){
	### Assigning ####
	
	$project_name = $_POST['project_name'];
	$project_address = $_POST['project_address'];
	$project_type = $_POST['project_type'];
	$project_service = $_POST['project_service'];
	$client = $_POST['client'];
	$Technology = $_POST['Technology'];
	$completion_date = $_POST['completion_date'];
	$project_description = $_POST['project_description'];
	$project_image = $_FILES['project_image'];
	$detail_image = $_FILES['detail_image'];
	$confirmation = $_FILES['confirmation'];
	
	$confirmation_name = $confirmation['name'];
	$file_name = $project_image['name'];
	$fille_detail_name = $detail_image['name'];
	
	
	if($project_image['error'] == "0" && $detail_image['error'] == "0"){
		$address = "../images/samples/$project_image[name]";
		move_uploaded_file($project_image['tmp_name'],$address);
		$detail_address = "../images/samples/detail/$detail_image[name]";
		move_uploaded_file($detail_image['tmp_name'],$detail_address);
		/*$confirmation_address = "../images/confirmation/$confirmation[name]";
		move_uploaded_file($confirmation['tmp_name'],$confirmation_address);*/
		

	
	$register_date = time();
	
	#######  INSERT INTO DB ########
	$query = "INSERT INTO `project`
	(`id`, `project_name`,`project_address`, `project_type`, `project_service` , `client`, `Technology`, `completion_date`, `project_description`, `confirmation` , `project_image` , `detail_image`) VALUES 
					('','$project_name','$project_address','$project_type','$project_service','$client','$Technology','$completion_date','$project_description','$confirmation_name','$file_name','$fille_detail_name')";
					
	$result = mysqli_query($connection,$query);
	
	if($result){
		$error = '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>تبریک!</strong> اطلاعات با موفقیت ثبت شد
</div>';
		}else{
			$error = '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> خطایی در ثبت اطلاعات رخ داده است
</div>';
			}
	}
}
?>

<h3 class="sub-header">پروژه</h3>
<div>
    	<form dir="rtl" method="post" role="form" class="form-inline label_sabt" enctype="multipart/form-data">
        	<div>
                <label>نام پروژه :</label>
                <input type="text" name="project_name" class="form-control">
            </div>
            <div>
                <label>آدرس سایت :</label>
                <input type="text" name="project_address" class="form-control">
            </div>
            <div>
                <label>نوع پروژه :</label>
                <select name="project_type" class="form-control" style="width:184px">
                  <option>شرکتی</option>
                  <option>شخصی</option>
                  <option>فروشگاهی</option>
                  <option>هنری</option>
                  <option>سرمایه گذاری</option>
                  <option>پرتال</option>
                </select>
            </div>
            <div>
                <label>خدمات پروژه :</label>
                <input type="text" name="project_service" class="form-control">
            </div>
            <div>
                <label>نام مشتری :</label>
                <input type="text" name="client" class="form-control">
            </div>
            <div>
                <label>تکنولوژی :</label>
                <input type="text" name="Technology" class="form-control">
            </div>
            <div>
                <label>تاریخ اتمام پروژه :</label>
                <input type="text" name="completion_date" class="form-control">
            </div>
            
            <div>
                <label>زمینه فعالیت :</label>
                <input type="text" class="form-control" name="project_description">
            </div>
            <div>
                <label>گواهی حسن انجام:</label>
                <input type="file" class="form-control" name="confirmation">
            </div>
            <div>
                <label>عکس کوچک (400X300):</label>
                <input type="file" class="form-control" name="project_image">
            </div>
            <div>
                <label>عکس بزرگ (550X400):</label>
                <input type="file" class="form-control" name="detail_image">
            </div>
            
            	<input type="submit" value="ثبت" name="project_submit" class="form-control btn btn-primary">
        </form>
</div>
        <?php echo $error; ?>