use PhpSmartAPIs\SentimentAnalysisAPI;

class SentimentAnalysisAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        $this->api = new SentimentAnalysisAPI('your-api-key');
    }

    public function testAnalyzeSentiment() {
        $text = "I love programming in PHP!";

        $sentiment = $this->api->analyzeSentiment($text);
        
        $this->assertIsArray($sentiment);
        $this->assertArrayHasKey('score', $sentiment); // Espera-se que o sentimento tenha uma pontuação
    }
}
