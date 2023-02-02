<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include_once('header.php'); ?>
    <div class="container-fluid">
        <?php if ((isset($_GET['email']) && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) && (isset($_GET['message']) && !empty($_GET['message']))): ?>
            <h1 class="text-center m-4">Message bien reçu !</h1>

            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> :
                        <?php echo $_GET['email']; ?>
                    </p>
                    <p class="card-text"><b>Message</b> :
                        <?php echo $_GET['message']; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container-fluid">
            <div class="card bg-dark text-light m-4">
                <div class="card-body">
                    <h5 class="card-title text-center">Il faut un email et un message pour soumettre le formulaire</h5>
                </div>
            </div>
        <?php endif; ?>

    </div>
    </div>
    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>

</html>