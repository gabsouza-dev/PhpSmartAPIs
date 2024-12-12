namespace PhpSmartAPIs;

use Web3\Web3;

class BlockchainAPI {
    private $web3;

    public function __construct($rpcUrl) {
        $this->web3 = new Web3($rpcUrl);
    }

    public function verifyTransaction($txHash) {
        $this->web3->eth->getTransactionByHash($txHash, function ($err, $result) {
            if ($err !== null) {
                throw new \Exception("Erro ao verificar transação: {$err->getMessage()}");
            }
            return $result;
        });
    }

    public function createSmartContract($contractData) {
        // Lógica para criar ou interagir com um contrato inteligente
        return "Contrato inteligente criado com sucesso!";
    }
}
