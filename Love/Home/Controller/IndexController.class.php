<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$m=M('Message');
    	$arr=$m->select();
    	$this->assign('data',$arr);
        $this->display();
    }
    public function tell(){
    	$iliguchi=$_SESSION['iliguchi'];
    	if(empty($iliguchi)){
    		$this->display();
    	}else{
    		$this->error('告白过于频繁，请给别人机会。');
    	}
    	
    }
    public function dotell () {
    	$m=M('Message');
    	$realname=$_POST['realname'];
    	$towho=$_POST['towho'];
    	$content=$_POST['content'];
    	if(empty($realname) || empty($towho) || empty($content)){
    		$this->error('请填写所有项目');
    	}else{
    		$m->realname=$realname;
    		$m->towho=$towho;
    		$m->content=$content;
    		$m->lastdate=date("Y-m-d H:i:s");
    		$m->ip=$_SERVER["REMOTE_ADDR"];
    		$res=$m->add();
    		session('iliguchi','hai');
    		if($res>0){
    			$this->success('成功','index');
    		}else{
    			$this->error('失败');
    		}
    	}
    }
}