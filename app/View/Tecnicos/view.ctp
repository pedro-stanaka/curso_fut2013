<div class="tecnicos view">
<h2><?php echo __('Tecnico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data De Nascimento'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['data_de_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salario'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['salario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anos De Experiencia'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['anos_de_experiencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tecnico['Tecnico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tecnico'), array('action' => 'edit', $tecnico['Tecnico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tecnico'), array('action' => 'delete', $tecnico['Tecnico']['id']), null, __('Are you sure you want to delete # %s?', $tecnico['Tecnico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tecnicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tecnico'), array('action' => 'add')); ?> </li>
	</ul>
</div>
