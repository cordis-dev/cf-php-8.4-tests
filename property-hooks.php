class Locale
{
    public string $languageCode;

    public string $countryCode
    {
        set (string $countryCode) {
            $this->countryCode = strtoupper($countryCode);
        }
    }

    public string $combinedCode
    {
        get => \sprintf("%s_%s", $this->languageCode, $this->countryCode);
        set (string $value) {
            [$this->languageCode, $this->countryCode] = explode('_', $value, 2);
        }
    }

    public function __construct(string $languageCode, string $countryCode)
    {
        $this->languageCode = $languageCode;
        $this->countryCode = $countryCode;
    }
}

$brazilianPortuguese = new Locale('pt', 'br');
var_dump($brazilianPortuguese->countryCode); // BR
var_dump($brazilianPortuguese->combinedCode); // pt_BR
