<div class="users form">
	<h1>Login</h1>
	<?= $this->Form->create('User') ?>
	<fieldset>
		<legend><?= __('Please enter your email and password to login!') ?></legend>
		<?= $this->Form->control('username') ?>
		<?= $this->Form->control('password') ?>
	</fieldset>
	<?= $this->Form->button(__('Login')); ?>
	<?= $this->Form->end(); ?>
</div>