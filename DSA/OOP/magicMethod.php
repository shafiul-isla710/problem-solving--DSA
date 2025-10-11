<?php 

class FileHandler {
    private $filename;

    // Constructor - called automatically when object is created
    public function __construct($filename) {
        $this->filename = $filename;
        echo "Opening file: {$this->filename} \n";
    }

    // Destructor - called automatically when object is destroyed
    public function __destruct() {
        echo "Closing file: {$this->filename} \n";
    }
}

$file = new FileHandler("data.txt");