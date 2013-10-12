<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($place['Place']['id']); ?></h1>

<p><small>Created: <?php echo $place['Place']['title']; ?></small></p>

<p><?php echo h($place['Place']['body']); ?></p>