<?php
$categories= App::getInstance()->getTable('Categories')->all();

?>
<h1 >Administrer les articles</h1>
<div class="creation">
  <a href="?p=posts.create" class="btn btn-success">Ajouter</a>  
</div>
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
            foreach($categories as $categorie): 
        ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->titre; ?></td>
                <td>
                    <a href="?p=posts.edit&id=<?= $post->id;?>" class="btn btn-primary">Editer</a>

                    <form action="?p=posts.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id;?>">
                        <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $post->id;?>" >Supprimer</button>
                    </form>
                   
            </tr>
        <?php endforeach ?>
    </tbody>

    
                </td>

</table>