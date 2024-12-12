namespace PhpSmartAPIs;

class CookieConsentAPI {
    public function getConsent() {
        // Verifica se o usuário deu consentimento para cookies
        return isset($_COOKIE['userConsent']) ? $_COOKIE['userConsent'] : false;
    }

    public function setConsent($userConsent) {
        setcookie('userConsent', $userConsent, time() + 3600, '/');
    }
}
