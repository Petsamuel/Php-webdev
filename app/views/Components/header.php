<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    <link rel ="stylesheet" href="<?=ROOT ?>assets/css/output.css"</link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
</head>
<body>
    <header>
        <h1 class="text-2xl underline">My Website</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="<?=ROOT?>/logout">Logout</a></li>
            </ul>
        </nav>
    </header>
