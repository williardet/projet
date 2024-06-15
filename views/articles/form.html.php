<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <!-- bootstrap css -->

    <main>
        <div class="container mb-5 w-75">
            <div class="card-header mb-5" style="text-decoration:underline;">
                <h2>Ajout d'articles</h2>
            </div>
            <form class="border border-black p-5" action="<?= WEBROOT ?>" method="POST">
                <div class="mb-4 d-flex justify-content-between">
                    <label for="nomArt" class="form-label fs-4">Libelle</label>
                    <input name="nomArt" type="text" class="form-control w-75" id="nomArt" placeholder="Lebelle de l'article..." aria-describedby="emailHelp">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="prixAppro" class="form-label fs-4">Prix</label>
                    <input name="prixAppro" type="text" class="form-control w-75" id="prix" placeholder="Prix de l'article..." aria-describedby="emailHelp">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="qteStock" class="form-label fs-4">Quantité en stock</label>
                    <input name="qteStock" type="text" class="form-control w-75" id="qteStock" placeholder="Quantité en stock de l'article..." aria-describedby="emailHelp">
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="qteStock" class="form-label fs-4">Types</label>
                    <select name="IdType" class="form-select mb-3 w-75" id="" aria-label="Floating label select example">
                        <option selected>Type de l'article</option>
                        <?php foreach ($types as $type) : ?>
                            <option value="<?= $type['Id'] ?>"><?= $type['nomType'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-4 d-flex justify-content-between">
                    <label for="qteStock" class="form-label fs-4">Catégories</label>
                    <select name="IdCat" class="form-select mb-3 w-75" id="floatingSelect">
                        <option  selected>Catégorie de l'article</option>
                        <?php foreach ($categories as $categorie) : ?>
                            <option value="<?= $categorie['id'] ?>"><?= $categorie['nomCat'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mx-auto" style="width:fit-content;">
                    <button style="background-color: #9A7450; color:white;font-size:18px;" type="submit" class="btn ">Ajouter</button>
                    <input type="hidden" name="controlleur" value="article">
                    <input type="hidden" name="action" value="add-article">
                </div>
            </form>

        </div>


    </main>

</body>

</html>