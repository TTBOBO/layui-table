<?php

/* admin/im/info_roadshow.html */
class __TwigTemplate_559d31b63a64446747af30d73523fbf92544eac5870ce1f3012688b66578d906 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/info_roadshow.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/im/info_roadshow.html", 3)->display($context);
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
\t\t\t\t\t\t{name: 'ID',val: 'id'},
//\t\t\t\t\t\t{name: '用户ID',val: 'uid'},
\t\t\t\t\t\t{name: '活动标题',val: 'title'},
\t\t\t\t\t\t{name: '活动主图',val: 'thumb'},
\t\t\t\t\t\t{name: '是否热门',val: 'ishot',select:true},
\t\t\t\t\t\t{name: '描述',val: 'description'},
\t\t\t\t\t\t{name: '活动地址',val: 'addr'},
\t\t\t\t\t\t{name: '主办方',val: 'owner'},
\t\t\t\t\t\t{name: '活动开始时间',val: 'start_time',type:\"time\"},
\t\t\t\t\t\t{name: '活动结束时间',val: 'end_time',type:\"time\"},
\t\t\t\t\t\t{name: '特色信息',val: 'special_info',select:true},
\t\t\t\t\t\t{name: '推荐理由',val: 'recommend_reason'},
\t\t\t\t\t\t{name: '主体内容',val: 'content'},
\t\t\t\t\t\t{name: '创建时间',val: 'create_at',w:300},
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/im/api_roadshow/info',
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
\t\t\t\t\t\t\t\tname: \"ishot\",
\t\t\t\t\t\t\t\tval: ['是', '否']
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
        return "admin/im/info_roadshow.html";
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
/* 						{name: 'ID',val: 'id'},*/
/* //						{name: '用户ID',val: 'uid'},*/
/* 						{name: '活动标题',val: 'title'},*/
/* 						{name: '活动主图',val: 'thumb'},*/
/* 						{name: '是否热门',val: 'ishot',select:true},*/
/* 						{name: '描述',val: 'description'},*/
/* 						{name: '活动地址',val: 'addr'},*/
/* 						{name: '主办方',val: 'owner'},*/
/* 						{name: '活动开始时间',val: 'start_time',type:"time"},*/
/* 						{name: '活动结束时间',val: 'end_time',type:"time"},*/
/* 						{name: '特色信息',val: 'special_info',select:true},*/
/* 						{name: '推荐理由',val: 'recommend_reason'},*/
/* 						{name: '主体内容',val: 'content'},*/
/* 						{name: '创建时间',val: 'create_at',w:300},*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/im/api_roadshow/info',*/
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
/* 								name: "ishot",*/
/* 								val: ['是', '否']*/
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
