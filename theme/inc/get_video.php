<?php 
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

$id = stripslashes(trim($_POST['id']));
$key = stripslashes(trim($_POST['key']));

$video_list = get_field('video', $id);
$video = $video_list[$key];
echo $video['video_embed'];