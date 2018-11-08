<?php
	/**
	* format class
	*/
	class post_format{
		public function formatDate($date){
			return date('F j, Y, g:j a', strtotime($date));

		}

		public function textshrt($text, $limit = 400){
			$text = $text. " ";
			$text = substr($text, 0, $limit);
			$text = substr($text, 0, strrpos($text, ' '));
			$text = $text. " ......";
			return $text;
		}
	}
?>