<?php

/* admin/auser/dynamic.html */
class __TwigTemplate_795cb7c44158e28102adeeb1141aa03ec5458c2e5839adfe8d990758be4c2690 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/dynamic.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/dynamic.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/dynamic.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
            hm.load(function (option) {
                var table = option.table;
                var public = option.public;
                public.showTable({
                    topTool: {
                        btnArr: [{title: \"添加\",type: \"add\",url: \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/add_dynamic\"},
                        \t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\",url: \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del\"},
                            \t{title: \"高级搜索\", type: \"hSearch\"},
                            \t{title: \"导入\", type: \"improt\"},
                           \t\t{title: \"导出\", type: \"export\"}
                           ]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"\", type: \"\", sear: \"id\"},
                        {field: \"name\", width: 80, title: \"姓名\", type: \"\", sear: \"name\"},
                        {field: \"avatar\", width: 80, title: \"头像\", type: \"image\", sear: \"avatar\"},
                        {field: \"job_title\", width: 150, title: \"职位称呼\", type: \"\", sear: \"job_title\"},
                        {field: \"company_name\", width: 80, title: \"公司名称\", type: \"\", sear: \"company_name\"},
                        {field: \"mobile\", width: 150, title: \"手机号\", type: \"\", sear: \"mobile\"},
                        {field: \"phone\", width: 150, title: \"联系电话\", sear: \"phone\"},
                        {field: \"email\", width: 200,  title: \"电子邮箱\", type: \"\", sear: \"email\"},
                        {field: \"qq\", width: 150, title: \"QQ号码\", type: \"\", sear: \"qq\"},
                        {field: \"weixin\", width: 200, title: \"微信号\", type: \"\", sear: \"weixin\"},
                        {field: \"addr\", width: 200,  title: \"地址\", type: \"\", sear: \"addr\"},
                        {field: \"create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"right\", width: 150, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/am/Api_contacts_dynamics/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"del\", url: '/admin/am/Api_contacts_dynamics/delete'},
                        \t   {type: \"edit\",url: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/edit_dynamic?id='},
                               {type: \"detail\", url: '/admin/auser/info_dynamic/?id='}
                        ]
                    },
                    topBtnActive: {
                        Event: [
\t\t\t\t\t\t\t\t{type: \"add\",url: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/add_dynamic'},
\t\t\t\t\t\t\t\t{type: \"plDel\",url: '/admin/am/Api_contacts_dynamics/delete'},
                                {type: \"improt\", url: \"/upload\"},
                                {type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>



";
    }

    public function getTemplateName()
    {
        return "admin/auser/dynamic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 65,  90 => 59,  52 => 24,  48 => 23,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	 <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*             hm.load(function (option) {*/
/*                 var table = option.table;*/
/*                 var public = option.public;*/
/*                 public.showTable({*/
/*                     topTool: {*/
/*                         btnArr: [{title: "添加",type: "add",url: "{{base_url}}admin/auser/add_dynamic"},*/
/*                         		{title: "批量删除",type: "plDel",class: "layui-btn-danger",url: "{{base_url}}admin/api_product/del"},*/
/*                             	{title: "高级搜索", type: "hSearch"},*/
/*                             	{title: "导入", type: "improt"},*/
/*                            		{title: "导出", type: "export"}*/
/*                            ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "", type: "", sear: "id"},*/
/*                         {field: "name", width: 80, title: "姓名", type: "", sear: "name"},*/
/*                         {field: "avatar", width: 80, title: "头像", type: "image", sear: "avatar"},*/
/*                         {field: "job_title", width: 150, title: "职位称呼", type: "", sear: "job_title"},*/
/*                         {field: "company_name", width: 80, title: "公司名称", type: "", sear: "company_name"},*/
/*                         {field: "mobile", width: 150, title: "手机号", type: "", sear: "mobile"},*/
/*                         {field: "phone", width: 150, title: "联系电话", sear: "phone"},*/
/*                         {field: "email", width: 200,  title: "电子邮箱", type: "", sear: "email"},*/
/*                         {field: "qq", width: 150, title: "QQ号码", type: "", sear: "qq"},*/
/*                         {field: "weixin", width: 200, title: "微信号", type: "", sear: "weixin"},*/
/*                         {field: "addr", width: 200,  title: "地址", type: "", sear: "addr"},*/
/*                         {field: "create_at", width: 150,  title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "right", width: 150, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/am/Api_contacts_dynamics/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "del", url: '/admin/am/Api_contacts_dynamics/delete'},*/
/*                         	   {type: "edit",url: '{{base_url}}admin/auser/edit_dynamic?id='},*/
/*                                {type: "detail", url: '/admin/auser/info_dynamic/?id='}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/* 								{type: "add",url: '{{base_url}}admin/auser/add_dynamic'},*/
/* 								{type: "plDel",url: '/admin/am/Api_contacts_dynamics/delete'},*/
/*                                 {type: "improt", url: "/upload"},*/
/*                                 {type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
