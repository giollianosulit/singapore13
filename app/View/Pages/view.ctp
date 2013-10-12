<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Place']['idplaces']); ?></h1>

<p><small>Created: <?php echo $post['Place']['title']; ?></small></p>

<p><?php echo h($post['Place']['body']); ?></p>