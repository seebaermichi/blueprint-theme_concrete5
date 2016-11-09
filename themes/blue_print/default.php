<?php
defined('C5_EXECUTE') or die(_('Access Denied.'));

$c = Page::getCurrentPage();
?>
    <!--

    // hand over values
    $tab = 'tweets';
    // I want to pass $tab into my header.
    $view->inc('elements/header.php', array('activeTab' => $tab));

    -->
    <?php $view->inc('elements/header.php'); ?>
        <div class="<?= $c->getPageWrapperClass(); ?>">
            <?php
            $a = new Area('Main');
            $a->display($c);
            ?>

            <div>
                <!-- Area with grid-support -->
                <?php
                $a = new Area('Grid Container One');
                $a->enableGridContainer();
                $a->display($c);
                ?>
            </div>

            <div class="container">
                <!-- Area with grid-support within container -->
                <?php
                $a = new Area('Grid Container Two');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
        
    <?php $view->inc('elements/footer.php'); ?>
