<?php

class Seo{
	
	public $page ;
	public $connection ;
	public $fetch_row ;
	public $titleExt;
	public $seperator;
	
	public function Seo($page, $connection ,$titleExt,$seperator){	
		$this->page = $page;
		if(!$page){
			$this->page = 'home';
			}	
		
		$this->connection = $connection;
		$this->titleExt = $titleExt;
		$this->seperator = $seperator;
		
		$fetch_query = "SELECT * FROM pages WHERE latin_name = '$this->page' ;";
		$fetch_result = mysqli_query($this->connection , $fetch_query);
		$this->fetch_row = mysqli_fetch_assoc($fetch_result);									
		}	
	public function fetchPersianUrl(){
		return $this->fetch_row['persian_name'];									
		}
	public function getTitle(){
		return ($this->fetch_row['persian_name'].$this->seperator.$this->titleExt);
		}	
	public function getDescription(){
		return $this->fetch_row['description'];
		}	
	public function getKeyword(){
		return $this->fetch_row['keyword'];
		}
	
}
?>