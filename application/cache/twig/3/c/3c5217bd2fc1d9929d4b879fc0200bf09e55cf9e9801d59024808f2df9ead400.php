<?php

/* admin/user.html */
class __TwigTemplate_92883767ae16a191373ab33f1126fabba4f2c47e8eed9ac63a8c6df5a0e6cb41 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user.html", 1)->display($context);
        // line 2
        echo "
<style>
\tbody {
\t\tmargin: 10px;
\t}
\t
\t.demo-carousel {
\t\theight: 200px;
\t\tline-height: 200px;
\t\ttext-align: center;
\t}
\t
\t.layui-table-view .layui-table {
\t\twidth: 100%;
\t}
\t
\t.layui-btn {
\t\tfont-size: 13px;
\t}
\t
\t.model {
\t\tpadding: 20px;
\t}
\t
\t.layui-table-tool {
\t\tpadding: 4px 10px 0 0 !important;
\t}
</style>
";
        // line 30
        $this->loadTemplate("admin/crumbs.html", "admin/user.html", 30)->display($context);
        // line 31
        echo "<div class=\"layui-btn-group demoTable\">
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 30px;\" data-type=\"reload\">搜索</button>
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"add\">添加 </button>
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"exImport\">导入</button>
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"export\">导出</button>
\t<button class=\"layui-btn layui-btn-danger\" style=\"height: 35px; line-height: 35px;\" data-type=\"pldel\">删除</button>
</div>

<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>

<div id=\"search\" style=\"display: none;background: #eee; padding: 20px;\" class=\"model\">
\t<form class=\"layui-form layui-form-pane\" id=\"form\" style=\" height: 100%; width: 100%;  display: flex;justify-content: center; flex-wrap: wrap\">

\t</form>
</div>
";
        // line 46
        $this->loadTemplate("admin/import.html", "admin/user.html", 46)->display($context);
        // line 47
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/public.js\"></script>
<script src=\"/resource/admin/js/jslib/jquery.table2excel.min.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initTabel();
\t\t},

\t\tinitTabel: function() {

\t\t\tvar cols = [{
\t\t\t\t\tcheckbox: true,
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"id\",
\t\t\t\t\twidth: 80,
\t\t\t\t\tsort: true,
\t\t\t\t\ttitle: \"ID\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"username\",
\t\t\t\t\twidth: 80,
\t\t\t\t\ttitle: \"用户名\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"sex\",
\t\t\t\t\twidth: 80,
\t\t\t\t\ttitle: \"性别\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"city\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"城市\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"sign\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"签名\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"experience\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"积分\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"score\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"评分\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"classify\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"职业\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"wealth\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"财富\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"right\",
\t\t\t\t\twidth: 180,
\t\t\t\t\ttitle: \"操作\",
\t\t\t\t\ttoolbar: ykp.\$('#barDemo'),
\t\t\t\t\talign: \"center\",
\t\t\t\t\tfixed: 'right',
\t\t\t\t},
\t\t\t];

\t\t\t//\t\t\t\t\tgetSearch(cols);

\t\t\tlayui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {
\t\t\t\tvar table = layui.table;
\t\t\t\tvar public = layui.public;
\t\t\t\thm.getSearch({
\t\t\t\t\tdata: cols,
\t\t\t\t\tel: \"#form\"

\t\t\t\t}); //遍历搜素demo

\t\t\t\tlayui.laydate.render({
\t\t\t\t\telem: \".date\",
\t\t\t\t\trange: true,
\t\t\t\t\tformat: 'yyyy/MM/dd'
\t\t\t\t})

\t\t\t\ttable.render({
\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\turl: '";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/demo_data',
\t\t\t\t\tcols: [
\t\t\t\t\t\tcols
\t\t\t\t\t],
\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\tpage: true,
\t\t\t\t\theight: \"full-180\",
\t\t\t\t\tskin: 'row', //表格风格
\t\t\t\t\teven: true,
\t\t\t\t\tlimits: [10, 20, 30, 45, 50, 100], //配置显示多少条数据
\t\t\t\t\tlimit: 10, //每页默认显示的数量
\t\t\t\t\twhere: {
\t\t\t\t\t\tid: 1
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\ttable.on('tool(tabel_user)', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
\t\t\t\t\tvar data = obj.data, //获得当前行数据
\t\t\t\t\t\tlayEvent = obj.event; //获得 lay-event 对应的值
\t\t\t\t\tvar id = obj.data.id;
\t\t\t\t\tvar parmas = ykp.getSessionStorage('iframeId');
\t\t\t\t\tif(layEvent === 'detail') {
\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = '";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/pageInfo?id=' + id;
\t\t\t\t\t} else if(layEvent === 'edit') {
\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = '";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info?id=' + id;
\t\t\t\t\t} else if(layEvent === 'del') {
\t\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
\t\t\t\t\t\t\tobj.del(); //删除对应行（tr）的DOM结构
\t\t\t\t\t\t\t//删除批量删除\t\t\t\t\t\t\t
\t\t\t\t\t\t\thm.plDel({
\t\t\t\t\t\t\t\tdata: id,
\t\t\t\t\t\t\t\tparams: {
\t\t\t\t\t\t\t\t\turl: 'www.baidu.com',
\t\t\t\t\t\t\t\t\tmethod: 'post'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, function(res) {
\t\t\t\t\t\t\t\tconsole.log(res);
\t\t\t\t\t\t\t\tsearch();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tvar active = {
\t\t\t\t\t//高级搜索
\t\t\t\t\treload: function() {
\t\t\t\t\t\tpublic.layerOpen({
\t\t\t\t\t\t\tel: ykp.\$('#search')
\t\t\t\t\t\t}, function() { //成功执行的回调
\t\t\t\t\t\t\tvar searchCode = public.getSearchCode({
\t\t\t\t\t\t\t\tel: \"#search\"
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tconsole.log(searchCode);
\t\t\t\t\t\t\tif(!searchCode) {
\t\t\t\t\t\t\t\tykp.prompt('最少输入一个条件');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tsearch(searchCode);
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, function() { //取消执行的回调
\t\t\t\t\t\t\tconsole.log(2);
\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t})
\t\t\t\t\t},
\t\t\t\t\t//批量删除
\t\t\t\t\tpldel: function() {
\t\t\t\t\t\tvar checkStatus = table.checkStatus('tabel_user'),
\t\t\t\t\t\t\tdata = checkStatus.data;
\t\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\t\tlayer.msg('最少选中一个');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\thm.plDel({
\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\tparams: {
\t\t\t\t\t\t\t\turl: '',
\t\t\t\t\t\t\t\tmethod: ''
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, function(res) {
\t\t\t\t\t\t\tconsole.log(res);
\t\t\t\t\t\t\tsearch();
\t\t\t\t\t\t})

\t\t\t\t\t},
\t\t\t\t\texImport: function() {  //导入
\t\t\t\t\t\t\$('#import1').fadeIn();
\t\t\t\t\t\tpublic.import({
\t\t\t\t\t\t\tel: '#test8',
\t\t\t\t\t\t\turl: \"/upload\",
\t\t\t\t\t\t}, function(res) {
\t\t\t\t\t\t\tconsole.log(res);
\t\t\t\t\t\t}, function(obj) {
\t\t\t\t\t\t\tconsole.log(obj);

\t\t\t\t\t\t})
\t\t\t\t\t\tpublic.uploadhide();
\t\t\t\t\t},
\t\t\t\t\texport: function() {
\t\t\t\t\t\t\$(\"#tabel_user\").table2excel({
\t\t\t\t\t\t\texclude: \".noExl\",
\t\t\t\t\t\t\tname: \"Excel Document Name\",
\t\t\t\t\t\t\tfilename: \"myFileName\",
\t\t\t\t\t\t\texclude_img: true,
\t\t\t\t\t\t\texclude_links: true,
\t\t\t\t\t\t\texclude_inputs: true
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tadd:function() {//添加
\t\t\t\t\t\tvar parmas = ykp.getSessionStorage('iframeId');
\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = '";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/add';
\t\t\t\t\t}
\t\t\t\t};

\t\t\t\t\$('.demoTable .layui-btn').on('click', function() {
\t\t\t\t\tvar type = \$(this).data('type');
\t\t\t\t\tactive[type] ? active[type].call(this) : '';
\t\t\t\t});

\t\t\t\t//重复加载
\t\t\t\tfunction search(searchCode) {
\t\t\t\t\tvar data = {};
\t\t\t\t\tif(searchCode) {
\t\t\t\t\t\tdata.filter = searchCode;
\t\t\t\t\t}
\t\t\t\t\ttable.reload('tabel_user', {
\t\t\t\t\t\twhere: data
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 264,  211 => 178,  206 => 176,  181 => 154,  72 => 47,  70 => 46,  53 => 31,  51 => 30,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* */
/* <style>*/
/* 	body {*/
/* 		margin: 10px;*/
/* 	}*/
/* 	*/
/* 	.demo-carousel {*/
/* 		height: 200px;*/
/* 		line-height: 200px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	*/
/* 	.layui-table-view .layui-table {*/
/* 		width: 100%;*/
/* 	}*/
/* 	*/
/* 	.layui-btn {*/
/* 		font-size: 13px;*/
/* 	}*/
/* 	*/
/* 	.model {*/
/* 		padding: 20px;*/
/* 	}*/
/* 	*/
/* 	.layui-table-tool {*/
/* 		padding: 4px 10px 0 0 !important;*/
/* 	}*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <div class="layui-btn-group demoTable">*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 30px;" data-type="reload">搜索</button>*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="add">添加 </button>*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="exImport">导入</button>*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="export">导出</button>*/
/* 	<button class="layui-btn layui-btn-danger" style="height: 35px; line-height: 35px;" data-type="pldel">删除</button>*/
/* </div>*/
/* */
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* */
/* <div id="search" style="display: none;background: #eee; padding: 20px;" class="model">*/
/* 	<form class="layui-form layui-form-pane" id="form" style=" height: 100%; width: 100%;  display: flex;justify-content: center; flex-wrap: wrap">*/
/* */
/* 	</form>*/
/* </div>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/public.js"></script>*/
/* <script src="/resource/admin/js/jslib/jquery.table2excel.min.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initTabel();*/
/* 		},*/
/* */
/* 		initTabel: function() {*/
/* */
/* 			var cols = [{*/
/* 					checkbox: true,*/
/* 				},*/
/* 				{*/
/* 					field: "id",*/
/* 					width: 80,*/
/* 					sort: true,*/
/* 					title: "ID",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "username",*/
/* 					width: 80,*/
/* 					title: "用户名",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "sex",*/
/* 					width: 80,*/
/* 					title: "性别",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "city",*/
/* 					width: 150,*/
/* 					title: "城市",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "sign",*/
/* 					width: 150,*/
/* 					title: "签名",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "experience",*/
/* 					width: 150,*/
/* 					title: "积分",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "score",*/
/* 					width: 150,*/
/* 					title: "评分",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "classify",*/
/* 					width: 150,*/
/* 					title: "职业",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					field: "wealth",*/
/* 					width: 150,*/
/* 					title: "财富",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					field: "right",*/
/* 					width: 180,*/
/* 					title: "操作",*/
/* 					toolbar: ykp.$('#barDemo'),*/
/* 					align: "center",*/
/* 					fixed: 'right',*/
/* 				},*/
/* 			];*/
/* */
/* 			//					getSearch(cols);*/
/* */
/* 			layui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {*/
/* 				var table = layui.table;*/
/* 				var public = layui.public;*/
/* 				hm.getSearch({*/
/* 					data: cols,*/
/* 					el: "#form"*/
/* */
/* 				}); //遍历搜素demo*/
/* */
/* 				layui.laydate.render({*/
/* 					elem: ".date",*/
/* 					range: true,*/
/* 					format: 'yyyy/MM/dd'*/
/* 				})*/
/* */
/* 				table.render({*/
/* 					elem: "#tabel_user",*/
/* 					url: '{{base_url}}admin/user/demo_data',*/
/* 					cols: [*/
/* 						cols*/
/* 					],*/
/* 					id: 'tabel_user',*/
/* 					page: true,*/
/* 					height: "full-180",*/
/* 					skin: 'row', //表格风格*/
/* 					even: true,*/
/* 					limits: [10, 20, 30, 45, 50, 100], //配置显示多少条数据*/
/* 					limit: 10, //每页默认显示的数量*/
/* 					where: {*/
/* 						id: 1*/
/* 					}*/
/* 				});*/
/* */
/* 				table.on('tool(tabel_user)', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"*/
/* 					var data = obj.data, //获得当前行数据*/
/* 						layEvent = obj.event; //获得 lay-event 对应的值*/
/* 					var id = obj.data.id;*/
/* 					var parmas = ykp.getSessionStorage('iframeId');*/
/* 					if(layEvent === 'detail') {*/
/* 						self.parent.document.getElementById(parmas).src = '{{base_url}}admin/user/pageInfo?id=' + id;*/
/* 					} else if(layEvent === 'edit') {*/
/* 						self.parent.document.getElementById(parmas).src = '{{base_url}}admin/user/info?id=' + id;*/
/* 					} else if(layEvent === 'del') {*/
/* 						layer.confirm('真的删除行么', function(index) {*/
/* 							obj.del(); //删除对应行（tr）的DOM结构*/
/* 							//删除批量删除							*/
/* 							hm.plDel({*/
/* 								data: id,*/
/* 								params: {*/
/* 									url: 'www.baidu.com',*/
/* 									method: 'post'*/
/* 								}*/
/* 							}, function(res) {*/
/* 								console.log(res);*/
/* 								search();*/
/* 							})*/
/* 							layer.close(index);*/
/* 						});*/
/* 					}*/
/* 				});*/
/* */
/* 				var active = {*/
/* 					//高级搜索*/
/* 					reload: function() {*/
/* 						public.layerOpen({*/
/* 							el: ykp.$('#search')*/
/* 						}, function() { //成功执行的回调*/
/* 							var searchCode = public.getSearchCode({*/
/* 								el: "#search"*/
/* 							});*/
/* 							console.log(searchCode);*/
/* 							if(!searchCode) {*/
/* 								ykp.prompt('最少输入一个条件');*/
/* 							} else {*/
/* 								search(searchCode);*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						}, function() { //取消执行的回调*/
/* 							console.log(2);*/
/* 							layer.closeAll();*/
/* 						})*/
/* 					},*/
/* 					//批量删除*/
/* 					pldel: function() {*/
/* 						var checkStatus = table.checkStatus('tabel_user'),*/
/* 							data = checkStatus.data;*/
/* 						if(data.length == 0) {*/
/* 							layer.msg('最少选中一个');*/
/* 							return false;*/
/* 						}*/
/* 						hm.plDel({*/
/* 							data: data,*/
/* 							params: {*/
/* 								url: '',*/
/* 								method: ''*/
/* 							}*/
/* 						}, function(res) {*/
/* 							console.log(res);*/
/* 							search();*/
/* 						})*/
/* */
/* 					},*/
/* 					exImport: function() {  //导入*/
/* 						$('#import1').fadeIn();*/
/* 						public.import({*/
/* 							el: '#test8',*/
/* 							url: "/upload",*/
/* 						}, function(res) {*/
/* 							console.log(res);*/
/* 						}, function(obj) {*/
/* 							console.log(obj);*/
/* */
/* 						})*/
/* 						public.uploadhide();*/
/* 					},*/
/* 					export: function() {*/
/* 						$("#tabel_user").table2excel({*/
/* 							exclude: ".noExl",*/
/* 							name: "Excel Document Name",*/
/* 							filename: "myFileName",*/
/* 							exclude_img: true,*/
/* 							exclude_links: true,*/
/* 							exclude_inputs: true*/
/* 						});*/
/* 					},*/
/* 					add:function() {//添加*/
/* 						var parmas = ykp.getSessionStorage('iframeId');*/
/* 						self.parent.document.getElementById(parmas).src = '{{base_url}}admin/user/add';*/
/* 					}*/
/* 				};*/
/* */
/* 				$('.demoTable .layui-btn').on('click', function() {*/
/* 					var type = $(this).data('type');*/
/* 					active[type] ? active[type].call(this) : '';*/
/* 				});*/
/* */
/* 				//重复加载*/
/* 				function search(searchCode) {*/
/* 					var data = {};*/
/* 					if(searchCode) {*/
/* 						data.filter = searchCode;*/
/* 					}*/
/* 					table.reload('tabel_user', {*/
/* 						where: data*/
/* 					});*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
