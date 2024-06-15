</html>
</html>
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
            <h2 class="fs-4">Ajout de types</h2>
        </div>
        <form action="<?= WEBROOT ?>" method="POST" class="d-flex mt-2 mb-3">
                <div class="w-50">
                    <input type="text" name="nomType" id="" class="form-control w-80" placeholder="Atouter type..." aria-describedby="helpId" />
                </div>
                <button style="background-color: #9A7450; color:white;font-size:18px;" type="submit" class="btn">Ajouter</button>
                <input type="hidden" name="controlleur" value="type">
                <input type="hidden" name="action" value="add-type">
        </form>
        <div class="card-header" style="text-decoration:underline;">
            <h2 class="fs-4">Listes les types</h2>
        </div>
        <div class="container mb-5">
            <div class="card m-auto">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Libelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($types as $type) : ?>
                                    <tr>
                                        <td><?= $type['Id'] ?></td>
                                        <td><?= $type['nomType'] ?></td>
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