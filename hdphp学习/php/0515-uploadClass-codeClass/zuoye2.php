<?php 
//完成验证码类,全部重新打



class Code{
	//保存资源
	private $img;
	/**
	 * 显示验证码
	 */
	public function show(){
		//1.发送头部
//		header($string)
		//2.创建画布,填充画布
		$this->createBg();
		//3.写字
		$this->write();
		//4.干扰
		$this->makeTrouble();
		//5.输出
//		imagepng($image)
		//6.销毁
//		imagedestroy($image)
	}
	
	/**
	 * 创建画布
	 */
	private function createBg(){
		$img = imagecreatetruecolor(500, 200);
//		imagefill($img, $x, $y, $color)
		$this->img = $img;
	}
	
	
	private function write(){
//		imagettftext($this->img, $size, $angle, $x, $y, $color, $fontfile, $text)
	}
	
	
}
//显示验证码
$code = new Code();
$code->show();










 ?>