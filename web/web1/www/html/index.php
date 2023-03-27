<?php
error_reporting(0);
highlight_file(__FILE__);
if($_POST['a'] !== $_POST['b'] && $_POST['c'] !== $_POST['d']){
    if(md5($_POST['a']) == md5($_POST['b']) && md5($_POST['c'])===md5($_POST['d'])){
        eval($_REQUEST["QLNU"]);
		echo 'success';
    }
	echo 'nice';
}