<?php

/* admin/user/infoCompany.html */
class __TwigTemplate_fd63bb1d1ed090a5d7691d823e791aafd0a28e24ae227b7de340c9a70acc46e4 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/infoCompany.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/user/infoCompany.html", 3)->display($context);
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
\t\t\t\tcol: [{name: '用户ID',val: 'uid'},
\t\t\t\t\t\t{name: '公司名称',val: 'company_name',w:'300'},
\t\t\t\t\t\t{name: '企业logo',val: 'logo'},
\t\t\t\t\t\t{name: '公司网址',val: 'website'},
\t\t\t\t\t\t{name: '公司QQ',val: 'qq'},
\t\t\t\t\t\t{name: '公司地址--省',val: 'prov'},
\t\t\t\t\t\t{name: '公司地址--市',val: 'city'},
\t\t\t\t\t\t{name: '公司地址---区',val: 'dist'},
\t\t\t\t\t\t{name: '公司地址---街道',val: 'street'},
\t\t\t\t\t\t{name: '营业执照图片',val: 'business_license',w:'500'},
\t\t\t\t\t\t{name: '公司法人名称',val: 'legal_person'},
\t\t\t\t\t\t{name: '企业信用代码',val: 'credit_code'},
\t\t\t\t\t\t{name: '联系座机',val: 'tel'},
\t\t\t\t\t\t{name: '联系手机',val: 'mobile'},
\t\t\t\t\t\t{name: '企业子帐号ID',val: 'alt_id'},
\t\t\t\t\t\t{name: '企业项目ID',val: 'program_ids'},
\t\t\t\t\t\t{name: '企业合同ID',val: 'contract_ids'},
\t\t\t\t\t\t{name: '创建时间',val: 'create_at',w:'300'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/api_company/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"um_company.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data
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

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/user/infoCompany.html";
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
/* 				col: [{name: '用户ID',val: 'uid'},*/
/* 						{name: '公司名称',val: 'company_name',w:'300'},*/
/* 						{name: '企业logo',val: 'logo'},*/
/* 						{name: '公司网址',val: 'website'},*/
/* 						{name: '公司QQ',val: 'qq'},*/
/* 						{name: '公司地址--省',val: 'prov'},*/
/* 						{name: '公司地址--市',val: 'city'},*/
/* 						{name: '公司地址---区',val: 'dist'},*/
/* 						{name: '公司地址---街道',val: 'street'},*/
/* 						{name: '营业执照图片',val: 'business_license',w:'500'},*/
/* 						{name: '公司法人名称',val: 'legal_person'},*/
/* 						{name: '企业信用代码',val: 'credit_code'},*/
/* 						{name: '联系座机',val: 'tel'},*/
/* 						{name: '联系手机',val: 'mobile'},*/
/* 						{name: '企业子帐号ID',val: 'alt_id'},*/
/* 						{name: '企业项目ID',val: 'program_ids'},*/
/* 						{name: '企业合同ID',val: 'contract_ids'},*/
/* 						{name: '创建时间',val: 'create_at',w:'300'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/api_company/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "um_company.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data*/
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
/* */
