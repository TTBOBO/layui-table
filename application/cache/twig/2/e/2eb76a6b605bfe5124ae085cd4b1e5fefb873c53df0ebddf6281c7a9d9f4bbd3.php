<?php

/* admin/demo.html */
class __TwigTemplate_19d2528d4ab3f0ff3fc08aeded8488d25f06dae9de1012839874556ac89d9462 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/demo.html", 1)->display($context);
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
\t/*.model {
\t\tpadding: 20px;
\t}*/
\t
\t.layui-layer-content {
\t\tbackground: rgb(238, 238, 238);
\t}
\t
\t.layui-table-tool {
\t\tpadding: 4px 10px 0 0 !important;
\t}
\t
\t.layui-form-select {
\t\twidth: 186px;
\t}
\t
\t.layui-form-select dl dd {
\t\tline-height: 28px !important;
\t}
\t
</style>
";
        // line 42
        $this->loadTemplate("admin/crumbs.html", "admin/demo.html", 42)->display($context);
        // line 43
        echo "<div class=\"layui-btn-group demoTable\">
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"reload\">搜索</button>
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"exImport\">导入</button>
\t<button class=\"layui-btn\" style=\"height: 35px; line-height: 35px;\" data-type=\"export\">导出</button>
\t<button class=\"layui-btn layui-btn-danger\" style=\"height: 35px; line-height: 35px;\" data-type=\"pldel\">删除</button>
</div>

<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>

<div id=\"search\" style=\"display: none;background: #eee; padding: 20px;\" class=\"model\">
\t<form class=\"layui-form layui-form-pane\" id=\"form\" style=\"  width: 100%;  display: flex;justify-content: center; flex-wrap: wrap\">
\t\t<div class=\"layui-inline\">
\t\t\t<label class=\"layui-form-label\">搜索选择框</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<select name=\"modules\" lay-verify=\"required\" lay-search=\"\">
\t\t\t\t\t<option value=\"\">直接选择或搜索选择</option>
\t\t\t\t\t<option value=\"1\">layer</option>
\t\t\t\t\t<option value=\"2\">form</option>
\t\t\t\t\t<option value=\"3\">layim</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</form>
</div>

<div class=\"layui-layer layui-layer-page\" id=\"import1\" type=\"page\" style=\"display: none; z-index: 51; width: 400px; top: 100px; left: 386px;\">
\t<div class=\"layui-layer-title\">导入</div>
\t<div id=\"\" class=\"layui-layer-content\" style=\"height: 159px;\">
\t\t<div id=\"import\" style=\"padding: 10px;\" class=\"layui-layer-wrap\">
\t\t\t<div class=\"layui-upload\" style=\"margin-bottom: 10px;\">
\t\t\t\t<button type=\"button\" class=\"layui-btn layui-btn-normal\" id=\"test8\">选择文件</button><input class=\"layui-upload-file\" type=\"file\" name=\"file\">
\t\t\t</div>
\t\t\t<div id=\"\">
\t\t\t\t<p>1、123131313132131313131313</p>
\t\t\t\t<p>2、123131313132131313131313</p>
\t\t\t\t<p>3、123131313132131313131313</p>
\t\t\t\t<p>4、123131313132131313131313</p>
\t\t\t\t<p>5、123131313132131313131313</p>
\t\t\t</div>
\t\t</div>
\t</div><span class=\"layui-layer-setwin\"><a class=\"layui-layer-ico layui-layer-close layui-layer-close1\" href=\"javascript:;\"></a></span>
\t<div class=\"layui-layer-btn layui-layer-btn-\">
\t\t<a class=\"layui-layer-btn0\">确认</a>
\t\t<a class=\"layui-layer-btn1\">取消</a>
\t</div><span class=\"layui-layer-resize\"></span></div>

<script type=\"text/html\" id=\"barDemo\">
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
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttitle: \"ID\",
\t\t\t\t\ttype: \"\",
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"username\",
\t\t\t\t\twidth: 80,
\t\t\t\t\ttitle: \"用户名\",
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttype: \"select\",
\t\t\t\t\toption: [{
\t\t\t\t\t\tval: 1,
\t\t\t\t\t\ttext: \"layer\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: 2,
\t\t\t\t\t\ttext: \"海脉汇\"
\t\t\t\t\t}, {
\t\t\t\t\t\tval: 3,
\t\t\t\t\t\ttext: \"海脉通\"
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"sex\",
\t\t\t\t\twidth: 80,
\t\t\t\t\ttitle: \"性别\",
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"city\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"城市\",
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"sign\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"签名\",
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"experience\",
\t\t\t\t\twidth: 150,
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttitle: \"积分\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"score\",
\t\t\t\t\twidth: 150,
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttitle: \"评分\",
\t\t\t\t\ttype: \"\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"classify\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"职业\",
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"wealth\",
\t\t\t\t\twidth: 150,
\t\t\t\t\ttitle: \"财富\",
\t\t\t\t\tsear:\"1\",
\t\t\t\t\ttype: \"time\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tfield: \"right\",
\t\t\t\t\twidth: 200,
\t\t\t\t\ttitle: \"操作\",
\t\t\t\t\ttoolbar: ykp.\$('#barDemo'),
\t\t\t\t\talign: \"center\",
\t\t\t\t\tfixed: 'right',
\t\t\t\t},
\t\t\t];
\t\t\t//\t\t\t\$('#form').html(` <div class=\"layui-inline\">
\t\t\t//    <label class=\"layui-form-label\">搜索选择框</label>
\t\t\t//    <div class=\"layui-input-inline\">
\t\t\t//      <select name=\"modules\" lay-verify=\"required\" lay-search=\"\">
\t\t\t//        <option value=\"\">直接选择或搜索选择</option>
\t\t\t//        <option value=\"1\">layer</option>
\t\t\t//        <option value=\"2\">form</option>
\t\t\t//        <option value=\"3\">layim</option>
\t\t\t//      </select>
\t\t\t//    </div>
\t\t\t//  </div>`);
\t\t\t//\t\t\t\t\tgetSearch(cols);

\t\t\thm.getSearch({
\t\t\t\tdata: cols,
\t\t\t\tel: \"#form\"

\t\t\t}); //遍历搜素demo

\t\t\tlayui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {
\t\t\t\tvar table = layui.table;
\t\t\t\tvar public = layui.public;

\t\t\t\t//搜索框   时间范围  时间
\t\t\t\tpublic.timePicker([{
\t\t\t\t\tel: '#date8',
\t\t\t\t\trange: true,
\t\t\t\t\tformat: 'yyyy/MM/dd'
\t\t\t\t}, {
\t\t\t\t\tel: '#date9',
\t\t\t\t\trange: false,
\t\t\t\t\tformat: 'yyyy/MM/dd'
\t\t\t\t}])

\t\t\t\ttable.render({
\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\turl: '";
        // line 231
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
\t\t\t\t\tvar data = obj.data //获得当前行数据
\t\t\t\t\t\t,
\t\t\t\t\t\tlayEvent = obj.event; //获得 lay-event 对应的值
\t\t\t\t\tvar id = obj.data.id;
\t\t\t\t\tif(layEvent === 'detail') {
\t\t\t\t\t\tlayer.msg('查看id为' + id + \"的数据\");
\t\t\t\t\t} else if(layEvent === 'del') {
\t\t\t\t\t\tlayer.confirm('真的删除行么', function(index) {
\t\t\t\t\t\t\tobj.del(); //删除对应行（tr）的DOM结构
\t\t\t\t\t\t\tlayer.msg('删除id为' + id + \"的数据\");
\t\t\t\t\t\t\tlayer.close(index);
\t\t\t\t\t\t});
\t\t\t\t\t} else if(layEvent === 'edit') {
\t\t\t\t\t\tlayer.msg('编辑id为' + id + \"的数据\");
\t\t\t\t\t\tself.parent.document.getElementById(\"iframe9\").src = '";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/info?id=' + id;
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//\t\t\t\tupload.render({
\t\t\t\t//\t\t\t\t    elem: '#test8'
\t\t\t\t//\t\t\t\t    ,url: '/upload/'
\t\t\t\t//\t\t\t\t    ,auto: false
\t\t\t\t//\t\t\t\t    //,multiple: true
\t\t\t\t//\t\t\t\t    ,bindAction: '#test9'
\t\t\t\t//\t\t\t\t    ,done: function(res){
\t\t\t\t//\t\t\t\t      console.log(res)
\t\t\t\t//\t\t\t\t    }
\t\t\t\t//\t\t\t\t  });

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
\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\tpublic.emptyVal(\"#search\");
\t\t\t\t\t\t\treturn false;
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
\t\t\t\t\t\tpublic.plDel({
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

\t\t\t\t\texImport: function() {
\t\t\t\t\t\tlayer.msg(\"导入\");
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
\t\t\t\t\t\tlayer.msg(\"导出\");
\t\t\t\t\t\t\$(\"#tabel_user\").table2excel({
\t\t\t\t\t\t\texclude: \".noExl\",
\t\t\t\t\t\t\tname: \"Excel Document Name\",
\t\t\t\t\t\t\tfilename: \"myFileName\",
\t\t\t\t\t\t\texclude_img: true,
\t\t\t\t\t\t\texclude_links: true,
\t\t\t\t\t\t\texclude_inputs: true
\t\t\t\t\t\t});
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
        return "admin/demo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 262,  255 => 231,  65 => 43,  63 => 42,  21 => 2,  19 => 1,);
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
/* 	/*.model {*/
/* 		padding: 20px;*/
/* 	}*//* */
/* 	*/
/* 	.layui-layer-content {*/
/* 		background: rgb(238, 238, 238);*/
/* 	}*/
/* 	*/
/* 	.layui-table-tool {*/
/* 		padding: 4px 10px 0 0 !important;*/
/* 	}*/
/* 	*/
/* 	.layui-form-select {*/
/* 		width: 186px;*/
/* 	}*/
/* 	*/
/* 	.layui-form-select dl dd {*/
/* 		line-height: 28px !important;*/
/* 	}*/
/* 	*/
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <div class="layui-btn-group demoTable">*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="reload">搜索</button>*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="exImport">导入</button>*/
/* 	<button class="layui-btn" style="height: 35px; line-height: 35px;" data-type="export">导出</button>*/
/* 	<button class="layui-btn layui-btn-danger" style="height: 35px; line-height: 35px;" data-type="pldel">删除</button>*/
/* </div>*/
/* */
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* */
/* <div id="search" style="display: none;background: #eee; padding: 20px;" class="model">*/
/* 	<form class="layui-form layui-form-pane" id="form" style="  width: 100%;  display: flex;justify-content: center; flex-wrap: wrap">*/
/* 		<div class="layui-inline">*/
/* 			<label class="layui-form-label">搜索选择框</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<select name="modules" lay-verify="required" lay-search="">*/
/* 					<option value="">直接选择或搜索选择</option>*/
/* 					<option value="1">layer</option>*/
/* 					<option value="2">form</option>*/
/* 					<option value="3">layim</option>*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 	</form>*/
/* </div>*/
/* */
/* <div class="layui-layer layui-layer-page" id="import1" type="page" style="display: none; z-index: 51; width: 400px; top: 100px; left: 386px;">*/
/* 	<div class="layui-layer-title">导入</div>*/
/* 	<div id="" class="layui-layer-content" style="height: 159px;">*/
/* 		<div id="import" style="padding: 10px;" class="layui-layer-wrap">*/
/* 			<div class="layui-upload" style="margin-bottom: 10px;">*/
/* 				<button type="button" class="layui-btn layui-btn-normal" id="test8">选择文件</button><input class="layui-upload-file" type="file" name="file">*/
/* 			</div>*/
/* 			<div id="">*/
/* 				<p>1、123131313132131313131313</p>*/
/* 				<p>2、123131313132131313131313</p>*/
/* 				<p>3、123131313132131313131313</p>*/
/* 				<p>4、123131313132131313131313</p>*/
/* 				<p>5、123131313132131313131313</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div><span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span>*/
/* 	<div class="layui-layer-btn layui-layer-btn-">*/
/* 		<a class="layui-layer-btn0">确认</a>*/
/* 		<a class="layui-layer-btn1">取消</a>*/
/* 	</div><span class="layui-layer-resize"></span></div>*/
/* */
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
/* 					sear:"1",*/
/* 					title: "ID",*/
/* 					type: "",*/
/* 				},*/
/* 				{*/
/* 					field: "username",*/
/* 					width: 80,*/
/* 					title: "用户名",*/
/* 					sear:"1",*/
/* 					type: "select",*/
/* 					option: [{*/
/* 						val: 1,*/
/* 						text: "layer"*/
/* 					}, {*/
/* 						val: 2,*/
/* 						text: "海脉汇"*/
/* 					}, {*/
/* 						val: 3,*/
/* 						text: "海脉通"*/
/* 					}]*/
/* 				},*/
/* 				{*/
/* 					field: "sex",*/
/* 					width: 80,*/
/* 					title: "性别",*/
/* 					sear:"1",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "city",*/
/* 					width: 150,*/
/* 					title: "城市",*/
/* 					sear:"1",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "sign",*/
/* 					width: 150,*/
/* 					title: "签名",*/
/* 					sear:"1",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "experience",*/
/* 					width: 150,*/
/* 					sear:"1",*/
/* 					title: "积分",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "score",*/
/* 					width: 150,*/
/* 					sear:"1",*/
/* 					title: "评分",*/
/* 					type: ""*/
/* 				},*/
/* 				{*/
/* 					field: "classify",*/
/* 					width: 150,*/
/* 					title: "职业",*/
/* 					sear:"1",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					field: "wealth",*/
/* 					width: 150,*/
/* 					title: "财富",*/
/* 					sear:"1",*/
/* 					type: "time"*/
/* 				},*/
/* 				{*/
/* 					field: "right",*/
/* 					width: 200,*/
/* 					title: "操作",*/
/* 					toolbar: ykp.$('#barDemo'),*/
/* 					align: "center",*/
/* 					fixed: 'right',*/
/* 				},*/
/* 			];*/
/* 			//			$('#form').html(` <div class="layui-inline">*/
/* 			//    <label class="layui-form-label">搜索选择框</label>*/
/* 			//    <div class="layui-input-inline">*/
/* 			//      <select name="modules" lay-verify="required" lay-search="">*/
/* 			//        <option value="">直接选择或搜索选择</option>*/
/* 			//        <option value="1">layer</option>*/
/* 			//        <option value="2">form</option>*/
/* 			//        <option value="3">layim</option>*/
/* 			//      </select>*/
/* 			//    </div>*/
/* 			//  </div>`);*/
/* 			//					getSearch(cols);*/
/* */
/* 			hm.getSearch({*/
/* 				data: cols,*/
/* 				el: "#form"*/
/* */
/* 			}); //遍历搜素demo*/
/* */
/* 			layui.use(['laydate', 'form', 'layer', 'public', 'table'], function() {*/
/* 				var table = layui.table;*/
/* 				var public = layui.public;*/
/* */
/* 				//搜索框   时间范围  时间*/
/* 				public.timePicker([{*/
/* 					el: '#date8',*/
/* 					range: true,*/
/* 					format: 'yyyy/MM/dd'*/
/* 				}, {*/
/* 					el: '#date9',*/
/* 					range: false,*/
/* 					format: 'yyyy/MM/dd'*/
/* 				}])*/
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
/* 					var data = obj.data //获得当前行数据*/
/* 						,*/
/* 						layEvent = obj.event; //获得 lay-event 对应的值*/
/* 					var id = obj.data.id;*/
/* 					if(layEvent === 'detail') {*/
/* 						layer.msg('查看id为' + id + "的数据");*/
/* 					} else if(layEvent === 'del') {*/
/* 						layer.confirm('真的删除行么', function(index) {*/
/* 							obj.del(); //删除对应行（tr）的DOM结构*/
/* 							layer.msg('删除id为' + id + "的数据");*/
/* 							layer.close(index);*/
/* 						});*/
/* 					} else if(layEvent === 'edit') {*/
/* 						layer.msg('编辑id为' + id + "的数据");*/
/* 						self.parent.document.getElementById("iframe9").src = '{{base_url}}admin/user/info?id=' + id;*/
/* 					}*/
/* 				});*/
/* */
/* 				//				upload.render({*/
/* 				//				    elem: '#test8'*/
/* 				//				    ,url: '/upload/'*/
/* 				//				    ,auto: false*/
/* 				//				    //,multiple: true*/
/* 				//				    ,bindAction: '#test9'*/
/* 				//				    ,done: function(res){*/
/* 				//				      console.log(res)*/
/* 				//				    }*/
/* 				//				  });*/
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
/* */
/* 							if(!searchCode) {*/
/* 								ykp.prompt('最少输入一个条件');*/
/* 							} else {*/
/* 								search(searchCode);*/
/* 								layer.closeAll();*/
/* 							}*/
/* 						}, function() { //取消执行的回调*/
/* 							console.log(2);*/
/* 							layer.closeAll();*/
/* 						}, function() {*/
/* 							public.emptyVal("#search");*/
/* 							return false;*/
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
/* 						public.plDel({*/
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
/* */
/* 					exImport: function() {*/
/* 						layer.msg("导入");*/
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
/* 						layer.msg("导出");*/
/* 						$("#tabel_user").table2excel({*/
/* 							exclude: ".noExl",*/
/* 							name: "Excel Document Name",*/
/* 							filename: "myFileName",*/
/* 							exclude_img: true,*/
/* 							exclude_links: true,*/
/* 							exclude_inputs: true*/
/* 						});*/
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
/* */
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
