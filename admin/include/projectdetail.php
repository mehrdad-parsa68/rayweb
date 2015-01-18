<?php
	$id = $_GET['id'];
	$project_query = "SELECT * FROM `project` WHERE `id`='$id'";
	$project_result = mysqli_query($connection,$project_query);
	$project_row = mysqli_fetch_assoc($project_result);
?>

<?php
	if(isset($_POST['update'])){
		$project_name = $_POST['project_name'];
		$project_address = $_POST['project_address'];
		$project_type = $_POST['project_type'];
		$project_service = $_POST['project_service'];
		$client = $_POST['client'];
		$Technology = $_POST['Technology'];
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
		}
		#######  UPDATE INTO DB ########
		$update_query = "UPDATE `project` SET `project_name`='$project_name',`project_address`='$project_address',`project_type`='$project_type',`project_service`='$project_service',`client`='$client',`Technology`='$Technology',`project_description`='$project_description',`confirmation`='$confirmation_name',`project_image`='$file_name',`detail_image`='$fille_detail_name' WHERE `id`='$id'";
		var_dump($update_query);
		$update_result = mysqli_query($connection,$update_query);
		var_dump($update_result);
	}
		
?>

<form method="post" role="form" class="label_sabt" enctype="multipart/form-data">
<section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                                <div class="item item-dark active">
                                    <img src="../images/samples/detail/<?php echo $project_row['detail_image']; ?>" alt="" class="img-responsive">
                                </div>
                           
                    </div>
                    <div class="col-md-6" dir="rtl">
                        <div class="vertical-info">
                        	<div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['project_name']; ?>" name="project_name"></div>
                                <div class="col-sm-5"><label>نام پروژه</label></div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['project_address']; ?>" name="project_address"></div>
                                <div class="col-sm-5"><label>آدرس سایت</label></div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['project_type']; ?>" name="project_type"></div>
                                <div class="col-sm-5"><label>موضوع سایت</label></div>
                            </div> 
                            <div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['project_service']; ?>" name="project_service"></div>
                                <div class="col-sm-5"><label>خدمات</label></div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['client']; ?> " name="client"></div>
                                <div class="col-sm-5"><label>مشتری</label></div>
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['Technology']; ?>" name="Technology"></div>
                                <div class="col-sm-5"><label>تکنولوژی</label></div>
                            </div>
                            <div class="row">
                                
                                <div class="col-sm-7"><input type="text" class="form-control" value="<?php echo $project_row['project_description']; ?>" name="project_description"></div>
                                <div class="col-sm-5"><label>زمینه فعالیت</label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"><img src="../images/confirmation/<?php echo $project_row['confirmation']; ?>" alt="" class="img-responsive img-thumbnail"></div>
                                <div class="col-sm-4"><input type="file"name="confirmation"></div>
                                <div class="col-sm-5"><label>گواهی حسن انجام کار</label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"><img src="../images/samples/<?php echo $project_row['project_image']; ?>" alt="" class="img-responsive img-thumbnail"></div>
                                <div class="col-sm-4"><input type="file"name="project_image"></div>
                                <div class="col-sm-5"><label>عکس کوچک</label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"><img src="../images/samples/detail/<?php echo $project_row['detail_image']; ?>" alt="" class="img-responsive img-thumbnail"></div>
                                <div class="col-sm-4"><input type="file"name="detail_image"></div>
                                <div class="col-sm-5"><label>عکس بزرگ</label></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7"><input type="submit" class="btn btn-success" value="ثبت" name="update"></div>
                            </div>
                            
                            
                        </div>
                        <div style="height:20px;"></div>
                        
                        <h3 class="section-title"></h3>
                        <p>
                        <img src="../images/confirmation/<?php echo $project_row['confirmation']; ?>" alt="" class="img-responsive">
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<a class="go-back" href="?page=edit"><img src="images/go-back-icon.png" width="70"></a>