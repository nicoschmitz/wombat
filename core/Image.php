<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Image
 *
 * @author  Nico Schmitz - cofilew@gmail.com
 * @file    Image.php
 * @since   16.06.2011 - 20:57:54
 */

namespace Wombat;

require_once('../library/phpthumb/ThumbLib.inc.php');

class Image {

    private $height = null;
    private $width = null;
    private $cropSize = null;
    private $filename = null;
    private $maxSize = null;

    public function __construct($params) {


        $thumb->adaptiveResize(self::IMAGE_WIDTH, $this->imageHeight)->cropFromCenter($this->imageCrop)->save($filename);

        $data['image'] = $filename;
    }

    public function save() {

        try {
            $thumb = PhpThumbFactory::create($this->filename);
        } catch (Exception $thumbnailException) {
            die($thumbnailException);
        }



        $thumb->adaptiveResize($this->width, $this->geight)->cropFromCenter($this->cropSize)->save($this->filename);

        return $this->filename;
    }

    /**
     * sets the path for the image
     * @param string $path 
     */
    public function setMaxSize($maxSize) {
        if ($maxSize != null && ctype_digit($maxSize)) {
            $this->maxSize = $maxSize;
        } else {
            throw new ImageException('maxSize ist not valid!');
        }
    }

    /**
     * gets the max size of an image
     * @return int 
     */
    public function getMaxSize() {
        return $this->maxSize;
    }

    /**
     * sets the path for the image
     * @param string $path 
     */
    public function setFilename($filename) {
        if ($filename != null && !file_exists($filename)) {
            $this->filename = $filename;
        } else {
            throw new ImageException('filename ist not set or file already exists!');
        }
    }

    /**
     * gets the filename of an image
     * @return int 
     */
    public function getFilename() {
        return $this->filename;
    }

    /**
     * sets the cropSize of an image
     * @param int $cropSize 
     */
    public function setCropSize($cropSize=null) {
        if ($cropSize != null && ctype_digit($cropSize)) {
            $this->cropSize = $cropSize;
        } else {
            throw new ImageException('cropSize is not valid!');
        }
    }

    /**
     * gets the cropSize of an image
     * @return int 
     */
    public function getCropSize() {
        return $this->cropSize;
    }

    /**
     *  sets the height of an image
     * @param int $height 
     */
    public function setHeight($height=null) {
        if ($height != null && ctype_digit($height)) {
            $this->height = $height;
        } else {
            throw new ImageException('Height is not valid!');
        }
    }

    /**
     * gets the height of an image
     * @return int 
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * sets the width of an image
     * @param int $width 
     */
    public function setWidth($width=null) {
        if ($width != null && ctype_digit($width)) {
            $this->width = $width;
        } else {
            throw new ImageException('Width is not valid!');
        }
    }

    /**
     * gets the width of an image
     * @return int
     */
    public function getWidth() {
        return $this->width;
    }

}

?>