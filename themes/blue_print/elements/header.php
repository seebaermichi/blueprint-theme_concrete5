<?php
defined('C5_EXECUTE') or die(_('Access Denied.'));

$c = Page::getCurrentPage();
?>
<!doctype html>
<html lang="en">
    <head>
        <?php Loader::element('header_required'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= $view->getThemePath(); ?>/css/normalize.css">
    </head>

    <body>