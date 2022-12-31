<ul>

<?php  foreach($db->query('SELECT *FROM articles') as $post): ?>

    <li>
        <a href="index.php?p=post&id= <?= $post->id; ?>"><?= $post->titre; ?></a>
    </li>

    <?php endforeach; ?>
 </ul>
 on s'est arrêté a 21 min du cour avee le pdo et la basede donnée