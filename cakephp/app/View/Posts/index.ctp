<!-- File: /app/View/Posts/index.ctp -->
<h1>~ DoDo　新着情報 ~︎</h1>
<div style="float:center;font-size:44px;">
<?php echo $this->Html->link(
    '♡Please your information♡',
    array('action' => 'add')
); ?>
<table>
    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    <table class="table table-striped">
    <?php foreach ($posts_life as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
    array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Category']['name']; ?>
        </td>
        <td><?php echo $post['Post']['modified']; ?></td>
        </tr>
        </div>
    
        <?php endforeach; ?>
        <?php unset($posts_life); ?>

    <?php foreach ($posts_activity as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
    array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Category']['name']; ?>
        </td>
        <td><?php echo $post['Post']['modified']; ?></td>
        </tr>
        </div>
        
        <?php endforeach; ?>
        <?php unset($post); ?>


    <?php foreach ($posts_restrant as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
    array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
                <?php echo $post['Category']['name']; ?>
        </td>
        <td><?php echo $post['Post']['modified']; ?></td>
        </tr>
        </div>
        
    <?php endforeach; ?>
    <?php unset($post); ?>
    </table>
    </table>
    </div>