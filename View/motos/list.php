<?php
include('View/parts/header.php');
?>

<div class="container mb-4">
    <h1 class="text-center mb-4">Les motos !</h1>
    <div id="return-btn">
        <a href="index.php?controller=default&action=home" class="text-decoration-none">Retour</a>
    </div>

    <!-- <a href="index.php?controller=planet&action=ajout">
        <button class="mt-5">Ajouter une planète</button>
    </a> -->

    <table class="table mt-5">
        <thead class="bg-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Modèle</th>
                <th scope="col">Type</th>
                <th scope="col" class="text-center">Image</th>
                <th scope="col" class="text-center">Détail</th>
                <th scope="col" class="text-center">Supprimer</th>                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motos as $moto) : ?>
                <tr>
                    <th scope="row"><?php echo ($moto->getId()) ?></th>
                    <td><?php echo ($moto->getMarque()) ?></td>
                    <td><?php echo ($moto->getModele()) ?></td>
                    <td><?php echo ($moto->getType()) ?></td>
                    <td><img src="<?php echo ($moto->getImage()) ?>" alt="une moto" width="100" height="100" class="rounded"></td>
                    <td><a href="index.php?controller=moto&action=detail&id=<?php echo($moto->getId())?>"><img src="public/img/detailplanet.jpg" alt="image de planète" width="100" height="100" class="rounded"></a></td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <a href="index.php?controller=moto&action=delete&id=<?php echo($moto->getId())?>">
                            <img src="public/img/dmauldelete.png" alt="logo de suppression" width="60" height="60">
                        </a>
                        </div>
                    </td>
                <?php endforeach; ?>
                </tr>
        </tbody>
    </table>
</div>

<?php
include ('View/parts/footer.php');