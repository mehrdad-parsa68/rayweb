<?php
	class DB{
		
		public function insert($parameters,$tblName){
			
			$fields = ''; $contents = '';
			
			foreach($parameters as $key=>$value){
				$fields .=  '`'.$key.'`, ';
				$contents .=  "'".$value."', ";
				}
				$fields = substr($fields,0,strlen($fields)-2);	
				$contents = substr($contents,0,strlen($contents)-2);
				
				return "INSERT INTO `$tblName`($fields) VALUES ($contents) ; ";
												
			}

		}
		
?>