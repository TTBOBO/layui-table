<?php

/* admin/product/infoVirProduct.html */
class __TwigTemplate_24b112faba403dd9f917a91d14603b79e43b3141c3a5b1a6bc9d146f31920b7e extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/infoVirProduct.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/product/infoVirProduct.html", 3)->display($context);
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
\t\t\t\tcol: [{name: '产品ID',val: 'id'},
\t\t\t\t\t\t{name: '产品名称',val: 'name'},
\t\t\t\t\t\t{name: '产品描述',val: 'description'},
\t\t\t\t\t\t{name: '产品主图',val: 'thumb',type:\"img\"},
\t\t\t\t\t\t{name: '图片地址',val: 'pics'},
\t\t\t\t\t\t{name: '产品宣传语',val: 'product_intro'},
\t\t\t\t\t\t{name: '服务列表id',val: 'service_list'},
\t\t\t\t\t\t{name: '赠送项目',val: 'presend_items'},
\t\t\t\t\t\t{name: '价格',val: 'price'},
\t\t\t\t\t\t{name: '套餐对应的价格',val: 'meal_items',w:'300'},
\t\t\t\t\t\t{name: '是否单套餐',val: 'is_single_price',select:'true'},
\t\t\t\t\t\t{name: '服务城市',val: 'service_city'},
\t\t\t\t\t\t{name: '服务年限',val: 'service_limit'},
\t\t\t\t\t\t{name: '保底押金',val: 'is_keep_price'},
\t\t\t\t\t\t{name: '折扣',val: 'discount_point'},
\t\t\t\t\t\t{name: '创建时间',val: 'create_at',w:'300'}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/Api_vir_product/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"im_vir_product.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"is_single_price\",
\t\t\t\t\t\t\t\tval: ['单套餐', '多套餐']
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

</html>

";
    }

    public function getTemplateName()
    {
        return "admin/product/infoVirProduct.html";
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
/* 				col: [{name: '产品ID',val: 'id'},*/
/* 						{name: '产品名称',val: 'name'},*/
/* 						{name: '产品描述',val: 'description'},*/
/* 						{name: '产品主图',val: 'thumb',type:"img"},*/
/* 						{name: '图片地址',val: 'pics'},*/
/* 						{name: '产品宣传语',val: 'product_intro'},*/
/* 						{name: '服务列表id',val: 'service_list'},*/
/* 						{name: '赠送项目',val: 'presend_items'},*/
/* 						{name: '价格',val: 'price'},*/
/* 						{name: '套餐对应的价格',val: 'meal_items',w:'300'},*/
/* 						{name: '是否单套餐',val: 'is_single_price',select:'true'},*/
/* 						{name: '服务城市',val: 'service_city'},*/
/* 						{name: '服务年限',val: 'service_limit'},*/
/* 						{name: '保底押金',val: 'is_keep_price'},*/
/* 						{name: '折扣',val: 'discount_point'},*/
/* 						{name: '创建时间',val: 'create_at',w:'300'}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/Api_vir_product/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "im_vir_product.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "is_single_price",*/
/* 								val: ['单套餐', '多套餐']*/
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
/* */
/* */
