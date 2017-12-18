<?php

/* admin/footer.html */
class __TwigTemplate_8cf139b417b93053ad63f036ef60e09f322810950395ebccacf880af5f1d8df7 extends Twig_Template
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
        echo "</div>
</div>
<div class=\"layui-footer\">
\t<!-- 底部固定区域 -->
\t© 海脉空间（深圳）有限公司 - 2016-2019
</div>

<script src=\"/resource/admin/layui/layui.js\"></script>
<script src=\"/resource/admin/js/jslib/ykp.js\"></script>
<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>
<script>
\tykp.defineClass(['element'], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\tit.getDefaultNavBar();
\t\t},
\t\t//页面刷新时  初始化顶部按钮
\t\tgetDefaultNavBar:function() {
\t\t\tvar navBar = JSON.parse(ykp.getSessionStorage('navBar'));
\t\t\tvar flag = true;
\t\t\tif(navBar) {
\t\t\t\t\$('.menuTab').each(function() {
\t\t\t\t\tif(\$(this).data('id') == navBar.url) {
\t\t\t\t\t\tif(!\$(this).hasClass('active')) {
\t\t\t\t\t\t\t\$(this).addClass('active').siblings('.menuTab').removeClass('active');
\t\t\t\t\t\t\t\$.learuntab.scrollToTab(this);
\t\t\t\t\t\t\t\$('.mainContent .LRADMS_iframe').each(function() {
\t\t\t\t\t\t\t\tif(\$(this).data('id') == navBar.url) {
\t\t\t\t\t\t\t\t\t\$(this).show().siblings('.LRADMS_iframe').hide();
\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\tflag = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(flag) {
\t\t\t\t\tvar str = '<a href=\"javascript:;\" class=\"active menuTab\" data-num=\"'+ navBar.id +'\" data-id=\"' + navBar.url + '\">' + navBar.title + ' <i class=\"fa fa-remove\"></i></a>';
\t                \$('.menuTab').removeClass('active');
\t                var str1 = '<iframe class=\"LRADMS_iframe\" id=\"iframe' + navBar.id + '\" name=\"iframe' + navBar.id + '\"  width=\"100%\" height=\"100%\" src=\"' + navBar.url + '\" frameborder=\"0\" data-id=\"' + navBar.url + '\" seamless></iframe>';
\t                \$('.mainContent').find('iframe.LRADMS_iframe').hide();
\t                \$('.mainContent').append(str1);
\t                //\$.loading(true);
\t                \$('.mainContent iframe:visible').load(function () {
\t                    //\$.loading(false);
\t                });
\t                \$('.menuTabs .page-tabs-content').append(str);
\t                \$.learuntab.scrollToTab(\$('.menuTab.active'));
\t\t\t\t}
\t\t\t}
\t\t},
\t\t
\t\t
\t});
</script>
<script type=\"text/javascript\">
\t\$(function() {
\t\tfunction hello(){
\t\t\talert(1);
\t\t}
\t})
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* </div>*/
/* </div>*/
/* <div class="layui-footer">*/
/* 	<!-- 底部固定区域 -->*/
/* 	© 海脉空间（深圳）有限公司 - 2016-2019*/
/* </div>*/
/* */
/* <script src="/resource/admin/layui/layui.js"></script>*/
/* <script src="/resource/admin/js/jslib/ykp.js"></script>*/
/* <script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>*/
/* <script>*/
/* 	ykp.defineClass(['element'], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			it.getDefaultNavBar();*/
/* 		},*/
/* 		//页面刷新时  初始化顶部按钮*/
/* 		getDefaultNavBar:function() {*/
/* 			var navBar = JSON.parse(ykp.getSessionStorage('navBar'));*/
/* 			var flag = true;*/
/* 			if(navBar) {*/
/* 				$('.menuTab').each(function() {*/
/* 					if($(this).data('id') == navBar.url) {*/
/* 						if(!$(this).hasClass('active')) {*/
/* 							$(this).addClass('active').siblings('.menuTab').removeClass('active');*/
/* 							$.learuntab.scrollToTab(this);*/
/* 							$('.mainContent .LRADMS_iframe').each(function() {*/
/* 								if($(this).data('id') == navBar.url) {*/
/* 									$(this).show().siblings('.LRADMS_iframe').hide();*/
/* 									return false;*/
/* 								}*/
/* 							});*/
/* 						}*/
/* 						flag = false;*/
/* 						return false;*/
/* 					}*/
/* 				});*/
/* 				if(flag) {*/
/* 					var str = '<a href="javascript:;" class="active menuTab" data-num="'+ navBar.id +'" data-id="' + navBar.url + '">' + navBar.title + ' <i class="fa fa-remove"></i></a>';*/
/* 	                $('.menuTab').removeClass('active');*/
/* 	                var str1 = '<iframe class="LRADMS_iframe" id="iframe' + navBar.id + '" name="iframe' + navBar.id + '"  width="100%" height="100%" src="' + navBar.url + '" frameborder="0" data-id="' + navBar.url + '" seamless></iframe>';*/
/* 	                $('.mainContent').find('iframe.LRADMS_iframe').hide();*/
/* 	                $('.mainContent').append(str1);*/
/* 	                //$.loading(true);*/
/* 	                $('.mainContent iframe:visible').load(function () {*/
/* 	                    //$.loading(false);*/
/* 	                });*/
/* 	                $('.menuTabs .page-tabs-content').append(str);*/
/* 	                $.learuntab.scrollToTab($('.menuTab.active'));*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		*/
/* 		*/
/* 	});*/
/* </script>*/
/* <script type="text/javascript">*/
/* 	$(function() {*/
/* 		function hello(){*/
/* 			alert(1);*/
/* 		}*/
/* 	})*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
