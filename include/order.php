<?php
	if(isset($_POST['submit'])){
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone = $_POST['phone'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$site_type = $_POST['site_type'];
		$site_description = $_POST['site_description'];
		$date = time();
		
		####### INSERT TO DB ########
		$order_query = "INSERT INTO `order`(`id`, `first_name`, `last_name`, `phone`, `mobile`, `email`, `site_type`, `site_description`, `date`) VALUES ('','$first_name','$last_name','$phone','$mobile','$email','$site_type','$site_description','$date')";
		$order_result = mysqli_query($connection,$order_query);
		
		if($order_result){
			echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>تبریک!</strong> اطلاعات با موفقیت ثبت شد
</div>';
			}
			else{
				echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> خطایی در ثبت اطلاعات رخ داده است
</div>';
				}
		
		}
?>


<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2>Orders</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="<?php echo $prefix; ?>/home/">صفحه اصلی</a></li>
                    <li class="active">سفارش</li>
                </ol>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container">
<h1>سفارش سایت</h1><br><br>
<p style="font-size:18px !important">برای سفارش سایت ابتدا فرم زیر را تکمیل نمایید . تیم رای وب پس از بررسی سفارش و برآورد قیمت با شما تماس خواهند گرفت .</p><br><br>
<div class="col-md-5 col-xs-12 pull-right">
<form class="form-horizontal form-light mt-20" role="form" method="post">
<legend><h2>فرم سفارش</h2></legend>
 	<div class="col-xs-8">
      <input type="text" class="form-control" id="first_name" placeholder="first name" name="first_name">
    </div>
  	<div class="form-group">
    <label  for="first_name" class="col-xs-4 control-label">نام : </label>
   
  	</div>
   	<div class="col-xs-8">
      <input type="text" class="form-control" id="last_name" placeholder="last name" name="last_name">
    </div>
 	<div class="form-group">
    <label for="last_name" class="col-xs-4 control-label">نام خانوادگی : </label>
   
 	</div>
    <div class="col-xs-8">
      <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
    </div>
    <div class="form-group">
    <label for="phone" class="col-xs-4 control-label">تلفن ثابت : </label>
    </div>
  	<div class="col-xs-8">
      <input type="text" class="form-control" id="mobiles" placeholder="mobile" name="mobile">
    </div>
    <div class="form-group">
    <label for="mobile" class="col-xs-4 control-label">تلفن همراه : </label>
    </div>
    
    <div class="col-xs-8 exo">
      <input type="emial" class="form-control" id="emial" placeholder="email" name="email">
    </div>
    <div class="form-group">
    <label for="emial" class="col-xs-4 control-label">ایمیل : </label>
    </div>
    <div class="col-xs-8">
    <select class="form-control col-sm-8" name="site_type">
    	<option>شرکتی</option>
        <option>شخصی</option>
        <option>فروشگاهی</option>
        <option>هنری</option>
  		<option>سرمایه گذاری</option>
  		<option>پرتال</option>
  	</select>
  	</div>
  	<div class="form-group">
  		<label for="seletIdea" class="col-xs-4 control-label">نوع سایت : </label>
    </div>
    
    <div class="col-sm-8 col-xs-8 col-md-8">
   		 <textarea class="form-control" placeholder="describe your website " rows="5" name="site_description"></textarea>
    </div>
    <div class="form-group">
    	<label for="text" class="col-xs-4 control-label">توضیحات سایت درخواستی : </label>
    </div>
    

    <div class="col-sm-3 col-sm-offset-2">
   		<button type="submit" class="btn btn-success" name="submit">ارسال درخواست</button>
    </div>
    <div class="col-sm-3">
    	<button type="reset" class="btn btn-three">ویرایش</button>
    </div>

 

</form>
</div>

</div><br>
<hr>
<!--<div class="container" ng-app="priceCalculate">
    <div ng-controller="MainController">
        <table class="table table-bordered table-hover table-responsive table-striped">
            <tr>
                <th class="text-center">ردیف</th>
                <th class="text-center">نام</th>
                <th class="text-center">قیمت (تومان)</th>
                <th class="text-center">درخواست</th>
            </tr>
            <tr ng-repeat="todo in todos">
                <td class="text-center">{{todo.number}}</td>
                <td>{{todo.name}}</td>
                <td class="price">{{todo.price}}</td>
                <td class="text-center"><input type="checkbox" ng-model="todo.done" ng-change="change()"></td>
            </tr>
            
        </table>
        <div class="price-calculate">{{amount}} تومان</div>
    </div>
</div>-->