use PhpSmartAPIs\CookieConsentAPI;

class CookieConsentAPITest extends PHPUnit\Framework\TestCase {
    private $api;

    protected function setUp(): void {
        $this->api = new CookieConsentAPI();
    }

    public function testGetConsent() {
        $_COOKIE['userConsent'] = 'yes';
        $result = $this->api->getConsent();
        
        $this->assertTrue($result);
    }

    public function testSetConsent() {
        $this->api->setConsent('yes');
        
        $this->assertEquals('yes', $_COOKIE['userConsent']);
    }
}
