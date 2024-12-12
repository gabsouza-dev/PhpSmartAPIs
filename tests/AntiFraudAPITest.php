use PhpSmartAPIs\AntiFraudAPI;

class AntiFraudAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        // Defina a chave de API necessária para a instância
        $this->api = new AntiFraudAPI('your-api-key');
    }

    public function testAnalyzeTransaction() {
        $transactionData = [
            'amount' => 100,
            'currency' => 'USD',
            'card_number' => '4111111111111111',
            'expiration_date' => '12/25'
        ];

        $result = $this->api->analyzeTransaction($transactionData);
        
        // Supondo que o resultado esperado seja verdadeiro (sem fraude)
        $this->assertTrue($result);
    }
}
