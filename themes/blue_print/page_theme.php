<?php
namespace Concrete\Package\ThemeBluePrint\Theme\BluePrint;

/*use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
class PageTheme extends \Concrete\Core\Page\Theme\Theme implements ThemeProviderInterface*/

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

    public function registerAssets()
    {
        /*$this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('css', 'bootstrap/*');*/

        /*$this->requireAsset('javascript', 'bootstrap/alert');
        $this->requireAsset('css', 'bootstrap/alert');
        $this->requireAsset('css', 'bootstrap');*/
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

    /*public function getThemeAreaLayoutPresets()
    {
        // TODO: Implement getThemeAreaLayoutPresets() method.
    }*/
}