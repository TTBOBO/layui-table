<?php

/* admin/statistics/userTable.html */
class __TwigTemplate_091e769747411f499c420e9b1a0a9e059c78525230ca5c495d60d665fe722728 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/statistics/userTable.html", 1)->display($context);
        echo " ";
        $this->loadTemplate("admin/crumbs.html", "admin/statistics/userTable.html", 1)->display($context);
        // line 2
        echo "<div class=\"layui-form\">
\t<div class=\"layui-form-item\">
\t\t
\t\t<div class=\"layui-inline\">
\t\t\t<div class=\"layui-input-inline\" id=\"select\">
\t\t\t\t
\t\t\t</div>
\t\t\t<label class=\"layui-form-label\">日期范围</label>
\t\t\t<div class=\"layui-input-inline\">
\t\t\t\t<input type=\"text\" class=\"layui-input\" id=\"time\" placeholder=\" - \">
\t\t\t</div>
\t\t</div>
\t\t<button class=\"layui-btn layui-btn-sm layui-btn-normal\" id=\"search\">搜索</button>
\t</div>
</div>
<div id=\"test\" style=\"width: 800px; height: 500px;\">

</div>

<div id=\"test1\" style=\"width: 500px; height: 400px;\">

</div>

<div id=\"test2\" style=\"width: 500px; height: 400px;\">

</div>
<script src=\"/resource/admin/js/jslib/echarts.min.js\"></script>
<script>
\tykp.defineClass(['element', \"jquery\", 'laytpl'], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initPage();
\t\t},
\t\tinitPage: function() {
\t\t\thm.load(function(optionObj) {
\t\t\t\tvar form = optionObj.form,
\t\t\t\t\tlayer = optionObj.layer,
\t\t\t\t\tlayedit = optionObj.layedit,
\t\t\t\t\tlaydate = optionObj.laydate,
\t\t\t\t\tpublic = optionObj.public,
\t\t\t\t\tupload = optionObj.upload;
\t\t\t\tpublic.dataRender([{
\t\t\t\t\tel: \"#time\",
\t\t\t\t\trange: true
\t\t\t\t}]);
\t\t\t\t
\t\t\t\tpublic.showTimeSelect({
\t\t\t\t\tel:\"#select\",
\t\t\t\t\tdata:[{val:1,title:\"昨天\"},
\t\t\t\t\t\t{val:7,title:\"近一周\"},
\t\t\t\t\t\t{val:30,title:\"近一个月\"},
\t\t\t\t\t\t{val:90,title:\"近三个月\"}
\t\t\t\t\t],
\t\t\t\t\tfun:change
\t\t\t\t})
\t\t\t\t
\t\t\t\tfunction change(val){
\t\t\t\t\tconsole.log(hm.timeForMat(val));
\t\t\t\t}
\t\t\t\thm.getLineChart({
\t\t\t\t\tel: 'test',
\t\t\t\t\tdata: 1
\t\t\t\t})
\t\t\t\t//\t\t\tykp.doAjax({
\t\t\t\t//\t\t\t\turl: \"\",
\t\t\t\t//\t\t\t\tmethod: \"post\",
\t\t\t\t//\t\t\t\tdata: {},
\t\t\t\t//\t\t\t\tsuccess: function(res) {
\t\t\t\t//\t\t\t
\t\t\t\t//\t\t\t\t}
\t\t\t\t//\t\t\t})

\t\t\t\thm.getCircularChart({
\t\t\t\t\tel: 'test1',
\t\t\t\t\tdata: 1
\t\t\t\t})

\t\t\t})

\t\t\t\$('#search').click(function() {
\t\t\t\tvar time = \$('#time').val();
\t\t\t\tif(!time) {
\t\t\t\t\tlayer.msg(\"请选择时间再搜索\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar filter = time.split(' - ');
\t\t\t\treturn false;
\t\t\t\tgetDate(filter);

\t\t\t})

\t\t\tfunction getDate(option) {
\t\t\t\tykp.doAjax({
\t\t\t\t\turl: \"\",
\t\t\t\t\tmethod: \"post\",
\t\t\t\t\tdata: {
\t\t\t\t\t\tstart: option[0],
\t\t\t\t\t\tend: option[1]
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(res) {

\t\t\t\t\t}
\t\t\t\t})
\t\t\t}

\t\t},

\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/statistics/userTable.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %} {% include 'admin/crumbs.html' %}*/
/* <div class="layui-form">*/
/* 	<div class="layui-form-item">*/
/* 		*/
/* 		<div class="layui-inline">*/
/* 			<div class="layui-input-inline" id="select">*/
/* 				*/
/* 			</div>*/
/* 			<label class="layui-form-label">日期范围</label>*/
/* 			<div class="layui-input-inline">*/
/* 				<input type="text" class="layui-input" id="time" placeholder=" - ">*/
/* 			</div>*/
/* 		</div>*/
/* 		<button class="layui-btn layui-btn-sm layui-btn-normal" id="search">搜索</button>*/
/* 	</div>*/
/* </div>*/
/* <div id="test" style="width: 800px; height: 500px;">*/
/* */
/* </div>*/
/* */
/* <div id="test1" style="width: 500px; height: 400px;">*/
/* */
/* </div>*/
/* */
/* <div id="test2" style="width: 500px; height: 400px;">*/
/* */
/* </div>*/
/* <script src="/resource/admin/js/jslib/echarts.min.js"></script>*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initPage();*/
/* 		},*/
/* 		initPage: function() {*/
/* 			hm.load(function(optionObj) {*/
/* 				var form = optionObj.form,*/
/* 					layer = optionObj.layer,*/
/* 					layedit = optionObj.layedit,*/
/* 					laydate = optionObj.laydate,*/
/* 					public = optionObj.public,*/
/* 					upload = optionObj.upload;*/
/* 				public.dataRender([{*/
/* 					el: "#time",*/
/* 					range: true*/
/* 				}]);*/
/* 				*/
/* 				public.showTimeSelect({*/
/* 					el:"#select",*/
/* 					data:[{val:1,title:"昨天"},*/
/* 						{val:7,title:"近一周"},*/
/* 						{val:30,title:"近一个月"},*/
/* 						{val:90,title:"近三个月"}*/
/* 					],*/
/* 					fun:change*/
/* 				})*/
/* 				*/
/* 				function change(val){*/
/* 					console.log(hm.timeForMat(val));*/
/* 				}*/
/* 				hm.getLineChart({*/
/* 					el: 'test',*/
/* 					data: 1*/
/* 				})*/
/* 				//			ykp.doAjax({*/
/* 				//				url: "",*/
/* 				//				method: "post",*/
/* 				//				data: {},*/
/* 				//				success: function(res) {*/
/* 				//			*/
/* 				//				}*/
/* 				//			})*/
/* */
/* 				hm.getCircularChart({*/
/* 					el: 'test1',*/
/* 					data: 1*/
/* 				})*/
/* */
/* 			})*/
/* */
/* 			$('#search').click(function() {*/
/* 				var time = $('#time').val();*/
/* 				if(!time) {*/
/* 					layer.msg("请选择时间再搜索");*/
/* 					return false;*/
/* 				}*/
/* 				var filter = time.split(' - ');*/
/* 				return false;*/
/* 				getDate(filter);*/
/* */
/* 			})*/
/* */
/* 			function getDate(option) {*/
/* 				ykp.doAjax({*/
/* 					url: "",*/
/* 					method: "post",*/
/* 					data: {*/
/* 						start: option[0],*/
/* 						end: option[1]*/
/* 					},*/
/* 					success: function(res) {*/
/* */
/* 					}*/
/* 				})*/
/* 			}*/
/* */
/* 		},*/
/* */
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
