<h2><?php echo $title; ?></h2>

<table class="table table-bordered table-striped">
<?php foreach ($news as $news_item): ?>
    <tr>
        <td><h3><?php echo $news_item['title']; ?></h3></td>
        <td>
                <?php echo $news_item['text']; ?>
        </td>
        <td><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p></td>
    </tr>

<?php endforeach; ?>
</table>