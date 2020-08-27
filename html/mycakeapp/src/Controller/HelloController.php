<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {

    public function initialize() {
        $this->viewBuilder()->setLayout('hello');
    }



    public function index() {
        
    }
    public function test() {
    
        $text = 'あいうえお';
        $this->set('text',$text);
    }
    
    public function form() {
        $this->viewBuilder()->autoLayout(false);
        $name = $this->request->data['name'];
        $mail = $this->request->data['mail'];
        $age = $this->request->data['age'];
        $res = 'こんにちは、'.$name.'('.$age.')さん。メールアドレスは、'.$mail.'ですね？';
        $value = [
            'title'=>'Result',
            'message'=>$res
        ];
        $this->set($value);

    }
   
}
