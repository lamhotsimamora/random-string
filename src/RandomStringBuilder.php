<?php 

namespace Lamhotsimamora\RandomString;

class RandomStringBuilder  implements RandomStringInterface
{
    private $charset = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private $length  = 10;

    public function generate(){
       
        $charset = $this->charset;
        $stringLength = strlen($charset);
        $randomString = '';
        for ($i = 0; $i < $this->length; $i++) {
            $randomString .= $charset[rand(0, $stringLength - 1)];
        }
        return $randomString;
    }   

    public function setLength($length){
        $this->length = $length;
    }

    public function setCharset($charset){
        $this->charset = $charset;
    }
}
