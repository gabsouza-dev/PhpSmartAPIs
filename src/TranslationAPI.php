namespace PhpSmartAPIs;

use Google\Cloud\Translate\V2\TranslateClient;

class TranslationAPI {
    private $translate;

    public function __construct($apiKey) {
        $this->translate = new TranslateClient(['key' => $apiKey]);
    }

    public function translate($text, $targetLanguage) {
        $translation = $this->translate->translate($text, ['target' => $targetLanguage]);
        return $translation['text'];
    }
}
