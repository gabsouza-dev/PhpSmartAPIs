namespace PhpSmartAPIs;

use Google\Cloud\Language\LanguageClient;

class SentimentAnalysisAPI {
    private $languageClient;

    public function __construct($apiKey) {
        $this->languageClient = new LanguageClient(['key' => $apiKey]);
    }

    public function analyzeSentiment($text) {
        $annotation = $this->languageClient->analyzeSentiment($text);
        return $annotation->sentiment();
    }
}
