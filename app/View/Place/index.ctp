<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>

<?php echo $this->Html->link(
    'Add Place',
    array('controller' => 'place', 'action' => 'add')
    ); ?>
    
    <?php for($j = 1; $j<=13; $j++){ 
        $var = 'day'.$j;
        print_r($$var);
    }?>

    <table class="table">
        <tr>
            <th>Day</th>
            <th>Title</th>
            <th>Created</th>
            <th>Action</th>
            <th>Day</th>
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
            <td>
                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $p1['Place']['id']),
                    array('confirm' => 'Are you sure?'));
                    ?>
                    <?php echo $this->Html->link('Edit', array('action' => 'edit', $p1['Place']['id'])); ?>
                </td>
                <td>
                    <?php echo $p1['Dates']['day_num']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php unset($place); ?>
    </table>
