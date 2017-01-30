<?php
class HTML
{
		public $options;
		
		public static function inputText($value,$options=array())
		{
			$optionText = "" ;
			foreach($options  as $key=>$val)
			{

				$optionText.= " $key='$val' ";
			}	


			return  "<div><input  value='$value' $optionText ></div>";
		}


		public static function  url($action,$params=array())
		{
			return "index.php?a={$action}&".http_build_query($params);
		}

		
}
?>