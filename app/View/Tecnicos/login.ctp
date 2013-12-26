<div class="users form">
	<div class="alert alert-info"><?= $this->Session->flash('auth'); ?></div>
	<?= $this->Form->create('Tecnico'); ?>
		<fieldset>
			<legend>Por favor, digite o login e senha</legend>
			<?= $this->Form->input('login', array('placeholder'=>'Login', 'label'=>false)); ?>
			<?= $this->Form->input('senha', array('placeholder'=>'Senha', 'label'=>false, 'type'=>'password')); ?>
		</fieldset>
	<?= $this->Form->end('Login'); ?>
</div>