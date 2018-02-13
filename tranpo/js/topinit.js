var $window = $(window);
var $body_html = $("body,html");
var $html = $("html");
var $body = $("body");

var $container = $("#container");
var $wall = $("#wall");
var $loading = $("#loading");
var $bg = $("#bg");
var $video_set = $(".video");
var $bg_button = $("#bg_button");
var $bg_black = $("#bg_black");
var $bg_black_image = $bg_black.find(".image");
var $bg_orange = $("#bg_orange");
var $bg_orange_image = $bg_orange.find(".image");
var $bg_black_button = $("#bg_black_button");
var $bg_orange_button = $("#bg_orange_button");	
var $nero_minimum_logo = $bg_black_button.find("> img");
var $tranpo_minimum_logo = $bg_orange_button.find("> img");
var $nero_big_rod = $("#nero_big_rod");
var $tranpo_big_rod = $("#tranpo_big_rod");	
var $nero_big_rod_img = $nero_big_rod.find("> img");
var $tranpo_big_rod_img = $tranpo_big_rod.find("> img");	
var $top_jackall_logo = $("#top_jackall_logo");
var $nero_next = $("#nero_next");
var $nero_next_img = $nero_next.find("> img");
var $tranpo_next = $("#tranpo_next");
var $tranpo_next_img = $tranpo_next.find("> img");
var $nero_back_top = $("#nero_back_top");
var $tranpo_back_top = $("#tranpo_back_top");
var $nero_lure = $("#nero_lure");
var $tranpo_lure = $("#tranpo_lure");
var $nero_lure_01_inner = $("#nero_lure_01 > .lure_inner");
var $nero_lure_02_inner = $("#nero_lure_02 > .lure_inner");
var $nero_lure_03_inner = $("#nero_lure_03 > .lure_inner");
var $tranpo_lure_01_inner = $("#tranpo_lure_01 > .lure_inner");
var $tranpo_lure_02_inner = $("#tranpo_lure_02 > .lure_inner");
var $tranpo_lure_03_inner = $("#tranpo_lure_03 > .lure_inner");
var $nero_lineup_lure_img = $("#nero_lineup_lure > div > img");
var $tranpo_lineup_lure_img = $("#tranpo_lineup_lure > div > img");

var $nero_header = $("#nero_header");
var $nero_index = $("#nero_index");
var $nero_index_copy = $nero_index.find(".index_copy_inner");
var $nero_design = $('#nero_design');
var $nero_design_ol = $nero_design.find("ol");
var $nero_video = $("#nero_video");
var $nero_video_wrap = $("#nero_video_wrap");
var $nero_concept = $('#nero_concept');
var $nero_concept_copy = $("#nero_concept_copy");
var $nero_concept_copy_01 = $("#nero_concept_copy_01");
var $nero_concept_copy_02 = $("#nero_concept_copy_02");
var $nero_concept_copy_03 = $("#nero_concept_copy_03");
var $nero_concept_copy_04 = $("#nero_concept_copy_04");
var $nero_concept_copy_01_img = $nero_concept_copy_01.find(">img");
var $nero_concept_copy_02_img = $nero_concept_copy_02.find(">img");
var $nero_concept_copy_03_img = $nero_concept_copy_03.find(">img");
var $nero_concept_copy_04_img = $nero_concept_copy_04.find(">img");
var $nero_concept_copy_en_01 = $("#nero_concept_copy_en_01");
var $nero_concept_copy_en_02 = $("#nero_concept_copy_en_02");
var $nero_concept_copy_en_03 = $("#nero_concept_copy_en_03");
var $nero_concept_copy_en_04 = $("#nero_concept_copy_en_04");
var $nero_concept_copy_en_01_img = $nero_concept_copy_en_01.find(">img");
var $nero_concept_copy_en_02_img = $nero_concept_copy_en_02.find(">img");
var $nero_concept_copy_en_03_img = $nero_concept_copy_en_03.find(">img");
var $nero_concept_copy_en_04_img = $nero_concept_copy_en_04.find(">img");
var $nero_lineup = $('#nero_lineup');
var $nero_lineup_inner = $nero_lineup.find(".inner_lineup");
var $nero_lineup_title = $nero_lineup.find(".lineup_title");
var $nero_lineup_prev = $nero_lineup.find(".lineup_prev");
var $nero_lineup_next = $nero_lineup.find(".lineup_next");
var $nero_lineup_box_set;
var $tranpo_lineup_box_set
var $nero_spec = $('#nero_spec');

var $tranpo_header = $("#tranpo_header");
var $tranpo_index = $("#tranpo_index");
var $tranpo_index_copy = $tranpo_index.find(".index_copy_inner");
var $tranpo_design = $('#tranpo_design');
var $tranpo_design_ol = $tranpo_design.find("ol");
var $tranpo_video = $("#tranpo_video");
var $tranpo_video_wrap = $("#tranpo_video_wrap");
var $tranpo_concept = $('#tranpo_concept');
var $tranpo_concept_copy_01 = $("#tranpo_concept_copy_01");
var $tranpo_concept_copy_02 = $("#tranpo_concept_copy_02");
var $tranpo_concept_copy_03 = $("#tranpo_concept_copy_03");
var $tranpo_concept_copy_04 = $("#tranpo_concept_copy_04");
var $tranpo_concept_copy_en_01 = $("#tranpo_concept_copy_en_01");
var $tranpo_concept_copy_en_02 = $("#tranpo_concept_copy_en_02");
var $tranpo_concept_copy_en_03 = $("#tranpo_concept_copy_en_03");
var $tranpo_concept_copy_en_04 = $("#tranpo_concept_copy_en_04");
var $tranpo_lineup = $('#tranpo_lineup');
var $tranpo_lineup_inner = $tranpo_lineup.find(".inner_lineup");
var $tranpo_lineup_title = $tranpo_lineup.find(".lineup_title");
var $tranpo_lineup_prev = $tranpo_lineup.find(".lineup_prev");
var $tranpo_lineup_next = $tranpo_lineup.find(".lineup_next");
var $tranpo_spec = $('#tranpo_spec');

var $nero_design_li = $nero_design.find('li');
var $tranpo_design_li = $tranpo_design.find('li > .image');

var $nero_global_nav_li = $nero_header.find('.global_nav li');
var $tranpo_global_nav_li = $tranpo_header.find('.global_nav li');

var browser = getBrowser();
var is_old_ie = (browser.name=="msie" && browser.version < 9)

$(function () {
	if(!is_old_ie){
		setBg();
		setNeroDesign();
		setVideo();
		setNeroLineup();
		setTranpoLineup();
		if(browser.name == "chrome"){
			$nero_video_wrap.css({"z-index":"-1"}); //chrome only
			$tranpo_video_wrap.css({"z-index":"-1"}); //chrome only
		}
		
		$window.load(function(){
			$nero_big_rod_img.css({top:getPoint(1800)[0],left:-(getPoint(1800)[1])});
			$tranpo_big_rod_img.css({bottom:getPoint(1800)[0],right:-(getPoint(1800)[1])});
			$nero_index_copy.css({top:getPoint(100)[0],left:-(getPoint(100)[1])});
			$tranpo_index_copy.css({top:getPoint(-100)[0],left:-(getPoint(-100)[1])});
			
			$loading.fadeOut(500,function(){
				$loading.remove();
				loading_flg = false;
				introAnimation();
			});
		});
	}else{
		$loading.append('<p class="unsupported_message">お使いのブラウザではサイトを表示することができません。<br>お手数ですが、<a href="http://windows.microsoft.com/ja-jp/internet-explorer/download-ie" target="_blank">Internet Explorer9</a>以上か、<a href="http://www.mozilla.jp/firefox/" target="_blank">Firefox</a>、<a href="http://www.google.co.jp/intl/ja/chrome/browser/" target="_blank">Google Chrome</a>等の最新のブラウザでご覧ください。</p>');
	}
});

function introAnimation(){
	$nero_big_rod_img.delay(100).animate({top:0,left:0},2000,"easeOutCubic");
	$tranpo_big_rod_img.delay(100).animate({bottom:0,right:0},2000,"easeOutCubic");
	$nero_index_copy.delay(1000).animate({top:0,left:0,opacity:1},500,"easeOutCubic",introEnd);
	$tranpo_index_copy.delay(1000).animate({top:0,left:0,opacity:1},500,"easeOutCubic");
	
	function introEnd(){
		$wall.hide();
	}
}

function setBg() {
	function adjustBg() {
		$bg.css("top", -($bg.height() - $window.height()) / 2);
		$bg.css("left", -($bg.width() - $window.width()) / 2);
		$bg_button.css("top", -($bg.height() - $window.height()) / 2);
		$bg_button.css("left", -($bg.width() - $window.width()) / 2);
	}
	$window.resize(function (e) {
		adjustBg();
	});
	adjustBg();
}

function setNeroDesign() {
	function adjustTop() {
		$nero_design_ol.css("top", -($nero_design_ol.height() - $window.height()) / 2);
	}
	$window.resize(function () {
		adjustTop();
	});
	adjustTop();
}

function setNeroLineup() {
	var $lineup_list = $nero_lineup.find(".lineup_list");
	$nero_lineup_box_set = $nero_lineup.find(".lineup_box");
	var $position = $nero_lineup.find(".position");
	var $prev = $nero_lineup.find(".lineup_prev");
	var $next = $nero_lineup.find(".lineup_next");
	var $nero_casting = $("#nero_casting");
	var $nero_spinning = $("#nero_spinning");
	var current_pos = 0;
	var total_num = $nero_lineup_box_set.length;
	for (var i = 0; i < total_num; i++) {
		$position.append("<span></span>");
	}
	var $position_span = $position.find("span");
	$prev.click(function (e) {
		goNext(current_pos - 1);
		buttonControl()
	});
	$next.click(function (e) {
		goNext(current_pos + 1);
		buttonControl()
	});

	function goNext(next_num) {
		if($lineup_list.is(':animated')){
			return false;
		}
		$lineup_list.animate({
			left: -700 * next_num
		});
		titleChange(next_num);
		current_pos = next_num;
		opacityAndLureChange();
	}

	function opacityAndLureChange() {
		for (var i = 0; i < total_num; i++) {
			if (i == current_pos) {
				$nero_lineup_box_set.eq(i).animate({
					opacity: 1
				}, function(){$(this).css({"z-index":"70"})});
				$nero_lineup_lure_img.eq(i).stop(true).css({opacity:0, left:"100px", display:"block"}).animate({opacity:1, left:"0"});
			} else {
				$nero_lineup_box_set.eq(i).css({"z-index":"auto"}).animate({
					opacity: 0.2
				});
				$nero_lineup_lure_img.eq(i).stop(true).animate({opacity:0, left:"-100px"}, function(){$(this).css({display:"none"})});
			}
		}
	}
	$nero_lineup_lure_img.css({opacity:0, display:"none"}).eq(0).css({opacity:1, display:"block"});
	$nero_lineup_box_set.css({opacity:0.2}).eq(0).css({opacity:1,"z-index":"70"});
	//opacityAndLureChange();
	var title_margin_left = parseInt($nero_casting.css("margin-left").replace("px", ""));
	var title_move_range = 20;

	function titleChange(next_num) {
		if (current_pos == 7 && next_num == 8) {
			$nero_casting.animate({
				marginLeft: title_margin_left - title_move_range + "px",
				opacity: "0"
			}, 300, function () {
				$nero_spinning.css({
					marginLeft: title_margin_left + title_move_range + "px",
					opacity: "0"
				}).animate({
					marginLeft: title_margin_left + "px",
					opacity: "1"
				});
			})
		} else if (current_pos == 8 && next_num == 7) {
			$nero_spinning.animate({
				marginLeft: title_margin_left - title_move_range + "px",
				opacity: "0"
			}, 300, function () {
				$nero_casting.css({
					marginLeft: title_margin_left + title_move_range + "px",
					opacity: "0"
				}).animate({
					marginLeft: title_margin_left + "px",
					opacity: "1"
				});
			})
		}
	}

	function buttonControl() {
		if (current_pos - 1 < 0) {
			$prev.fadeOut();
			$next.fadeIn();
		} else if (current_pos + 1 >= total_num) {
			$prev.fadeIn();
			$next.fadeOut();
		} else {
			$prev.fadeIn();
			$next.fadeIn();
		}
		$position_span.removeClass("current");
		$position_span.eq(current_pos).addClass("current");
		pageScrollNero('lineup');
	}
	$prev.hide();
	$position_span.eq(0).addClass("current");
	//buttonControl();

	function adjustHeight() {
		$nero_lineup_inner.height($window.height() - $nero_header.height());
	}
	$window.resize(function () {
		adjustHeight();
	});
	adjustHeight();


}

function setTranpoLineup() {
	var $lineup_list = $tranpo_lineup.find(".lineup_list");
	$tranpo_lineup_box_set = $tranpo_lineup.find(".lineup_box");
	var $position = $tranpo_lineup.find(".position");
	var $prev = $tranpo_lineup.find(".lineup_prev");
	var $next = $tranpo_lineup.find(".lineup_next");
	var $tranpo_casting = $("#tranpo_casting");
	var $tranpo_spinning = $("#tranpo_spinning");
	var current_pos = 0;
	var total_num = $tranpo_lineup_box_set.length;
	for (var i = 0; i < total_num; i++) {
		$position.append("<span></span>");
	}
	var $position_span = $position.find("span");
	$prev.click(function (e) {
		goNext(current_pos - 1);
		buttonControl()
	});
	$next.click(function (e) {
		goNext(current_pos + 1);
		buttonControl()
	});

	function goNext(next_num) {
		if($lineup_list.is(':animated')){
			return false;
		}
		$lineup_list.animate({
			left: -700 * next_num
		});
		titleChange(next_num);
		current_pos = next_num;
		opacityAndLureChange();
	}

	function opacityAndLureChange() {
		for (var i = 0; i < total_num; i++) {
			if (i == current_pos) {
				$tranpo_lineup_box_set.eq(i).animate({
					opacity: 1
				}, function(){$(this).css({"z-index":"70"})});
				$tranpo_lineup_lure_img.eq(i).stop(true).css({opacity:0, left:"100px", display:"block"}).animate({opacity:1, left:"0"});
			} else {
				$tranpo_lineup_box_set.eq(i).css({"z-index":"auto"}).animate({
					opacity: 0.2
				});
				$tranpo_lineup_lure_img.eq(i).stop(true).animate({opacity:0, left:"-100px"}, function(){$(this).css({display:"none"})});
			}
		}
	}
	$tranpo_lineup_lure_img.css({opacity:0, display:"none"}).eq(0).css({opacity:1, display:"block"});
	$tranpo_lineup_box_set.css({opacity:0.2}).eq(0).css({opacity:1,"z-index":"70"});
	//opacityAndLureChange();
	var title_margin_left = parseInt($tranpo_casting.css("margin-left").replace("px", ""));
	var title_move_range = 20;

	function titleChange(next_num) {
		if (current_pos == 2 && next_num == 3) {
			$tranpo_casting.animate({
				marginLeft: title_margin_left - title_move_range + "px",
				opacity: "0"
			}, 300, function () {
				$tranpo_spinning.css({
					marginLeft: title_margin_left + title_move_range + "px",
					opacity: "0"
				}).animate({
					marginLeft: title_margin_left + "px",
					opacity: "1"
				});
			})
		} else if (current_pos == 3 && next_num == 2) {
			$tranpo_spinning.animate({
				marginLeft: title_margin_left - title_move_range + "px",
				opacity: "0"
			}, 300, function () {
				$tranpo_casting.css({
					marginLeft: title_margin_left + title_move_range + "px",
					opacity: "0"
				}).animate({
					marginLeft: title_margin_left + "px",
					opacity: "1"
				});
			})
		}
	}

	function buttonControl() {
		if (current_pos - 1 < 0) {
			$prev.fadeOut();
			$next.fadeIn();
		} else if (current_pos + 1 >= total_num) {
			$prev.fadeIn();
			$next.fadeOut();
		} else {
			$prev.fadeIn();
			$next.fadeIn();
		}
		$position_span.removeClass("current");
		$position_span.eq(current_pos).addClass("current");
		pageScrollTranpo('lineup');
	}
	$prev.hide();
	$position_span.eq(0).addClass("current");
	//buttonControl();

	function adjustHeight() {
		$tranpo_lineup_inner.height($window.height() - $tranpo_header.height());
	}
	$window.resize(function () {
		adjustHeight();
	});
	adjustHeight();


}


function setVideo() {
	function adjustVideo() {
		$video_set.each(function () {
			var imgW = parseInt($(this).attr("width"));
			var imgH = parseInt($(this).attr("height"));
			var rate = getFillFixScaleRate(imgW, imgH, $window.width(), $window.height());
			$(this).width(Math.floor(imgW * rate));
			$(this).height(Math.floor(imgH * rate));
		});
	}
	$window.resize(function () {
		adjustVideo();
	});
	adjustVideo();
}


//--------------------------------------------------------------------


function getFillFixScaleRate(imgW, imgH, targetW, targetH) {
	var scaleW = targetW / imgW;
	var scaleH = targetH / imgH;
	return Math.max(scaleW, scaleH);
}


//--------------------------------------------------------------------


/* Useage (require jQuery)
var browser = getBrowser();
var isIE6 = (browser.name=="msie" && browser.version == 6);
*/

function getBrowser(){
	var ua = new Object();
	
	$.each($.browser, function(key, val) {
		if (key == "version") {
			ua.version = parseInt(val);
		} else if (val) {
			ua.name = key;
		}
	
		if (ua.name && ua.version) {
			return false;
		}
	});
	
	return ua;
}

//--------------------------------------------------------------------


/* Useage
var isiPhone = (getPlatform() == "iPhone");
*/

function getPlatform(){
	var os = "Other";
	var platform = navigator.platform;
	if(platform.indexOf("iPhone")!=-1) os = "iPhone";
	if(platform.indexOf("iPad")!=-1) os = "iPad";
	if(platform.indexOf("Win")!=-1) os = "Win";
	if(platform.indexOf("Mac")!=-1) os = "Mac";
	return os;
}

//--------------------------------------------------------------------