<div class="tecnicos form">
<?php echo $this->Form->create('Tecnico'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tecnico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tecnico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tecnico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tecnicos'), array('action' => 'index')); ?></li>
	</ul>
</div>
