<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paese'); ?></dt>
		<dd>
			<?php echo h($project['Project']['paese']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priorita'); ?></dt>
		<dd>
			<?php echo h($project['Project']['priorita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settore'); ?></dt>
		<dd>
			<?php echo h($project['Project']['settore']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stato'); ?></dt>
		<dd>
			<?php echo h($project['Project']['stato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Osservazioni'); ?></dt>
		<dd>
			<?php echo h($project['Project']['osservazioni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagato Con Cassa'); ?></dt>
		<dd>
			<?php echo h($project['Project']['pagato_con_cassa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($project['Project']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localita'); ?></dt>
		<dd>
			<?php echo h($project['Project']['localita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diocesi'); ?></dt>
		<dd>
			<?php echo h($project['Project']['diocesi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proposto Da'); ?></dt>
		<dd>
			<?php echo h($project['Project']['proposto_da']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referente'); ?></dt>
		<dd>
			<?php echo h($project['Project']['referente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Locale'); ?></dt>
		<dd>
			<?php echo h($project['Project']['costo_locale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costo Euro'); ?></dt>
		<dd>
			<?php echo h($project['Project']['costo_euro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Da Raccogliere'); ?></dt>
		<dd>
			<?php echo h($project['Project']['da_raccogliere']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Da Inviare'); ?></dt>
		<dd>
			<?php echo h($project['Project']['da_inviare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inviati'); ?></dt>
		<dd>
			<?php echo h($project['Project']['inviati']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Breve Descrizione'); ?></dt>
		<dd>
			<?php echo h($project['Project']['breve_descrizione']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rapporto Sponsor'); ?></dt>
		<dd>
			<?php echo h($project['Project']['rapporto_sponsor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Agg Sponsor'); ?></dt>
		<dd>
			<?php echo h($project['Project']['data_agg_sponsor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verifica Progetto'); ?></dt>
		<dd>
			<?php echo h($project['Project']['verifica_progetto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Verifica'); ?></dt>
		<dd>
			<?php echo h($project['Project']['data_verifica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esito'); ?></dt>
		<dd>
			<?php echo h($project['Project']['esito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible Sul Sito'); ?></dt>
		<dd>
			<?php echo h($project['Project']['visible_sul_sito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inserimento'); ?></dt>
		<dd>
			<?php echo h($project['Project']['data_inserimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utente'); ?></dt>
		<dd>
			<?php echo h($project['Project']['utente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Modifica'); ?></dt>
		<dd>
			<?php echo h($project['Project']['data_modifica']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
	</ul>
</div>
