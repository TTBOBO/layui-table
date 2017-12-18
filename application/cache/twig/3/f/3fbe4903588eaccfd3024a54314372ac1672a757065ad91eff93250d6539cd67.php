<?php

/* admin/add.html */
class __TwigTemplate_f2d5aca88bb8167ea46baf69b739367a4d3e57327ac42598018240b53570e3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("admin/iheader.html", "admin/add.html", 1)->display($context);
        // line 2
        echo "
<style>
\tbody {
\t\tmargin: 10px;
\t}
\t
\t.demo-carousel {
\t\theight: 200px;
\t\tline-height: 200px;
\t\ttext-align: center;
\t}
\t
\t.layui-table-view .layui-table {
\t\twidth: 100%;
\t}
\t
\t.model {
\t\tpadding: 20px;
\t}
\t
\t.layui-upload-img {
\t\twidth: 100px;
\t\theight: 100px;
\t\tborder: 1px solid transparent;
\t}
</style>
";
        // line 28
        $this->loadTemplate("admin/crumbs1.html", "admin/add.html", 28)->display($context);
        // line 29
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">单行输入框</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<input type=\"text\" name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">验证必填项</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<input type=\"text\" name=\"username\" placeholder=\"请输入\" autocomplete=\"off\" class=\"layui-input\">
\t\t</div>
\t</div>

\t<div class=\"layui-form-item\">
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">验证手机</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"tel\" name=\"phone\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">验证邮箱</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"text\" name=\"email\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"layui-form-item\">
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">多规则验证</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"text\" name=\"number\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">验证日期</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"text\" name=\"date\" id=\"date\" placeholder=\"yyyy-MM-dd\" autocomplete=\"off\" class=\"layui-input\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">自定义验证</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<input type=\"password\" name=\"password\" placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\">
\t\t</div>
\t\t<div class=\"layui-form-mid layui-word-aux\">请填写6到12位密码</div>
\t</div>

\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">单行选择框</label>
\t\t<div class=\"layui-input-inline\">
\t\t\t<select name=\"interest\" lay-filter=\"aihao\">
\t\t\t\t<option value=\"\"></option>
\t\t\t\t<option value=\"0\">写作</option>
\t\t\t\t<option value=\"1\" selected=\"\">阅读</option>
\t\t\t\t<option value=\"2\">游戏</option>
\t\t\t\t<option value=\"3\">音乐</option>
\t\t\t\t<option value=\"4\">旅行</option>
\t\t\t</select>
\t\t</div>
\t</div>

\t<div class=\"layui-form-item\">
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">搜索选择框</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<select name=\"modules\" lay-search=\"\">
\t\t\t\t\t<option value=\"\">直接选择或搜索选择</option>
\t\t\t\t\t<option value=\"1\">layer</option>
\t\t\t\t\t<option value=\"2\">form</option>
\t\t\t\t\t<option value=\"3\">layim</option>
\t\t\t\t\t<option value=\"4\">element</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"layui-form-item\" pane=\"\">
\t\t<label class=\"layui-form-label\">原始复选框</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<input type=\"checkbox\" name=\"like1[write]\" lay-skin=\"primary\" title=\"写作\" checked=\"\">
\t\t\t<input type=\"checkbox\" name=\"like1[read]\" lay-skin=\"primary\" title=\"阅读\">
\t\t\t<input type=\"checkbox\" name=\"like1[game]\" lay-skin=\"primary\" title=\"游戏\" disabled=\"\">
\t\t</div>
\t</div>

\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">开关-默认关</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<input type=\"checkbox\" name=\"close\" lay-skin=\"switch\" lay-text=\"ON|OFF\">
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">开关-默认开</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<input type=\"checkbox\" checked=\"\" name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"打开|关闭\">
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">单选框</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<input type=\"radio\" name=\"sex\" value=\"男\" title=\"男\" checked=\"\">
\t\t\t<input type=\"radio\" name=\"sex\" value=\"女\" title=\"女\">
\t\t\t<input type=\"radio\" name=\"sex\" value=\"禁\" title=\"禁用\" disabled=\"\">
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<label class=\"layui-form-label\">上传</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<div class=\"layui-upload\">

\t\t\t\t<div class=\"layui-upload-list\">
\t\t\t\t\t<img class=\"layui-upload-img\" id=\"demo1\">
\t\t\t\t\t<p id=\"demoText\"></p>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" class=\"layui-btn\" id=\"test1\">上传图片</button>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"layui-form-item layui-form-text\">
\t\t<label class=\"layui-form-label\">编辑器</label>
\t\t<div class=\"layui-input-block\">
\t\t\t<textarea class=\"layui-textarea layui-hide\" name=\"content\" id=\"LAY_demo_editor\"></textarea>
\t\t</div>
\t</div>
\t<div class=\"layui-form-item\">
\t\t<div class=\"layui-input-block\">
\t\t\t<button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
\t\t\t<button type=\"reset\" class=\"layui-btn layui-btn-primary\">重置</button>
\t\t</div>
\t</div>
</form>

<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},

\t\tinitFrom: function() {
\t\t\tlayui.use(['form', 'layedit', 'laydate', 'element'], function() {
\t\t\t\tvar form = layui.form,
\t\t\t\t\tlayer = layui.layer,
\t\t\t\t\tlayedit = layui.layedit,
\t\t\t\t\tlaydate = layui.laydate,
\t\t\t\t\tpublic = layui.public,
\t\t\t\t\tupload = layui.upload;

\t\t\t\t//日期
\t\t\t\tlaydate.render({
\t\t\t\t\telem: '#date'
\t\t\t\t});
\t\t\t\tlaydate.render({
\t\t\t\t\telem: '#date1'
\t\t\t\t});

\t\t\t\t//创建一个编辑器
\t\t\t\tvar editIndex = layedit.build('LAY_demo_editor');

\t\t\t\t//自定义验证规则
//\t\t\t\tform.verify({
//\t\t\t\t\ttitle: function(value) {
//\t\t\t\t\t\tif(value.length < 5) {
//\t\t\t\t\t\t\treturn '标题至少得5个字符啊';
//\t\t\t\t\t\t}
//\t\t\t\t\t},
//\t\t\t\t\tpass: [/(.+){6,12}\$/, '密码必须6到12位'],
//\t\t\t\t\tcontent: function(value) {
//\t\t\t\t\t\tlayedit.sync(editIndex);
//\t\t\t\t\t}
//\t\t\t\t});

\t\t\t\t//监听提交
\t\t\t\tform.on('submit(demo1)', function(data) {
\t\t\t\t\tlayer.alert(JSON.stringify(data.field), {
\t\t\t\t\t\ttitle: '最终的提交信息'
\t\t\t\t\t})
\t\t\t\t\tvar parmas = ykp.getSessionStorage('iframeId');
\t\t\t\t\tconsole.log(parmas);
\t\t\t\t\tfor(var i in parmas) {
\t\t\t\t\t\tconsole.log(i);
\t\t\t\t\t}
\t\t\t\t\t//编辑成功 跳转到列表页面
\t\t\t\t\t//\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = '";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/';
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\tpublic.upload({
\t\t\t\t\tel: \"#test1\",
\t\t\t\t\tshowImg: \"#demo1\",
\t\t\t\t\turl: 'http://api.finance.yunkepai.net/api/api_common/upload_img',
\t\t\t\t});
\t\t\t\t//获取当前iframe窗口的id值
\t\t\t\t//var id =  ykp.getSessionStorage('iframeId');
\t\t\t\t//var result = public.getIframeParams(id);
\t\t\t\t//console.log(result.id);
\t\t\t});
\t\t},

\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 222,  51 => 29,  49 => 28,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* */
/* <style>*/
/* 	body {*/
/* 		margin: 10px;*/
/* 	}*/
/* 	*/
/* 	.demo-carousel {*/
/* 		height: 200px;*/
/* 		line-height: 200px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.layui-table-view .layui-table {*/
/* 		width: 100%;*/
/* 	}*/
/* 	*/
/* 	.model {*/
/* 		padding: 20px;*/
/* 	}*/
/* 	*/
/* 	.layui-upload-img {*/
/* 		width: 100px;*/
/* 		height: 100px;*/
/* 		border: 1px solid transparent;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">单行输入框</label>*/
/* 		<div class="layui-input-block">*/
/* 			<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">验证必填项</label>*/
/* 		<div class="layui-input-block">*/
/* 			<input type="text" name="username" placeholder="请输入" autocomplete="off" class="layui-input">*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">验证手机</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<input type="tel" name="phone" autocomplete="off" class="layui-input">*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">验证邮箱</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<input type="text" name="email" autocomplete="off" class="layui-input">*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">多规则验证</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<input type="text" name="number" autocomplete="off" class="layui-input">*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">验证日期</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<input type="text" name="date" id="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">自定义验证</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">*/
/* 		</div>*/
/* 		<div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">单行选择框</label>*/
/* 		<div class="layui-input-inline">*/
/* 			<select name="interest" lay-filter="aihao">*/
/* 				<option value=""></option>*/
/* 				<option value="0">写作</option>*/
/* 				<option value="1" selected="">阅读</option>*/
/* 				<option value="2">游戏</option>*/
/* 				<option value="3">音乐</option>*/
/* 				<option value="4">旅行</option>*/
/* 			</select>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">搜索选择框</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<select name="modules" lay-search="">*/
/* 					<option value="">直接选择或搜索选择</option>*/
/* 					<option value="1">layer</option>*/
/* 					<option value="2">form</option>*/
/* 					<option value="3">layim</option>*/
/* 					<option value="4">element</option>*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item" pane="">*/
/* 		<label class="layui-form-label">原始复选框</label>*/
/* 		<div class="layui-input-block">*/
/* 			<input type="checkbox" name="like1[write]" lay-skin="primary" title="写作" checked="">*/
/* 			<input type="checkbox" name="like1[read]" lay-skin="primary" title="阅读">*/
/* 			<input type="checkbox" name="like1[game]" lay-skin="primary" title="游戏" disabled="">*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">开关-默认关</label>*/
/* 		<div class="layui-input-block">*/
/* 			<input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">开关-默认开</label>*/
/* 		<div class="layui-input-block">*/
/* 			<input type="checkbox" checked="" name="open" lay-skin="switch" lay-filter="switchTest" lay-text="打开|关闭">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">单选框</label>*/
/* 		<div class="layui-input-block">*/
/* 			<input type="radio" name="sex" value="男" title="男" checked="">*/
/* 			<input type="radio" name="sex" value="女" title="女">*/
/* 			<input type="radio" name="sex" value="禁" title="禁用" disabled="">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<label class="layui-form-label">上传</label>*/
/* 		<div class="layui-input-block">*/
/* 			<div class="layui-upload">*/
/* */
/* 				<div class="layui-upload-list">*/
/* 					<img class="layui-upload-img" id="demo1">*/
/* 					<p id="demoText"></p>*/
/* 				</div>*/
/* 				<button type="button" class="layui-btn" id="test1">上传图片</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="layui-form-item layui-form-text">*/
/* 		<label class="layui-form-label">编辑器</label>*/
/* 		<div class="layui-input-block">*/
/* 			<textarea class="layui-textarea layui-hide" name="content" id="LAY_demo_editor"></textarea>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="layui-form-item">*/
/* 		<div class="layui-input-block">*/
/* 			<button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>*/
/* 			<button type="reset" class="layui-btn layui-btn-primary">重置</button>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* */
/* 		initFrom: function() {*/
/* 			layui.use(['form', 'layedit', 'laydate', 'element'], function() {*/
/* 				var form = layui.form,*/
/* 					layer = layui.layer,*/
/* 					layedit = layui.layedit,*/
/* 					laydate = layui.laydate,*/
/* 					public = layui.public,*/
/* 					upload = layui.upload;*/
/* */
/* 				//日期*/
/* 				laydate.render({*/
/* 					elem: '#date'*/
/* 				});*/
/* 				laydate.render({*/
/* 					elem: '#date1'*/
/* 				});*/
/* */
/* 				//创建一个编辑器*/
/* 				var editIndex = layedit.build('LAY_demo_editor');*/
/* */
/* 				//自定义验证规则*/
/* //				form.verify({*/
/* //					title: function(value) {*/
/* //						if(value.length < 5) {*/
/* //							return '标题至少得5个字符啊';*/
/* //						}*/
/* //					},*/
/* //					pass: [/(.+){6,12}$/, '密码必须6到12位'],*/
/* //					content: function(value) {*/
/* //						layedit.sync(editIndex);*/
/* //					}*/
/* //				});*/
/* */
/* 				//监听提交*/
/* 				form.on('submit(demo1)', function(data) {*/
/* 					layer.alert(JSON.stringify(data.field), {*/
/* 						title: '最终的提交信息'*/
/* 					})*/
/* 					var parmas = ykp.getSessionStorage('iframeId');*/
/* 					console.log(parmas);*/
/* 					for(var i in parmas) {*/
/* 						console.log(i);*/
/* 					}*/
/* 					//编辑成功 跳转到列表页面*/
/* 					//						self.parent.document.getElementById(parmas).src = '{{base_url}}admin/user/';*/
/* 					return false;*/
/* 				});*/
/* */
/* 				public.upload({*/
/* 					el: "#test1",*/
/* 					showImg: "#demo1",*/
/* 					url: 'http://api.finance.yunkepai.net/api/api_common/upload_img',*/
/* 				});*/
/* 				//获取当前iframe窗口的id值*/
/* 				//var id =  ykp.getSessionStorage('iframeId');*/
/* 				//var result = public.getIframeParams(id);*/
/* 				//console.log(result.id);*/
/* 			});*/
/* 		},*/
/* */
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
