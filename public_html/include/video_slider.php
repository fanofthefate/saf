<?
global $resultArrVideo;
$resultArrVideo = array();
GetVideos(7); //видео иллюзий 
GetVideos(3); //видео проектов


?>
<div class="width_wrapper video_wrapper">
	<div class="swiper-container-wrapper">
		<div class="swiper-container" id="video_slider">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<?foreach ($resultArrVideo as $video) {?>
				<div class="swiper-slide">
					<a href="<?=$video["video"]?>" data-sub-html="<h4><?=$video["name"]?></h4>" class="video-play pop">
						<img alt="" class="swiper-lazy swiper-lazy-loaded" src="http://img.youtube.com/vi/<?=$video["code"]?>/mqdefault.jpg">
					</a>
				</div>
				<?}?>
				<!--
				<div class="swiper-slide">
					<a href="https://www.youtube.com/embed/PrMx8KBx8Cw" data-sub-html="<h4>Чудо люди</h4>" class="video-play">
						<img data-src="http://img.youtube.com/vi/Hbmt7wNybfs/mqdefault.jpg" alt="" class="swiper-lazy">
					</a>
				</div>
				
				<div class="swiper-slide">
					<a href="https://www.youtube.com/embed/PrMx8KBx8Cw" data-sub-html="<h4>Чудо люди</h4>" class="video-play">
						<img alt="" class="swiper-lazy swiper-lazy-loaded" src="http://img.youtube.com/vi/Hbmt7wNybfs/mqdefault.jpg">
					</a>
				</div>
				
				<div class="swiper-slide">
					<a href="https://www.youtube.com/embed/PrMx8KBx8Cw" data-sub-html="<h4>Чудо люди</h4>" class="video-play">
						<img alt="" class="swiper-lazy swiper-lazy-loaded" src="http://img.youtube.com/vi/5X3WuLO-GIc/mqdefault.jpg">
					</a>
				</div>
				
				-->
				
			</div>
			
		</div>
		
		<div class="swiper-button-prev video"></div>
		<div class="swiper-button-next video"></div>	
		
	</div>
</div>
