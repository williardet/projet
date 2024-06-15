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
        <div class="card-header" style="text-decoration:underline;">
            <h2>Listes des articles</h2>
        </div>
        <div class="mt-2 mb-3">
            <a style="background-color: #9A7450; color:white;font-size:18px;" id="" class="btn btn-sm" href="<?= WEBROOT ?>/?controlleur=article&action=form-article" role="button">Nouveau</a>
        </div>
        <div class="container mb-5">
            <div class="card m-auto">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Libelle</th>
                                    <th>Prix</th>
                                    <th>Quantité en stock</th>
                                    <th>Type</th>
                                    <th>Catégorie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($articles as $article) : ?>
                                    <tr>
                                        <td><?= $article['nomArt'] ?></td>
                                        <td><?= $article['prixAppro'] ?></td>
                                        <td><?= $article['qteStock'] ?></td>
                                        <td><?= $article['nomType'] ?></td>
                                        <td><?= $article['nomCat'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>


    </main>

</body>

</html>