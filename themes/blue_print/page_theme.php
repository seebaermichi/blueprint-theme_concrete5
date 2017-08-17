<?php
namespace Concrete\Package\ThemeBluePrint\Theme\BluePrint;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Blue Print');
    }

    public function getThemeDescription()
    {
        return t('A basic theme for reuse');
    }

    public function getThemeAreaClasses()
    {
        return array(
            'Main' => array('specialArea'),
            'Grid Container Two' => array('minorArea')
        );
    }

    public function getThemeBlockClasses()
    {
        return array(
            'content' => array('specialBlock'),
            '*' => array('minorBlock')
        );
    }
}