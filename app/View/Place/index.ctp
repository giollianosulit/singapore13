<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<?php echo $this->Html->link(
    'Add Place',
    array('controller' => 'place', 'action' => 'add')
    ); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->
    <?php foreach ($place as $p1): ?>
    <tr>

        <td><?php echo $p1['Place']['id']; ?></td>
        <td><?php echo $p1['Place']['title']; ?></td>
        <td>
            <?php echo $this->Html->link($p1['Place']['body'],
            array('controller' => 'place', 'action' => 'view', $p1['Place']['id'])); ?> 
        </td>
    </tr>
<?php endforeach; ?>
<?php unset($place); ?>
</table>
