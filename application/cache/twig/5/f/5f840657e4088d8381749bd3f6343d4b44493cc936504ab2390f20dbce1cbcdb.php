<?php

/* admin/im/infoShop.html */
class __TwigTemplate_e10127470b6c13f1baf5ddba46d23dbee5767b089a8abe1b707dbe02475d60ea extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/infoShop.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/im/infoShop.html", 3)->display($context);
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
\t\t\t\t\t\t{name: '店铺ID',val: 'im_shop.shop_id'},
\t\t\t\t\t\t{name: '店铺名称',val: 'im_shop.name'},
\t\t\t\t\t\t{name: '店铺介绍',val: 'im_shop.description'},
\t\t\t\t\t\t{name: '店铺主图',val: 'im_shop.thumb'},
\t\t\t\t\t\t{name: '店铺图片',val: 'im_shop.pics',type:'img'},
\t\t\t\t\t\t{name: '店铺地址-省',val: 'im_shop.prov'},
\t\t\t\t\t\t{name: '店铺地址-市',val: 'im_shop.city'},
\t\t\t\t\t\t{name: '店铺地址-区',val: 'im_shop.dist'},
\t\t\t\t\t\t{name: '店铺地址-街道地址',val: 'im_shop.street'},
\t\t\t\t\t\t{name: '楼盘名称',val: 'im_shop.eatate_name'},
\t\t\t\t\t\t{name: '提供服务列表',val: 'im_shop.provide_services'},
\t\t\t\t\t\t{name: '中心配置',val: 'im_shop.central_matching'},
\t\t\t\t\t\t{name: '周边设施',val: 'im_shop.nearby_facilities'},
\t\t\t\t\t\t{name: '周边服务',val: 'im_shop.nearby_service'},
\t\t\t\t\t\t{name: '楼盘的平面图',val: 'im_shop.floor_pics'},
\t\t\t\t\t\t{name: '入驻企业ID',val: 'im_shop.company_ids'},
\t\t\t\t\t\t{name: '关联产品ID',val: 'im_shop.product_ids'},
\t\t\t\t\t\t{name: '创建人ID',val: 'um_user.id'},
\t\t\t\t\t\t{name: '创建时间',val: 'im_shop.create_at',w:300}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/im/api_shop/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"im_shop.shop_id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data
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
        return "admin/im/infoShop.html";
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
/* 						{name: '店铺ID',val: 'im_shop.shop_id'},*/
/* 						{name: '店铺名称',val: 'im_shop.name'},*/
/* 						{name: '店铺介绍',val: 'im_shop.description'},*/
/* 						{name: '店铺主图',val: 'im_shop.thumb'},*/
/* 						{name: '店铺图片',val: 'im_shop.pics',type:'img'},*/
/* 						{name: '店铺地址-省',val: 'im_shop.prov'},*/
/* 						{name: '店铺地址-市',val: 'im_shop.city'},*/
/* 						{name: '店铺地址-区',val: 'im_shop.dist'},*/
/* 						{name: '店铺地址-街道地址',val: 'im_shop.street'},*/
/* 						{name: '楼盘名称',val: 'im_shop.eatate_name'},*/
/* 						{name: '提供服务列表',val: 'im_shop.provide_services'},*/
/* 						{name: '中心配置',val: 'im_shop.central_matching'},*/
/* 						{name: '周边设施',val: 'im_shop.nearby_facilities'},*/
/* 						{name: '周边服务',val: 'im_shop.nearby_service'},*/
/* 						{name: '楼盘的平面图',val: 'im_shop.floor_pics'},*/
/* 						{name: '入驻企业ID',val: 'im_shop.company_ids'},*/
/* 						{name: '关联产品ID',val: 'im_shop.product_ids'},*/
/* 						{name: '创建人ID',val: 'um_user.id'},*/
/* 						{name: '创建时间',val: 'im_shop.create_at',w:300}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/im/api_shop/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "im_shop.shop_id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data*/
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
