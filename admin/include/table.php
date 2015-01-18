<div class="table-responsive">
<table style="border:solid 1px #000; margin:auto;" dir="rtl" border="1" class="table table-striped table-hover table-bordered peygiri">
  <tr>
    <th>ردیف</th>
    <th>نام شرکت</th>
    <th>نوع شرکت</th>
    <th>نام صاحب شرکت</th>
    <th>تلفن ثابت</th>
    <th>فکس</th>
    <th>تلفن همراه</th>
    <th>آدرس</th>
    <th>پاسخ</th>
    <th>زمان</th>
    <th colspan="2">کارکرد</th>
  </tr>
  	<?php
	if(isset($_POST['remove'])){
				$remove_id = $_POST['id'];
				$remove_query = "DELETE FROM `admin` WHERE id=$remove_id";
				$remove_result = $mysqli->query($remove_query);
				}
			if(isset($_POST['edit'])){
				$edit_id = $_POST['id'];
				$co_name = $_POST['co_name'];
				$co_type = $_POST['co_type'];
				$co_owner = $_POST['co_owner'];
				$phone = $_POST['phone'];
				$fax = $_POST['fax'];
				$mobile = $_POST['mobile'];
				$address = $_POST['address'];
				$answer = $_POST['answer'];
				
				$date = time();

				$edit_query = "UPDATE `admin` SET 			`co_name`='$co_name',`co_type`='$co_type',`co_owner`='$co_owner',`phone`='$phone',`fax`='$fax',`mobile`='$mobile',`address`='$address',`answer`='$answer',`date`='$date' 
				WHERE id='$edit_id' ; ";
				$edit_result = $mysqli->query($edit_query);
				}
				
	$show_query = "SELECT * FROM admin";	
	$show_result = mysqli_query($connection,$show_query);
	
		$remove_id = '';
		while ($show_row = $show_result->fetch_assoc()) {
			$datefa = jdate("m/d H:i:s",$show_row['date']);
      		echo "
			<form method='post' role='form'>
			<tr>
				<td >$show_row[id]</td>
				<td ><input type='text' style='height:68px;' value='$show_row[co_name]' name='co_name' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[co_type]' name='co_type' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[co_owner]' name='co_owner' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[phone]' name='phone' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[mobile]' name='mobile' class='form-control'></td>
				<td ><input type='text' style='height:68px;' value='$show_row[fax]' name='fax' class='form-control'></td>
				<td  ><textarea style='height:68px;'  name='address' class='form-control'>$show_row[address]</textarea></td>
				<td ><textarea style='height:68px;' name='answer' class='form-control'>$show_row[answer]</textarea></td>
				<td >$datefa</td>
				<td style='height:68px;'><input type='submit'  name='remove' value='حذف' onclick='return confirm(\"آیا مطمئنی؟\")' class='form-control btn btn-danger'>
				<input type='hidden' name='id' value='$show_row[id]'>
				<input type='submit'  name='edit' value='ویرایش' onclick='return confirm(\"آیا مطمئنی؟\")' class='form-control btn btn-warning'>
				</td>
				<td >
				<select class='form-control'>
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
				<input type='submit' name='sms1' value='ارسال' onclick='return confirm(\"آیا مطمئنی؟\")' class='form-control btn btn-primary'>
</td>
			</tr>
			</form>
			
			" ;
			
   		}
	?>

</table>
</div>