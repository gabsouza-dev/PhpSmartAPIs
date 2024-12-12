namespace PhpSmartAPIs;

use Intervention\Image\ImageManagerStatic as Image;

class ImageProcessingAPI {
    public function resizeImage($imagePath, $width, $height) {
        $image = Image::make($imagePath)->resize($width, $height);
        return $image->save('resized_image.jpg');
    }

    public function applyWatermark($imagePath, $watermarkText) {
        $image = Image::make($imagePath);
        $image->text($watermarkText, 100, 100, function($font) {
            $font->size(48);
            $font->color([255, 255, 255, 0.5]);
            $font->align('center');
        });
        return $image->save('watermarked_image.jpg');
    }
}
