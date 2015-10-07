<h1>Blog articles</h1>
<?php echo $this->Html->link('Add New',['action'=>'add']);?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
		<th>Action</th>
    </tr>
	<?php foreach($articles as $article){?>
	<tr>
		<td><?php echo $article->id;?></td>
		<td><?php echo $this->Html->link($article->title,['action'=>'view',$article->id]);?></td>
		<td><?php echo $article->created->format(DATE_RFC850)?></td>
		<td><?php echo $this->Html->link('Edit',['action'=>'edit',$article->id]).' / '.$this->Html->link('Delete',['action'=>'delete',$article->id]);?></td>
	</tr>
	<?php }?>
</table>