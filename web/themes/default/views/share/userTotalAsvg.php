<style>
	.positionrl{position: relative;}
	.wrap-left-top-n{padding: 10px;position: absolute;left:20px;top:20px;color: #ffffff;font-size: 25px;}
	.font-large-y{font-size: 60px;color: #f37900;}
</style>
<?php
	if(isset($userData->nickname) && !empty($userData->nickname)){
		$userName = $userData->nickname;
	}else{
		$userName = '该球员';
	}

	if(isset($userData->assists) && !empty($userData->assists)){
		$assists = $userData->assists;
	}else{
		$assists = '未知进球';
	}
?>
<div class="container-fluid">
	<?php echo $this->renderPartial('//share/_banner'); ?>
	<div class="row fixed-zw"></div>

	<div class="row">
		<div class="positionrl">
			<img src="<?php echo Yii::app()->params['themeAssetHost'] ?>images/playground-blue-white.png" class="autosize-img" width="720" height="1046"/>
			<div class="wrap-left-top-n">
				<p><?php echo $userName ?><br/>总共完成<br/><span class="font-large-y"><?php echo $assists ?></span>次助攻</p>
			</div>
		</div>
	</div>
</div>
