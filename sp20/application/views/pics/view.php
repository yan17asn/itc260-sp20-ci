<?php //application/views/pics/view.php

$this->load->view($this->config->item('theme') . 'header');

?>

<h1><?php echo $pics_title;?></h1>

<?php foreach ($pics as $pic):?>

<?php  $size = 'm';
$photo_url = '
http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';?>
<div id="pic" style="float:left; width:30%;overflow:hidden;"><img title='<?php echo $pic->title;?>' src='<?php echo $photo_url;?>'/>
<p><?php echo $pic->title;?></p></div>






<? endforeach;

$this->load->view($this->config->item('theme') . 'footer');

?>