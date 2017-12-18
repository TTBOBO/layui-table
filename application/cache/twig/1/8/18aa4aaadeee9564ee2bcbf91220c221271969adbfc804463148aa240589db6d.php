<?php

/* admin/auser/infoInvoice.html */
class __TwigTemplate_73186fbf65cbbb9f8dc37ccc72d774c3fe5d6ce725db2921b73eb2359b2e876b extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/infoInvoice.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/infoInvoice.html", 3)->display($context);
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
\t\t\t\tcol: [
\t\t\t\t\t\t{name: '发票名称',val: 'am_invoice.name'},
\t\t\t\t\t\t{name: '公司名称',val: 'um_company.company_id'},
\t\t\t\t\t\t{name: '金额',val: 'am_invoice.price'},
\t\t\t\t\t\t{name: '税点',val: 'am_invoice.tax_point',w:300},
\t\t\t\t\t\t{name: '类型',val: 'am_invoice.type',select:true},
\t\t\t\t\t\t{name: '发票图片',val: 'am_invoice.pic',type:'img'},
\t\t\t\t\t\t{name: '快递费用',val: 'am_invoice.express_price'},
\t\t\t\t\t\t{name: '邮寄状态',val: 'am_invoice.express_status',select:true},
\t\t\t\t\t\t{name: '快递编码',val: 'am_invoice.express_code'},
\t\t\t\t\t\t{name: '快递名称',val: 'am_invoice.express_name'},
\t\t\t\t\t\t{name: '创建时间',val: 'am_invoice.create_at',w:300},
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/am/Api_invoice/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"am_invoice.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,statuArr: [{
\t\t\t\t\t\t\t\tname: \"am_invoice.type\",
\t\t\t\t\t\t\t\tval: ['普票', '专票']
\t\t\t\t\t\t\t},,{
\t\t\t\t\t\t\t\tname: \"am_invoice.express_status\",
\t\t\t\t\t\t\t\tval: ['未寄出', '已寄出']
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
        return "admin/auser/infoInvoice.html";
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
/* 				col: [*/
/* 						{name: '发票名称',val: 'am_invoice.name'},*/
/* 						{name: '公司名称',val: 'um_company.company_id'},*/
/* 						{name: '金额',val: 'am_invoice.price'},*/
/* 						{name: '税点',val: 'am_invoice.tax_point',w:300},*/
/* 						{name: '类型',val: 'am_invoice.type',select:true},*/
/* 						{name: '发票图片',val: 'am_invoice.pic',type:'img'},*/
/* 						{name: '快递费用',val: 'am_invoice.express_price'},*/
/* 						{name: '邮寄状态',val: 'am_invoice.express_status',select:true},*/
/* 						{name: '快递编码',val: 'am_invoice.express_code'},*/
/* 						{name: '快递名称',val: 'am_invoice.express_name'},*/
/* 						{name: '创建时间',val: 'am_invoice.create_at',w:300},*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/am/Api_invoice/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "am_invoice.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,statuArr: [{*/
/* 								name: "am_invoice.type",*/
/* 								val: ['普票', '专票']*/
/* 							},,{*/
/* 								name: "am_invoice.express_status",*/
/* 								val: ['未寄出', '已寄出']*/
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
