use PhpSmartAPIs\TranslationAPI;

class TranslationAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        $this->api = new TranslationAPI('your-api-key');
    }

    public function testTranslate() {
        $text = "Hello, how are you?";
        $targetLanguage = 'es'; // Traduzir para espanhol

        $translatedText = $this->api->translate($text, $targetLanguage);
        
        $this->assertNotEmpty($translatedText);
        $this->assertStringContainsString('Hola', $translatedText); // Espera-se que o texto traduzido contenha "Hola"
    }
}
