<div class="lights index">
	<h2><?php __('Lights');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ID');?></th>
			<th><?php echo $this->Paginator->sort('hikari');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lights as $light):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $light['Light']['ID']; ?>&nbsp;</td>
		<td><?php echo $light['Light']['hikari']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $light['Light']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $light['Light']['ID'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $light['Light']['ID']), null, sprintf(__('Are you sure you want to delete # %s?', true), $light['Light']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

<!--ƒOƒ‰ƒt•\Ž¦-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">// <![CDATA[
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = new google.visualization.DataTable();
		data.addColumn('string', 'id');
		data.addColumn('number', 'right');
		<?php foreach($lights as $light): ?>

			data.addRows([
				['<?php echo h($light['Light']['ID']); ?>', <?php echo h($light['Light']['hikari']); ?>]
			]);
		<?php endforeach; ?>

 
var options = {
title: 'My Daily Activities'
};
 
var chart = new google.visualization.LineChart(document.getElementById('piechart'));
chart.draw(data, options);
}
// ]]></script></pre>
<div id="piechart" style="width: 900px; height: 500px;"></div>


	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Light', true), array('action' => 'add')); ?></li>
	</ul>
</div>