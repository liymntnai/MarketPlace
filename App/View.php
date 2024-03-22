<?php declare(strict_types=1);

namespace App;

use App\Exceptions\FileNotFoundException; 
class View{

    public function __construct(private $view, private array $params = [])
    {

   }
    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }
    public function render(): string
    {
        $viewPath = VIEW_PATH.$this->view;

        if(!file_exists($viewPath)){
            throw new FileNotFoundException("File $viewPath does not exist");
        }
        foreach($this->params as $params){
            
        }
        ob_start();

        include($viewPath);

        return (string) ob_get_clean();
    }

    public function __toString(){
        return $this->render();
    }
 
}