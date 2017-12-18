<?php

/* admin/product/productPackage.html */
class __TwigTemplate_a84a9f05aa62d954de9a5fcf03133730c4e3c4ba9d9f99b6a5afd54ec64d2f3a extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/product/productPackage.html", 1)->display($context);
        // line 2
        echo "<style>
    body {
        margin: 10px;
    }

    .demo-carousel {
        height: 200px;
        line-height: 200px;
        text-align: center;
    }

    .layui-table-view .layui-table {
        width: 100%;
    }

    .layui-btn {
        font-size: 13px;
    }

    .modelete {
        padding: 20px;
    }

    .layui-table-tool {
        padding: 4px 10px 0 0 !important;
    }

    .layui-form-pane .layui-form-item[pane] {
        border: none !important;
    }

</style>
";
        // line 34
        $this->loadTemplate("admin/crumbs.html", "admin/product/productPackage.html", 34)->display($context);
        // line 35
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
<div id=\"add_edit\" style=\"display: none;background: #eee; padding: 20px;\" class=\"model\">
    <form class=\"layui-form\" action=\"\">
        <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                <label class=\"layui-form-label\">名称：</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"name\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入名称\" class=\"layui-input\">
                </div>
            </div>
        </div>
        </from>
</div>
";
        // line 48
        $this->loadTemplate("admin/import.html", "admin/product/productPackage.html", 48)->display($context);
        // line 49
        echo "<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\"], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
            layui.use(['laydate', 'form', 'layer', 'public', 'table'], function () {
                var table = layui.table;
                var public = layui.public;
                public.showTable({
                    topTool: {
                        el: \".demoTable\",
                        btnArr: [{
                                title: \"高级搜索\",
                                type: \"hSearch\",
                            },
                            {title: \"添加\",type: \"add\",url: \"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addProductPackage\"}
                        ]
                    },
                    cols: [{
                            checkbox: true,
                        },
                        {
                            field: \"product_type_id\",
                            width: 80,
                            sort: true,
                            title: \"ID\",
                            type: \"\",
                            sear: \"sm_service.id\"
                        },
                        {
                            field: \"name\",
                            width: 200,
                            title: \"名称\",
                            type: \"\",
                            sear: \"sm_service.name\"
                        },
                        {
                            field: \"create_at\",
                            width: 200,
                            title: \"创建时间\",
                            type: \"time\",
                            sear: \"sm_service.create_at\"
                        },
                        {
                            width: 180,
                            title: \"操作\",
                            toolbar: ykp.\$('#barDemo'),
                            align: \"center\"
                        }
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/api_product_type/grid\",
                        method: \"post\",
                        id: 'tabel_user'
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"product_type_id\",
                        conId: \"#add_edit\",
                        jumpUrl: true, //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{
                                type: \"edit\",
                                fun: add_edit,
                                url: '";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/editProductPackage?id='
                            },
                            {
                                type: \"detail\",
                                url: '";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/serviceInfo?id='
                            },
                            {
                                type: \"del\",
                                url: '";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product_type/delete'
                            }
                        ]
                    },
                    topBtnActive: {
                        Event: [
\t\t\t\t\t\t{
\t\t\t\t\t\t\ttype: \"add\",
\t\t\t\t\t\t\tfun: add_edit,
\t\t\t\t\t\t\turl: '";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/product/addProductPackage'
\t\t\t\t\t\t}
//\t\t\t\t\t\t\t{
//\t\t\t\t\t\t\t\ttype: \"pldelete\",
//\t\t\t\t\t\t\t\turl: '";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/delete'
//\t\t\t\t\t\t\t},{
//\t\t\t\t\t\t\t\ttype:\"improt\",
//\t\t\t\t\t\t\t\turl:\"/upload\"
//\t\t\t\t\t\t\t},{
//\t\t\t\t\t\t\t\ttype: \"export\",
//\t\t\t\t\t\t\t\turl: \"/upload\"
//\t\t\t\t\t\t\t}
                        ]
                    }
                });

                function add_edit(id, callback) {
                    var title = id ? \"编辑\" : \"添加\";
                    var index = public.layerOpen({
                        el: ykp.\$('#add_edit'),
                        area: 'auto',
                        title: title
                    }, function () { //成功执行的回调
                        var name = \$('#add_edit').find('input').val();
                        if (name == \"\") {
                            layer.msg('请输入名称');
                            return false;
                        }
                        var data = {
                            name: name
                        };
                        if (id) {
                            data.id = id;
                        }
                        ykp.doAjax({
                            url: \"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/type_edit_add\",
                            method: \"post\",
                            data: data,
                            success: function (res) {
                                if (typeof callback == \"function\") {
                                    callback(res);
                                    ykp.prompt(title + \"成功\")
                                }
                                layer.closeAll();
                                public.emptyVal(\"#add_edit\");
                            }
                        })
                    }, function () { //取消执行的回调
                        public.emptyVal(\"#add_edit\");
                        layer.closeAll();
                    })
                }
            });
        }
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/product/productPackage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 173,  187 => 142,  180 => 138,  168 => 129,  161 => 125,  154 => 121,  139 => 109,  99 => 72,  74 => 49,  72 => 48,  57 => 35,  55 => 34,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/*     body {*/
/*         margin: 10px;*/
/*     }*/
/* */
/*     .demo-carousel {*/
/*         height: 200px;*/
/*         line-height: 200px;*/
/*         text-align: center;*/
/*     }*/
/* */
/*     .layui-table-view .layui-table {*/
/*         width: 100%;*/
/*     }*/
/* */
/*     .layui-btn {*/
/*         font-size: 13px;*/
/*     }*/
/* */
/*     .modelete {*/
/*         padding: 20px;*/
/*     }*/
/* */
/*     .layui-table-tool {*/
/*         padding: 4px 10px 0 0 !important;*/
/*     }*/
/* */
/*     .layui-form-pane .layui-form-item[pane] {*/
/*         border: none !important;*/
/*     }*/
/* */
/* </style>*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* <div id="add_edit" style="display: none;background: #eee; padding: 20px;" class="model">*/
/*     <form class="layui-form" action="">*/
/*         <div class="layui-form-item">*/
/*             <div class="layui-inline">*/
/*                 <label class="layui-form-label">名称：</label>*/
/*                 <div class="layui-input-block">*/
/*                     <input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="请输入名称" class="layui-input">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </from>*/
/* </div>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/*     <a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery"], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*             layui.use(['laydate', 'form', 'layer', 'public', 'table'], function () {*/
/*                 var table = layui.table;*/
/*                 var public = layui.public;*/
/*                 public.showTable({*/
/*                     topTool: {*/
/*                         el: ".demoTable",*/
/*                         btnArr: [{*/
/*                                 title: "高级搜索",*/
/*                                 type: "hSearch",*/
/*                             },*/
/*                             {title: "添加",type: "add",url: "{{base_url}}admin/product/addProductPackage"}*/
/*                         ]*/
/*                     },*/
/*                     cols: [{*/
/*                             checkbox: true,*/
/*                         },*/
/*                         {*/
/*                             field: "product_type_id",*/
/*                             width: 80,*/
/*                             sort: true,*/
/*                             title: "ID",*/
/*                             type: "",*/
/*                             sear: "sm_service.id"*/
/*                         },*/
/*                         {*/
/*                             field: "name",*/
/*                             width: 200,*/
/*                             title: "名称",*/
/*                             type: "",*/
/*                             sear: "sm_service.name"*/
/*                         },*/
/*                         {*/
/*                             field: "create_at",*/
/*                             width: 200,*/
/*                             title: "创建时间",*/
/*                             type: "time",*/
/*                             sear: "sm_service.create_at"*/
/*                         },*/
/*                         {*/
/*                             width: 180,*/
/*                             title: "操作",*/
/*                             toolbar: ykp.$('#barDemo'),*/
/*                             align: "center"*/
/*                         }*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "{{base_url}}/admin/api_product_type/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user'*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "product_type_id",*/
/*                         conId: "#add_edit",*/
/*                         jumpUrl: true, //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{*/
/*                                 type: "edit",*/
/*                                 fun: add_edit,*/
/*                                 url: '{{base_url}}admin/product/editProductPackage?id='*/
/*                             },*/
/*                             {*/
/*                                 type: "detail",*/
/*                                 url: '{{base_url}}admin/product/serviceInfo?id='*/
/*                             },*/
/*                             {*/
/*                                 type: "del",*/
/*                                 url: '{{base_url}}admin/api_product_type/delete'*/
/*                             }*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [*/
/* 						{*/
/* 							type: "add",*/
/* 							fun: add_edit,*/
/* 							url: '{{base_url}}admin/product/addProductPackage'*/
/* 						}*/
/* //							{*/
/* //								type: "pldelete",*/
/* //								url: '{{base_url}}admin/api_product/delete'*/
/* //							},{*/
/* //								type:"improt",*/
/* //								url:"/upload"*/
/* //							},{*/
/* //								type: "export",*/
/* //								url: "/upload"*/
/* //							}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/* */
/*                 function add_edit(id, callback) {*/
/*                     var title = id ? "编辑" : "添加";*/
/*                     var index = public.layerOpen({*/
/*                         el: ykp.$('#add_edit'),*/
/*                         area: 'auto',*/
/*                         title: title*/
/*                     }, function () { //成功执行的回调*/
/*                         var name = $('#add_edit').find('input').val();*/
/*                         if (name == "") {*/
/*                             layer.msg('请输入名称');*/
/*                             return false;*/
/*                         }*/
/*                         var data = {*/
/*                             name: name*/
/*                         };*/
/*                         if (id) {*/
/*                             data.id = id;*/
/*                         }*/
/*                         ykp.doAjax({*/
/*                             url: "{{base_url}}admin/api_product/type_edit_add",*/
/*                             method: "post",*/
/*                             data: data,*/
/*                             success: function (res) {*/
/*                                 if (typeof callback == "function") {*/
/*                                     callback(res);*/
/*                                     ykp.prompt(title + "成功")*/
/*                                 }*/
/*                                 layer.closeAll();*/
/*                                 public.emptyVal("#add_edit");*/
/*                             }*/
/*                         })*/
/*                     }, function () { //取消执行的回调*/
/*                         public.emptyVal("#add_edit");*/
/*                         layer.closeAll();*/
/*                     })*/
/*                 }*/
/*             });*/
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
