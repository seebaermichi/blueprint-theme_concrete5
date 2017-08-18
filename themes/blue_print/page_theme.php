<?php
namespace Concrete\Package\ThemeBluePrint\Theme\BluePrint;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme implements ThemeProviderInterface
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
        $this->providesAsset('css', 'bootstrap/*');
    }

    public function getThemeBlockClasses()
    {
        return [
            /*'block_handle' => [
                'class-name-one',
                'class-name-two'
            ],*/
        ];
    }

    public function getThemeAreaClasses()
    {
        return [
            /*'area name' => [
                'area-class'
            ],*/
        ];
    }

    public function getThemeDefaultBlockTemplates()
    {
        return [
             /*'block_handle' => 'default_template.php',*/
        ];
    }

    public function getThemeResponsiveImageMap()
    {
        return [
            /*'large' => '900px',*/
        ];
    }

    public function getThemeEditorClasses()
    {
        return [
            /*[
                'title' => t('Editor Class Block'),
                'menuClass' => 'css-class-for-menu',
                'spanClass' => 'css-class-for-block',
                'forceBlock' => '1'
            ],
            [
                'title' => t('Editor Class Inline'),
                'menuClass' => '',
                'spanClass' => 'css-class-for-inline',
                'forceBlock' => '-1'
            ],*/
        ];
    }

    public function getThemeAreaLayoutPresets()
    {
        return [
            /*[
                'handle' => 'left_sidebar',
                'name' => 'Left Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-sm-4"></div>',
                    '<div class="col-sm-8"></div>',
                ],
            ],
            [
                'handle' => 'right_sidebar',
                'name' => 'Right Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-sm-8"></div>',
                    '<div class="col-sm-4"></div>',
                ],
            ],*/
        ];
    }
}