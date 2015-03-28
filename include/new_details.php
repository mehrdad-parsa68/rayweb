<?php 
	$new_id = $_GET['project_address'];
	$news_query = "SELECT * FROM `news` WHERE id = '$new_id' LIMIT 1";
	$news_result = mysqli_query($connection,$news_query);
	$news_row = mysqli_fetch_assoc($news_result);
	
	
	/*$tags = '';
	$tag_query = "SELECT tags.id,tags.name,tags_articles.article_id,tags_articles.tag_id FROM tags 
				INNER JOIN tags_articles ON tags.id = tags_articles.tag_id 
									WHERE tags_articles.article_id = '$article_id' ;";
	$tag_result = mysqli_query($connection,$tag_query);
	while($tag_row = mysqli_fetch_assoc($tag_result)){
		$tags .= "<li><a href='".$prefix."/tags/".$tag_row['name']."/' target='_blank' >$tag_row[name]</a></li> ";
		}*/
		
		
	// stat query
	$stat = $new_id['stat'] + 1;
	$stat_query = "UPDATE `news` SET `stat`='$stat' WHERE id = '$new_id' ; ";
	mysqli_query($connection,$stat_query);
?>
<div class="pg-opt pin">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $prefix; ?>/">صفحه اصلی</a></li>
                        <li class="active">اخبار فناوری اطلاعات (IT)</li>
                    </ol>
                </div>
                <div class="col-xs-12">
                    <h1 class="h1-small news"><?php echo $news_row['title'] ?></h1>
                </div>
            </div>
            <hr><br>
            <?php
            	if(!empty($news_row['image_link'])){
					echo "<img class='img-responsive' style='margin:auto' src='$news_row[image_link]' alt='$news_row[title] | طراحی وب سایت رای وب' title='$news_row[title] | طراحی وب سایت رای وب'>";
					}
			?>
        </div>
    </div>
    
    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                	<div class="container article">
                    	<p align="justify">
                    	<?php echo $news_row['description'];?> 
                        </p>      
                      <div>
                            <p align="right">تعداد مشاهده : <?php echo $news_row['stat']; ?></p>
                             <p>برچسب های مقاله :</p><div class="itemTags">
                        	<ul class="tags">
                            	<?php //echo $tags ?>
                            </ul>
                        </div>
                      </div>
                    </div>
                   
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
    
    
