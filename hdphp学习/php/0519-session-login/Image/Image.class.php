<?php 
class Image{
	private $postion;
	/**
	 * 水印
	 */
	public function water($src,$dst,$position=9,$pct=70){
		$this->postion = $position;
		//打开目标图资源（大图）
		$dstImg = imagecreatefromjpeg($dst);
		//获得目标图宽高
		$dstW = imagesx($dstImg);
		$dstH = imagesy($dstImg);
		//打开源图资源（小的水印图）
		$srcImg = imagecreatefromjpeg($src);
		//获得源图宽高
		$srcW = imagesx($srcImg);
		$srcH = imagesy($srcImg);
		//换算位置
		$xyArr = $this->getPos($srcW,$srcH,$dstW,$dstH);
		//加盖水印
		//30,30是目标图位置，0,0要把整个源图全部贴上去
		imagecopymerge($dstImg, $srcImg, $xyArr['x'], $xyArr['y'], 0, 0, $srcW, $srcH, $pct);
		
		$type = ltrim(strrchr($dst, '.'),'.');
		$dstPic = str_replace('.' . $type, '_water.' . $type, $dst);
		//保存图片
		imagejpeg($dstImg,$dstPic);
		imagedestroy($dstImg);
		imagedestroy($srcImg);
	}
	
	/**
	 * 获得位置
	 */
	private function getPos($srcW,$srcH,$dstW,$dstH){
		$xyArr = array();
		switch ($this->postion) {
			case 1:
				$xyArr['x'] = 20;
				$xyArr['y'] = 20;
				break;
			case 5:
				$xyArr['x'] = ($dstW - $srcW) / 2;
				$xyArr['y'] = ($dstH - $srcH) / 2;
				break;
			case 9:
				$xyArr['x'] = $dstW - $srcW - 20;
				$xyArr['y'] = $dstH - $srcH - 20;
				break;
			
			default:
				$xyArr['x'] = mt_rand(0, $dstW - $srcW);
				$xyArr['y'] = mt_rand(0, $dstH - $srcH);
				break;
		}
		
		return $xyArr;
	}
	
	
	/**
	 * 缩略
	 */
	public function thumb($src,$width=300,$height=100){
		//获得类型
		$type = ltrim(strrchr($src, '.'),'.');
		//目标图资源
		$dstImg = imagecreatetruecolor($width, $height);
		if($type == 'jpg'){
			$type = 'jpeg';
		}
		//源图资源
		$fn = "imagecreatefrom{$type}";
		$srcImg = $fn($src);
		$srcW = imagesx($srcImg);
		$srcH = imagesy($srcImg);
		//缩略
		imagecopyresized($dstImg, $srcImg, 0, 0, 0, 0, $width, $height, $srcW, $srcH);
		
		$dstPic = str_replace('.' . $type, '_thumb.' . $type, $src);
		//保存缩略图
		imagejpeg($dstImg,$dstPic);
		imagedestroy($dstImg);
		imagedestroy($srcImg);
	}
}











 ?>