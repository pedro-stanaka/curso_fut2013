<div class="tecnicos form">
<?php echo $this->Form->create('Tecnico'); ?>
	<fieldset>
		<legend><?php echo __('Add Tecnico'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('login');
		echo $this->Form->input('senha', array('type'=>'password'));
		echo $this->Form->input('data_de_nascimento');
		echo $this->Form->input('salario');
		echo $this->Form->input('anos_de_experiencia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tecnicos'), array('action' => 'index')); ?></li>
	</ul>
</div>
