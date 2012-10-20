<?php

class Load {
	public function view($filename, $data) {
		if( is_array($data) ) {
			extract($data);
		}
		include 'views/' . $filename;
	}
}