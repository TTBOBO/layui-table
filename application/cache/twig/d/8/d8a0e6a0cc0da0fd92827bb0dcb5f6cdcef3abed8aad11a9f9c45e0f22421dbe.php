<?php

/* admin/currency/info_behavior.html */
class __TwigTemplate_76e022d65c0f945b10344fffd63cea8315b26ffc50b490daf44ff495cee68387 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/info_behavior.html", 1)->display($context);
        echo " ";
        $this->loadTemplate("admin/crumbs.html", "admin/currency/info_behavior.html", 1)->display($context);
        // line 2
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 3
        $this->loadTemplate("admin/import.html", "admin/currency/info_behavior.html", 3)->display($context);
        // line 4
        echo "<div id=\"\" style=\"padding: 30px;\">
\t<ul class=\"layui-timeline\">
\t\t<li class=\"layui-timeline-item\">
\t\t\t<i class=\"layui-icon layui-timeline-axis\"></i>
\t\t\t<div class=\"layui-timeline-content layui-text\">
\t\t\t\t<div class=\"layui-timeline-title\">2018年，layui 5.0 发布。并发展成为中国最受欢迎的前端UI框架（期望）</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"layui-timeline-item\">
\t\t\t<i class=\"layui-icon layui-timeline-axis\"></i>
\t\t\t<div class=\"layui-timeline-content layui-text\">
\t\t\t\t<div class=\"layui-timeline-title\">2017年，layui 里程碑版本 2.0 发布</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"layui-timeline-item\">
\t\t\t<i class=\"layui-icon layui-timeline-axis\"></i>
\t\t\t<div class=\"layui-timeline-content layui-text\">
\t\t\t\t<div class=\"layui-timeline-title\">2016年，layui 首个版本发布</div>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"layui-timeline-item\">
\t\t\t<i class=\"layui-icon layui-timeline-axis\"></i>
\t\t\t<div class=\"layui-timeline-content layui-text\">
\t\t\t\t<div class=\"layui-timeline-title\">2015年，layui 孵化</div>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>

<!-- 其他服务管理 -->
<script>
\tykp.defineClass(['element', \"jquery\", 'laytpl'], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initPage();
\t\t},
\t\tinitPage: function() {
\t\t\t/*ykp.doAjax({
\t\t\t\turl: \"\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {},
\t\t\t\tsuccess: function(res) {
\t\t\t\t\tvar data = res.data;
\t\t\t\t}
\t\t\t})*/

\t\t\tvar data = [{
\t\t\t\ttitle: \"123123\",
\t\t\t\ttime: \"2017-12-05 09:19\"
\t\t\t}, {
\t\t\t\ttitle: \"123123\",
\t\t\t\ttime: \"2017-12-05 09:19\"
\t\t\t}, {
\t\t\t\ttitle: \"123123\",
\t\t\t\ttime: \"2017-12-05 09:19\"
\t\t\t}, {
\t\t\t\ttitle: \"123123\",
\t\t\t\ttime: \"2017-12-05 09:19\"
\t\t\t}];
\t\t\tvar content = \"\";
\t\t\tfor(var i in data) {
\t\t\t\tcontent +=  `<li class=\"layui-timeline-item\">
\t\t\t\t    <i class=\"layui-icon layui-timeline-axis\"></i>
\t\t\t\t    <div class=\"layui-timeline-content layui-text\">
\t\t\t\t      <h3 class=\"layui-timeline-title\">\${data[i].time}</h3>
\t\t\t\t      <p>
\t\t\t\t       \${data[i].title}
\t\t\t\t      </p>
\t\t\t\t    </div>
\t\t\t\t  </li>`;
\t\t\t}
\t\t\t\$('.layui-timeline').html(content);
\t\t}
\t});
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/currency/info_behavior.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %} {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <div id="" style="padding: 30px;">*/
/* 	<ul class="layui-timeline">*/
/* 		<li class="layui-timeline-item">*/
/* 			<i class="layui-icon layui-timeline-axis"></i>*/
/* 			<div class="layui-timeline-content layui-text">*/
/* 				<div class="layui-timeline-title">2018年，layui 5.0 发布。并发展成为中国最受欢迎的前端UI框架（期望）</div>*/
/* 			</div>*/
/* 		</li>*/
/* 		<li class="layui-timeline-item">*/
/* 			<i class="layui-icon layui-timeline-axis"></i>*/
/* 			<div class="layui-timeline-content layui-text">*/
/* 				<div class="layui-timeline-title">2017年，layui 里程碑版本 2.0 发布</div>*/
/* 			</div>*/
/* 		</li>*/
/* 		<li class="layui-timeline-item">*/
/* 			<i class="layui-icon layui-timeline-axis"></i>*/
/* 			<div class="layui-timeline-content layui-text">*/
/* 				<div class="layui-timeline-title">2016年，layui 首个版本发布</div>*/
/* 			</div>*/
/* 		</li>*/
/* 		<li class="layui-timeline-item">*/
/* 			<i class="layui-icon layui-timeline-axis"></i>*/
/* 			<div class="layui-timeline-content layui-text">*/
/* 				<div class="layui-timeline-title">2015年，layui 孵化</div>*/
/* 			</div>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* <!-- 其他服务管理 -->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initPage();*/
/* 		},*/
/* 		initPage: function() {*/
/* 			/*ykp.doAjax({*/
/* 				url: "",*/
/* 				method: "post",*/
/* 				data: {},*/
/* 				success: function(res) {*/
/* 					var data = res.data;*/
/* 				}*/
/* 			})*//* */
/* */
/* 			var data = [{*/
/* 				title: "123123",*/
/* 				time: "2017-12-05 09:19"*/
/* 			}, {*/
/* 				title: "123123",*/
/* 				time: "2017-12-05 09:19"*/
/* 			}, {*/
/* 				title: "123123",*/
/* 				time: "2017-12-05 09:19"*/
/* 			}, {*/
/* 				title: "123123",*/
/* 				time: "2017-12-05 09:19"*/
/* 			}];*/
/* 			var content = "";*/
/* 			for(var i in data) {*/
/* 				content +=  `<li class="layui-timeline-item">*/
/* 				    <i class="layui-icon layui-timeline-axis"></i>*/
/* 				    <div class="layui-timeline-content layui-text">*/
/* 				      <h3 class="layui-timeline-title">${data[i].time}</h3>*/
/* 				      <p>*/
/* 				       ${data[i].title}*/
/* 				      </p>*/
/* 				    </div>*/
/* 				  </li>`;*/
/* 			}*/
/* 			$('.layui-timeline').html(content);*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
