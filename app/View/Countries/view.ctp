<div class="countries view">
<h2><?php  echo __('Country'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($country['Country']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($country['Country']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country'), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Country'), array('action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($country['Projects'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Paese'); ?></th>
		<th><?php echo __('Priorita'); ?></th>
		<th><?php echo __('Settore'); ?></th>
		<th><?php echo __('Stato'); ?></th>
		<th><?php echo __('Osservazioni'); ?></th>
		<th><?php echo __('Pagato Con Cassa'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Localita'); ?></th>
		<th><?php echo __('Diocesi'); ?></th>
		<th><?php echo __('Proposto Da'); ?></th>
		<th><?php echo __('Referente'); ?></th>
		<th><?php echo __('Costo Locale'); ?></th>
		<th><?php echo __('Costo Euro'); ?></th>
		<th><?php echo __('Da Raccogliere'); ?></th>
		<th><?php echo __('Da Inviare'); ?></th>
		<th><?php echo __('Inviati'); ?></th>
		<th><?php echo __('Breve Descrizione'); ?></th>
		<th><?php echo __('Rapporto Sponsor'); ?></th>
		<th><?php echo __('Data Agg Sponsor'); ?></th>
		<th><?php echo __('Verifica Progetto'); ?></th>
		<th><?php echo __('Data Verifica'); ?></th>
		<th><?php echo __('Esito'); ?></th>
		<th><?php echo __('Visible Sul Sito'); ?></th>
		<th><?php echo __('Data Inserimento'); ?></th>
		<th><?php echo __('Utente'); ?></th>
		<th><?php echo __('Data Modifica'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Projects'] as $projects): ?>
		<tr>
			<td><?php echo $projects['id']; ?></td>
			<td><?php echo $projects['paese']; ?></td>
			<td><?php echo $projects['priorita']; ?></td>
			<td><?php echo $projects['settore']; ?></td>
			<td><?php echo $projects['stato']; ?></td>
			<td><?php echo $projects['osservazioni']; ?></td>
			<td><?php echo $projects['pagato_con_cassa']; ?></td>
			<td><?php echo $projects['nome']; ?></td>
			<td><?php echo $projects['localita']; ?></td>
			<td><?php echo $projects['diocesi']; ?></td>
			<td><?php echo $projects['proposto_da']; ?></td>
			<td><?php echo $projects['referente']; ?></td>
			<td><?php echo $projects['costo_locale']; ?></td>
			<td><?php echo $projects['costo_euro']; ?></td>
			<td><?php echo $projects['da_raccogliere']; ?></td>
			<td><?php echo $projects['da_inviare']; ?></td>
			<td><?php echo $projects['inviati']; ?></td>
			<td><?php echo $projects['breve_descrizione']; ?></td>
			<td><?php echo $projects['rapporto_sponsor']; ?></td>
			<td><?php echo $projects['data_agg_sponsor']; ?></td>
			<td><?php echo $projects['verifica_progetto']; ?></td>
			<td><?php echo $projects['data_verifica']; ?></td>
			<td><?php echo $projects['esito']; ?></td>
			<td><?php echo $projects['visible_sul_sito']; ?></td>
			<td><?php echo $projects['data_inserimento']; ?></td>
			<td><?php echo $projects['utente']; ?></td>
			<td><?php echo $projects['data_modifica']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $projects['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $projects['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $projects['id']), null, __('Are you sure you want to delete # %s?', $projects['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
