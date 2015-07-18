<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<h1>[カテゴリー<?php echo $selectedCategory_name [0]['Category']['name']; ?>の一覧]</h1>

    <div style="float:left;">
<?php echo $this->Html->link(
    'Add Post',
    array('action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $post['Category']['name']; ?>
        </td>
        <td>   
            <?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    </div>
    
    <?php endforeach; ?>
    <?php unset($post); ?>
    </table>
    </div>
    <div style="float:right;">
    <table>
        <?php foreach ($categories as $category): ?>
        <li>
        <?php echo $this->Html->link($category['Category']['name'].'('.$category['Category']['count'].')',
array('controller' => 'posts','action'  => 'category_index', $category['Category']['id'])); ?>
        </li>
    <?php endforeach; ?>
    <?php unset($category); ?>
    </table>
    </div>