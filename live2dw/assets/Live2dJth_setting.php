<?php

if(!defined('EMLOG_ROOT')) {exit('error!');}

function plugin_setting_view(){

	$live2d_set=unserialize(ltrim(file_get_contents(dirname(__FILE__).'/live2d.com.php'),'<?php die; ?>'));

	?>

             	       
           KEY：<input name="ak" value="<?php echo $live2d_set['ak']; ?>" /><br />

        音乐1：<input name="msra" value="<?php echo $live2d_set['msra']; ?>" /><br />

        音乐2：<input name="msrb" value="<?php echo $live2d_set['msrb']; ?>" /><br />

        音乐3：<input name="msrc" value="<?php echo $live2d_set['msrc']; ?>" /><br />

        音乐4：<input name="msrd" value="<?php echo $live2d_set['msrd']; ?>" /><br />

        音乐5：<input name="msre" value="<?php echo $live2d_set['msre']; ?>" /><br />

        

        <br />

        

        <input type="submit" value="提交" />

        

        </form><br><br>

<style type="text/css">
#divMain .SubMenu {height: auto;}
i.xnxf-tip {
	background-color: red;
	border-radius: 7px;
	height: 7px;
	padding: 0;
	position: relative;
	right: 8px;
	top: -3px;
	width: 7px;
}
#help a {
    background-color: inherit;
    float: none;
}
#help td {
    padding: 7px;
    font-size: 15px;
}
</style>
<i class="xnxf-tip" style="float: right"></i>
<a href="javascript:;" style="float: right;" onclick="$('#help,#divMain2').slideToggle();$('.xnxf-tip').animate({opacity: 0});SetCookie('xnxf-tip', 'xnxf', 365)" title="查看/隐藏关于"><span class="m-right">[关于]</span></a>
<div id="help" style="display:none;clear: both">
<table>
<tr>
  <td></td>
  <td><a target="_blank" href="//wpa.qq.com/msgrd?v=3&uin=2912167928&site=qq&menu=yes"><img src="//wpa.qq.com/pa?p=2:2912167928:51" alt="联系作者" title="联系作者大人"/></a></td>
  <td>2912167928</td>
</tr>
<tr>
  <td></td>
  <td><a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=4d46d83706c379e3a50781d90355ff4c45c411140305aef134fd66d83997912b"><img src="//pub.idqqimg.com/wpa/images/group.png" alt="华雨啦交流群" title="华雨啦交流群"></a></td>
  <td>853877809</td>
</tr>
<tr>
	<td colspan="3" style="text-align: center">本插件免费版，如需高级版请联系作者购买</td>
	<td>emlog看板娘插件高级版<br>
1.新增人物换装功能，后台换装（初始换装），前台换装（刷新页面回归到初始装扮）<br>
2.修复后台设置提交失灵问题<br>
3.优化图灵机器人接口<br>
5.优化音乐外链接口-QQ音乐外链<br>
6.新增看板娘可用鼠标拖动<br>
7.对核心加密防止程序出错（不妨碍你更改人物大小，位置，模型替换，音乐外链增加接口等等）<br>
8.emlog6.0.1通用（已测试3个模板，无差错）<br>
9.售后：人物模型替换详细指导<br>
10.演示站-华雨啦（www.huayula.com），更多敬请期待....</td></tr>

 </table>

</div>
<div style="clear: both"></div>
<script type="text/javascript">
if(GetCookie("xnxf-tip")=="xnxf"){
  $('.xnxf-tip').css({opacity: 0});
}
</script><br><br>
-----------------------------------------------------------------------------
  <p>注：</p>
    <p>基于如下代码实现:</p>
    <p>https://github.com/eeg1412/Live2dHistoire</p>
       <p>修改说明地址：</p>
	 <p>https://huayula.com/?post=435</p>
	<?php

	

}



if(!empty($_POST)){



$ak=empty($_POST['ak'])?'':trim($_POST['ak']);

$msra=empty($_POST['msra'])?'':trim($_POST['msra']);

$msrb=empty($_POST['msrb'])?'':trim($_POST['msrb']);

$msrc=empty($_POST['msrc'])?'':trim($_POST['msrc']);

$msrd=empty($_POST['msrd'])?'':trim($_POST['msrd']);

$msre=empty($_POST['msre'])?'':trim($_POST['msre']);





if(get_magic_quotes_gpc()){



$ak=stripslashes($ak);

$msra=stripslashes($msra);

$msrb=stripslashes($msrb);

$msrc=stripslashes($msrc);

$msrd=stripslashes($msrd);

$msre=stripslashes($msre);



}



file_put_contents(dirname(__FILE__).'/live2d.com.php','<?php die; ?>'.serialize(array(



'ak'=>$ak,

'msra'=>$msra,

'msrb'=>$msrb,

'msrc'=>$msrc,

'msrd'=>$msrd,

'msre'=>$msre,





)));





}



?>

