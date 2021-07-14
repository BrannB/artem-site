<?php foreach ($vars as $restaurants): ?>
    <?php foreach ($restaurants as $key => $value): ?>
        <a href="#"><?php echo $value['title'] ?></a> <br>
    <?php endforeach; ?>
<?php endforeach; ?>
