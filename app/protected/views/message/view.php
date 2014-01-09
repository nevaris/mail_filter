<?php
$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->id,
);

?>
<div class="row">  
  <div class="span11 post"> 
<table class="message items table table-striped">
<tbody>
  <tr class="odd">
    <td><strong>From: <?php  echo getSenderNameForDigest($model->sender_id); ?></strong><br /></td><td class="right"><?php echo message_udate($model->udate); ?></td>
  </tr>
  <tr class="even">
    <td class="subject" colspan="2"><?php echo $model->subject; ?></td>
  </tr>
<tr class="odd">
<td colspan="2" class="message_body"><div>
<?php 
if (empty($model->body_text) && empty($model->body_html)) {
  ?>
  Sorry, we could not locate the message in your review or inbox folder.
  <?php
} else if (empty($model->body_html)) {
  ?><pre><?php
  echo $model->body_text;
  ?></pre><?php
}
else
  echo $model->body_html;
?>  
</div>
</td>
</tr>
</tbody>
</table>
