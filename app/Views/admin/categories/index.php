
<h1 >Administrer les Catégories</h1>
<div class="creation">
  <a href="?p=admin.categories.add" class="btn btn-success">Ajouter</a> 
  <a href="?p=admin.posts.index" class="btn btn-primary">Articles</a>  
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
            foreach($items as $categorie): 
        ?>
            <tr>
                <td><?= $categorie->id_cat; ?></td>
                <td><?= $categorie->titre; ?></td>
                <td>
                    <a href="?p=admin.categories.edit&id=<?= $categorie->id_cat;?>" class="btn btn-primary">Editer</a>

                    <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $categorie->id_cat;?>">
                        <button type="submit" class="btn btn-danger" >Supprimer</button>
                    </form>
                    <!-- href="?p=categories.delete&id= -->
                    
            </tr>
        <?php endforeach ?>
    </tbody>

    
                </td>

</table>