<?php
    $collectionTitle = strip_formatting(collection('Name'));
    if ($collectionTitle != '') {
        $collectionTitle = ': &quot;' . $collectionTitle . '&quot; ';
    } else {
        $collectionTitle = '';
    }
    $collectionTitle = __('Edit Collection #%s', collection('id')) . $collectionTitle;
?>

<?php head(array('title'=> $collectionTitle, 'bodyclass'=>'collections')); ?>
<h1 class="section-title"><?php echo $collectionTitle; ?></h1>

	<section id="content" class="container">
	
		<div class="two columns">
			&nbsp;
		</div>
		
		<div class="ten columns">
		
		<form method="post">
			

			<?php include 'form.php';?>
				
			<div id="save" class="three columns omega">
			
				<div class="panel">
					<input type="submit" name="submit" class="big green button" id="save-changes" value="<?php echo __('Save Changes'); ?>" />
					<a href="<?php echo html_escape(public_uri('collections/show/'.collection('id'))); ?>" class="big blue button" target="_blank"><?php echo __('View Public Page'); ?></a>
					<?php echo link_to_collection(__('Delete Collection'), array('class' => 'big red button'), 'delete-confirm'); ?>
					
					    <?php echo $this->formLabel('public', __('Public')); ?>
					<?php 
					    echo checkbox(array('name'=>'public', 'id'=>'public'), $collection->public);
					?>
					
					    <?php echo $this->formLabel('featured', __('Featured')); ?>
					<?php 
					    echo checkbox(array('name'=>'featured', 'id'=>'featured'), $collection->featured); 
					?>

				</div>			
				
			</div>			
			
		</form>
			
		</div>
<?php foot(); ?>
