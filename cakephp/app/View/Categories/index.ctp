<!-- File: /app/View/Categories/index.ctp -->

<h1>Blog categories</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$category配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($categories as $category): ?>
    <tr>
        <td><?php echo $category['Category']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($category['Category']['title'],
array('controller' => 'categories', 'action' => 'view', $categories['Category']['id'])); ?>
        </td>
        <td><?php echo $categories['Category']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($category); ?>
</table>