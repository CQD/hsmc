<?php

namespace Q\HSMC\Controller;

use Q\HSMC\Exception\NotFoundException;

class SimpleArticle extends ControllerBase
{
    const WHITELIST = [
        "/tutorial/hw2/change_unitcap",
        "/tutorial/hw2/bigfile",
        "/tutorial/hw2/wepn__flak_emp",
        "/tutorial/hw2/addability",
        "/tutorial/hw2/create_bigfile",
        "/tutorial/hw2/ship_script",
        "/tutorial/hw2/sound",
        "/tutorial/hw2/background",
        "/tutorial/hw2/about_modding_hw2",
        "/tutorial/hw2/install_mod",
        "/tutorial/hw2/make_badge",
        "/tutorial/hw2/hw2_filetype",
        "/tutorial/hw_cat/vme",
        "/tutorial/hw_cat/dacolyte",
        "/tutorial/hw_cat/shp_hwc_khc1",
        "/tutorial/hw_cat/dreadnought",
        "/tutorial/hw_cat/bigviwer",
        "/tutorial/tutorial_hw_cat",
        "/tutorial/tutorial_hw2",
        "/info/history/cataclysm",
        "/info/history/desertofkharak",
        "/info/history/warof1sttime",
        "/info/history/appendix_c_of_the_strategy_guide",
        "/info/history/chronicle",
        "/info/history/homeworld1",
        "/info/history/homeworld2",
        "/info/race/taiidan",
        "/info/race/kushan_hiigaran",
        "/info/race/progenitor",
        "/info/race/kadesh",
        "/info/race/turanic",
        "/info/race/bentusi",
        "/info/race/vaygr",
        "/info/what/kushan",
        "/info/what/bentusi_weapon",
        "/info/what/names",
        "/info/mis/scale",
        "/info/mis/hw2story",
        "/download/modkit_hw2",
        "/download/modkit_hw_cat",
        "/download/general",
        "/mod/modlist_hw2",
        "/mod/modlist_cat",
        "/mod/modlist_hw",
        "/link",
        "/home",
        "/",
    ];

    public static function pathInWhiteList($path)
    {
        return in_array($path, static::WHITELIST);
    }

    public function run($params = [])
    {
        $path = $params['path'];

        if (!static::pathInWhiteList($path)) {
            throw new NotFoundException();
        }

        $path = ('/' === $path) ? '/home' : $path;

        $data = require __DIR__ . '/../../public' . $path . '.php';
        $this->render($data);
    }
}
