<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    
</head>
<body>

    <div class="container">

        <header>
            <h1 id="title">My blog</h1>
        </header>

        <nav id="main-nav">
            <ul class="nav">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <li class="nav-item" id="home"><a class="nav-link" href="/">Home</a></li>
                    </div>
                <?php if (Auth::isLoggedIn()) : ?>
                    <div class="col-lg-3 col-md-12">
                        <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>
                    </div>
                <?php else : ?>
                    <div class="col-lg-3 col-md-12">
                        <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>
                    </div>
                <?php endif; ?>
                    <div class="col-lg-3 col-md-12">
                        <li class="nav-item" id="contact"><a class="nav-link" href="/contact.php">Contact</a></li>
                    </div>
                </div>
            </ul>
        </nav>

        <main>
