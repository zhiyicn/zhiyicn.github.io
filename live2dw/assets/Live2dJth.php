<?php 

/*

Plugin Name: Live2d—加藤惠(Jth)

Version: 1.0.4

Plugin URL:http://huayula.com

Description: 博客上添加看板娘，更加美观

ForEmlog:emlog6.0.1

Author: 华雨啦

Author URL: http://huayula.com

 */

!defined('EMLOG_ROOT') && exit('Access Deined!');

if(function_exists('emLoadJQuery')) {

	emLoadJQuery();

}

//首页微语调用



function index_t($num){



	$t = MySql::getInstance();



	?>



	<?php



	$sql = "SELECT * FROM ".DB_PREFIX."twitter ORDER BY `date` DESC LIMIT $num";



	$list = $t->query($sql);



	while($row = $t->fetch_array($list)){



	?>



	<div class="live2d_weiyu_cache" style="display:none;"><?php echo $row['content'];?></div>



	<?php }?>



<?php } 



//获得live2d

function get_live2d(){	

	$data = live2d_dataGet();

	echo index_t(5);

	echo '<div id="landlord" style="right:5px;bottom:0px;"><div class="message" style="opacity:0"></div><canvas id="live2d"  width="500" height="560" class="live2d"></canvas><div class="live_talk_input_body"><div class="live_talk_input_name_body"><input name="name" type="text" class="live_talk_name white_input" id="AIuserName" autocomplete="off" placeholder="你的名字" /></div><div class="live_talk_input_text_body"><input name="talk" type="text" class="live_talk_talk white_input" id="AIuserText" autocomplete="off" placeholder="要和我聊什么呀？"/><button type="button" class="live_talk_send_btn" id="talk_send">发送</button></div></div><input name="live_talk" id="live_talk" value="1" type="hidden" /><div class="live_ico_box"><div class="live_ico_item type_info" id="showInfoBtn"></div><div class="live_ico_item type_talk" id="showTalkBtn"></div><div class="live_ico_item type_music" id="musicButton"></div><div class="live_ico_item type_youdu" id="youduButton"></div><div class="live_ico_item type_quit" id="hideButton"></div><audio src="" style="display:none;" id="live2d_bgm" data-bgm="0" preload="none"></audio><input name="live_statu_val" id="live_statu_val" value="0" type="hidden" /><input id="duType" value="douqilai,l2d_caihong" type="hidden"></div></div>';

	echo '<div id="open_live2d">加藤惠</div>';

	echo '<link rel="stylesheet" type="text/css" href="'.BLOG_URL.'/content/plugins/Live2dJth/css/live2d.css?ver0.43">';

	echo '<script src="'.BLOG_URL.'/content/plugins/Live2dJth/js/live2d.js?ver0.2"></script>';

	echo '<script src="'.BLOG_URL.'/content/plugins/Live2dJth/js/message.js?ver0.11"></script>';

	if(!empty($data['msra'])){

		echo '<input name="live2dBGM" value="'.$data['msra'].'" type="hidden">';

	}

	if(!empty($data['msrb'])){

		echo '<input name="live2dBGM" value="'.$data['msrb'].'" type="hidden">';

	}

	if(!empty($data['msrc'])){

		echo '<input name="live2dBGM" value="'.$data['msrc'].'" type="hidden">';

	}

	if(!empty($data['msrd'])){

		echo '<input name="live2dBGM" value="'.$data['msrd'].'" type="hidden">';

	}

	if(!empty($data['msre'])){

		echo '<input name="live2dBGM" value="'.$data['msre'].'" type="hidden">';

	}

	

}

function live2d_dataGet() {

	$data = unserialize(ltrim(file_get_contents(dirname(__FILE__).'/live2d.com.php'),'<?php die; ?>'));

	return $data;

}

addAction('index_footer', 'get_live2d');

function Live2dJth_menu()

{

	echo '<div class="sidebarsubmenu" id="Live2dJth"><a href="./plugin.php?plugin=Live2dJth">Live2d设置</a></div>';

}

addAction('adm_sidebar_ext', 'Live2dJth_menu');

 