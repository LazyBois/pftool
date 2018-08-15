<?php
/**
 * Created by PhpStorm.
 * User: wt
 * Date: 2018/8/13
 * Time: 22:26
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <base href="<?php  echo base_url();?>"/>
    <link href="views/css/bootstrap.css" rel="stylesheet">
    <link href="views/css/nav.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="views/js/bootstrap.js"></script>
    <script src="views/js/nav.js"></script>

	<title>index</title>
</head>
<body>
<div>
    <div class="navbar navbar-duomi navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" id="logo">PF_TOOL
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                    <li class="active">
                        <a href="javascript:;">
                            <i class="glyphicon glyphicon-th-large"></i>
                            首页
                        </a>
                    </li>
                    <li>
                        <a href="#diyAPI" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-fire"></i>
                            自定义接口
                            <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul id="diyAPI" class="nav nav-list collapse secondmenu" style="height: 0px;">
                            <li><a href="javascript:;" onclick="showFunction('design')"><i class="glyphicon glyphicon-user"></i>自定义接口1</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-th-list"></i>自定义接口2</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-asterisk"></i>自定义接口3</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-edit"></i>自定义接口4</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-eye-open"></i>自定义接口5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                            <i class="glyphicon glyphicon-cog"></i>
                            系统管理
                            <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;text-align:left;">
                            <li><a href="javascript:;" onclick="showDiv('design')"><i class="glyphicon glyphicon-user"></i>design</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-th-list"></i>export API</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-asterisk"></i>url</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-edit"></i>test</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-eye-open"></i>option log</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-eye-open"></i>setting</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-eye-open"></i>directory</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-eye-open"></i>readme</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="glyphicon glyphicon-globe"></i>
                            Development
                            <span class="label label-warning pull-right">5</span>
                        </a>
                    </li>
                </ul>
            </div>
<!--            <div class="col-md-10">-->
<!--                主窗口-->
<!--                <h1  onclick="addNode()">添加一个</h1>-->
<!--            </div>-->
            <div name="main" id="design" class="main" style="float:left;">
                <div>
                    <h1>新增函数接口</h1>
                    <hr/>
                    <input type="text" placeholder="2001" aria-describedby="basic-addon1">
                </div>
                <div>
                    <h1>已有接口列表</h1>
                    <hr/>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>接口名</th>
                            <th>形参列表</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>getUser(获取角色)</th>
                            <th>userId,userName</th>
                            <th>
                                <button type="button" class="btn btn-primary">上线</button>
                                <button type="button" class="btn btn-warning">下线</button>
                                <button type="button" class="btn btn-danger">删除</button>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div name="main" id="diy1" class="main" style="float:left;margin-top: 50px">
                <div>
                    <h1>输入</h1>
                    <hr/>
                    <h5>文件导入</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        open file
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="file-loading">
                                        <input id="input-b9" name="input-b9[]" multiple type="file"'>
                                    </div>
                                    <div id="kartik-file-errors"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" title="Your custom upload logic">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5>获取用户信息</h5>
                    <span>角色id</span>
                    <input type="text" placeholder="2001" aria-describedby="basic-addon1">
                    <span >角色名字</span>
                    <input type="text" placeholder="帅哥" aria-describedby="basic-addon1">
                </div>
                <div>
                    <h1>输出</h1>
                    <hr/>
                    <span>角色id</span>
                    <input type="text" placeholder="2001" aria-describedby="basic-addon1">
                    <span >角色名字</span>
                    <input type="text" placeholder="帅哥" aria-describedby="basic-addon1">
                </div>
            </div>
            <!-- -->
        </div>
    </div>
</div>

<script>
    $(document).on('ready', function() {
        $("#input-b9").fileinput({
            showPreview: false,
            showUpload: false,
            elErrorContainer: '#kartik-file-errors',
            allowedFileExtensions: ["jpg", "png", "gif"]
            //uploadUrl: '/site/file-upload-single'
        });
    });
</script>
</body>
</html>