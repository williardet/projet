<!doctype html>
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
    <header>
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #9A7450;">
            <div class="container">
                <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavId">
                    <a class="navbar-brand" href="#" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><span style="Color:#641818;font-size:40px;font-weight:bold;">Kity</span><span style="Color:white;text-decoration: underline;font-size:24px;">.couture</span> </a>
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="nav-link active" style="color: white;font-size:18px;font-weight:600;letter-spacing:1px;" href="<?= WEBROOT ?>/?controlleur=article&action=liste-article" aria-current="page">Articles
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;font-size:18px;font-weight:600;letter-spacing:1px;" href="#">Approvisionnement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white;font-size:18px;font-weight:600;letter-spacing:1px;" href="<?= WEBROOT ?>/?controlleur=type&action=liste-type" aria-current="page">Types
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white;font-size:18px;font-weight:600;letter-spacing:1px;" href="<?= WEBROOT ?>/?controlleur=categorie&action=liste-categorie" aria-current="page">categories
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border:1px solid white;color:white;">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>


    </header>
    <main class="w-75 m-auto mt-5" style="min-height:100vh;">
        <?php
        echo $contentView;
        ?>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #333;color: #fff;text-align: center;padding: 10px 0;position: relative;bottom: 0;width:100%;">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavId">
                <a class="navbar-brand" href="#" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><span style="Color:#641818;font-size:30px;font-weight:bold;">Kity</span><span style="Color:white;text-decoration: underline;font-size:14px;">.couture</span> </a>
                <p class="pt-4" style="font-size:14px;">Element Type Creates By Julfab Williarde</p>
                <p></p>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>