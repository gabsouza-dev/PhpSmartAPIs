namespace PhpSmartAPIs\Tests;

class TestHelper {
    public static function mockApiKey() {
        return 'your-api-key';
    }

    public static function mockTransactionData() {
        return [
            'amount' => 100,
            'currency' => 'USD',
            'card_number' => '4111111111111111',
            'expiration_date' => '12/25'
        ];
    }

    public static function mockSentimentText() {
        return "I love programming in PHP!";
    }
}
