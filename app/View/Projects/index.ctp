<div class="projects index">
	<h2><?php echo __('Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('project_name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('priority_id'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('paid_with_cash'); ?></th>
			<th><?php echo $this->Paginator->sort('place'); ?></th>
			<th><?php echo $this->Paginator->sort('diocese'); ?></th>
			<th><?php echo $this->Paginator->sort('suggested_by'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('local_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('euro_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('to_raise'); ?></th>
			<th><?php echo $this->Paginator->sort('to_send'); ?></th>
			<th><?php echo $this->Paginator->sort('sent'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('sponsor'); ?></th>
			<th><?php echo $this->Paginator->sort('sponsor_added_date'); ?></th>
			<th><?php echo $this->Paginator->sort('project_verified'); ?></th>
			<th><?php echo $this->Paginator->sort('verification_date'); ?></th>
			<th><?php echo $this->Paginator->sort('result_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visible_on_website'); ?></th>
			<th><?php echo $this->Paginator->sort('insertion_date'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_date'); ?></th> //-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['project_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['Country']['name'], array('controller' => 'countries', 'action' => 'view', $project['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $project['Priority']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Area']['name'], array('controller' => 'areas', 'action' => 'view', $project['Area']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['State']['name'], array('controller' => 'states', 'action' => 'view', $project['State']['id'])); ?>
		</td>
		<!-- <td><?php echo h($project['Project']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['paid_with_cash']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['place']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['diocese']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['suggested_by']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['contact']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['local_cost']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['euro_cost']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['to_raise']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['to_send']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['sent']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['sponsor']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['sponsor_added_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['project_verified']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['verification_date']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['result_id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['visible_on_website']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['insertion_date']); ?>&nbsp;</td>
		<td>
                    <?php echo $this->Html->link($project['User']['username'], array ('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
                </td>
		<td><?php echo h($project['Project']['modified_date']); ?>&nbsp;</td> //-->
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
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li> // -->
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li> // -->
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Donations'), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donation'), array('controller' => 'donations', 'action' => 'add')); ?> </li>
	</ul>
</div>
