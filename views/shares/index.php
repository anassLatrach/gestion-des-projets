<div>

	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	
	<?php foreach($viewmodel as $item) : ?>
		<!--<div class="well">
			<h3><?php// echo $item['title']; ?></h3>
			<small><?php //echo $item['create_date']; ?></small>
			<hr />
			<p><?php //echo $item['body']; ?></p>
			<br />
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
            <a class="btn btn-danger" href="<?php echo ROOT_PATH ?>shares/delete/<?php echo $item['id']; ?>" >Delete</a>
            <a class="btn btn-primary" href="<?php echo ROOT_PATH ?>shares/edit/<?php echo $item['id']; ?>" >Edit</a>
		</div>
    -->
    <?php 
    $a = array($item['title'],$item['body'],$item['link']);
    $out = array_values($a);
   json_encode($out); ?>
	<?php endforeach; ?>
    <?php endif; ?>
</div>