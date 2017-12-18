<?php

/* admin/order/virOrderInfo.html */
class __TwigTemplate_385df17940c6c5e1aa3706114200408bf3a4c5db98f14d65eeae2e6af7c0dca9 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/order/virOrderInfo.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/order/virOrderInfo.html", 3)->display($context);
        // line 4
        echo "<div class=\"layui-collapse\" lay-filter=\"test\">
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
\t\t\t\t\tcol: [{name: '订单号',val: 'om_vir_order.code'},
\t\t\t\t\t\t{name: '源订单号', val: 'om_vir_order.scode'},
\t\t\t\t\t\t{name: '订单金额',val: 'om_vir_order.price'},
\t\t\t\t\t\t{name: '用户名',val: 'um_user.username'},
\t\t\t\t\t\t{name: '订单状态',val: 'om_vir_order.status',select:true},
\t\t\t\t\t\t{name: '支付方式',val: 'om_vir_order.pay_type',select:true},
\t\t\t\t\t\t{name: '产品id',val: 'om_vir_order.product_id'},
\t\t\t\t\t\t{name: 'IP地址',val: 'om_vir_order.ip'},
\t\t\t\t\t\t{name: '支付时间',val: 'om_vir_order.pay_time'},
\t\t\t\t\t\t{name: '创建人',val: 'um_user.username'},
\t\t\t\t\t\t{name: '服务开始时间',val: 'om_vir_order.service_start',w:300},
\t\t\t\t\t\t{name: '服务结束时间',val: 'om_vir_order.service_end',w:300},
\t\t\t\t\t\t{name: '创建时间',val: 'om_vir_order.create_at'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/api_vir_order/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"om_vir_order.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"om_vir_order.status\",
\t\t\t\t\t\t\t\tval: ['未付款', '已付款']
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tname: \"om_vir_order.pay_type\",
\t\t\t\t\t\t\t\tval: ['微信','支付宝', '对公转账']
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
        return "admin/order/virOrderInfo.html";
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
/* 					col: [{name: '订单号',val: 'om_vir_order.code'},*/
/* 						{name: '源订单号', val: 'om_vir_order.scode'},*/
/* 						{name: '订单金额',val: 'om_vir_order.price'},*/
/* 						{name: '用户名',val: 'um_user.username'},*/
/* 						{name: '订单状态',val: 'om_vir_order.status',select:true},*/
/* 						{name: '支付方式',val: 'om_vir_order.pay_type',select:true},*/
/* 						{name: '产品id',val: 'om_vir_order.product_id'},*/
/* 						{name: 'IP地址',val: 'om_vir_order.ip'},*/
/* 						{name: '支付时间',val: 'om_vir_order.pay_time'},*/
/* 						{name: '创建人',val: 'um_user.username'},*/
/* 						{name: '服务开始时间',val: 'om_vir_order.service_start',w:300},*/
/* 						{name: '服务结束时间',val: 'om_vir_order.service_end',w:300},*/
/* 						{name: '创建时间',val: 'om_vir_order.create_at'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/api_vir_order/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "om_vir_order.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "om_vir_order.status",*/
/* 								val: ['未付款', '已付款']*/
/* 							}, {*/
/* 								name: "om_vir_order.pay_type",*/
/* 								val: ['微信','支付宝', '对公转账']*/
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
