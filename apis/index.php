<?php
/**
 * 首页
 * Class Article
 * Created by Lane.
 * Author: lane
 * Mail lixuan868686@163.com
 * Date: 14-1-10
 * Time: 下午4:22
 */
class Index extends Controller{
	/**
	 * 构造函数
	 */
	public function __construct($param=array()){
		parent::__construct($param);
	}
	
    /**
     * @descrpition 首页
     */
    public function main(){
  		
//    	View::assign('menuList', $menuList);
        View::showFrontTpl('index');
    }
}

