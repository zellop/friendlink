<?php
class Comment{
	private $data=array();
	function __construct($data){
		$this->data=$data;
	}
	/**
	 * 检测用户输入的数据
	 * @param array $arr
	 * @return boolean
	 */
		public static function validate(&$arr){   
		/* if(!($data['email']=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL))){
			$errors['email']='请输入合法邮箱';
		} */
		
		if(!($data['keyword']=filter_input(INPUT_POST,'keyword',FILTER_CALLBACK,array('options'=>'Comment::validate_str')))){
			$errors['keyword']='请输入合法内容';
		}
		if(!($data['link']=filter_input(INPUT_POST,'link',FILTER_CALLBACK,array('options'=>'Comment::validate_str')))){
			$errors['link']='请输入链接';
		}
		/* if(!($data['alinks']=filter_input(INPUT_POST,'alinks',FILTER_CALLBACK,array('options'=>'Comment::validate_str')))){
			$errors['alinks']='请输入正确类型';
		} */
		if(!($data['bus']=filter_input(INPUT_POST,'bus',FILTER_CALLBACK,array('options'=>'Comment::validate_str')))){
			$errors['bus']='请输入名称';
		}
		 if(!($data['serivce']=filter_input(INPUT_POST,'serivce',FILTER_CALLBACK,array('options'=>'Comment::validate_str')))){
			$errors['serivce']='请输入联系QQ';
		} 
		 if(!($data['content']=filter_input(INPUT_POST,'content',FILTER_CALLBACK,array('options'=>'Comment::validate_str'))))
		/* if(!($data['phone']=filter_input(INPUT_POST,'phone',FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>'#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#')))))
		{
			$errors['phone']='手机号码有误，请重填';
		}  */
		 $options=array(
			'options'=>array(
				'min_range'=>0,
				'max_range'=>3		
			)	
		);
		
		if(!($data['dialog']=filter_input(INPUT_POST,'dialog',FILTER_VALIDATE_INT,$options))){
			$errors['dialog']='请选择合法类型';
		} 
		/**
		* 验证手机号是否正确
		* @author honfei
		* @param number $mobile
		*/
	/* function isMobile($mobile) {
		if (!is_numeric($mobile)) {
			return false;
		}
		return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
	}
		
		
		function checkPhone(){ 
		var phone = document.getElementById('phone').value;
		if(!(/^1[34578]\d{9}$/.test(phone))){ 
        alert("手机号码有误，请重填");  
        return false; 
			} 
		}
		
		
		function checkTel(){
		var tel = document.getElementById('tel').value;
			if(!/^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$/.test(tel)){
			alert('固定电话有误，请重填');
		return false;
			}
		} */

	/* 	$options=array(
			'options'=>array(
				'min_range'=>0,
				'max_range'=>2		
			)	
		);
		
		if(!($data['hot']=filter_input(INPUT_POST,'hot',FILTER_VALIDATE_INT,$options))){
			$errors['hot']='请输入是否同意公开';
		}  */
		if(!empty($errors)){
			$arr=$errors;
			return false;
		}
		$arr=$data;
		/* $arr['email']=strtolower(trim($arr['email'])); */
		return true;
	}
	
	/**
	 * 过滤用户输入的特殊字符
	 * @param string $str
	 * @return boolean|string
	 */
	public static function validate_str($str){
		if(mb_strlen($str,'UTF8')<1){
			return false;
		}
		$str=nl2br(htmlspecialchars($str,ENT_QUOTES));
		return $str;
	}
	
	/**
	 * 显示评论内容
	 * @return string
	 */
	public function output($pid,$uptimejson,$duetimejson){
		
		$dateStr=date("Y年m月d日 H:i:s");
		$res=<<<EOF
		<div class='comment'>
			<div class='face'>
				{$this->data['id']}
			</div>
			<div class='title'>
				
				上架链接：<BR/>
			</div>
			<div class='date' title='发布于{$dateStr}'>
				{$dateStr}		
			</div>
			<BR>
			<p>提交成功！！<br/>
				<span>查询编号为：  {$pid}</span>
				我们会尽快审核上架，请留意客服通知</p>	<br/>	
				关键词：{$this->data['keyword']}<br/>
				链接：{$this->data['link']}<br/>
				上架时间：{$uptimejson}<br/>
				下架时间：{$duetimejson}<br/>
		</div>
EOF;
			return $res;
	}
}




