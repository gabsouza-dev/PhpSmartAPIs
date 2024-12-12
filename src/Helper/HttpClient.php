namespace PhpSmartAPIs\Helper;

use GuzzleHttp\Client;

class HttpClient {
    private $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function sendRequest($url, $method = 'GET', $data = []) {
        $response = $this->client->request($method, $url, ['json' => $data]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
