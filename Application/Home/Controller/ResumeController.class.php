<?php
namespace Home\Controller;
use Think\Controller;
class ResumeController extends Controller {
    public function index(){
		

        $this->display();
    }
	
	public function view()
	{
		$id = I('get.id');
		
		$this->display();
	}
}