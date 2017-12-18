<?php

/* admin/pageInfo.html */
class __TwigTemplate_708b7bde16266b8adb349853ffcb83ce887a7c2a5ee152bb560f7e5ccc37c17d extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/pageInfo.html", 1)->display($context);
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
\t
\t.label_value {
\t\ttext-align: left;
\t}
</style>
";
        // line 32
        $this->loadTemplate("admin/crumbs1.html", "admin/pageInfo.html", 32)->display($context);
        // line 33
        echo "<div class=\"layui-collapse\" lay-filter=\"test\">
\t<div class=\"layui-colla-item\">
\t\t<h2 class=\"layui-colla-title\">下拉查看详情</h2>
\t\t<div class=\"layui-colla-content\">
\t\t\t<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">时间:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"wealth\" data-type=\"time\">2274580253@qq.com</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">姓名:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"username\">张三</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">地址:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"classify\">广东深圳</label>

\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">wealth:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"experience\"></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">签名:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"sign\"></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">城市:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"city\"></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">图像:</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<div class=\"layui-upload\">
\t\t\t\t\t\t\t<div class=\"layui-upload-list\">
\t\t\t\t\t\t\t\t<img class=\"layui-upload-img\" src=\"/resource/admin/image/avatar.png\" data-info=\"score\" data-type=\"img\" id=\"demo1\">
\t\t\t\t\t\t\t\t<p id=\"demoText\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t</div>
</div>

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
\t\t\tlayui.use(['form', 'layer', 'element', 'public'], function() {

\t\t\t\tvar element = layui.element;
\t\t\t\tvar layer = layui.layer;
\t\t\t\tvar public = layui.public;
\t\t\t\t
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId'));   //获取当前iframe窗口的id值
\t\t\t\t//console.log(result.id);
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/user/demo_data',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tpage: 1,
\t\t\t\t\t\tlimit: 10,
\t\t\t\t\t\tid: 1
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data[0];
\t\t\t\t\t\t//console.log(data);
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data
\t\t\t\t\t\t}); //展示详情   具体实现方法请查看public.js
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\telement.on('collapse(test)', function(data) {
\t\t\t\t\t//layer.msg('展开状态：' + data.show);
\t\t\t\t\tconsole.log('展开状态：' + data.show);
\t\t\t\t});
\t\t\t});
\t\t},

\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/pageInfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 33,  53 => 32,  21 => 2,  19 => 1,);
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
/* 	*/
/* 	.label_value {*/
/* 		text-align: left;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <div class="layui-collapse" lay-filter="test">*/
/* 	<div class="layui-colla-item">*/
/* 		<h2 class="layui-colla-title">下拉查看详情</h2>*/
/* 		<div class="layui-colla-content">*/
/* 			<form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">时间:</label>*/
/* 					<label class="layui-form-label label_value" data-info="wealth" data-type="time">2274580253@qq.com</label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">姓名:</label>*/
/* 					<label class="layui-form-label label_value" data-info="username">张三</label>*/
/* 				</div>*/
/* */
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">地址:</label>*/
/* 					<label class="layui-form-label label_value" data-info="classify">广东深圳</label>*/
/* */
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">wealth:</label>*/
/* 					<label class="layui-form-label label_value" data-info="experience"></label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">签名:</label>*/
/* 					<label class="layui-form-label label_value" data-info="sign"></label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">城市:</label>*/
/* 					<label class="layui-form-label label_value" data-info="city"></label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">图像:</label>*/
/* 					<div class="layui-input-block">*/
/* 						<div class="layui-upload">*/
/* 							<div class="layui-upload-list">*/
/* 								<img class="layui-upload-img" src="/resource/admin/image/avatar.png" data-info="score" data-type="img" id="demo1">*/
/* 								<p id="demoText"></p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
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
/* 			layui.use(['form', 'layer', 'element', 'public'], function() {*/
/* */
/* 				var element = layui.element;*/
/* 				var layer = layui.layer;*/
/* 				var public = layui.public;*/
/* 				*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId'));   //获取当前iframe窗口的id值*/
/* 				//console.log(result.id);*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/user/demo_data',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						page: 1,*/
/* 						limit: 10,*/
/* 						id: 1*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data[0];*/
/* 						//console.log(data);*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data*/
/* 						}); //展示详情   具体实现方法请查看public.js*/
/* 					}*/
/* 				})*/
/* 				element.on('collapse(test)', function(data) {*/
/* 					//layer.msg('展开状态：' + data.show);*/
/* 					console.log('展开状态：' + data.show);*/
/* 				});*/
/* 			});*/
/* 		},*/
/* */
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
