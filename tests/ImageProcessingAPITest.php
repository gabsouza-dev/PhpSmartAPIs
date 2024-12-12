use PhpSmartAPIs\ImageProcessingAPI;

class ImageProcessingAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        $this->api = new ImageProcessingAPI();
    }

    public function testResizeImage() {
        $result = $this->api->resizeImage('path/to/image.jpg', 200, 200);
        
        $this->assertFileExists('resized_image.jpg');
    }

    public function testApplyWatermark() {
        $result = $this->api->applyWatermark('path/to/image.jpg', 'Sample Watermark');
        
        $this->assertFileExists('watermarked_image.jpg');
    }
}
