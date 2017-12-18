<?php

/* admin/tab.html */
class __TwigTemplate_d779bc008f4f540a9896e7ecf1a935045db46c623aafb9373b56569c1e29a968 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/tab.html", 1)->display($context);
        // line 2
        echo "
\t<style>
\t\tbody {
\t\t\tmargin: 10px;
\t\t}
\t\t
\t\t.demo-carousel {
\t\t\theight: 200px;
\t\t\tline-height: 200px;
\t\t\ttext-align: center;
\t\t}
\t\t
\t\t.layui-table-view .layui-table {
\t\t\twidth: 100%;
\t\t}
\t\t
\t\t.model {
\t\t\tpadding: 20px;
\t\t}
\t\t.layui-table-tool{
\t\t\tpadding: 4px 10px 0 0 !important;
\t\t}
\t\t.layui-form-switch{
\t\t\tposition: relative;
\t\t    height: 22px;
\t\t    line-height: 22px;
\t\t    width: 54px !important;
\t\t    padding: 0 5px !important;
\t\t    border: 1px solid #d2d2d2;
\t\t    border-radius: 20px;
\t\t    cursor: pointer;
\t\t    margin: 0px;
\t\t}
\t</style>
\t";
        // line 36
        $this->loadTemplate("admin/crumbs.html", "admin/tab.html", 36)->display($context);
        // line 37
        echo "\t<div class=\"layui-tab\">
\t\t<ul class=\"layui-tab-title\">
\t\t\t<li class=\"layui-this\">网站设置</li>
\t\t\t<li>用户管理</li>
\t\t\t<li>权限分配</li>
\t\t\t<li>商品管理</li>
\t\t</ul>
\t\t<div class=\"layui-tab-content\">
\t\t\t<div class=\"layui-tab-item layui-show\">
\t\t\t\t<div class=\"layui-btn-group demoTable\">
\t\t\t\t\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"reload\">搜索</button>
\t\t\t\t\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"exImport\">导入</button>
\t\t\t\t\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"export\">导出</button>
\t\t\t\t\t<button class=\"layui-btn layui-btn-danger\" style=\"height: 35px; line-height: 35px;\" data-type=\"pldel\">批量删除</button>
\t\t\t\t</div>

\t\t\t\t<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
\t\t\t
\t\t\t\t<div id=\"search\" style=\"display: none;background: #eee; padding: 20px;\" class=\"model\">
\t\t\t\t\t<form class=\"layui-form layui-form-pane\" id=\"form\" style=\" height: 100%; width: 100%;  display: flex;justify-content: center; flex-wrap: wrap\">
\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"layui-tab-item\">内容2</div>
\t\t\t<div class=\"layui-tab-item\">内容3</div>
\t\t\t<div class=\"layui-tab-item\">内容4</div>
\t\t</div>
\t</div>
\t
\t
\t<script type=\"text/html\" id=\"barDemo\">
\t\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
\t</script>
\t
\t<script type=\"text/html\" id=\"switchDemo\">
\t\t<div class=\"layui-form-item\">
\t\t      <input type=\"checkbox\" checked=\"\" name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"ON|OFF\">
\t\t  </div>
\t</script>
\t
\t<script src=\"/resource/admin/layui/layui.js\"></script>
\t<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
\t<script src=\"/resource/admin/js/jslib/public.js\"></script>
\t<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
\t<script>
\t\tykp.defineClass(['element', \"jquery\"], {
\t\t\tinit: function() {
\t\t\t\tvar it = this;
\t\t\t\t//初始化列表
\t\t\t\tit.init();
\t\t\t},

\t\t\tinit: function() {

\t\t\t\tvar cols = [{
\t\t\t\t\t\tcheckbox: true,
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"id\",
\t\t\t\t\t\twidth: 80,
\t\t\t\t\t\tsort: true,
\t\t\t\t\t\ttitle: \"ID\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"usernmae\",
\t\t\t\t\t\twidth: 80,
\t\t\t\t\t\ttitle: \"用户名\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"sex\",
\t\t\t\t\t\twidth: 80,
\t\t\t\t\t\ttitle: \"性别\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"city\",
\t\t\t\t\t\twidth: 150,
\t\t\t\t\t\ttitle: \"城市\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"sign\",
\t\t\t\t\t\twidth: 150,
\t\t\t\t\t\ttitle: \"签名\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"experience\",
\t\t\t\t\t\twidth: 150,
\t\t\t\t\t\ttitle: \"积分\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"score\",
\t\t\t\t\t\twidth: 150,
\t\t\t\t\t\ttitle: \"评分\",
\t\t\t\t\t\ttype: \"\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"classify\",
\t\t\t\t\t\twidth: 150,
\t\t\t\t\t\ttitle: \"职业\",
\t\t\t\t\t\ttype: \"time\",
\t\t\t\t\t\trange:true
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"wealth\",
\t\t\t\t\t\twidth: 150,
\t\t\t\t\t\ttitle: \"财富\",
\t\t\t\t\t\ttoolbar: ykp.\$('#switchDemo'),
\t\t\t\t\t\ttype: \"time\",
\t\t\t\t\t\t
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tfield: \"right\",
\t\t\t\t\t\twidth: 160,
\t\t\t\t\t\ttitle: \"操作\",
\t\t\t\t\t\ttoolbar: ykp.\$('#barDemo'),
\t\t\t\t\t\talign:\"center\",
\t\t\t\t\t\tfixed: 'right',
\t\t\t\t\t},
\t\t\t\t];


\t\t\t\tlayui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {
\t\t\t\t\t\$('.layui-tab-title').find('li').unbind('click').click(function() {
\t\t\t\t\t\tvar index = \$(this).index();
//\t\t\t\t\t\tconsole.log(\$('.layui-tab-content').find('.layui-tab-item').eq(index).text());
\t\t\t\t\t})
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\tvar table = layui.table;
\t\t\t\t\tvar public = layui.public;
\t\t\t\t\thm.getSearch({
\t\t\t\t\t\tdata: cols,
\t\t\t\t\t\tel: \"#form\"
\t\t\t\t\t}); //遍历搜素demo

\t\t\t\t\t
\t\t\t\t\t//搜索框   时间范围  时间
\t\t\t\t\tpublic.timePicker([{
\t\t\t\t\t\tel:'#date8',
\t\t\t\t\t\trange:true,
\t\t\t\t\t\tformat: 'yyyy/MM/dd'
\t\t\t\t\t},{
\t\t\t\t\t\tel:'#date9',
\t\t\t\t\t\trange:false,
\t\t\t\t\t\tformat: 'yyyy/MM/dd'
\t\t\t\t\t}])

\t\t\t\t\ttable.render({
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: '";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/demo_data',
\t\t\t\t\t\tcols: [
\t\t\t\t\t\t\tcols
\t\t\t\t\t\t],
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\tskin: 'row', //表格风格
\t\t\t\t\t\teven:true,
\t\t\t\t\t\tpage: true,
\t\t\t\t\t\theight: \"full-220\",
\t\t\t\t\t\tlimits: [10, 20, 30, 45, 50, 100], //配置显示多少条数据
\t\t\t\t\t\tlimit: 10, //每页默认显示的数量
\t\t\t\t\t\twhere: {
\t\t\t\t\t\t\tid: 1
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t//表格里面   右侧工具栏点击事件
\t\t\t\t\ttable.on('tool(tabel_user)', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter=\"对应的值\"
\t\t\t\t\t\tvar data = obj.data, //获得当前行数据
\t\t\t\t\t\t\tlayEvent = obj.event; //获得 lay-event 对应的值
\t\t\t\t\t\t\tvar id = obj.data.id;
\t\t\t\t\t\t\tvar parmas =  ykp.getSessionStorage('iframeId');
\t\t\t\t\t\tif(layEvent === 'detail') {  //查看详情
\t\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = '";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/pageInfo?id=' + id;
\t\t\t\t\t\t} else if(layEvent === 'edit') {  //编辑
\t\t\t\t\t\t\tself.parent.document.getElementById(parmas).src = '";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info?id='+id;
\t\t\t\t\t\t} else if(layEvent === 'del') {  //删除
\t\t\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
\t\t\t\t\t\t\t\tobj.del(); //删除对应行（tr）的DOM结构
\t\t\t\t\t\t\t\t//删除批量删除\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\thm.plDel({
\t\t\t\t\t\t\t\t\tdata: id,
\t\t\t\t\t\t\t\t\tparams: {
\t\t\t\t\t\t\t\t\t\turl: 'www.baidu.com',
\t\t\t\t\t\t\t\t\t\tmethod: 'post'
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}, function(res) {
\t\t\t\t\t\t\t\t\tconsole.log(res);
\t\t\t\t\t\t\t\t\tsearch();
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tvar active = {
\t\t\t\t\t\t//高级搜索
\t\t\t\t\t\treload: function() {
\t\t\t\t\t\t\tpublic.layerOpen({
\t\t\t\t\t\t\t\tel: ykp.\$('#search')
\t\t\t\t\t\t\t}, function() { //成功执行的回调
\t\t\t\t\t\t\t\tvar searchCode = public.getSearchCode({
\t\t\t\t\t\t\t\t\tel: \"#search\"
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tconsole.log(searchCode);
\t\t\t\t\t\t\t\tif(!searchCode) {
\t\t\t\t\t\t\t\t\tykp.prompt('最少输入一个条件');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tsearch(searchCode);
\t\t\t\t\t\t\t\t\tpublic.emptyVal(\"#search\");
\t\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, function() { //取消执行的回调
\t\t\t\t\t\t\t\tlayer.closeAll();
\t\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t\tpublic.emptyVal(\"#search\");
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t})
\t\t\t\t\t\t},
\t\t\t\t\t\t//批量删除
\t\t\t\t\t\tpldel: function() {
\t\t\t\t\t\t\tvar checkStatus = table.checkStatus('tabel_user'),
\t\t\t\t\t\t\t\tdata = checkStatus.data;
\t\t\t\t\t\t\tif(data.length == 0) {
\t\t\t\t\t\t\t\tlayer.msg('最少选中一个');
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\thm.plDel({
\t\t\t\t\t\t\t\tdata: data,
\t\t\t\t\t\t\t\tparams: {
\t\t\t\t\t\t\t\t\turl: '',
\t\t\t\t\t\t\t\t\tmethod: ''
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}, function(res) {
\t\t\t\t\t\t\t\tconsole.log(res);
\t\t\t\t\t\t\t\tsearch();
\t\t\t\t\t\t\t})

\t\t\t\t\t\t},
\t\t\t\t\t\texImport: function() {
\t\t\t\t\t\t\tlayer.msg(\"导入\");
\t\t\t\t\t\t},
\t\t\t\t\t\texport: function() {
\t\t\t\t\t\t\tlayer.msg(\"导出\");
//\t\t\t\t\t\t\t\$(\"#tabel_user\").table2excel({
//\t\t\t\t\t\t\t\texclude: \".noExl\",
//\t\t\t\t\t\t\t\tname: \"Excel Document Name\",
//\t\t\t\t\t\t\t\tfilename: \"myFileName\",
//\t\t\t\t\t\t\t\texclude_img: true,
//\t\t\t\t\t\t\t\texclude_links: true,
//\t\t\t\t\t\t\t\texclude_inputs: true
//\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t};

\t\t\t\t\t\$('.demoTable .layui-btn').on('click', function() {
\t\t\t\t\t\tvar type = \$(this).data('type');

\t\t\t\t\t\tactive[type] ? active[type].call(this) : '';
\t\t\t\t\t});

\t\t\t\t\t//重复加载
\t\t\t\t\tfunction search(searchCode) {
\t\t\t\t\t\tvar data = {};
\t\t\t\t\t\tif(searchCode) {
\t\t\t\t\t\t\tdata.filter = searchCode;
\t\t\t\t\t\t}
\t\t\t\t\t\ttable.reload('tabel_user', {
\t\t\t\t\t\t\twhere: data
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});
\t</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/tab.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 221,  246 => 219,  219 => 195,  59 => 37,  57 => 36,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* */
/* 	<style>*/
/* 		body {*/
/* 			margin: 10px;*/
/* 		}*/
/* 		*/
/* 		.demo-carousel {*/
/* 			height: 200px;*/
/* 			line-height: 200px;*/
/* 			text-align: center;*/
/* 		}*/
/* 		*/
/* 		.layui-table-view .layui-table {*/
/* 			width: 100%;*/
/* 		}*/
/* 		*/
/* 		.model {*/
/* 			padding: 20px;*/
/* 		}*/
/* 		.layui-table-tool{*/
/* 			padding: 4px 10px 0 0 !important;*/
/* 		}*/
/* 		.layui-form-switch{*/
/* 			position: relative;*/
/* 		    height: 22px;*/
/* 		    line-height: 22px;*/
/* 		    width: 54px !important;*/
/* 		    padding: 0 5px !important;*/
/* 		    border: 1px solid #d2d2d2;*/
/* 		    border-radius: 20px;*/
/* 		    cursor: pointer;*/
/* 		    margin: 0px;*/
/* 		}*/
/* 	</style>*/
/* 	{% include 'admin/crumbs.html' %}*/
/* 	<div class="layui-tab">*/
/* 		<ul class="layui-tab-title">*/
/* 			<li class="layui-this">网站设置</li>*/
/* 			<li>用户管理</li>*/
/* 			<li>权限分配</li>*/
/* 			<li>商品管理</li>*/
/* 		</ul>*/
/* 		<div class="layui-tab-content">*/
/* 			<div class="layui-tab-item layui-show">*/
/* 				<div class="layui-btn-group demoTable">*/
/* 					<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="reload">搜索</button>*/
/* 					<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="exImport">导入</button>*/
/* 					<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="export">导出</button>*/
/* 					<button class="layui-btn layui-btn-danger" style="height: 35px; line-height: 35px;" data-type="pldel">批量删除</button>*/
/* 				</div>*/
/* */
/* 				<table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* 			*/
/* 				<div id="search" style="display: none;background: #eee; padding: 20px;" class="model">*/
/* 					<form class="layui-form layui-form-pane" id="form" style=" height: 100%; width: 100%;  display: flex;justify-content: center; flex-wrap: wrap">*/
/* 			*/
/* 					</form>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 			<div class="layui-tab-item">内容2</div>*/
/* 			<div class="layui-tab-item">内容3</div>*/
/* 			<div class="layui-tab-item">内容4</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	<script type="text/html" id="barDemo">*/
/* 		<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 		<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 		<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* 	</script>*/
/* 	*/
/* 	<script type="text/html" id="switchDemo">*/
/* 		<div class="layui-form-item">*/
/* 		      <input type="checkbox" checked="" name="open" lay-skin="switch" lay-filter="switchTest" lay-text="ON|OFF">*/
/* 		  </div>*/
/* 	</script>*/
/* 	*/
/* 	<script src="/resource/admin/layui/layui.js"></script>*/
/* 	<script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* 	<script src="/resource/admin/js/jslib/public.js"></script>*/
/* 	<!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* 	<script>*/
/* 		ykp.defineClass(['element', "jquery"], {*/
/* 			init: function() {*/
/* 				var it = this;*/
/* 				//初始化列表*/
/* 				it.init();*/
/* 			},*/
/* */
/* 			init: function() {*/
/* */
/* 				var cols = [{*/
/* 						checkbox: true,*/
/* 					},*/
/* 					{*/
/* 						field: "id",*/
/* 						width: 80,*/
/* 						sort: true,*/
/* 						title: "ID",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "usernmae",*/
/* 						width: 80,*/
/* 						title: "用户名",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "sex",*/
/* 						width: 80,*/
/* 						title: "性别",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "city",*/
/* 						width: 150,*/
/* 						title: "城市",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "sign",*/
/* 						width: 150,*/
/* 						title: "签名",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "experience",*/
/* 						width: 150,*/
/* 						title: "积分",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "score",*/
/* 						width: 150,*/
/* 						title: "评分",*/
/* 						type: ""*/
/* 					},*/
/* 					{*/
/* 						field: "classify",*/
/* 						width: 150,*/
/* 						title: "职业",*/
/* 						type: "time",*/
/* 						range:true*/
/* 					},*/
/* 					{*/
/* 						field: "wealth",*/
/* 						width: 150,*/
/* 						title: "财富",*/
/* 						toolbar: ykp.$('#switchDemo'),*/
/* 						type: "time",*/
/* 						*/
/* 					},*/
/* 					{*/
/* 						field: "right",*/
/* 						width: 160,*/
/* 						title: "操作",*/
/* 						toolbar: ykp.$('#barDemo'),*/
/* 						align:"center",*/
/* 						fixed: 'right',*/
/* 					},*/
/* 				];*/
/* */
/* */
/* 				layui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {*/
/* 					$('.layui-tab-title').find('li').unbind('click').click(function() {*/
/* 						var index = $(this).index();*/
/* //						console.log($('.layui-tab-content').find('.layui-tab-item').eq(index).text());*/
/* 					})*/
/* 					*/
/* 					*/
/* 					var table = layui.table;*/
/* 					var public = layui.public;*/
/* 					hm.getSearch({*/
/* 						data: cols,*/
/* 						el: "#form"*/
/* 					}); //遍历搜素demo*/
/* */
/* 					*/
/* 					//搜索框   时间范围  时间*/
/* 					public.timePicker([{*/
/* 						el:'#date8',*/
/* 						range:true,*/
/* 						format: 'yyyy/MM/dd'*/
/* 					},{*/
/* 						el:'#date9',*/
/* 						range:false,*/
/* 						format: 'yyyy/MM/dd'*/
/* 					}])*/
/* */
/* 					table.render({*/
/* 						elem: "#tabel_user",*/
/* 						url: '{{base_url}}admin/user/demo_data',*/
/* 						cols: [*/
/* 							cols*/
/* 						],*/
/* 						id: 'tabel_user',*/
/* 						skin: 'row', //表格风格*/
/* 						even:true,*/
/* 						page: true,*/
/* 						height: "full-220",*/
/* 						limits: [10, 20, 30, 45, 50, 100], //配置显示多少条数据*/
/* 						limit: 10, //每页默认显示的数量*/
/* 						where: {*/
/* 							id: 1*/
/* 						}*/
/* 					});*/
/* 					*/
/* 					*/
/* 					//表格里面   右侧工具栏点击事件*/
/* 					table.on('tool(tabel_user)', function(obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"*/
/* 						var data = obj.data, //获得当前行数据*/
/* 							layEvent = obj.event; //获得 lay-event 对应的值*/
/* 							var id = obj.data.id;*/
/* 							var parmas =  ykp.getSessionStorage('iframeId');*/
/* 						if(layEvent === 'detail') {  //查看详情*/
/* 							self.parent.document.getElementById(parmas).src = '{{base_url}}admin/user/pageInfo?id=' + id;*/
/* 						} else if(layEvent === 'edit') {  //编辑*/
/* 							self.parent.document.getElementById(parmas).src = '{{base_url}}admin/user/info?id='+id;*/
/* 						} else if(layEvent === 'del') {  //删除*/
/* 							layer.confirm('真的删除行么', function(index) {*/
/* 								obj.del(); //删除对应行（tr）的DOM结构*/
/* 								//删除批量删除							*/
/* 								hm.plDel({*/
/* 									data: id,*/
/* 									params: {*/
/* 										url: 'www.baidu.com',*/
/* 										method: 'post'*/
/* 									}*/
/* 								}, function(res) {*/
/* 									console.log(res);*/
/* 									search();*/
/* 								})*/
/* 								layer.close(index);*/
/* 							});*/
/* 						}*/
/* 					});*/
/* 					var active = {*/
/* 						//高级搜索*/
/* 						reload: function() {*/
/* 							public.layerOpen({*/
/* 								el: ykp.$('#search')*/
/* 							}, function() { //成功执行的回调*/
/* 								var searchCode = public.getSearchCode({*/
/* 									el: "#search"*/
/* 								});*/
/* 								console.log(searchCode);*/
/* 								if(!searchCode) {*/
/* 									ykp.prompt('最少输入一个条件');*/
/* 								} else {*/
/* 									search(searchCode);*/
/* 									public.emptyVal("#search");*/
/* 									layer.closeAll();*/
/* 								}*/
/* 							}, function() { //取消执行的回调*/
/* 								layer.closeAll();*/
/* 							}, function() {*/
/* 								public.emptyVal("#search");*/
/* 								return false;*/
/* 							})*/
/* 						},*/
/* 						//批量删除*/
/* 						pldel: function() {*/
/* 							var checkStatus = table.checkStatus('tabel_user'),*/
/* 								data = checkStatus.data;*/
/* 							if(data.length == 0) {*/
/* 								layer.msg('最少选中一个');*/
/* 								return false;*/
/* 							}*/
/* 							hm.plDel({*/
/* 								data: data,*/
/* 								params: {*/
/* 									url: '',*/
/* 									method: ''*/
/* 								}*/
/* 							}, function(res) {*/
/* 								console.log(res);*/
/* 								search();*/
/* 							})*/
/* */
/* 						},*/
/* 						exImport: function() {*/
/* 							layer.msg("导入");*/
/* 						},*/
/* 						export: function() {*/
/* 							layer.msg("导出");*/
/* //							$("#tabel_user").table2excel({*/
/* //								exclude: ".noExl",*/
/* //								name: "Excel Document Name",*/
/* //								filename: "myFileName",*/
/* //								exclude_img: true,*/
/* //								exclude_links: true,*/
/* //								exclude_inputs: true*/
/* //							});*/
/* 						}*/
/* 					};*/
/* */
/* 					$('.demoTable .layui-btn').on('click', function() {*/
/* 						var type = $(this).data('type');*/
/* */
/* 						active[type] ? active[type].call(this) : '';*/
/* 					});*/
/* */
/* 					//重复加载*/
/* 					function search(searchCode) {*/
/* 						var data = {};*/
/* 						if(searchCode) {*/
/* 							data.filter = searchCode;*/
/* 						}*/
/* 						table.reload('tabel_user', {*/
/* 							where: data*/
/* 						});*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 	</script>*/
/* </body>*/
/* */
/* </html>*/
