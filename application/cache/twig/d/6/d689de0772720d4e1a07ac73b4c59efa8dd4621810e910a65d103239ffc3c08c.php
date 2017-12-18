<?php

/* admin/nm/infoMessage.html */
class __TwigTemplate_92c641fe9805cce4158f182b41c2d62dc85410aa4e2e6f76e91c43db53b0cd17 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/nm/infoMessage.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/nm/infoMessage.html", 3)->display($context);
        // line 4
        echo "\t<div class=\"layui-collapse\" lay-filter=\"test\">
\t<div class=\"layui-colla-item\">
\t\t<h2 class=\"layui-colla-title\">下拉查看详情</h2>
\t\t<div class=\"layui-colla-content\">
\t\t\t<form class=\"layui-form\" action=\"\" style=\"width: 700px; padding-bottom: 100px;\">
\t\t\t\t
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
\t\t\t\tcol: [
\t\t\t\t\t\t{name: '主键',val: 'id'},
\t\t\t\t\t\t{name: '消息接收者手机号码 邮箱地址 微信openid',val: 'to_user'},
\t\t\t\t\t\t{name: '邮箱类消息的标题',val: 'title'},
\t\t\t\t\t\t{name: '消息体',val: 'message'},
\t\t\t\t\t\t{name: '手机短信发送的“验证码”',val: 'vcode'},
\t\t\t\t\t\t{name: '类型',val: 'type',select:'true'},
\t\t\t\t\t\t{name: '发送状态',val: 'send_status',select:'true'},
\t\t\t\t\t\t{name: '发送失败的次数',val: 'fail_times'},
\t\t\t\t\t\t{name: '创建时间',val: 'create_at',w:'300'},
\t\t\t\t\t\t{name: '修改时间',val: 'update_at',w:'300'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/nm/api_message/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter :\"\" 
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"type\",
\t\t\t\t\t\t\t\tval: ['短信sms', '邮件email','模版消息tmplmsg']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"send_status\",
\t\t\t\t\t\t\t\tval: ['待发送', '发送成功','发送失败']
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t});
\t\t\t\t\t} //展示详情   具体实现方法请查看public.js
\t\t\t\t})
\t\t\t\telement.on('collapse(test)', function(data) {
\t\t\t\t\tconsole.log('展开状态：' + data.show);
\t\t\t\t});
\t\t\t});
\t\t},
\t});
</script>
</body>

</html>




";
    }

    public function getTemplateName()
    {
        return "admin/nm/infoMessage.html";
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
/* 	<div class="layui-collapse" lay-filter="test">*/
/* 	<div class="layui-colla-item">*/
/* 		<h2 class="layui-colla-title">下拉查看详情</h2>*/
/* 		<div class="layui-colla-content">*/
/* 			<form class="layui-form" action="" style="width: 700px; padding-bottom: 100px;">*/
/* 				*/
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
/* 				col: [*/
/* 						{name: '主键',val: 'id'},*/
/* 						{name: '消息接收者手机号码 邮箱地址 微信openid',val: 'to_user'},*/
/* 						{name: '邮箱类消息的标题',val: 'title'},*/
/* 						{name: '消息体',val: 'message'},*/
/* 						{name: '手机短信发送的“验证码”',val: 'vcode'},*/
/* 						{name: '类型',val: 'type',select:'true'},*/
/* 						{name: '发送状态',val: 'send_status',select:'true'},*/
/* 						{name: '发送失败的次数',val: 'fail_times'},*/
/* 						{name: '创建时间',val: 'create_at',w:'300'},*/
/* 						{name: '修改时间',val: 'update_at',w:'300'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/nm/api_message/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter :"" */
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "type",*/
/* 								val: ['短信sms', '邮件email','模版消息tmplmsg']*/
/* 							},{*/
/* 								name: "send_status",*/
/* 								val: ['待发送', '发送成功','发送失败']*/
/* 							}]*/
/* 						});*/
/* 					} //展示详情   具体实现方法请查看public.js*/
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
/* */
/* */
/* */
/* */
/* */
