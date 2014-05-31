<?php
if($post != null): ?>
<ul>
    <?php foreach($post as $post): ?>
    <li><?php echo $post->tituloProjeto; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
