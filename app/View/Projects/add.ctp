<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('paese');
		echo $this->Form->input('priorita');
		echo $this->Form->input('settore');
		echo $this->Form->input('stato');
		echo $this->Form->input('osservazioni');
		echo $this->Form->input('pagato_con_cassa');
		echo $this->Form->input('nome');
		echo $this->Form->input('localita');
		echo $this->Form->input('diocesi');
		echo $this->Form->input('proposto_da');
		echo $this->Form->input('referente');
		echo $this->Form->input('costo_locale');
		echo $this->Form->input('costo_euro');
		echo $this->Form->input('da_raccogliere');
		echo $this->Form->input('da_inviare');
		echo $this->Form->input('inviati');
		echo $this->Form->input('breve_descrizione');
		echo $this->Form->input('rapporto_sponsor');
		echo $this->Form->input('data_agg_sponsor');
		echo $this->Form->input('verifica_progetto');
		echo $this->Form->input('data_verifica');
		echo $this->Form->input('esito');
		echo $this->Form->input('visible_sul_sito');
		echo $this->Form->input('data_inserimento');
		echo $this->Form->input('utente');
		echo $this->Form->input('data_modifica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
	</ul>
</div>
