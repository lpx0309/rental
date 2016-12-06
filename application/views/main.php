<?php $this->load->view('header'); ?>

<div class="container">
  <div class="row">
  	<?php
	if($tools){
		foreach($tools as $t){
			?>
            <div class="col-sm-6 col-md-3">
              <div class="thumbnail">
                <a href="<?php echo makeurl('Detail','',$t['id']); ?>" target="_blank"><img src="<?php echo $t['img']; ?>" /></a>
                <div class="caption">
                  <h3><a href="<?php echo makeurl('Detail','',$t['id']); ?>" target="_blank"><?php echo $t['name']; ?></a></h3>
                  <p><?php echo $t['price']; ?></p>
                  <p>
                  <a href="<?php echo makeurl('Detail','',$t['id']); ?>" class="btn btn-primary" role="button" target="_blank">查看</a> 
                  <a href="<?php echo $this->config->item('base_url'); ?>" class="btn btn-default" role="button">Button</a>
                  <a href="<?php echo $this->config->item('base_url'); ?>" class="btn btn-default" role="button">Button</a>
                  </p>
                </div>
              </div>
            </div>
            <?php
		}
	}
	?>
  </div>
</div>

<?php $this->load->view('footer'); ?>