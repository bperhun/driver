<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/public/styles/main.css" rel="stylesheet">
        <link href="/public/styles/main2.css" rel="stylesheet" type="text/css">
        <link href="/public/styles/font-awesome.css" rel="stylesheet">
        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/bootstrap.js"></script>
    </head>
    <body>
    <div class="header">
        <div class="heder-logo">
            <a href="/"><img src="/public/images/unnamed.png"></a>
        </div>
        <div class="header-nav">
        <?php if (isset($_SESSION['account']['id'])): ?>
        <a href="/account/profile"><p>Профіль</p></a>
            <a href="/account/logout"><p>Вихід</p></a>
            <?php else: ?>
            <a href="/driver"><p>Водії</p></a>
            <a href="/about"><p>Про Нас</p></a>
            <a href="/contact"><p>Контакти</p></a>
            <a href="/account/login"><p>Вхід</p></a>
            <a href="/account/register"><p>Реєстрація</p></a>
            <?php endif; ?>
        </div>

</div>
        <?php echo $content; ?>
        <hr>
        <div class="footer">
        
        <img src="/public/images/footer.png">
</div>
    </body>
</html>