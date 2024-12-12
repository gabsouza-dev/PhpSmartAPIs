use PhpSmartAPIs\ImageGenerationAPI;

class ImageGenerationAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        $this->api = new ImageGenerationAPI('your-api-key');
    }

    public function testGenerateImage() {
        $description = "A beautiful sunset over the ocean";
        $image = $this->api->generateImage($description);
        
        $this->assertStringContainsString('Imagem gerada com a descrição:', $image);
    }
}
