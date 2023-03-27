<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<form enctype="multipart/form-data" method="post">
    <p>过滤了吗？<p>
        <input class="input_file" type="file" name="upload_file"/>
        <input class="button" type="submit" name="submit" value="上传"/>
</form>
</html>


<?php
@error_reporting(0);
highlight_file(__FILE__);
if (isset($_POST['submit'])){
    $file_name = trim($_FILES['upload_file']['name']);
    $black = array(".jHtml",".asp",".aspx",".asa",".asax",".ascx",".ashx",".asmx",".php5",".php4",".php3",".php2",".html",".htm",".phtml",".pht",".pHp",".pHp5",".pHp4",".pHp3",".pHp2",".Html",".Htm",".pHtml",".jsp",".jspa",".jspx",".jsw",".jsv",".jspf",".jtml",".jSp",".jSpx",".jSpa",".jSw",".jSv",".jSpf",".jHtml",".asp",".aspx",".asa",".asax",".ascx",".ashx",".asmx");
    $file_ext = strrchr($file_name, '.');
    $name = pathinfo($file_name, PATHINFO_FILENAME);

    $encode = base64_encode($name);
    $file_ext = strtolower($file_ext);

    if (!in_array($file_ext, $black)){
        $temp_file = $_FILES['upload_file']['tmp_name'];
        $img_path = 'upload'.'/'.$encode.$file_ext;
        if (isset($temp_file)) {
            if (move_uploaded_file($temp_file, $img_path)) {
                $is_upload = true;
            } else {
                $msg = '上传出错！';
            }
        }
    }else {
        $msg = '再好好看看';
    }
}
if($is_upload){
    echo '上传成功';
}
?>