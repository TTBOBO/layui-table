<?php

/* admin/currency/pm_guestbook.html */
class __TwigTemplate_c8997bcfe4b0f57982312c43c6867f45132b28f314aa42c2068f272c41a843ee extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/currency/pm_guestbook.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/currency/pm_guestbook.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/currency/pm_guestbook.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/add_guestbook\"},
                        \t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\",url: \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del\"},
                            {title: \"高级搜索\", type: \"hSearch\"},
                          \t{title: \"导出\", type: \"export\"}
\t\t\t\t\t\t]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"\", type: \"\", sear: \"id\"},
                        {field: \"title\", width: 80, title: \"主题\", type: \"\", sear: \"title\"},
                        {field: \"contact_name\", width: 80, title: \"留言者名字\", type: \"\", sear: \"contact_name\",},
                        {field: \"email\", width: 150, title: \"留言人电子邮箱\", type: \"\", sear: \"email\"},
                        {field: \"mobile\", width: 80, title: \"留言人电话\", type: \"\", sear: \"mobile\"},
                        {field: \"qq\", width: 150, title: \"留言人qq\", type: \"\", sear: \"qq\"},
                        //{field: \"type\", width: 150, title: \"类型\", type: \"select\", sear: \"om_cz_order-type\", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},
                        {field: \"addr\", width: 150, title: \"留言人地址\", sear: \"addr\"},
                        {field: \"ip\", width: 200,  title: \"ip地址\", type: \"\", sear: \"ip\"},
                        {field: \"ischeck\", width: 150, title: \"是否审核\", type: \"\", sear: \"ischeck\"},
                        {field: \"is_show\", width: 200,  title: \"是否显示\", type: \"\", sear: \"is_show\"},
                        {field: \"is_read\", width: 200, title: \"是否读过\", type: \"\", sear: \"is_read\"},
                        {field: \"reply_id\", width: 150, title: \"回复人的ID\", type: \"\", sear: \"reply_id\"},
                        {field: \"remark\", width: 150, title: \"备注\", type: \"\", sear: \"remark\"},
                        {field: \"create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"update_at\", width: 150,  title: \"更新时间\", type: \"time\", sear: \"update_at\"},
                        {field: \"right\", width: 120, title: \"操作\", toolbar: \$('#barDemo'), align: \"left\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/pm/Api_guestbook/grid \",
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
                        Event: [{type: \"edit\",url: '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/edit_guestbook?id='},
                            {type: \"detail\", url: '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/info_guestbook?id='},
                            {type: \"del\", url: '/admin/pm/Api_guestbook/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/currency/add_guestbook'},
                        \t\t{type: \"plDel\",url: '/admin/pm/Api_guestbook/delete'},
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
        return "admin/currency/pm_guestbook.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 66,  95 => 61,  91 => 60,  51 => 23,  47 => 22,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                         btnArr: [{title: "添加",type: "add",url: "{{base_url}}admin/currency/add_guestbook"},*/
/*                         		{title: "批量删除",type: "plDel",class: "layui-btn-danger",url: "{{base_url}}admin/api_product/del"},*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/*                           	{title: "导出", type: "export"}*/
/* 						]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "", type: "", sear: "id"},*/
/*                         {field: "title", width: 80, title: "主题", type: "", sear: "title"},*/
/*                         {field: "contact_name", width: 80, title: "留言者名字", type: "", sear: "contact_name",},*/
/*                         {field: "email", width: 150, title: "留言人电子邮箱", type: "", sear: "email"},*/
/*                         {field: "mobile", width: 80, title: "留言人电话", type: "", sear: "mobile"},*/
/*                         {field: "qq", width: 150, title: "留言人qq", type: "", sear: "qq"},*/
/*                         //{field: "type", width: 150, title: "类型", type: "select", sear: "om_cz_order-type", enumOption: {url: '/admin/api_product/f7', resKey: 'data', parentCol: '', parentKey: '', id: 'id', name: 'name', defaultValue: ''}},*/
/*                         {field: "addr", width: 150, title: "留言人地址", sear: "addr"},*/
/*                         {field: "ip", width: 200,  title: "ip地址", type: "", sear: "ip"},*/
/*                         {field: "ischeck", width: 150, title: "是否审核", type: "", sear: "ischeck"},*/
/*                         {field: "is_show", width: 200,  title: "是否显示", type: "", sear: "is_show"},*/
/*                         {field: "is_read", width: 200, title: "是否读过", type: "", sear: "is_read"},*/
/*                         {field: "reply_id", width: 150, title: "回复人的ID", type: "", sear: "reply_id"},*/
/*                         {field: "remark", width: 150, title: "备注", type: "", sear: "remark"},*/
/*                         {field: "create_at", width: 150,  title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "update_at", width: 150,  title: "更新时间", type: "time", sear: "update_at"},*/
/*                         {field: "right", width: 120, title: "操作", toolbar: $('#barDemo'), align: "left", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/pm/Api_guestbook/grid ",*/
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
/*                         Event: [{type: "edit",url: '{{base_url}}admin/currency/edit_guestbook?id='},*/
/*                             {type: "detail", url: '{{base_url}}admin/currency/info_guestbook?id='},*/
/*                             {type: "del", url: '/admin/pm/Api_guestbook/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/currency/add_guestbook'},*/
/*                         		{type: "plDel",url: '/admin/pm/Api_guestbook/delete'},*/
/*                             {type: "improt", url: "/upload"},*/
/*                             {type: "export", url: "/upload"}*/
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
