var tranpo_key_frame = 0;
var top_scrollflg = 0;

var scrollFlg = 0;
var Nero_key_frame = 0;
var visible_mode = 0;
var index_flg = 1;

var bg_mode = "def";
var bg_def_width;
var bg_max_width;
var bg_min_width;

var neroConceptTimer;
var tranpoConceptTimer;
var nero_concept_playing = false;
var tranpo_concept_playing = false;

$(function () {
	if(!is_old_ie){
		setNeroDesignAnim();
		setNeroPara();
		setTranpoPara();
		setIndexHover();
		setBgWidth();
		setGlobalNavi();
	
		$bg_black_button.bind('click', openNero);
		$bg_orange_button.bind('click', openTranpo);
		$nero_back_top.bind('click', neroToTop);
		$tranpo_back_top.bind('click', tranpoToTop);
	}
});


function setGlobalNavi(){
	$nero_global_nav_li.find('a').each(function(index, element) {
		switch(index){
			case 0:
				$(element).bind('click', neroToTop);
				break;
			case 1:
				$(element).click(function(e) {
					pageScrollNero('concept');
					//playNeroConcept();
				});
				break;
			case 2:
				$(element).click(function(e) {
					pageScrollNero('design');
				});
				break;
			case 3:
				$(element).click(function(e) {
					pageScrollNero('lineup');
				});
				break;
			case 4:
				$(element).click(function(e) {
					pageScrollNero('spec');
				});
				break;
		}
	});
	$tranpo_global_nav_li.find('a').each(function(index, element) {
		switch(index){
			case 0:
				$(element).bind('click', tranpoToTop);
				break;
			case 1:
				$(element).click(function(e) {
					pageScrollTranpo('concept');
					//playTranpoConcept();
				});
				break;
			case 2:
				$(element).click(function(e) {
					pageScrollTranpo('design');
				});
				break;
			case 3:
				$(element).click(function(e) {
					pageScrollTranpo('lineup');
				});
				break;
			case 4:
				$(element).click(function(e) {
					pageScrollTranpo('spec');
				});
				break;
		}
	});
}

function setIndexHover() {
	$bg_black_button.hover(function () {
		if (index_flg) {
			playNeroVideo();
		}
	}, function () {
		if (index_flg) {
			stopNeroVideo();
		}
	})
	$bg_orange_button.hover(function () {
		if (index_flg) {
			playTranpoVideo();
		}
	}, function () {
		if (index_flg) {
			stopTranpoVideo();
		}
	})
}

function setBgWidth() {
	function setWidth() {
		bg_def_width = Math.floor($bg.width() * 0.49) + "px";
		bg_max_width = Math.floor($bg.width() * 0.89) + "px";
		bg_min_width = Math.floor($bg.width() * 0.09) + "px";
		bg_max_width2 = Math.floor($bg.width() * 0.88) + "px";
		bg_min_width2 = Math.floor($bg.width() * 0.10) + "px";

		if (bg_mode == "def") {
			$bg_black.css({
				width: bg_def_width
			});
			$bg_black_button.css({
				width: bg_def_width
			});
			$bg_orange_button.css({
				width: bg_def_width
			});
			$bg_orange.css({
				width: bg_def_width
			});
		} else if (bg_mode == "nero") {
			$bg_black.css({
				width: bg_max_width
			});
			$bg_black_button.css({
				width: bg_max_width
			});
			$bg_orange_button.css({
				width: bg_min_width
			});
			$bg_orange.css({
				width: bg_min_width
			});
		} else if (bg_mode == "tranpo") {
			$bg_black.css({
				width: bg_min_width2
			});
			$bg_black_button.css({
				width: bg_min_width2
			});
			$bg_orange_button.css({
				width: bg_max_width2
			});
			$bg_orange.css({
				width: bg_max_width2
			});
		}
	}
	$window.resize(function (e) {
		setWidth();
	});
	setWidth();
}

function openNero() {
	$wall.show();
	index_flg = 0;
	playNeroVideo();
	bg_mode = "nero";

	$bg_black_button.unbind('click', openNero);
	$bg_orange_button.unbind('click', openTranpo);
	$tranpo_index.stop(true).fadeOut();
	$nero_index.stop(true).fadeOut();
	$top_jackall_logo.stop(true).fadeOut();
	$tranpo_minimum_logo.stop(true).fadeIn();
	$tranpo_big_rod.stop(true).fadeOut(400, function () {
		$bg_black.stop(true).animate({
			width: bg_max_width
		}, 400, function () {
			$nero_header.stop(true).fadeIn();
			$nero_design.show();

			visible_mode = 1;
			scrollFlg = 0;
			$body.height(Nero_key_frame);
			$window.scrollTop(300);

			$nero_next.show();
			$nero_next_img.show();
			startNeroAttention();
			$nero_lure.show();
			$nero_concept.show();
			playNeroConcept();
			$wall.hide();
		});
		$bg_black_button.stop(true).animate({
			width: bg_max_width
		}, 400);
		$bg_orange_button.stop(true).animate({
			width: bg_min_width
		}, 400);
		$bg_orange_image.hide();
		$bg_orange.stop(true).animate({
			width: bg_min_width
		}, 400);
	});
	$bg_button.addClass("minimum_tranpo");
	$bg_orange_button.bind('click', neroToTranpo);
}

function openTranpo() {
	$wall.show();
	index_flg = 0;
	playTranpoVideo();
	bg_mode = "tranpo";

	$bg_black_button.unbind('click', openNero);
	$bg_orange_button.unbind('click', openTranpo);
	$nero_big_rod.stop(true).fadeOut();
	$tranpo_index.stop(true).fadeOut();
	$top_jackall_logo.stop(true).fadeOut();
	$nero_minimum_logo.stop(true).fadeIn();
	$nero_index.stop(true).fadeOut(400, function () {
		$bg_black.stop(true).animate({
			width: bg_min_width2
		}, 400, function () {
			$tranpo_header.stop(true).fadeIn();
			$tranpo_design.show();

			visible_mode = 2;
			scrollFlg = 0;
			$body.height(tranpo_key_frame + 2000);
			$window.scrollTop(tranpo_key_frame + 1000);

			$tranpo_next.show();
			$tranpo_next_img.show();
			startTranpoAttention();
			$tranpo_lure.show();
			$tranpo_concept.show();
			playTranpoConcept();
			$wall.hide();
		});
		$bg_black_button.stop(true).animate({
			width: bg_min_width2
		}, 400);
		$bg_black_image.stop(true).fadeOut();
		$bg_orange.animate({
			width: bg_max_width2
		}, 400);
		$bg_orange_button.stop(true).animate({
			width: bg_max_width2
		}, 400);
	});
	$bg_button.addClass("minimum_nero");
	$bg_black_button.bind('click', tranpoToNero);
}

function neroToTop(direct) {
	$wall.show();
	index_flg = 1;
	stopNeroVideo();
	stopNeroConcept();
	$nero_concept.hide();
	$nero_lure.hide();
	bg_mode = "def";

	$nero_global_nav_li.removeClass('current');
	$nero_global_nav_li.eq(0).addClass('current');

	top_scrollflg = 1;
	$bg_orange_button.unbind('click', neroToTranpo);

	if (direct != true) {
		$body_html.stop(true).animate({
			scrollTop: 0
		}, 1000, nextFunc);
	} else {
		nextFunc();
	}

	function nextFunc() {
		$nero_header.stop(true).fadeOut();
		$nero_next.hide();
		$nero_next_img.stop().hide();
		$tranpo_minimum_logo.stop(true).hide();
		$nero_design.hide();
		$nero_video_wrap.hide();
		$nero_lineup.hide();
		$nero_spec.hide();
		$bg_button.removeClass("minimum_tranpo");
		$bg_black.stop(true).animate({
			width: bg_def_width
		}, 400);
		$bg_orange.stop(true).animate({
			width: bg_def_width
		}, 400);
		$bg_black_button.stop(true).animate({
			width: bg_def_width
		}, 400);
		$bg_orange_button.stop(true).animate({
			width: bg_def_width
		}, 400, function () {
			visible_mode = 0;
			top_scrollflg = 0;
			$body.height('auto');

			$bg_orange_image.stop(true).fadeIn();
			$tranpo_index.stop(true).fadeIn();
			$tranpo_big_rod.stop(true).fadeIn();
			$nero_index.stop(true).fadeIn();
			$top_jackall_logo.stop(true).fadeIn();
			$bg_black_button.bind('click', openNero);
			$bg_orange_button.bind('click', openTranpo);
			stopNeroVideo();
			stopNeroConcept();
			$wall.hide();

		});
	}
}

function tranpoToTop(direct) {
	$wall.show();
	index_flg = 1;
	stopTranpoVideo();
	stopTranpoConcept();
	$tranpo_concept.hide();
	$tranpo_lure.hide();
	bg_mode = "def";

	$tranpo_global_nav_li.removeClass('current');
	$tranpo_global_nav_li.eq(0).addClass('current');

	top_scrollflg = 1;
	$bg_black_button.unbind('click', tranpoToNero);

	if (direct != true) {
		$body_html.stop(true).animate({
			scrollTop: tranpo_key_frame + 2000
		}, 1000, nextFunc);
	} else {
		nextFunc();
	}

	function nextFunc() {
		$tranpo_header.stop(true).fadeOut();
		$tranpo_next.hide();
		$tranpo_next_img.stop().hide();
		$nero_minimum_logo.hide();
		$tranpo_design.hide();
		$tranpo_video_wrap.hide();
		$tranpo_lineup.hide();
		$tranpo_spec.hide();
		$bg_button.removeClass("minimum_nero");
		$bg_black.stop(true).animate({
			width: bg_def_width
		}, 400);
		$bg_orange.stop(true).animate({
			width: bg_def_width
		}, 400);
		$bg_black_button.stop(true).animate({
			width: bg_def_width
		}, 400);
		$bg_orange_button.stop(true).animate({
			width: bg_def_width
		}, 400, function () {
			visible_mode = 0;
			top_scrollflg = 0;
			$body.height('auto');

			$bg_black_image.stop(true).fadeIn();
			$tranpo_index.stop(true).fadeIn();
			$nero_big_rod.stop(true).fadeIn();
			$nero_index.stop(true).fadeIn();
			$top_jackall_logo.stop(true).fadeIn();

			$bg_black_button.bind('click', openNero);
			$bg_orange_button.bind('click', openTranpo);
			stopTranpoVideo();
			stopTranpoConcept();
			$wall.hide();
		});
	}
}

function neroToTranpo() {
	$wall.show();
	index_flg = 0;
	stopNeroVideo();
	stopNeroConcept();
	$nero_lure.hide();
	bg_mode = "tranpo";

	top_scrollflg = 1;
	$bg_orange_button.unbind('click', neroToTranpo);
	
	nextFunc();

	function nextFunc() {
		$nero_header.stop(true).fadeOut("fast");
		$nero_next.hide();
		$nero_next_img.stop().hide();
		$tranpo_minimum_logo.stop(true).hide();
		$nero_design.hide();
		$nero_concept.hide();
		$nero_video_wrap.hide();
		$nero_lineup.hide();
		$nero_spec.hide();
		$bg_button.removeClass("minimum_tranpo");
		$nero_big_rod.stop(true).fadeOut();
		$bg_black.stop(true).animate({
			width: bg_min_width2
		}, 400);
		$bg_orange.stop(true).animate({
			width: bg_max_width2
		}, 400);
		$bg_black_button.stop(true).animate({
			width: bg_min_width2
		}, 400);
		$bg_orange_button.stop(true).animate({
			width: bg_max_width2
		}, 400, function () {
			visible_mode = 2;
			top_scrollflg = 0;
			$body.height('auto');

			$body.height(tranpo_key_frame + 2000);
			$window.scrollTop(tranpo_key_frame + 1000);

			$tranpo_header.stop(true).fadeIn();
			$tranpo_design.show();

			$bg_orange_image.stop(true).fadeIn();
			$tranpo_big_rod.stop(true).fadeIn();

			$nero_minimum_logo.stop(true).fadeIn();

			$tranpo_next.show();
			$tranpo_next_img.show();
			startTranpoAttention();
			$tranpo_lure.show();

			playTranpoVideo();
			$tranpo_concept.show();
			playTranpoConcept();
			$wall.hide();

		});
		$bg_black_image.stop(true).fadeOut();
		$bg_button.addClass("minimum_nero");
		$bg_black_button.bind('click', tranpoToNero);
	}
}

function tranpoToNero() {
	$wall.show();
	index_flg = 0;
	stopTranpoVideo();
	stopTranpoConcept();
	$tranpo_lure.hide();
	bg_mode = "nero";

	top_scrollflg = 1;
	$bg_black_button.unbind('click', tranpoToNero);

	nextFunc();

	function nextFunc() {
		$tranpo_header.stop(true).fadeOut("fast");
		$tranpo_next.hide();
		$tranpo_next_img.stop().hide();
		$nero_minimum_logo.hide();
		$tranpo_design.hide();
		$tranpo_concept.hide();
		$tranpo_video_wrap.hide();
		$tranpo_lineup.hide();
		$tranpo_spec.hide();
		$bg_button.removeClass("minimum_nero");
		$tranpo_big_rod.stop(true).fadeOut();
		$bg_black.stop(true).animate({
			width: bg_max_width
		}, 400);
		$bg_orange.stop(true).animate({
			width: bg_min_width
		}, 400);
		$bg_black_button.stop(true).animate({
			width: bg_max_width
		}, 400);
		$bg_orange_button.stop(true).animate({
			width: bg_min_width
		}, 400, function () {
			visible_mode = 1;
			top_scrollflg = 0;
			$body.height('auto');

			$nero_header.stop(true).fadeIn();
			$nero_design.show();

			$body.height(Nero_key_frame);
			$window.scrollTop(300);

			$bg_black_image.stop(true).fadeIn();
			$nero_big_rod.stop(true).fadeIn();

			$tranpo_minimum_logo.stop(true).fadeIn();

			$nero_next.show();
			$nero_next_img.show();
			startNeroAttention();
			$nero_lure.show();

			playNeroVideo();
			$nero_concept.show();
			playNeroConcept();
			$wall.hide();
		});
		$bg_orange_image.hide();
		$bg_button.addClass("minimum_tranpo");
		$bg_orange_button.bind('click', neroToTranpo);
	}

}

function playNeroVideo() {
	//$nero_concept.show();
	$nero_video_wrap.show();
	$nero_video[0].play();
	$nero_video[0].loop = true;
	$bg_black.addClass("noimage");
}

function stopNeroVideo() {
	//$nero_concept.hide();
	$nero_video_wrap.hide();
	$nero_video[0].pause();
	$bg_black.removeClass("noimage");
}

function playTranpoVideo() {
	//$tranpo_concept.show();
	$tranpo_video_wrap.show();
	$tranpo_video[0].play();
	$tranpo_video[0].loop = true;
	$bg_orange.addClass("noimage");
}

function stopTranpoVideo() {
	//$tranpo_concept.hide();
	$tranpo_video_wrap.hide();
	$tranpo_video[0].pause();
	$bg_orange.removeClass("noimage");
}

function playNeroConcept(){
	if(nero_concept_playing == false){
		stopNeroConcept();
		nero_concept_playing = true;
		function scene1(){
			$nero_concept_copy_en_01_img.stop(true).animate({opacity:1, left:"0"},800,function(){
				$nero_concept_copy_01_img.stop(true).animate({opacity:1, left:"0"},800,function(){
					neroConceptTimer = setTimeout(function(){
						$nero_concept_copy_01_img.stop(true).animate({opacity:0, left:"-30px"},800);
						$nero_concept_copy_en_01_img.stop(true).animate({opacity:0, left:"30px"},800,function(){
							scene2();
					})},4000);
				});
			});
		}
		function scene2(){
			$nero_concept_copy_en_02_img.stop(true).animate({opacity:1, left:"0"},800,function(){
				$nero_concept_copy_02_img.stop(true).animate({opacity:1, left:"0"},800,function(){
					neroConceptTimer = setTimeout(function(){
						$nero_concept_copy_02_img.stop(true).animate({opacity:0, left:"-30px"},800);
						$nero_concept_copy_en_02_img.stop(true).animate({opacity:0, left:"30px"},800,function(){
							scene3();
					})},4000);
				});
			});
		}
		function scene3(){
			$nero_concept_copy_en_03_img.stop(true).animate({opacity:1, left:"0"},800,function(){
				$nero_concept_copy_03_img.stop(true).animate({opacity:1, left:"0"},800,function(){
					neroConceptTimer = setTimeout(function(){
						$nero_concept_copy_03_img.stop(true).animate({opacity:0, left:"-30px"},800);
						$nero_concept_copy_en_03_img.stop(true).animate({opacity:0, left:"30px"},800,function(){
							scene4();
					})},4000);
				});
			});
		}
		function scene4(){
			$nero_concept_copy_en_04_img.stop(true).animate({opacity:1, left:"0"},800,function(){
				$nero_concept_copy_04_img.stop(true).animate({opacity:1, left:"0"},800,function(){
					neroConceptTimer = setTimeout(function(){
						$nero_concept_copy_04_img.stop(true).animate({opacity:0, left:"-30px"},800);
						$nero_concept_copy_en_04_img.stop(true).animate({opacity:0, left:"30px"},800,function(){
							scene1();
					})},4000);
				});
			});
		}
		scene1();
	}
}

function stopNeroConcept(){
	nero_concept_playing = false;
	$nero_concept_copy_01_img.stop(true).css({opacity:0, left:"30px"});
	$nero_concept_copy_en_01_img.stop(true).css({opacity:0, left:"-30px"});
	$nero_concept_copy_02_img.stop(true).css({opacity:0, left:"30px"});
	$nero_concept_copy_en_02_img.stop(true).css({opacity:0, left:"-30px"});
	$nero_concept_copy_03_img.stop(true).css({opacity:0, left:"30px"});
	$nero_concept_copy_en_03_img.stop(true).css({opacity:0, left:"-30px"});
	$nero_concept_copy_04_img.stop(true).css({opacity:0, left:"30px"});
	$nero_concept_copy_en_04_img.stop(true).css({opacity:0, left:"-30px"});
	clearInterval(neroConceptTimer);
}

function playTranpoConcept(){
	if(tranpo_concept_playing == false){
		stopTranpoConcept();
		tranpo_concept_playing = true;
		function scene1(){
			$tranpo_concept_copy_en_01.stop(true).css({"letter-spacing":"100px"}).animate({opacity:1,"letter-spacing":"0"},500,"easeOutCubic",function(){
				$tranpo_concept_copy_01.stop(true).animate({opacity:1, marginLeft:"0"},500,"easeOutElastic",function(){
					tranpoConceptTimer = setTimeout(function(){
						$tranpo_concept_copy_01.stop(true).animate({opacity:0, marginLeft:"-30px"},500);
						$tranpo_concept_copy_en_01.stop(true).animate({opacity:0, marginLeft:"-100px"},500,function(){
							scene2();
					})},4000);
				});
			});
		}
		function scene2(){
			$tranpo_concept_copy_en_02.stop(true).css({"letter-spacing":"100px"}).animate({opacity:1,"letter-spacing":"0"},500,"easeOutCubic",function(){
				$tranpo_concept_copy_02.stop(true).animate({opacity:1, marginLeft:"0"},500,"easeOutElastic",function(){
					tranpoConceptTimer = setTimeout(function(){
						$tranpo_concept_copy_02.stop(true).animate({opacity:0, marginLeft:"-30px"},500);
						$tranpo_concept_copy_en_02.stop(true).animate({opacity:0, marginLeft:"-100px"},500,function(){
							scene3();
					})},4000);
				});
			});
		}
		function scene3(){
			$tranpo_concept_copy_en_03.stop(true).css({"letter-spacing":"100px"}).animate({opacity:1,"letter-spacing":"0"},500,"easeOutCubic",function(){
				$tranpo_concept_copy_03.stop(true).animate({opacity:1, marginLeft:"0"},500,"easeOutElastic",function(){
					tranpoConceptTimer = setTimeout(function(){
						$tranpo_concept_copy_03.stop(true).animate({opacity:0, marginLeft:"-30px"},500);
						$tranpo_concept_copy_en_03.stop(true).animate({opacity:0, marginLeft:"-100px"},500,function(){
							scene4();
					})},4000);
				});
			});
		}
		function scene4(){
			$tranpo_concept_copy_en_04.stop(true).css({"letter-spacing":"100px"}).animate({opacity:1,"letter-spacing":"0"},500,"easeOutCubic",function(){
				$tranpo_concept_copy_04.stop(true).animate({opacity:1, marginLeft:"0"},500,"easeOutElastic",function(){
					tranpoConceptTimer = setTimeout(function(){
						$tranpo_concept_copy_04.stop(true).animate({opacity:0, marginLeft:"-30px"},500);
						$tranpo_concept_copy_en_04.stop(true).animate({opacity:0, marginLeft:"-100px"},500,function(){
							scene1();
					})},4000);
				});
			});
		}
		scene1();
	}
}

function stopTranpoConcept(){
	tranpo_concept_playing = false;
	$tranpo_concept_copy_01.stop(true).css({opacity:0, marginLeft:"30px"});
	$tranpo_concept_copy_en_01.stop(true).css({opacity:0, "letter-spacing":"100px", marginLeft:"0"});
	$tranpo_concept_copy_02.stop(true).css({opacity:0, marginLeft:"30px"});
	$tranpo_concept_copy_en_02.stop(true).css({opacity:0, "letter-spacing":"100px", marginLeft:"0"});
	$tranpo_concept_copy_03.stop(true).css({opacity:0, marginLeft:"30px"});
	$tranpo_concept_copy_en_03.stop(true).css({opacity:0, "letter-spacing":"100px", marginLeft:"0"});
	$tranpo_concept_copy_04.stop(true).css({opacity:0, marginLeft:"30px"});
	$tranpo_concept_copy_en_04.stop(true).css({opacity:0, "letter-spacing":"100px", marginLeft:"0"});
	clearInterval(tranpoConceptTimer);
}

function startNeroAttention() {
	loopAnim();

	function loopAnim() {
		$nero_next_img.animate({
			marginLeft: -(getPoint(10)[1]) + "px",
			marginBottom: -(getPoint(10)[0]) + "px"
		}, 500, function () {
			$nero_next_img.animate({
				marginLeft: "0px",
				marginBottom: "0px"
			}, 500, function () {
				loopAnim()
			})
		});
	}
}

function startTranpoAttention() {
	loopAnim();

	function loopAnim() {
		$tranpo_next_img.animate({
			marginRight: -(getPoint(10)[1]) + "px",
			marginTop: -(getPoint(10)[0]) + "px"
		}, 500, function () {
			$tranpo_next_img.animate({
				marginRight: "0px",
				marginTop: "0px"
			}, 500, function () {
				loopAnim()
			})
		});
	}
}


function setNeroPara() {

	var nero_anim1_param = new Array(0, 1800);
	Nero_key_frame = nero_anim1_param[1];
	var nero_anim2_param = new Array(Nero_key_frame, Nero_key_frame + 1600);
	Nero_key_frame = nero_anim2_param[1];
	var nero_anim3_param = new Array(Nero_key_frame + 6500, Nero_key_frame + 7100);
	Nero_key_frame = nero_anim3_param[1];
	var nero_anim4_param = new Array(Nero_key_frame + 2000, Nero_key_frame + 2600);
	Nero_key_frame = nero_anim4_param[1];

	Nero_key_frame += 1000;

	nero_big_rod_para($nero_big_rod_img, 300, 13300, 0, 0, -(getPoint(5800)[0]), getPoint(5800)[1]);
	nero_lure_para($nero_lure_01_inner, nero_anim2_param[0] - 3000, nero_anim3_param[0] - 1000, 0, 0, -(getPoint(1000)[0]), getPoint(1000)[1]);
	nero_lure_para($nero_lure_02_inner, nero_anim3_param[1] - 4000, nero_anim4_param[1], 0, 0, -(getPoint(1300)[0]), getPoint(1300)[1]);
	nero_lure_para($nero_lure_03_inner, nero_anim3_param[1], nero_anim4_param[1] + 1000, 0, 0, -(getPoint(1000)[0]), getPoint(1000)[1]);

	$window.scroll(function () {
		
		if (visible_mode == 1) {
			var win_width = $window.width();

			//scrollPara($nero_design,nero_anim1_param[0],nero_anim1_param[1],-20,100,0,0,1);
			scrollPara($nero_design, nero_anim2_param[0], nero_anim2_param[1], -win_width*0.2, win_width, 0, 0, 1);
			scrollPara($nero_lineup, nero_anim3_param[0], nero_anim3_param[1], -win_width*0.2, win_width, 0, 0, 2);
			scrollPara($nero_spec, nero_anim4_param[0], nero_anim4_param[1], -win_width*0.2, win_width, 0, 0, 3);

			var cntst = $window.scrollTop();
			/*
			if((cntst <= nero_anim2_param[0] - 1000 || cntst >= nero_anim3_param[1] + 1000) && $nero_concept.is(':visible')){
				$nero_concept.hide();
			}else if(cntst > nero_anim2_param[0] - 1000 && cntst < nero_anim3_param[1] + 1000 && $nero_concept.is(':hidden')){
				$nero_concept.show();
			}
			*/
			if (cntst < nero_anim2_param[1]) {
				$nero_video[0].play();
				playNeroConcept();
			} else {
				$nero_video[0].pause();
				stopNeroConcept();
			}
                        if (cntst > nero_anim3_param[0]) {
				$nero_design_ol.css({
					"z-index": "auto"
				});
			} else {
				$nero_design_ol.css({
					"z-index": "70"
				});
			}
                        
			if (cntst > nero_anim4_param[0]) {
				$nero_lineup_title.css({
					"z-index": "auto"
				});
				$nero_lineup_prev.css({
					"z-index": "auto"
				});
				$nero_lineup_next.css({
					"z-index": "auto"
				});
				$nero_lineup_box_set.css({
					"z-index": "auto"
				});
				$nero_next.hide();
			} else {
				$nero_lineup_title.css({
					"z-index": "1"
				});
				$nero_lineup_prev.css({
					"z-index": "70"
				});
				$nero_lineup_next.css({
					"z-index": "70"
				});
				$nero_next.show();
			}


			if (cntst >= nero_anim4_param[0]) {
				$nero_spec.show();
			} else {
				$nero_spec.hide();
			}

			if (cntst >= nero_anim3_param[0]) {
				$nero_lineup.show();
			} else {
				$nero_lineup.hide();
			}

			if (top_scrollflg == 1) {
				$nero_next.hide();
				//$nero_global_nav_li.removeClass('current');
				//$nero_global_nav_li.eq(0).addClass('current');

			} else {

				if (cntst <= 0) {
					neroToTop(true);
					//$nero_global_nav_li.removeClass('current');
					//$nero_global_nav_li.eq(0).addClass('current');
				} else if (cntst < nero_target_position['design']) {
					$nero_global_nav_li.removeClass('current');
					$nero_global_nav_li.eq(1).addClass('current');
				} else if (cntst < nero_target_position['lineup']) {
					$nero_global_nav_li.removeClass('current');
					$nero_global_nav_li.eq(2).addClass('current');
				} else if (cntst < nero_target_position['spec']) {
					$nero_global_nav_li.removeClass('current');
					$nero_global_nav_li.eq(3).addClass('current');
				} else {
					$nero_global_nav_li.removeClass('current');
					$nero_global_nav_li.eq(4).addClass('current');
				}
			}
		}
	});
}

function setTranpoPara() {

	var tranpo_anim1_param = new Array(0, 1800);
	tranpo_key_frame = tranpo_anim1_param[1];
	var tranpo_anim2_param = new Array(tranpo_key_frame, tranpo_key_frame + 1800);
	tranpo_key_frame = tranpo_anim2_param[1];
	var tranpo_anim3_param = new Array(tranpo_key_frame + 8000, tranpo_key_frame + 8600);
	tranpo_key_frame = tranpo_anim3_param[1];
	var tranpo_anim4_param = new Array(tranpo_key_frame + 2000, tranpo_key_frame + 2600);
	tranpo_key_frame = tranpo_anim4_param[1];

	tranpo_key_frame += 1000;

	setTranpoDesignAnim();

	tranpo_big_rod_para($tranpo_big_rod_img, tranpo_key_frame + 1000 - $window.height(), 0, 0, 0, -(getPoint(4400)[0]), getPoint(4400)[1]);
	tranpo_lure_para($tranpo_lure_01_inner, tranpo_key_frame - tranpo_anim3_param[0] + 3000, tranpo_key_frame - tranpo_anim2_param[1] + 2000, 0, 0, getPoint(1000)[0], -(getPoint(1000)[1]));
	tranpo_lure_para($tranpo_lure_02_inner, tranpo_key_frame - tranpo_anim4_param[0] + 1000, tranpo_key_frame - tranpo_anim3_param[1] + 1000, 0, 0, getPoint(1000)[0], -(getPoint(1000)[1]));
	tranpo_lure_para($tranpo_lure_03_inner, tranpo_key_frame - tranpo_anim4_param[1] - 2500, tranpo_key_frame - tranpo_anim3_param[1], 0, 0, getPoint(550)[0], -(getPoint(550)[1]));

	$window.scroll(function () {

		if (visible_mode == 2) {
			var win_width = $window.width();
			var cntst = $window.scrollTop();

			scrollPara($tranpo_design, tranpo_key_frame - tranpo_anim2_param[1], tranpo_key_frame - tranpo_anim2_param[0], 0, 0, win_width*0.2, -win_width, 1);
			scrollPara($tranpo_lineup, tranpo_key_frame - tranpo_anim3_param[1], tranpo_key_frame - tranpo_anim3_param[0], 0, 0, win_width*0.2, -win_width, 2);
			scrollPara($tranpo_spec, tranpo_key_frame - tranpo_anim4_param[1], tranpo_key_frame - tranpo_anim4_param[0], 0, 0, win_width*0.2, -win_width, 3);

			var cntst = $window.scrollTop();
			/*
			if((cntst >= (tranpo_key_frame-tranpo_anim2_param[0] + 1000) || cntst <= (tranpo_key_frame-tranpo_anim3_param[1] - 1000)) && $tranpo_concept.is(':visible')){
				$tranpo_concept.hide();
			}else if(cntst < (tranpo_key_frame-tranpo_anim2_param[0] + 1000) && cntst > (tranpo_key_frame-tranpo_anim3_param[1] - 1000) && $tranpo_concept.is(':hidden')){
				$tranpo_concept.show();
			}
			*/

			if (cntst <= tranpo_key_frame - tranpo_anim4_param[0]) {
				$tranpo_spec.show();
			} else {
				$tranpo_spec.hide();
			}

			if (cntst <= tranpo_key_frame - tranpo_anim3_param[0]) {
				$tranpo_lineup.show();
			} else {
				$tranpo_lineup.hide();
			}
			if (cntst > tranpo_key_frame - tranpo_anim2_param[1]) {
				$tranpo_video[0].play();
				playTranpoConcept();
			} else {
				$tranpo_video[0].pause();
				stopTranpoConcept();
			}
                        if (cntst < tranpo_key_frame - tranpo_anim3_param[0]) {
				$tranpo_design_ol.css({
					"z-index": "auto"
				});
			} else {
				$tranpo_design_ol.css({
					"z-index": "69"
				});
			}
			if (cntst < tranpo_key_frame - tranpo_anim4_param[0]) {
				$tranpo_lineup_title.css({
					"z-index": "auto"
				});
				$tranpo_lineup_prev.css({
					"z-index": "auto"
				});
				$tranpo_lineup_next.css({
					"z-index": "auto"
				});
				$tranpo_lineup_box_set.css({
					"z-index": "auto"
				});
				$tranpo_next.hide();
			} else {
				$tranpo_lineup_title.css({
					"z-index": "1"
				});
				$tranpo_lineup_prev.css({
					"z-index": "70"
				});
				$tranpo_lineup_next.css({
					"z-index": "70"
				});
				$tranpo_next.show();
			}

			if (top_scrollflg == 1) {
				$tranpo_next.hide();
				//$tranpo_global_nav_li.removeClass('current');
				//$tranpo_global_nav_li.eq(0).addClass('current');

			} else {

				if (cntst <= tranpo_key_frame - tranpo_target_position['spec']) {
					$tranpo_global_nav_li.removeClass('current');
					$tranpo_global_nav_li.eq(4).addClass('current');
				} else if (cntst <= tranpo_key_frame - tranpo_target_position['lineup']) {
					$tranpo_global_nav_li.removeClass('current');
					$tranpo_global_nav_li.eq(3).addClass('current');
				} else if (cntst <= tranpo_key_frame - tranpo_target_position['design']) {
					$tranpo_global_nav_li.removeClass('current');
					$tranpo_global_nav_li.eq(2).addClass('current');
				} else if (cntst <= tranpo_key_frame - tranpo_target_position['concept'] && cntst != $body.height() - $window.height()) {
					$tranpo_global_nav_li.removeClass('current');
					$tranpo_global_nav_li.eq(1).addClass('current');
				} else if(cntst == $body.height() - $window.height()){
					tranpoToTop(true);
					$tranpo_global_nav_li.removeClass('current');
					$tranpo_global_nav_li.eq(0).addClass('current');
				}
			}
		}
	});
}

function setNeroDesignAnim() {
	var startparam = 0;
	var endparam = 250;
	var setspan = 600;
	var currentli = 0;
	var setspan2 = 700;
	$nero_design_li.each(function () {
		if (currentli < 4) {
			para($(this), startparam + 2500, endparam + 3000, 0, 70, 0, 350, setspan2);
		} else {
			lastpara($(this), startparam + 2500, endparam + 3000, 0, 70, 0, 350);
		}
                var scrollSet = endparam + 3000 + 200 + currentli*100;
                nero_design_position[currentli] = scrollSet;
                $(this).click(function(){
                    $body_html.animate({
                        scrollTop: scrollSet
                    }, 500);
                }); 
		startparam = endparam + setspan2;
		endparam = startparam + setspan;
		currentli++;
	});
}

function setTranpoDesignAnim() {
	var startparam = 0;
	var endparam = 600;
	var setspan = 600;
	var currentli = 0;
	var setspan2 = 700;
	$tranpo_design_li.each(function () {
		var $my_image = $(this).find("img");
		var my_margin_top = $my_image.css("margin-top").replace("px", "");
		var my_margin_left = $my_image.css("margin-left").replace("px", "");
		if (currentli < 4) {
			tranpo_para($(this), startparam + 4300, endparam + 5400, 170, 430, setspan2);
			tranpo_inner_para($my_image, startparam + 4300, endparam + 5400, -250, -250, my_margin_top, my_margin_left, setspan);
                        var scrollSet = tranpo_key_frame - (startparam + 4300 -setspan2);
                } else {
			last_tranpo_para($(this), startparam + 4100, endparam + 5400, 170, 430, setspan2);
			last_tranpo_inner_para($my_image, startparam + 4100, endparam + 5400, -250, -250, my_margin_top, my_margin_left, setspan);
                        var scrollSet = tranpo_key_frame - (endparam + 5400);
                }
                tranpo_design_position[currentli] = scrollSet;
                $(this).click(function(){
                    $body_html.animate({
                        scrollTop: scrollSet
                    }, 500);
                }); 
		if (currentli < 3) {
			startparam = endparam + setspan2;
			endparam = startparam + setspan;
		}
		currentli++;
	});
}

function para(target, start_point, fix_point, init_left, init_width, fix_left, fix_width, setspan) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var left_range = fix_left - init_left;
	var width_range = fix_width - init_width;

	var fix_start = fix_point + setspan;
	var end_point = fix_start + move_range;

	var target_copy = target.find('.copy');

	function scrollFunc() {

		if (visible_mode == 1) {
			var st = $window.scrollTop();

			if (st > start_point && st <= fix_point) {
				var rate = (st - start_point) / move_range;
				target.stop(true).animate({
					left: init_left + left_range * rate + "px",
					width: init_width + width_range * rate + "px"
				});
				target_copy.stop(true).fadeOut();
			} else if (st > fix_point && st <= fix_start) {
				target.stop(true).animate({
					left: fix_left + "px",
					width: fix_width + "px"
				});
				target_copy.fadeIn();

			} else if (st > fix_start && st <= end_point) {
				var rate = (st - fix_start) / move_range;
				target.stop(true).animate({
					left: fix_left - left_range * rate + "px",
					width: fix_width - width_range * rate + "px"
				});
				target_copy.stop(true).fadeOut();

			} else if (st <= start_point || st > end_point) {

				target.stop(true).animate({
					left: init_left + "px",
					width: init_width + "px"
				});

				if (target_copy.is(':visible')) {
					target_copy.hide();
				}
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function lastpara(target, start_point, fix_point, init_left, init_width, fix_left, fix_width) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var left_range = fix_left - init_left;
	var width_range = fix_width - init_width;

	var target_copy = target.find('.copy');

	function scrollFunc() {

		if (visible_mode == 1) {
			var st = $window.scrollTop();

			if (st > start_point && st <= fix_point) {
				var rate = (st - start_point) / move_range;
				target.stop(true).animate({
					left: init_left + left_range * rate + "px",
					width: init_width + width_range * rate + "px"
				});
				target_copy.stop(true).fadeOut();

			} else if (st > fix_point) {
				target.stop(true).animate({
					left: fix_left + "px",
					width: fix_width + "px"
				});
				target_copy.fadeIn();
			} else if (st <= start_point) {
				target.stop(true).animate({
					left: init_left + "px",
					width: init_width + "px"
				});
				if (target_copy.is(':visible')) {
					target_copy.hide();
				}
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function tranpo_para(target, start_point, fix_point, init_width, fix_width, setspan) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var width_range = fix_width - init_width;
	var init_pos = init_width / -2;
	var fix_pos = fix_width / -2;
	var pos_range = width_range / -2;

	var set_start = tranpo_key_frame - fix_point;
	var set_fix = tranpo_key_frame - start_point;
	var fix_start = set_fix + setspan;
	var end_point = fix_start + move_range;

	var target_copy = target.parent().find('.copy');

	function scrollFunc() {

		if (visible_mode == 2) {
			var st = $window.scrollTop();

			if (st > set_start && st <= set_fix) {
				var rate = (st - set_start) / move_range;
				target.stop(true).animate({
					height: init_width + width_range * rate + "px",
					width: init_width + width_range * rate + "px",
					top: init_pos + pos_range * rate + "px",
					left: init_pos + pos_range * rate + "px"
				});
				target_copy.stop(true).fadeOut();

			} else if (st > set_fix && st <= fix_start) {
				target.stop(true).animate({
					height: fix_width + "px",
					width: fix_width + "px",
					top: fix_pos + "px",
					left: fix_pos + "px"
				});
				target_copy.fadeIn();

			} else if (st > fix_start && st <= end_point) {
				var rate = (st - fix_start) / move_range;
				target.stop(true).animate({
					height: fix_width - width_range * rate + "px",
					width: fix_width - width_range * rate + "px",
					top: fix_pos - pos_range * rate + "px",
					left: fix_pos - pos_range * rate + "px"

				});
				target_copy.stop(true).fadeOut();

			} else if (st <= set_start || st > end_point) {

				target.stop(true).animate({
					height: init_width + "px",
					width: init_width + "px",
					top: init_pos + "px",
					left: init_pos + "px"
				});

				if (target_copy.is(':visible')) {
					target_copy.hide();
				}
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function last_tranpo_para(target, start_point, fix_point, init_width, fix_width, setspan) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var width_range = fix_width - init_width;
	var init_pos = init_width / -2;
	var fix_pos = fix_width / -2;
	var pos_range = width_range / -2;

	var set_start = tranpo_key_frame - fix_point;
	var set_fix = tranpo_key_frame - start_point;

	var target_copy = target.parent().find('.copy');

	function scrollFunc() {

		if (visible_mode == 2) {
			var st = $window.scrollTop();

			if (st > set_start && st <= set_fix) {
				var rate = (st - set_start) / move_range;
				target.stop(true).animate({
					height: fix_width - width_range * rate + "px",
					width: fix_width - width_range * rate + "px",
					top: fix_pos - pos_range * rate + "px",
					left: fix_pos - pos_range * rate + "px"

				});
				target_copy.stop(true).fadeOut();

			} else if (st <= set_start) {
				target.stop(true).animate({
					height: fix_width + "px",
					width: fix_width + "px",
					top: fix_pos + "px",
					left: fix_pos + "px"
				});
				target_copy.fadeIn();

			} else if (st > set_fix) {

				target.stop(true).animate({
					height: init_width + "px",
					width: init_width + "px",
					top: init_pos + "px",
					left: init_pos + "px"
				});

				if (target_copy.is(':visible')) {
					target_copy.hide();
				}
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function tranpo_inner_para(target, start_point, fix_point, init_margin_top, init_margin_left, fix_margin_top, fix_margin_left, setspan) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var margin_top_range = fix_margin_top - init_margin_top;
	var margin_left_range = fix_margin_left - init_margin_left;

	var set_start = tranpo_key_frame - fix_point;
	var set_fix = tranpo_key_frame - start_point;
	var fix_start = set_fix + setspan;
	var end_point = fix_start + move_range;

	function scrollFunc() {
		if (visible_mode == 2) {
			var st = $window.scrollTop();

			if (st > set_start && st <= set_fix) {
				var rate = (st - set_start) / move_range;
				target.stop(true).animate({
					marginTop: init_margin_top + margin_top_range * rate + "px",
					marginLeft: init_margin_left + margin_left_range * rate + "px"
				});

			} else if (st > set_fix && st <= fix_start) {
				target.stop(true).animate({
					marginTop: fix_margin_top + "px",
					marginLeft: fix_margin_left + "px"
				});

			} else if (st > fix_start && st <= end_point) {
				var rate = (st - fix_start) / move_range;
				target.stop(true).animate({
					marginTop: fix_margin_top - margin_top_range * rate + "px",
					marginLeft: fix_margin_left - margin_left_range * rate + "px"

				});

			} else if (st <= set_start || st > end_point) {
				target.stop(true).animate({
					marginTop: init_margin_top + "px",
					marginLeft: init_margin_left + "px"
				});
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function last_tranpo_inner_para(target, start_point, fix_point, init_margin_top, init_margin_left, fix_margin_top, fix_margin_left, setspan) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var margin_top_range = fix_margin_top - init_margin_top;
	var margin_left_range = fix_margin_left - init_margin_left;

	var set_start = tranpo_key_frame - fix_point;
	var set_fix = tranpo_key_frame - start_point;

	function scrollFunc() {
		if (visible_mode == 2) {
			var st = $window.scrollTop();

			if (st > set_start && st <= set_fix) {
				var rate = (st - set_start) / move_range;
				target.stop(true).animate({
					marginTop: fix_margin_top - margin_top_range * rate + "px",
					marginLeft: fix_margin_left - margin_left_range * rate + "px"
				});

			} else if (st <= set_start) {
				target.stop(true).animate({
					marginTop: fix_margin_top + "px",
					marginLeft: fix_margin_left + "px"
				});

			} else if (st > set_fix) {
				target.stop(true).animate({
					marginTop: init_margin_top + "px",
					marginLeft: init_margin_left + "px"
				});
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function nero_big_rod_para(target, start_point, fix_point, init_top, init_left, fix_top, fix_left) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var top_range = fix_top - init_top;
	var left_range = fix_left - init_left;

	function scrollFunc() {
		if (visible_mode == 1) {
			var st = $window.scrollTop();

			if (st > start_point && st <= fix_point) {
				var rate = (st - start_point) / move_range;
				target.stop(true).animate({
					top: init_top + top_range * rate + "px",
					left: init_left + left_range * rate + "px"
				});

			} else if (st > fix_point) {
				target.stop(true).animate({
					top: fix_top + "px",
					left: fix_left + "px"
				});

			} else if (st <= start_point) {
				target.stop(true).animate({
					top: init_top + "px",
					left: init_left + "px"
				});
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function tranpo_big_rod_para(target, start_point, fix_point, init_bottom, init_right, fix_bottom, fix_right) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var bottom_range = fix_bottom - init_bottom;
	var right_range = fix_right - init_right;

	function scrollFunc() {
		if (visible_mode == 2) {
			var st = $window.scrollTop();

			if (st > fix_point && st <= start_point) {
				var rate = (st - start_point) / move_range;
				target.stop(true).animate({
					bottom: init_bottom + bottom_range * rate + "px",
					right: init_right + right_range * rate + "px"
				});

			} else if (st <= fix_point) {
				target.stop(true).animate({
					bottom: fix_bottom + "px",
					right: fix_right + "px"
				});

			} else if (st > start_point) {
				target.stop(true).animate({
					bottom: init_bottom + "px",
					right: init_right + "px"
				});
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function nero_lure_para(target, start_point, fix_point, init_top, init_left, fix_top, fix_left) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var top_range = fix_top - init_top;
	var left_range = fix_left - init_left;

	function scrollFunc() {
		if (visible_mode == 1) {
			var st = $window.scrollTop();

			if (st > start_point && st <= fix_point) {
				var rate = (st - start_point) / move_range;
				target.stop(true).animate({
					top: init_top + top_range * rate + "px",
					left: init_left + left_range * rate + "px"
				});
				target.show();

			} else if (st > fix_point) {
				target.stop(true).animate({
					top: fix_top + "px",
					left: fix_left + "px"
				});
				target.hide();

			} else if (st <= start_point) {
				target.stop(true).animate({
					top: init_top + "px",
					left: init_left + "px"
				});
				target.hide();
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function tranpo_lure_para(target, start_point, fix_point, init_top, init_left, fix_top, fix_left) {
	//var target = $(target_name);
	var move_range = fix_point - start_point;
	var top_range = fix_top - init_top;
	var left_range = fix_left - init_left;

	function scrollFunc() {
		if (visible_mode == 2) {
			var st = $window.scrollTop();

			if (st > start_point && st <= fix_point) {
				var rate = 1 - (st - start_point) / move_range;
				target.stop(true).animate({
					top: init_top + top_range * rate + "px",
					left: init_left + left_range * rate + "px"
				});
				target.show();

			} else if (st <= fix_point) {
				target.stop(true).animate({
					top: fix_top + "px",
					left: fix_left + "px"
				});
				target.hide();

			} else if (st > start_point) {
				target.stop(true).animate({
					top: init_top + "px",
					left: init_left + "px"
				});
				target.hide();
			}
		}
	}

	$window.scroll(function () {
		scrollFunc();
	});
	scrollFunc();
}

function scrollPara(target, start_point, fix_point, init_left, init_top, fix_left, fix_top, flg_set) {

	var move_range = fix_point - start_point;
	var left_range = fix_left - init_left;
	var width_range = fix_top - init_top;

	var st = $window.scrollTop();

	if (st > start_point && st <= fix_point) {
		var rate = (st - start_point) / move_range;
		target.stop(true).animate({
			left: init_left + left_range * rate + "px",
			top: init_top + width_range * rate + "px"
		});
	} else if (st > fix_point) {
		target.stop(true).animate({
			left: fix_left + "px",
			top: fix_top + "px"
		});
	} else if (st <= start_point) {
		target.stop(true).animate({
			left: init_left + "px",
			top: init_top + "px"
		});
	}

}

var nero_design_position = {}

var tranpo_design_position = {}



var nero_target_position = {
	//'top': 0,
	'concept': 300,
	'design': 3400,
	'lineup': 10500,
	'spec': 13100
}

var tranpo_target_position = {
	//'top': -2000,
	'concept': -1001,
	'design': 3600,
	'lineup': 12200,
	'spec': 14800
}

function pageScrollNero(target) {
	$body_html.animate({
		scrollTop: nero_target_position[target]
	}, 500);
}

function pageScrollTranpo(target) {
	$body_html.animate({
		scrollTop: tranpo_key_frame - tranpo_target_position[target]
	}, 500);
}

function nextScrollNero() {
	var currentPos = $window.scrollTop();

	if (currentPos < nero_target_position['design']) {
		pageScrollNero('design');
	} else if (currentPos < nero_target_position['lineup']) {
            if(currentPos < nero_design_position[1]){
                $body_html.animate({
                    scrollTop: nero_design_position[1]
                }, 500);
            }else if(currentPos < nero_design_position[2]){
                $body_html.animate({
                    scrollTop: nero_design_position[2]
                }, 500);
            }else if(currentPos < nero_design_position[3]){
                $body_html.animate({
                    scrollTop: nero_design_position[3]
                }, 500);
            }else if(currentPos < nero_design_position[4]){
                $body_html.animate({
                    scrollTop: nero_design_position[4]
                }, 500);
            }else{
		pageScrollNero('lineup');
            }
	} else if (currentPos < nero_target_position['spec']) {
		pageScrollNero('spec');
	}
}

function nextScrollTranpo() {
	var currentPos = $window.scrollTop();

	if (currentPos <= tranpo_key_frame - tranpo_target_position['lineup']) {
		pageScrollTranpo('spec');
	} else if (currentPos <= tranpo_key_frame - tranpo_target_position['design']) {
            if(currentPos <= tranpo_design_position[4]){
                pageScrollTranpo('lineup');
            }else if(currentPos <= tranpo_design_position[3]){
                $body_html.animate({
                    scrollTop: tranpo_design_position[4]
                }, 500);
            }else if(currentPos <= tranpo_design_position[2]){
                $body_html.animate({
                    scrollTop: tranpo_design_position[3]
                }, 500);
            }else if(currentPos <= tranpo_design_position[1]){
                $body_html.animate({
                    scrollTop: tranpo_design_position[2]
                }, 500);
            }else{
                $body_html.animate({
                    scrollTop: tranpo_design_position[1]
                }, 500);
            }
            
	} else if (currentPos <= tranpo_key_frame - tranpo_target_position['concept']) {
		pageScrollTranpo('design');
	}
}

function getPoint(r) {
	var rot = 15;
	var y = r * Math.sin(rot * Math.PI / 180);
	var x = r * Math.cos(rot * Math.PI / 180);
	return [x, y];
}