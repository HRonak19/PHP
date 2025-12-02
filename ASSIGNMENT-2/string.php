<?php

	$str="hello";
	print $str."<br />";
	echo chr(52)."<br>";
	echo $str."<br />";
	echo strlen($str);
	echo str_word_count($str).'<br />';

	echo strrev($str).'<br />';
	echo strpos($str,"world").'<br />';
	echo str_replace("world","hello","hello world").'<br />';
	echo chr(52).'<br />';
	echo ltrim($str,"helo").'<br />';
	echo rtrim($str,"world").'<br />';
	echo trim($str,'hed').'<br />';
	echo strcmp("world","hello").'<br />';
	echo substr_replace("dolly","hello","world").'<br />';
	echo stristr("hello world"," world").'<br />';
	echo strstr("hello world","hello world").'<br />';
	echo ucfirst("hello world").'<br />';
	echo strtoupper("hello world").'<br />';
	echo strtolower("hello world").'<br />';	

	
?>