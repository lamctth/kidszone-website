<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="./public/style.css" />

    <title>eProject</title>
</head>
<body>
<section id="header">
    <a href="#"><img src="./public/images/-13.png" class="logo" alt="" /></a>

    <div>
        <ul id="navbar">
            <li><a href="/kidszone-website/index.php?controller=pages&action=home">Home</a></li>
            <li>
                <a href="/kidszone-website/index.php?controller=abc&action=home">ABC</a>
            </li>
            <li>
                <a href="/kidszone-website/index.php?controller=calculator&action=home">Calculation</a>
            </li>
            <li><a href="/kidszone-website/index.php?controller=shop&action=home">Shop</a></li>
            <li><a href="/kidszone-website/index.php?controller=blog&action=home">Blog</a></li>
            <li><a href="/kidszone-website/index.php?controller=about&action=home">About</a></li>
            <li><a href="/kidszone-website/index.php?controller=contact&action=home">Contact</a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
<?= @$content ?>

</body>
</html>