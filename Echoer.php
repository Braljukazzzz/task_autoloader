<?php
class Echoer
{
    private $_recipients;
    public function addRecipient($name)
    {
        $recipient = new Hellobook($name);
        $this->_recipients[] = $recipient;
    }
    public function sayMessage($message)
    {
        foreach ($this->_recipients as $recipient) {
            echo $recipient->getName()." got message: ".$message;
        }
    }
}