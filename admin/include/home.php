<?php require_once('core/core.php'); 
error_reporting(E_ALL);
?>
<table style="border:solid 1px #000; margin:auto;" dir="rtl" border="1" class="table table-striped table-hover table-bordered">
	<tr>
        <th>ردیف</th>
        <th>نام و نام خانوادگی</th>
        <th>شماره تماس</th>
        <th>ایمیل</th>
        <th>آدرس</th>
        <th>نوع همکاری</th>
        <th>توانایی</th>
        <th>سوابق</th>
        <th>تاریخ</th>
     </tr>
	<?php 
		$show_query = "SELECT * FROM hire";	
		$show_result = mysqli_query($connection,$show_query);
	

			while ($show_row = $show_result->fetch_assoc()) {
				
			$datefa = jdate("Y/m/d | H:i:s",$show_row['register_date']);
      		echo "
			<form method='post' role='form'>
			<tr>
				<td>$show_row[id]</td>
				<td>$show_row[full_name]</td>
				<td>$show_row[mobile]</td>
				<td>$show_row[email]</td>
				<td>$show_row[address]</td>
				<td>$show_row[category]</td>
				<td>$show_row[ability]</td>
				<td>$show_row[resume]</td>
				<td>$datefa</td>
			</tr>
			</form>
			
			" ;
			
   		}
	?>
</table>