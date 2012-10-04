<div class="projects index">
	<h2><?php echo __('Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('paese'); ?></th>
			<th><?php echo $this->Paginator->sort('priorita'); ?></th>
			<th><?php echo $this->Paginator->sort('settore'); ?></th>
			<th><?php echo $this->Paginator->sort('stato'); ?></th>
			<th><?php echo $this->Paginator->sort('osservazioni'); ?></th>
			<th><?php echo $this->Paginator->sort('pagato_con_cassa'); ?></th>
			<th><?php echo $this->Paginator->sort('localita'); ?></th>
			<th><?php echo $this->Paginator->sort('diocesi'); ?></th>
			<th><?php echo $this->Paginator->sort('proposto_da'); ?></th>
			<th><?php echo $this->Paginator->sort('referente'); ?></th>
			<th><?php echo $this->Paginator->sort('costo_locale'); ?></th>
			<th><?php echo $this->Paginator->sort('costo_euro'); ?></th>
			<th><?php echo $this->Paginator->sort('da_raccogliere'); ?></th>
			<th><?php echo $this->Paginator->sort('da_inviare'); ?></th>
			<th><?php echo $this->Paginator->sort('inviati'); ?></th>
			<th><?php echo $this->Paginator->sort('breve_descrizione'); ?></th>
			<th><?php echo $this->Paginator->sort('rapporto_sponsor'); ?></th>
			<th><?php echo $this->Paginator->sort('data_agg_sponsor'); ?></th>
			<th><?php echo $this->Paginator->sort('verifica_progetto'); ?></th>
			<th><?php echo $this->Paginator->sort('data_verifica'); ?></th>
			<th><?php echo $this->Paginator->sort('esito'); ?></th>
			<th><?php echo $this->Paginator->sort('visible_sul_sito'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inserimento'); ?></th>
			<th><?php echo $this->Paginator->sort('utente'); ?></th>
			<th><?php echo $this->Paginator->sort('data_modifica'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['nome']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['paese']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['priorita']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['settore']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['stato']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['osservazioni']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['pagato_con_cassa']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['localita']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['diocesi']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['proposto_da']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['referente']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['costo_locale']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['costo_euro']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['da_raccogliere']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['da_inviare']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['inviati']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['breve_descrizione']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['rapporto_sponsor']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['data_agg_sponsor']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['verifica_progetto']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['data_verifica']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['esito']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['visible_sul_sito']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['data_inserimento']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['utente']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['data_modifica']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?></li>
	</ul>
</div>
