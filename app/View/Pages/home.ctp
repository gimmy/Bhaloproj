  <div id="index">

			
<div class="index">
<h2>Gestione progetti Bhalobasa</h2>
<p>
  Dal menù laterale è possibile accedere alla gestione dei progetti, degli utenti e delle donazioni. 
</p>
</div>

<div class="actions">
<h3>Actions</h3>
<ul>
  <li><?php echo $this->Html->link (__('Manage projects'), array (
	'controller' => 'projects', 'action' => 'index')); ?>
  </li>
  <li>
    <?php echo $this->Html->link (__("Manage users"), array (
	'controller' => 'users', 'action' => 'index')); ?>
  </li>
  <li>
    <?php echo $this->Html->link (__("Manage donors"), array (
	'controller' => 'donors', 'action' => 'index')); ?>
  </li>
</ul>
</div>


