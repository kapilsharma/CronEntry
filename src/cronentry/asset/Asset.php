<?php
namespace cronentry\asset;

class Asset
{
    private $asset;

    public function __construct($asset, $fraction = false)
    {
        if ($this->isValidAsset($asset, $fraction)) {
            if ($fraction) {
                $this->asset = '*/' . $asset;
            } else {
                $this->asset = $asset;
            }
        } else {
            throw new \InvalidArgumentException('Asset could not be added due to invalid assets');
        }
    }

    public function isValidAsset($asset, $fraction)
    {
        $isValidAsset = $isValidFraction = false;

        // TODO: Validate asset

        return true;
    }
}