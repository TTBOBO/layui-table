<?php

/* admin/user/infoProvider.html */
class __TwigTemplate_7fce233538553a360c324796da02c524600e2ba3d59d1b40005fe278c74a8f8f extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/infoProvider.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/user/infoProvider.html", 3)->display($context);
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
\t\t\t\tcol: [{name: '公司名称',val: 'um_company.company_name',w:'300'},
\t\t\t\t\t\t{name: '用户昵称',val: 'um_user.nickname'},
\t\t\t\t\t\t{name: '申请时间',val: 'um_provider.apply_time',w:'300'},
\t\t\t\t\t\t{name: '生效时间',val: 'um_provider.effect_time',w:'300'},
\t\t\t\t\t\t{name: '投资方式',val: 'um_provider.invest_type',select:true},
\t\t\t\t\t\t{name: '资金类型',val: 'um_provider.fund_type',select:true},
\t\t\t\t\t\t{name: '投资类型',val: 'um_provider.invest_field',select:true},
//\t\t\t\t\t\t{name: '投资区域',val: 'um_provider.invest_area'},
\t\t\t\t\t\t{name: '投资金额范围',val: 'um_provider.invest_amount',select:true},
\t\t\t\t\t\t{name: '投资机构介绍',val: 'um_provider.content'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/api_provider/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"um_provider.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"um_provider.invest_type\",
\t\t\t\t\t\t\t\tval: ['股权投资', '债权投资', '金融投资', 'BT/BOT', '项目投资', '其他投资']
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tname: \"um_provider.fund_type\",
\t\t\t\t\t\t\t\tval: ['个人资金', '企业资金', '天使投资', 'VC投资', 'PE投资']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"um_provider.invest_field\",
\t\t\t\t\t\t\t\tval: ['新兴行业', '文创', '高新产业', '大健康', '传统实业', '政府民生', '其他']
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tname: \"um_provider.invest_amount\",
\t\t\t\t\t\t\t\tval: ['1万-10万', '10-50万', '50-100万', '100-500万']
\t\t\t\t\t\t\t}]
\t\t\t\t\t\t});
\t\t\t\t\t\t} //展示详情   具体实现方法请查看public.js
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
        return "admin/user/infoProvider.html";
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
/* 				col: [{name: '公司名称',val: 'um_company.company_name',w:'300'},*/
/* 						{name: '用户昵称',val: 'um_user.nickname'},*/
/* 						{name: '申请时间',val: 'um_provider.apply_time',w:'300'},*/
/* 						{name: '生效时间',val: 'um_provider.effect_time',w:'300'},*/
/* 						{name: '投资方式',val: 'um_provider.invest_type',select:true},*/
/* 						{name: '资金类型',val: 'um_provider.fund_type',select:true},*/
/* 						{name: '投资类型',val: 'um_provider.invest_field',select:true},*/
/* //						{name: '投资区域',val: 'um_provider.invest_area'},*/
/* 						{name: '投资金额范围',val: 'um_provider.invest_amount',select:true},*/
/* 						{name: '投资机构介绍',val: 'um_provider.content'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/api_provider/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "um_provider.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "um_provider.invest_type",*/
/* 								val: ['股权投资', '债权投资', '金融投资', 'BT/BOT', '项目投资', '其他投资']*/
/* 							}, {*/
/* 								name: "um_provider.fund_type",*/
/* 								val: ['个人资金', '企业资金', '天使投资', 'VC投资', 'PE投资']*/
/* 							},{*/
/* 								name: "um_provider.invest_field",*/
/* 								val: ['新兴行业', '文创', '高新产业', '大健康', '传统实业', '政府民生', '其他']*/
/* 							}, {*/
/* 								name: "um_provider.invest_amount",*/
/* 								val: ['1万-10万', '10-50万', '50-100万', '100-500万']*/
/* 							}]*/
/* 						});*/
/* 						} //展示详情   具体实现方法请查看public.js*/
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
