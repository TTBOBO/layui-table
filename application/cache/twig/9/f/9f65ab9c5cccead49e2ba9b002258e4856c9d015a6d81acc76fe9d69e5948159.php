<?php

/* admin/im/info_channel_people.html */
class __TwigTemplate_7389f1c5d12cb8366c2e924f71617ddc3d55e60a0fbdc00bf32992fd4dc40f82 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/info_channel_people.html", 1)->display($context);
        // line 2
        echo "<style>.layui-form-label {width: 100px !important;}</style>
";
        // line 3
        $this->loadTemplate("admin/crumbs1.html", "admin/im/info_channel_people.html", 3)->display($context);
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
\t\t\t\t\t\t{name: 'ID',val: 'im_channel_people.id'},
//\t\t\t\t\t\t{name: '用户ID',val: 'uid'},
\t\t\t\t\t\t{name: '用户名',val: 'im_channel_people.username'},
\t\t\t\t\t\t{name: '头像',val: 'im_channel_people.avatar',type:\"img\"},
\t\t\t\t\t\t{name: '性别',val: 'im_channel_people.sex',select:true},
\t\t\t\t\t\t{name: '公司名称',val: 'im_channel_people.company_name'},
\t\t\t\t\t\t{name: '岗位',val: 'im_channel_people.position'},
\t\t\t\t\t\t{name: '城市ID',val: 'pm_regions.id'},
\t\t\t\t\t\t{name: '城市名称',val: 'pm_regions.name'},
\t\t\t\t\t\t{name: '标签',val: 'im_channel_people.label'},
\t\t\t\t\t\t{name: '是否显示',val: 'im_channel_people.is_show',select:true},
\t\t\t\t\t\t{name: '教育背景',val: 'im_channel_people.education_info'},
\t\t\t\t\t\t{name: '项目经验',val: 'im_channel_people.project_info'},
\t\t\t\t\t\t{name: '获奖情况',val: 'im_channel_people.haswin_info'},
\t\t\t\t\t\t{name: '工作经验',val: 'im_channel_people.work_info'},
\t\t\t\t\t\t{name: '创建时间',val: 'im_channel_people.create_at',w:300},
\t\t\t\t\t]
\t\t\t\t})
\t\t\t\tvar result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: '/admin/im/api_channel_people/info',
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tfilter : \"im_channel_people.id=\" + result.id
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\tvar data = res.data;
\t\t\t\t\t\thm.showDetails({
\t\t\t\t\t\t\tel: \".layui-form\",
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tstatuArr: [{
\t\t\t\t\t\t\t\tname: \"im_channel_people.is_show\",
\t\t\t\t\t\t\t\tval: ['不显示', '显示']
\t\t\t\t\t\t\t},{
\t\t\t\t\t\t\t\tname: \"im_channel_people.sex\",
\t\t\t\t\t\t\t\tval: ['未知', '男','女']
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
        return "admin/im/info_channel_people.html";
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
/* 						{name: 'ID',val: 'im_channel_people.id'},*/
/* //						{name: '用户ID',val: 'uid'},*/
/* 						{name: '用户名',val: 'im_channel_people.username'},*/
/* 						{name: '头像',val: 'im_channel_people.avatar',type:"img"},*/
/* 						{name: '性别',val: 'im_channel_people.sex',select:true},*/
/* 						{name: '公司名称',val: 'im_channel_people.company_name'},*/
/* 						{name: '岗位',val: 'im_channel_people.position'},*/
/* 						{name: '城市ID',val: 'pm_regions.id'},*/
/* 						{name: '城市名称',val: 'pm_regions.name'},*/
/* 						{name: '标签',val: 'im_channel_people.label'},*/
/* 						{name: '是否显示',val: 'im_channel_people.is_show',select:true},*/
/* 						{name: '教育背景',val: 'im_channel_people.education_info'},*/
/* 						{name: '项目经验',val: 'im_channel_people.project_info'},*/
/* 						{name: '获奖情况',val: 'im_channel_people.haswin_info'},*/
/* 						{name: '工作经验',val: 'im_channel_people.work_info'},*/
/* 						{name: '创建时间',val: 'im_channel_people.create_at',w:300},*/
/* 					]*/
/* 				})*/
/* 				var result = public.getIframeParams(ykp.getSessionStorage('iframeId')); //获取当前iframe窗口的id值*/
/* 				ykp.doAjax({*/
/* 					url: '/admin/im/api_channel_people/info',*/
/* 					method: "post",*/
/* 					data: {*/
/* 						filter : "im_channel_people.id=" + result.id*/
/* 					},*/
/* 					success: function(res) {*/
/* 						var data = res.data;*/
/* 						hm.showDetails({*/
/* 							el: ".layui-form",*/
/* 							data: data,*/
/* 							statuArr: [{*/
/* 								name: "im_channel_people.is_show",*/
/* 								val: ['不显示', '显示']*/
/* 							},{*/
/* 								name: "im_channel_people.sex",*/
/* 								val: ['未知', '男','女']*/
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
