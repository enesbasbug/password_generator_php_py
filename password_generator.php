<?php
class RandomPasswordGenerator {
    private $interval;
    private $passwordFile;
    
    public function __construct($interval) {
        $this->interval = $interval;
        $this->passwordFile = __DIR__ . '/passwords.txt';
    }

    private function generateAndSavePassword() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        $length = 12;
        
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        echo "Generated password: $password\n";
        
        echo "File path: ", realpath($this->passwordFile) . "\n";
        
        file_put_contents($this->passwordFile, $password . PHP_EOL, FILE_APPEND);
	
	return $password;        
    }

    public function start() {
        while (true) {
            $password = $this->generateAndSavePassword();
            sleep($this->interval);
        }
    }
}


$passwordGenerator = new RandomPasswordGenerator(20); // Create an instance
$passwordGenerator->start(); // Start

?>
