<?php
namespace Home\Controller;
use Think\Controller;
class ComController extends Controller {
    public function index(){
		
		$m = M('comclass');
		Import('Lib.Cache');
		$ca = new \Cache();
		$comclass = $m->where(array())->select();
		$this->assign('comclass', $comclass);
        $this->display();
    }
}