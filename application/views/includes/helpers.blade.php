<?php
	function scandirectory($path){			
		$dir = $_SERVER['DOCUMENT_ROOT'].$path;
		$files = scandir($dir, 1);
		$files = array_diff(scandir($dir), array('..', '.', 'Thumbs.db'));

		return $files;
	}

?>
