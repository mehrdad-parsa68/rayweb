<div class="container">
<table style="border:solid 1px #000; margin:auto;" dir="rtl" border="1" class="table table-striped table-hover table-bordered">
	<tr>
        <th>ردیف</th>
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>تلفن ثابت</th>
        <th>تلفن همراه</th>
        <th>ایمیل</th>
        <th>توضیحات</th>
        <th>تاریخ</th>
     </tr>
	<?php 
		$show_query = "SELECT * FROM `order`";	
		$show_result = mysqli_query($connection,$show_query);
	

			while ($show_row = $show_result->fetch_assoc()) {
				
			$datefa = jdate("Y/m/d | H:i:s",$show_row['date']);
      		echo "
			<form method='post' role='form'>
			<tr>
				<td>$show_row[id]</td>
				<td>$show_row[first_name]</td>
				<td>$show_row[last_name]</td>
				<td>$show_row[phone]</td>
				<td>$show_row[mobile]</td>
				<td>$show_row[site_type]</td>
				<td>$show_row[site_description]</td>
				<td>$datefa</td>
			</tr>
			</form>
			
			" ;
			
   		}
	?>
</table>
</div>