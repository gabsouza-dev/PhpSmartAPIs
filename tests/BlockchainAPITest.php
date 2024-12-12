use PhpSmartAPIs\BlockchainAPI;

class BlockchainAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        $this->api = new BlockchainAPI('your-node-url');
    }

    public function testVerifyTransaction() {
        $txHash = '0x1234567890abcdef';
        $result = $this->api->verifyTransaction($txHash);
        
        $this->assertNotEmpty($result);
        $this->assertArrayHasKey('hash', $result); // Espera-se que o resultado tenha uma chave 'hash'
    }

    public function testCreateSmartContract() {
        $contractData = ['data' => 'contract code'];
        $result = $this->api->createSmartContract($contractData);
        
        $this->assertEquals('Contrato inteligente criado com sucesso!', $result);
    }
}
