<?php
/**
 * Created by PhpStorm.
 * User: kapil
 * Date: 07/09/15
 * Time: 12:28 PM
 */

namespace cronentry\asset;

use cronentry\asset\Asset;


class AssetCollection
{
    private $assets;

    public function __construct()
    {
        $this->assets = array();
    }

    public function addAsset(Asset $asset)
    {
        if ($this->isExist($asset)) {
            return false;
        }

        $this->assets[] = $asset;
        return true;
    }

    public function isExist(Asset $asset)
    {
        //TODO: Check if $asset already exist in collection.
        return true;
    }

    public function toString()
    {
        //TODO: Convert into string form and return
        return '*';
    }

    public function makeFromString($assetString)
    {
        //TODO: Parse string and same as Assets
    }
}