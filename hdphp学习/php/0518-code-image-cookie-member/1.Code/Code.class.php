<?php 
//完成验证码类,全部重新打
class Code{
	//图像资源
	private $img;
	//宽度
	private $width;
	//高度
	private $height;
	//背景颜色
	private $bgColor;
	//字体大小
	private $fontSize;
	//验证码长度
	private $codeLen;
	//字体文件
	private $fontFile;
	//验证码种子
	private $seed;
	
	public function __construct($width=500,$height=200,$codeLen=4,$fontSize=16,$bgColor='#ffffff',$seed='1234567890qwertyuiopasdklzxcvbnm'){
		//宽度
		$this->width = $width;
		//高度
		$this->height = $height;
		//背景色
		$this->bgColor = $bgColor;
		//字体大小
		$this->fontSize = $fontSize;
		//验证码长度
		$this->codeLen = $codeLen;
		//字体文件
		$this->fontFile = "./font.ttf";
		//种子
		$this->seed = $seed;
	}
	/**
	 * 显示验证码
	 */
	public function show(){
		//1.发送头部
		header('Content-type:image/png');
		//2.创建画布,填充画布
		$this->createBg();
		//3.写字
		$this->write();
		//4.干扰
		$this->makeTrouble();
		//5.输出
		imagepng($this->img);
		//6.销毁
		imagedestroy($this->img);
	}
	
	/**
	 * 创建干扰
	 */
	private function makeTrouble(){
		for ($i=0; $i < 10; $i++) {
			//随机颜色
			$color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
			//线
			imageline($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->width),mt_rand(0, $this->height), $color);
		}
	}
	
	/**
	 * 创建画布
	 */
	private function createBg(){
		$img = imagecreatetruecolor($this->width, $this->height);
		//把16进制颜色(#ffffff)转为10进制颜色(能被imagefill使用)
		$bgColor = hexdec($this->bgColor);
		imagefill($img, 0, 0, $bgColor);
		$this->img = $img;
	}
	
	/**
	 * 写字
	 */
	private function write(){
		for ($i=0; $i < $this->codeLen; $i++) {
			//x坐标
			$x = $i * ($this->width / $this->codeLen) + 10;
			$y = ($this->height + $this->fontSize) / 2;
			//随机颜色
			$color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
			//具体字
			$text = $this->seed[mt_rand(0, strlen($this->seed) - 1)];
			//写字 
			imagettftext($this->img, $this->fontSize, mt_rand(-45, 45), $x, $y, $color, $this->fontFile, $text);
		}
		
	}
	
	
}










 ?>