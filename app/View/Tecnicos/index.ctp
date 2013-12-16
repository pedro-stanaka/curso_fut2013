<div class="tecnicos index">
	<h2><?php echo __('Tecnicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('data_de_nascimento'); ?></th>
			<th><?php echo $this->Paginator->sort('salario'); ?></th>
			<th><?php echo $this->Paginator->sort('anos_de_experiencia'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tecnicos as $tecnico): ?>
	<tr>
		<td><?php echo h($tecnico['Tecnico']['id']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['nome']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['data_de_nascimento']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['salario']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['anos_de_experiencia']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['created']); ?>&nbsp;</td>
		<td><?php echo h($tecnico['Tecnico']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tecnico['Tecnico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tecnico['Tecnico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tecnico['Tecnico']['id']), null, __('Are you sure you want to delete # %s?', $tecnico['Tecnico']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tecnico'), array('action' => 'add')); ?></li>
	</ul>
</div>
