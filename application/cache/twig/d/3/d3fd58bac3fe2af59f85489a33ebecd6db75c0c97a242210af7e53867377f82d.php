<?php

/* admin/auser/customManager.html */
class __TwigTemplate_1c9c7edfe406f164a224fb76d7df8a2323a0068c57673ca50261cb25f18d94be extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/customManager.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/auser/customManager.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/auser/customManager.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<!--<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>-->
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
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
                        btnArr: [
                            {title: \"高级搜索\", type: \"hSearch\"},
//                          {title: \"添加\", type: \"add\", url: \"/admin/auser/addCustomManager\"},
                            {title: \"导出\",type: \"export\",}
                            ]
                    },
                    cols: [{checkbox: true, },
                    \t{field: \"um_user-uid\", width: 80, sort: true, title: \"id\", type: \"\", sear: \"um_user-uid\"},
\t\t\t\t\t\t{field: \"um_user-username\", width: 80,  title: \"用户名\", type: \"\", sear: \"um_user-username\"},
                        {field: \"um_company-company_name\", width: 80, title: \"公司名称\", type: \"select\", sear: \"um_company-company_name\",url:\"/admin/am/api_custom_mamge/grid\",colKey:'id',colName:'um_company-company_name'},
                        {field: \"um_company-logo\", width: 80, title: \"企业logo\", type: \"image\", sear: \"um_company-logo\",},
                        {field: \"um_company-website\", width: 150, title: \"公司网址\", type: \"\", sear: \"um_company-website\"},
                        {field: \"um_company-business_license\", width: 150, title: \"营业执照图片\", type: \"\", sear: \"\"},
                        {field: \"um_company-legal_person\", width: 200, title: \"公司法人名称\", type: \"\", sear: \"um_company-legal_person\"},
                        {field: \"um_user-type\", width: 200,  title: \"类型\", type: \"select\", sear: \"um_user-type\", enum: {0: \"个人\", 1: \"企业\"}},
                        {field: \"um_company-credit_code\", width: 150,  title: \"企业信用代码\", type: \"\", sear: \"um_company-credit_code\"},
                        {field: \"um_company-tel\", width: 150, title: \"联系座机\", sear: \"um_company-tel\"},
                        {field: \"um_company-mobile\", width: 200,  title: \"联系手机\", type: \"\", sear: \"um_company-mobile\"},
                        {field: \"um_company-alt_id\", width: 150, title: \"企业子帐号ID\", type: \"\", sear: \"um_company-alt_id\"},
                        {field: \"um_company-program_ids\", width: 200, title: \"企业项目ID\", type: \"\", sear: \"um_company-program_ids\"},
                        {field: \"um_company-contract_ids\", width: 200,  title: \"企业合同ID\", type: \"\", sear: \"um_company-contract_ids\"},
                        {field: \"um_company-create_at\", width: 150,  title: \"创建时间\", type: \"time\", sear: \"\"},
                        {field: \"um_company-sort\", width: 200,  title: \"排序\", type: \"\", sear: \"um_company-sort\"},
                        {field: \"um_user-is_company\", width: 200, title: \"是否认证企业\", type: \"select\", sear: \"um_user-is_company\", enum: {0: \"未认证\", 1: \"已认证\"}},
                        {field: \"right\", width: 120, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/am/api_custom_mamge/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"um_user.is_custom = 1\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"um_user-uid\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [
                        {type: \"edit\", url: '/admin/auser/editCustomManager?id='},
                            {type: \"detail\", url: '/admin/auser/infoShop/?id='}
                            
                        ]
                    },
                    topBtnActive: {
                        Event: [
                           {type: \"add\", url: '/admin/auser/addCustomManager'}
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
        return "admin/auser/customManager.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<!--<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>-->*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
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
/*                         btnArr: [*/
/*                             {title: "高级搜索", type: "hSearch"},*/
/* //                          {title: "添加", type: "add", url: "/admin/auser/addCustomManager"},*/
/*                             {title: "导出",type: "export",}*/
/*                             ]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                     	{field: "um_user-uid", width: 80, sort: true, title: "id", type: "", sear: "um_user-uid"},*/
/* 						{field: "um_user-username", width: 80,  title: "用户名", type: "", sear: "um_user-username"},*/
/*                         {field: "um_company-company_name", width: 80, title: "公司名称", type: "select", sear: "um_company-company_name",url:"/admin/am/api_custom_mamge/grid",colKey:'id',colName:'um_company-company_name'},*/
/*                         {field: "um_company-logo", width: 80, title: "企业logo", type: "image", sear: "um_company-logo",},*/
/*                         {field: "um_company-website", width: 150, title: "公司网址", type: "", sear: "um_company-website"},*/
/*                         {field: "um_company-business_license", width: 150, title: "营业执照图片", type: "", sear: ""},*/
/*                         {field: "um_company-legal_person", width: 200, title: "公司法人名称", type: "", sear: "um_company-legal_person"},*/
/*                         {field: "um_user-type", width: 200,  title: "类型", type: "select", sear: "um_user-type", enum: {0: "个人", 1: "企业"}},*/
/*                         {field: "um_company-credit_code", width: 150,  title: "企业信用代码", type: "", sear: "um_company-credit_code"},*/
/*                         {field: "um_company-tel", width: 150, title: "联系座机", sear: "um_company-tel"},*/
/*                         {field: "um_company-mobile", width: 200,  title: "联系手机", type: "", sear: "um_company-mobile"},*/
/*                         {field: "um_company-alt_id", width: 150, title: "企业子帐号ID", type: "", sear: "um_company-alt_id"},*/
/*                         {field: "um_company-program_ids", width: 200, title: "企业项目ID", type: "", sear: "um_company-program_ids"},*/
/*                         {field: "um_company-contract_ids", width: 200,  title: "企业合同ID", type: "", sear: "um_company-contract_ids"},*/
/*                         {field: "um_company-create_at", width: 150,  title: "创建时间", type: "time", sear: ""},*/
/*                         {field: "um_company-sort", width: 200,  title: "排序", type: "", sear: "um_company-sort"},*/
/*                         {field: "um_user-is_company", width: 200, title: "是否认证企业", type: "select", sear: "um_user-is_company", enum: {0: "未认证", 1: "已认证"}},*/
/*                         {field: "right", width: 120, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/am/api_custom_mamge/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: "um_user.is_custom = 1"*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "um_user-uid", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [*/
/*                         {type: "edit", url: '/admin/auser/editCustomManager?id='},*/
/*                             {type: "detail", url: '/admin/auser/infoShop/?id='}*/
/*                             */
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/*                            {type: "add", url: '/admin/auser/addCustomManager'}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*                 */
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
