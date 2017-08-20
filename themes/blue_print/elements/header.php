<?php
defined('C5_EXECUTE') or die(_('Access Denied.'));
$c = Page::getCurrentPage();
$v = View::getInstance();
?>
<!doctype html>
<html lang="<?php echo Localization::activeLanguage() ?>">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php View::element('header_required', [
            'pageTitle' => isset($pageTitle) ? $pageTitle : '',
            'pageDescription' => isset($pageDescription) ? $pageDescription : '',
            'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
        ]); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    </head>

    <body>
        <div class="<?= $c->getPageWrapperClass(); ?>">
