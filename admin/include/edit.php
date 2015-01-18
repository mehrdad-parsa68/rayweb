<div class="row">          
    <div id="ulSorList">
        
        
       <?php 
       $sample_query = "SELECT * FROM `project`";
       $sample_result = mysqli_query($connection,$sample_query);
       while($sample_row = mysqli_fetch_assoc($sample_result)){
           $cat = $sample_row['project_type'];
           
           switch ($cat) {
            case 'شرکتی':
                $cat = 1;
                break;
            case 'شخصی':
                $cat = 2;
                break;
            case 'فروشگاهی':
                $cat = 3;
                break;
            case 'هنری':
                $cat = 4;
                break;
            case 'سرمایه گذاری':
                $cat = 5;
                break;
            case 'پرتال':
                $cat = 6;
                break;
        }
           echo"
            <div class='mix category_$cat col-lg-4 col-md-4 col-sm-6' data-cat='$cat'>
                <div class='w-box inverse'>
                    <div class='row'>
                        <div class='text-center'>
                            <h2>$sample_row[project_name]</h2>
                        </div>
                        
                    </div>
					<div class='text-center'>
						<a href='$sample_row[project_address]' target='_blank' class='btn btn-xs btn-one theater'><i class='fa fa-plus-circle'></i> ورود به سایت</a>
						<a href='?page=projectdetail&id=$sample_row[id]' target='_blank' class='btn btn-xs btn-one'><i class='fa fa-link'></i> مشخصات سایت</a>
                    </div>
                </div>
            </div>";
       }
        ?>
        
        
        
        <div class="gap"></div>
    </div>
                                
</div>