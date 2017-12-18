<?php

/* admin/nm/infoNotice.html */
class __TwigTemplate_30403844e29e33170360d5fc6ea84f602a9110f284db3f0a99409b78e2daa8e6 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/nm/infoNotice.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/nm/infoNotice.html", 3)->display($context);
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
\t\t\t\t\t\t{name: '消息通知ID',val: 'nm_notice.id'},
\t\t\t\t\t\t{name: '消息名称',val: 'nm_notice.name'},
\t\t\t\t\t\t{name: '类型',val: 'nm_notice_type.type_id'},
\t\t\t\t\t\t{name: '描述',val: 'nm_notice.description'},
\t\t\t\t\t\t{name: '点击链接',val: 'nm_notice.link'},
\t\t\t\t\t\t{name: '用户id',val: 'um_user.uid'},
\t\t\t\t\t\t{name: '状态',val: 'nm_notice.status'},
\t\t\t\t\t\t{name: '自定义图表',val: 'nm_notice.thumb',type:\"img\"},
\t\t\t\t\t\t{name: '参数',val: 'nm_notice.param'},
\t\t\t\t\t\t{name: '阅读时间',val: 'nm_notice.read_at'},
\t\t\t\t\t\t{name: '创建时间',val: 'nm_notice.create_at',w:300},
\t\t\t\t\t\t{name: '更新时间',val: 'nm_notice.update_at',w:300}
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/nm/api_notice/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter:\"nm_notice.id=\" + result.id
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
        return "admin/nm/infoNotice.html";
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
/* 						{name: '消息通知ID',val: 'nm_notice.id'},*/
/* 						{name: '消息名称',val: 'nm_notice.name'},*/
/* 						{name: '类型',val: 'nm_notice_type.type_id'},*/
/* 						{name: '描述',val: 'nm_notice.description'},*/
/* 						{name: '点击链接',val: 'nm_notice.link'},*/
/* 						{name: '用户id',val: 'um_user.uid'},*/
/* 						{name: '状态',val: 'nm_notice.status'},*/
/* 						{name: '自定义图表',val: 'nm_notice.thumb',type:"img"},*/
/* 						{name: '参数',val: 'nm_notice.param'},*/
/* 						{name: '阅读时间',val: 'nm_notice.read_at'},*/
/* 						{name: '创建时间',val: 'nm_notice.create_at',w:300},*/
/* 						{name: '更新时间',val: 'nm_notice.update_at',w:300}*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/nm/api_notice/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter:"nm_notice.id=" + result.id*/
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
/* */
/* */
/* */
