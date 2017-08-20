<?php
defined('C5_EXECUTE') or die(_('Access Denied.'));

$c = Page::getCurrentPage();
$v = View::getInstance();

$v->inc('elements/header.php');
?>

<main>
    <?php
    $a = new Area('Main');
    $a->enableGridContainer();
    $a->display($c);

    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</main>

<?php $v->inc('elements/footer.php');
