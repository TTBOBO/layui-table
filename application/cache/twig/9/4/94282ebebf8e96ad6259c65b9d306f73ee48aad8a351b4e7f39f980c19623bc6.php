<?php

/* admin/auser/addRole.html */
class __TwigTemplate_ccf24e1c6a713b9aa8504e8a1973afa9532bd6a49af20f0c91e798d864b09842 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/auser/addRole.html", 1)->display($context);
        // line 2
        echo "<style>

</style>
";
        // line 5
        $this->loadTemplate("admin/crumbs1.html", "admin/auser/addRole.html", 5)->display($context);
        // line 6
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 7
        $this->loadTemplate("admin/import.html", "admin/auser/addRole.html", 7)->display($context);
        // line 8
        echo "<link rel=\"stylesheet\" href=\"/resource/admin/ztree/css/bootstrapStyle/bootstrapStyle.css\" type=\"text/css\">

<script type=\"text/javascript\" src=\"/resource/admin/ztree/js/jquery.ztree.core.js\"></script>
<script type=\"text/javascript\" src=\"/resource/admin/ztree/js/jquery.ztree.excheck.js\"></script>
<script type=\"text/javascript\" src=\"/resource/admin/ztree/js/jquery.ztree.exedit.js\"></script>
<form style=\"padding-bottom: 100px;\">
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">名称：</label>
        <div class=\"layui-input-inline\">
            <input type=\"text\" name=\"title\" lay-verify=\"\" id=\"name\" autocomplete=\"off\" placeholder=\"请输入名称\"
                   class=\"layui-input\">
        </div>
    </div>
    <ul id=\"treeDemo\" class=\"ztree\" style=\"padding-left: 100px;\"></ul>
    <button class=\"layui-btn btn\" type=\"button\" style=\"margin-left: 100px;\">保存</button>
</form>


<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initrole();
        },
        //初始化列表
        initrole: function () {
            var it = this;
            hm.load(function (option) {
                var form = option.form;
                var public = option.public;
                var setting = {
                    treeId: 'tree',
                    view: {
                        selectedMulti: false,
                        showIcon: true
                    },
                    check: {
                        enable: true
                    },
                    data: {
                        simpleData: {
                            enable: true,
                            idKey: 'id',
                            pIdKey: 'parent_id',
                            rootPId: 0
                        },
                        key: {
                            name: 'title'
                        },
                    },
                    edit: {
                        enable: false
                    },
                };
                var str = hm.htmlDecodeByRegExp(\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["nodes"]) ? $context["nodes"] : null), "html", null, true);
        echo "\");
                var zNodes = JSON.parse(str);

                \$(document).ready(function () {
                    \$.fn.zTree.init(\$(\"#treeDemo\"), setting, zNodes);
                });

                \$('.btn').click(function () {
                    var name = \$('#name').val();
                    if (!name) {
                        layer.msg('请输入名称');
                        return false;
                    }
                    var treeObj = \$.fn.zTree.getZTreeObj(\"treeDemo\");
                    var checked = treeObj.getCheckedNodes(true);
                    var nodes = hm.getNodesId(checked);
                    if (!nodes) {
                        //提示请选择节点
                        layer.msg('请选中权限');
                        return;
                    }
                    var data = {
                        name: name,
                        permission: nodes
                    };
                    var parmas = ykp.getSessionStorage('iframeId');
                    //调用新增接口
                    ykp.doAjax({
                        url: \"/admin/api_role/add_or_edit\",
                        method: \"post\",
                        data: data,
                        success: function (res) {
                        \tlayer.msg('添加成功');
                            self.parent.document.getElementById(parmas).src = \"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/role\";
                        }
                    })
                });
            })
        },
    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/auser/addRole.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 96,  90 => 63,  33 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* */
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <link rel="stylesheet" href="/resource/admin/ztree/css/bootstrapStyle/bootstrapStyle.css" type="text/css">*/
/* */
/* <script type="text/javascript" src="/resource/admin/ztree/js/jquery.ztree.core.js"></script>*/
/* <script type="text/javascript" src="/resource/admin/ztree/js/jquery.ztree.excheck.js"></script>*/
/* <script type="text/javascript" src="/resource/admin/ztree/js/jquery.ztree.exedit.js"></script>*/
/* <form style="padding-bottom: 100px;">*/
/*     <div class="layui-form-item">*/
/*         <label class="layui-form-label">名称：</label>*/
/*         <div class="layui-input-inline">*/
/*             <input type="text" name="title" lay-verify="" id="name" autocomplete="off" placeholder="请输入名称"*/
/*                    class="layui-input">*/
/*         </div>*/
/*     </div>*/
/*     <ul id="treeDemo" class="ztree" style="padding-left: 100px;"></ul>*/
/*     <button class="layui-btn btn" type="button" style="margin-left: 100px;">保存</button>*/
/* </form>*/
/* */
/* */
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initrole();*/
/*         },*/
/*         //初始化列表*/
/*         initrole: function () {*/
/*             var it = this;*/
/*             hm.load(function (option) {*/
/*                 var form = option.form;*/
/*                 var public = option.public;*/
/*                 var setting = {*/
/*                     treeId: 'tree',*/
/*                     view: {*/
/*                         selectedMulti: false,*/
/*                         showIcon: true*/
/*                     },*/
/*                     check: {*/
/*                         enable: true*/
/*                     },*/
/*                     data: {*/
/*                         simpleData: {*/
/*                             enable: true,*/
/*                             idKey: 'id',*/
/*                             pIdKey: 'parent_id',*/
/*                             rootPId: 0*/
/*                         },*/
/*                         key: {*/
/*                             name: 'title'*/
/*                         },*/
/*                     },*/
/*                     edit: {*/
/*                         enable: false*/
/*                     },*/
/*                 };*/
/*                 var str = hm.htmlDecodeByRegExp("{{nodes}}");*/
/*                 var zNodes = JSON.parse(str);*/
/* */
/*                 $(document).ready(function () {*/
/*                     $.fn.zTree.init($("#treeDemo"), setting, zNodes);*/
/*                 });*/
/* */
/*                 $('.btn').click(function () {*/
/*                     var name = $('#name').val();*/
/*                     if (!name) {*/
/*                         layer.msg('请输入名称');*/
/*                         return false;*/
/*                     }*/
/*                     var treeObj = $.fn.zTree.getZTreeObj("treeDemo");*/
/*                     var checked = treeObj.getCheckedNodes(true);*/
/*                     var nodes = hm.getNodesId(checked);*/
/*                     if (!nodes) {*/
/*                         //提示请选择节点*/
/*                         layer.msg('请选中权限');*/
/*                         return;*/
/*                     }*/
/*                     var data = {*/
/*                         name: name,*/
/*                         permission: nodes*/
/*                     };*/
/*                     var parmas = ykp.getSessionStorage('iframeId');*/
/*                     //调用新增接口*/
/*                     ykp.doAjax({*/
/*                         url: "/admin/api_role/add_or_edit",*/
/*                         method: "post",*/
/*                         data: data,*/
/*                         success: function (res) {*/
/*                         	layer.msg('添加成功');*/
/*                             self.parent.document.getElementById(parmas).src = "{{base_url}}/admin/auser/role";*/
/*                         }*/
/*                     })*/
/*                 });*/
/*             })*/
/*         },*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
