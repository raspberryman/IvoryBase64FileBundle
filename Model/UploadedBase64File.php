<?php

/*
 * This file is part of the Ivory Base64 File package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Base64FileBundle\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class UploadedBase64File extends UploadedFile implements Base64FileInterface
{
    use Base64FileTrait;

    /**
     * @param string|resource $value
     * @param string          $originalName
     * @param string|null     $mimeType
     * @param int|null        $size
     * @param int|null        $error
     * @param bool            $encoded
     */
    public function __construct($value, $originalName, $mimeType = null, $size = null, $error = null, $encoded = true)
    {
        parent::__construct($this->load($value, $encoded), $originalName, $mimeType, $size, $error, true);
    }
}
