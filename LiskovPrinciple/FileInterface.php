<?php
declare (strict_types=1);

namespace SOLID\LISKOVPRINCIPLE;

use DOMDocument;

interface File {
    public function __construct (string $file);
    public function transform() : void;
}

class Json implements File{
    public $file;

    public function __construct(string $file) 
    {
        $this->file = $file;
    }

    public function transform() : void {
        //transform to json
    //   json_encode($this->file);
    }
}

class Html implements File{
    public $file;

    public function __construct(string $file) 
    {
        $this->file = $file;
    }

    public function transform($number) : void {
        if(isset_int($number)){
            throw new \Exception("Error")
        }
        $total = $number+4;
         //transform to html
        // $dom = new DOMDocument();
        // $dom->loadHTML($this->file);
        
    }
}


function read_file(File $file) {
    $file->transform();
}
?>