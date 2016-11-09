<?php
defined('C5_EXECUTE') or die(_('Access Denied.'));

$c = Page::getCurrentPage();
?>

    <?php $view->inc('elements/header.php'); ?>
        <div class="<?= $c->getPageWrapperClass(); ?>">

            <?php Loader::element('system_errors', array('format' => 'block', 'error' => $error, 'success' => $success,
                'message' => $message)); ?>
            <?php print $innerContent; ?>

        </div>
    <?php $view->inc('elements/footer.php'); ?>
