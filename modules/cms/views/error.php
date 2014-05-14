<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= Lang::get('cms::lang.page.custom_error.label') ?></title>
        <link href="<?= URL::to('/modules/system/assets/vendor/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
        <link href="<?= URL::to('/modules/system/assets/css/styles.css') ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1><i class="icon-off warning"></i> <?= Lang::get('cms::lang.page.custom_error.label') ?></h1>
            <p class="lead"><?= Lang::get('cms::lang.page.custom_error.help') ?></p>
        </div>
    </body>
</html>
