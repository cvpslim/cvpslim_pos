<?php echo $this->Html->css('demo') ?>
<?php echo $this->Html->script('lib/jquery') ?>
<?php echo $this->Html->css('keyboard') ?>
<?php echo $this->Html->script('keyboard/jquery.keyboard') ?>
<script>
		$(function(){
			$('#keyboard').keyboard();
		});
	</script>
<div id="wrap"> <!-- wrapper only needed to center the input -->

		<!-- keyboard input -->
		<input id="keyboard" type="text">
</div>