<?php
namespace App\Masks\Files;

use Gomee\Masks\MaskCollection;

class GalleryCollection extends MaskCollection
{
    /**
     * lấy tên class mask tương ứng
     *
     * @return string
     */
    public function getMask()
    {
        return GalleryMask::class;
    }
    // xem Collection mẫu ExampleCollection
}
