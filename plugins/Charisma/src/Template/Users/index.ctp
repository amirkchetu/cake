<h1>Users</h1>
<?php echo $this->Html->link('Add New',['action'=>'add']);?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
		<th>Action</th>
    </tr>
	<?php foreach($users as $user){?>
	<tr>
		<td><?php echo $user->id;?></td>
		<td><?php echo $this->Html->link($user->name,['action'=>'view',$user->id]);?></td>
		<td><?php echo $user->created->format(DATE_RFC850)?></td>
		<td><?php echo $this->Html->link('Edit',['action'=>'edit',$user->id]).' / '.$this->Html->link('Delete',['action'=>'delete',$user->id]);?></td>
	</tr>
	<?php }?>
</table>