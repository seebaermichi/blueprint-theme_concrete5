<?php
namespace Concrete\Package\ThemeBluePrint;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_('Access Denied.'));

class Controller extends Package
{
    protected $pkgHandle = 'theme_blue_print';
    protected $appVersionRequired = '5.7.4';
    protected $pkgVersion = '1.0';

    public function getPackageDescription()
    {
        return t('Adds Blue Print Theme');
    }

    public function getPackageName()
    {
        return t('Blue Print');
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('blue_print', $pkg);
    }
}