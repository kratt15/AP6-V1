<?php
$posts = App::getInstance()->getTable('Post')->all();

?>
<h1 >Administrer les articles</h1>

<table class="table">
    <thead>
            <tr>
                <td>ID</td>
                <td>Titre</td>
                <Td>Action</Td>
            </tr>
        
    </thead>
    <tbody>
        <?php  
            foreach($posts as $post): 
        ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->titre; ?></td>
                <td>
                    <a href="?p=posts.&id=<?= $post->id;?>" class="btn btn-primary">Editer</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>



</table>