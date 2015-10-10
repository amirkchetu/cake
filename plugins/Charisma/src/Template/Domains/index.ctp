<h1>Domains & Hostings</h1>
<?php echo $this->Html->link('Add New',['action'=>'add']);?>
<table>
	<?php if(isset($domains) && !empty($domains)){?>
		<tr>
			<th>Id</th>
		</tr>
		<?php foreach($domains as $domain){?>
		<tr>
			<td><?php echo $domain->id;?></td>
		</tr>
		<?php }
		} else {?>
		<tr>
			<td>Nothing Found</td>
		</tr>
		
	<?php
	}
	?>
</table>