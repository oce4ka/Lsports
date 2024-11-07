<?php 
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

$id = stripslashes(trim($_POST['id']));
$last_key = stripslashes(trim($_POST['key']));

$video_list = get_field('video', $id);
$video_count = count($video_list);
foreach ($video_list as $key => $video) {
	if ($key == $video_count-1) {
		$last = 'data-last="true"';
	} else {
		$last = '';
	}
	if ($key < ($last_key + 1)) {
		continue;
	}
	if ($key > ($last_key + 9)) {
		break;
	} ?>
	<div class="video-item" data-key="<?php echo $key; ?>" <?php echo $last; ?>>
		<div class="cover">
			<?php if (isset($video['cover']) && !empty($video['cover'])) { ?>
				<img src="<?php echo $video['cover']['url']; ?>" alt="<?php echo $video['cover']['alt']; ?>">
			<?php } else { ?>
				<img src="/wp-content/uploads/video_cover_noimg.jpg" alt="no image">
			<?php } ?>
		</div>
		<?php if (isset($video['title']) && !empty($video['title'])) { ?>
			<h2><?php echo $video['title']; ?></h2>
		<?php } ?>
	</div>
<?php }