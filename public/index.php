<!DOCTYPE html>
<html>
<head>
    <title>CNDD-一个直播中转平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">CNDD.LIVE</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">首页</a></li>
                <li><a href="player.php">中转测试</a></li>
                <li><a href="NononoNonomiya.php">野々宮ののの</a></li>
                <li><a href="Kano.php">鹿乃</a></li>
                <li><a href="HitonaKohigashi.php">小東ひとな</a></li>
                <li><a href="HareruHanamaru.php">花丸はれる</a></li>
        </div>
    </div>
    </div>
</nav>
<div class="container">
    <!--基于php的端口扫描-->
    <?php
    if (!@fsockopen('www.cndd.live',1935,$errno,$errstr,0.1)) {
        echo'<div class="alert alert-danger">错误！无法连接到推流服务器，可能是后端服务器在维护</div>';
    }else{
        echo'<div class="alert alert-success">本站推流服务器运行正常！</div>';
    }

    ?>
    <div class="alert alert-success">热烈庆祝中华人民共和国成立70周年！</div>
    <div class="alert alert-info">注意！本站还在初期测试阶段</div>
    <blockquote>
        <p>目前版本：V1.0.1</p><p>目前维护人员：NekokeCore（核心）</p>
        <p>项目进度：
        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar"
                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                 style="width: 10%;">
                <span class="sr-only">10% 项目完成</span>
            </div>
        </div>
        </p>
        <small>由<cite title="Source Title">NekokeCore</cite>书</small>
    </blockquote>
    <blockquote>
        <p>更新日志2019.10.5：</p><p>1.代码规范化 </p> <p>2.新加登录注册系统，为你喜爱的虚拟主播转播！ </p> <p>3.新加自动转播，解放电脑 </p> <p>4.不忘初心，保留手动推流 </p>
        <small>由<cite title="Source Title">NekokeCore</cite>书</small>
    </blockquote>
    <blockquote>
        <p>更新日志2019.10.2：</p><p>1.主页样式更新 </p> <p>2.新加直播码在线生成器 </p>
        <small>由<cite title="Source Title">NekokeCore</cite>书</small>
    </blockquote>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>