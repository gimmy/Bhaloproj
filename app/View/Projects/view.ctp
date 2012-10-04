<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Project Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Country']['name'], array('controller' => 'countries', 'action' => 'view', $project['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $project['Priority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Area']['name'], array('controller' => 'areas', 'action' => 'view', $project['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['State']['name'], array('controller' => 'states', 'action' => 'view', $project['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($project['Project']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid With Cash'); ?></dt>
		<dd>
			<?php echo h($project['Project']['paid_with_cash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($project['Project']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diocese'); ?></dt>
		<dd>
			<?php echo h($project['Project']['diocese']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suggested By'); ?></dt>
		<dd>
			<?php echo h($project['Project']['suggested_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($project['Project']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Cost'); ?></dt>
		<dd>
			<?php echo h($project['Project']['local_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Euro Cost'); ?></dt>
		<dd>
			<?php echo h($project['Project']['euro_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Raise'); ?></dt>
		<dd>
			<?php echo h($project['Project']['to_raise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Send'); ?></dt>
		<dd>
			<?php echo h($project['Project']['to_send']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sent'); ?></dt>
		<dd>
			<?php echo h($project['Project']['sent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sponsor'); ?></dt>
		<dd>
			<?php echo h($project['Project']['sponsor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sponsor Added Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['sponsor_added_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Verified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_verified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verification Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['verification_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['result_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible On Website'); ?></dt>
		<dd>
			<?php echo h($project['Project']['visible_on_website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insertion Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['insertion_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['User']['username'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified_date']); ?>
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
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Donations'), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donation'), array('controller' => 'donations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Donations'); ?></h3>
	<?php if (!empty($project['Donation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Donor Id'); ?></th>
		<th><?php echo __('Indications'); ?></th>
		<th><?php echo __('Letter'); ?></th>
		<th><?php echo __('Sent'); ?></th>
		<th><?php echo __('Insertion Date'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Edit Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Donation'] as $donation): ?>
		<tr>
			<td><?php echo $donation['id']; ?></td>
			<td><?php echo $donation['amount']; ?></td>
			<td><?php echo $donation['project_id']; ?></td>
			<td><?php echo $donation['donor_id']; ?></td>
			<td><?php echo $donation['indications']; ?></td>
			<td><?php echo $donation['letter']; ?></td>
			<td><?php echo $donation['sent']; ?></td>
			<td><?php echo $donation['insertion_date']; ?></td>
			<td><?php echo $donation['user_id']; ?></td>
			<td><?php echo $donation['edit_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'donations', 'action' => 'view', $donation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'donations', 'action' => 'edit', $donation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'donations', 'action' => 'delete', $donation['id']), null, __('Are you sure you want to delete # %s?', $donation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Donation'), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
