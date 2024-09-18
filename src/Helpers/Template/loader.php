<?php
namespace luan\clube\Helpers\Template;
use luan\clube\Helpers\Message\Message;

class loader
{
    private Message $message;

    public function __construct()
    {
        $this->message = new Message();
        
    }
    //C:\xampp\htdocs\src\Helpers\Template/../../view
    //C:\xampp\htdocs\src\views
public function render($template, $default = true, $data = []) 
    {
        $_messages = $this->message->getMessages();
        
        foreach($data as $key => $value ){
            ${$key} = $value;
        }

        if ($default ) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/header.php"));    
        }

        require_once(realpath(dirname(__FILE__) . "/../../views/$template.php"));   
        
        require_once(realpath(dirname(__FILE__) . "/../../views/partias/message.php")); 
    
        if ($default ) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/footer.php"));    
        }
        $this->message->destroyMessage($message);
    }
}