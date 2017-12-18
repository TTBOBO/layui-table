<?php

/* admin/product/serviceInfo.html */
class __TwigTemplate_508b6a32502d0b9bb49ac46959b0c4ac9715aa73c479305661418da6c0586e9f extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/serviceInfo.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/product/serviceInfo.html", 3)->display($context);
        // line 4
        echo "<div class=\"layui-collapse\" lay-filter=\"test\">
\t<div class=\"layui-colla-item\">
\t\t<h2 class=\"layui-colla-title\">下拉查看详情</h2>
\t\t<div class=\"layui-colla-content\">
\t\t\t<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
\t\t\t\t<!--<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">名称:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"name\">2274580253@qq.com</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">图标地址:</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<div class=\"layui-upload\">
\t\t\t\t\t\t\t<div class=\"layui-upload-list\">
\t\t\t\t\t\t\t\t<img class=\"layui-upload-img\" src=\"/resource/admin/image/avatar.png\" data-info=\"icon\" data-type=\"img\" id=\"demo1\">
\t\t\t\t\t\t\t\t<p id=\"demoText\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">标题简介:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"title\">广东深圳</label>

\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">服务内容:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"content\"></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">图片地址:</label>
\t\t\t\t\t<div class=\"layui-input-block\">
\t\t\t\t\t\t<div class=\"layui-upload\">
\t\t\t\t\t\t\t<div class=\"layui-upload-list\">
\t\t\t\t\t\t\t\t<img class=\"layui-upload-img\" src=\"/resource/admin/image/avatar.png\" data-info=\"pics\" data-type=\"img\" id=\"demo1\">
\t\t\t\t\t\t\t\t<p id=\"demoText\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">类型:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-arr=true data-info=\"type\"></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">是否限制次数:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-arr=true data-info=\"is_limit_num\"></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"layui-form-item\">
\t\t\t\t\t<label class=\"layui-form-label\">创建时间:</label>
\t\t\t\t\t<label class=\"layui-form-label label_value\" data-info=\"create_at\">张三</label>
\t\t\t\t</div>-->
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
\t\t\thm.load(function(option) {
\t\t\t\tvar public = option.public;
\t\t\t\tvar element = option.element;
\t\t\t\tpublic.showInfo({
\t\t\t\t\tcol: [{name: '名称',val: 'name'},
\t\t\t\t\t\t{name: '图标地址',type: 'img',val: 'icon'},
\t\t\t\t\t\t{name: '标题简介',val: 'title'},
\t\t\t\t\t\t{name: '服务内容',val: 'content'},
\t\t\t\t\t\t{name: '图片地址',type: 'img',val: 'pics'},
\t\t\t\t\t\t{name: '类型',val: 'type',select:true},
\t\t\t\t\t\t{name: '是否限制次数',val: 'is_limit_num',select:true},
\t\t\t\t\t\t{name: '创建时间',val: 'create_at'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/api_product/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"type\",
\t\t\t\t\t\t\t\tval: ['虚拟服务', '实体服务']
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tname: \"is_limit_num\",
\t\t\t\t\t\t\t\tval: ['不限制', '限制次数']
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t}); //展示详情   具体实现方法请查看public.js
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\telement.on('collapse(test)', function(data) {
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
        return "admin/product/serviceInfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>.layui-form-label {width: 100px !important;}</style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <div class="layui-collapse" lay-filter="test">*/
/* 	<div class="layui-colla-item">*/
/* 		<h2 class="layui-colla-title">下拉查看详情</h2>*/
/* 		<div class="layui-colla-content">*/
/* 			<form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/* 				<!--<div class="layui-form-item">*/
/* 					<label class="layui-form-label">名称:</label>*/
/* 					<label class="layui-form-label label_value" data-info="name">2274580253@qq.com</label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">图标地址:</label>*/
/* 					<div class="layui-input-block">*/
/* 						<div class="layui-upload">*/
/* 							<div class="layui-upload-list">*/
/* 								<img class="layui-upload-img" src="/resource/admin/image/avatar.png" data-info="icon" data-type="img" id="demo1">*/
/* 								<p id="demoText"></p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* */
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">标题简介:</label>*/
/* 					<label class="layui-form-label label_value" data-info="title">广东深圳</label>*/
/* */
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">服务内容:</label>*/
/* 					<label class="layui-form-label label_value" data-info="content"></label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">图片地址:</label>*/
/* 					<div class="layui-input-block">*/
/* 						<div class="layui-upload">*/
/* 							<div class="layui-upload-list">*/
/* 								<img class="layui-upload-img" src="/resource/admin/image/avatar.png" data-info="pics" data-type="img" id="demo1">*/
/* 								<p id="demoText"></p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">类型:</label>*/
/* 					<label class="layui-form-label label_value" data-arr=true data-info="type"></label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">是否限制次数:</label>*/
/* 					<label class="layui-form-label label_value" data-arr=true data-info="is_limit_num"></label>*/
/* 				</div>*/
/* 				<div class="layui-form-item">*/
/* 					<label class="layui-form-label">创建时间:</label>*/
/* 					<label class="layui-form-label label_value" data-info="create_at">张三</label>*/
/* 				</div>-->*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
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
/* 			hm.load(function(option) {*/
/* 				var public = option.public;*/
/* 				var element = option.element;*/
/* 				public.showInfo({*/
/* 					col: [{name: '名称',val: 'name'},*/
/* 						{name: '图标地址',type: 'img',val: 'icon'},*/
/* 						{name: '标题简介',val: 'title'},*/
/* 						{name: '服务内容',val: 'content'},*/
/* 						{name: '图片地址',type: 'img',val: 'pics'},*/
/* 						{name: '类型',val: 'type',select:true},*/
/* 						{name: '是否限制次数',val: 'is_limit_num',select:true},*/
/* 						{name: '创建时间',val: 'create_at'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/api_product/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "type",*/
/* 								val: ['虚拟服务', '实体服务']*/
/* 							}, {*/
/* 								name: "is_limit_num",*/
/* 								val: ['不限制', '限制次数']*/
/* 							}]*/
/* 						}); //展示详情   具体实现方法请查看public.js*/
/* 					}*/
/* 				})*/
/* 				element.on('collapse(test)', function(data) {*/
/* 					console.log('展开状态：' + data.show);*/
/* 				});*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
