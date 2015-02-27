<?php

	if(!empty($_POST)){
		
		$parameters['full_name'] = $_POST['full_name'];
		$parameters['email'] = $_POST['email'];
		$parameters['mobile'] = $_POST['mobile'];
		$parameters['address'] = $_POST['address'];
		$parameters['ability'] = $_POST['ability'];
		$parameters['resume'] = $_POST['resume'];
		$parameters['register_date'] = time();
		
		if(isset($_POST['secretary'])){
			$parameters['category'] = 'منشی';
			}
		if(isset($_POST['developer'])){
			$parameters['category'] = 'توسعه دهنده';
			}
		if(isset($_POST['designer'])){
			$parameters['category'] = 'طراح وب';
			}
		if(isset($_POST['graphic'])){
			$parameters['category'] = 'گرافیست';
			}
		
		$test = new DB();
		$test = $test->insert($parameters,'hire');
		$result = mysqli_query($connection , $test);
		if($result){
			echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>تبریک!</strong> اطلاعات با موفقیت ثبت شد
</div>';
			}else
			{echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> خطایی در ثبت اطلاعات رخ داده است
</div>';}
		}
?>


<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2>Hire</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="http://www.rayweb.ir/<?php echo convert($connection,"home"); ?>/">صفحه اصلی</a></li>
                    <li class="active">استخدام</li>
                </ol>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container">
<br>
	<div class="wp-example">
<h3 class="section-title">استخدام</h3> 
      <div class="widget">
          <div class="tabs">
              <ul class="nav nav-pills nav-justified" dir="ltr">
                  <li class=""><a href="#tab2-1" data-toggle="tab">منشی</a></li>
                  <li class=""><a href="#tab2-2" data-toggle="tab">طراح گرافیک</a></li>
                  <li class="active"><a href="#tab2-3" data-toggle="tab">توسعه دهنده صفحات وب</a></li>
                  <li><a href="#tab2-4" data-toggle="tab">طراح سایت</a></li>
              </ul>
              <div class="tab-content tab-content-inverse">
                  <div class="tab-pane" id="tab2-1">
                  <h3>استخدام منشی</h3>
                      <form class="form-light mt-20" role="form" method="post">
                            <div class="form-group">
                                <label>نام و نام خانوادگی :</label>
                                <input type="text" class="form-control" placeholder="Your name" name="full_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ایمیل :</label>
                                        <input type="email" class="form-control exo" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تلفن :</label>
                                        <input type="text" class="form-control" placeholder="Phone number" name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>آدرس :</label>
                                <textarea class="form-control" id="message" placeholder="Write you address here" style="height:50px;" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>مهارت ها :</label>
                                <textarea class="form-control" id="message" placeholder="Write you skills here" style="height:100px;" name="ability"></textarea>
                            </div>
                            <div class="form-group">
                                <label>رزومه کاری :</label>
                                <textarea class="form-control" id="message" placeholder="Write you resume here" style="height:100px;" name="resume"></textarea>
                            </div>
                            <input type="submit" class="btn btn-two" value="ارسال" name="secretary">
                        </form>
                  </div>
                  <div class="tab-pane" id="tab2-2">
                  <h3>استخدام گرافیست</h3>
                      <form class="form-light mt-20" role="form" method="post">
                            <div class="form-group">
                                <label>نام و نام خانوادگی :</label>
                                <input type="text" class="form-control" placeholder="Your name" name="full_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ایمیل :</label>
                                        <input type="email" class="form-control exo" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تلفن :</label>
                                        <input type="text" class="form-control" placeholder="Phone number" name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>آدرس :</label>
                                <textarea class="form-control" id="message" placeholder="Write you address here" style="height:50px;" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>مهارت ها :</label>
                                <textarea class="form-control" id="message" placeholder="Write you skills here" style="height:100px;" name="ability"></textarea>
                            </div>
                            <div class="form-group">
                                <label>رزومه کاری :</label>
                                <textarea class="form-control" id="message" placeholder="Write you resume here" style="height:100px;" name="resume"></textarea>
                            </div>
                            <input type="submit" class="btn btn-two" value="ارسال" name="graphic">
                        </form>
                  </div>
                  <div class="tab-pane active" id="tab2-3">
                  <h3>استخدام توسعه دهنده وب سایت</h3>
                      <form class="form-light mt-20" role="form" method="post">
                            <div class="form-group">
                                <label>نام و نام خانوادگی :</label>
                                <input type="text" class="form-control" placeholder="Your name" name="full_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ایمیل :</label>
                                        <input type="email" class="form-control exo" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تلفن :</label>
                                        <input type="text" class="form-control" placeholder="Phone number" name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>آدرس :</label>
                                <textarea class="form-control" id="message" placeholder="Write you address here" style="height:50px;" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>مهارت ها :</label>
                                <textarea class="form-control" id="message" placeholder="Write you skills here" style="height:100px;" name="ability"></textarea>
                            </div>
                            <div class="form-group">
                                <label>رزومه کاری :</label>
                                <textarea class="form-control" id="message" placeholder="Write you resume here" style="height:100px;" name="resume"></textarea>
                            </div>
                            <input type="submit" class="btn btn-two" value="ارسال" name="developer">
                        </form>
                  </div>
                  <div class="tab-pane" id="tab2-4">
                      <h3>استخدام طراح صفحات وب</h3>
                      <form class="form-light mt-20" role="form" method="post">
                            <div class="form-group">
                                <label>نام و نام خانوادگی :</label>
                                <input type="text" class="form-control" placeholder="Your name" name="full_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ایمیل :</label>
                                        <input type="email" class="form-control exo" placeholder="Email address" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>تلفن :</label>
                                        <input type="text" class="form-control" placeholder="Phone number" name="mobile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>آدرس :</label>
                                <textarea class="form-control" id="message" placeholder="Write you address here" style="height:50px;" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>مهارت ها :</label>
                                <textarea class="form-control" id="message" placeholder="Write you skills here" style="height:100px;" name="ability"></textarea>
                            </div>
                            <div class="form-group">
                                <label>رزومه کاری :</label>
                                <textarea class="form-control" id="message" placeholder="Write you resume here" style="height:100px;" name="resume"></textarea>
                            </div>
                            <input type="submit" class="btn btn-two" value="ارسال" name="designer">
                        </form>
                  </div>
              </div>							
          </div>
      </div>
  </div>
</div>





