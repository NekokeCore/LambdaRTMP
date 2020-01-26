<!DOCTYPE html>
<html>
<head>
    <title>小東ひとな</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .col-center {
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
                <li><a href="index.php">首页</a></li>
                <li><a href="player.php">中转测试</a></li>
                <li><a href="NononoNonomiya.php">野々宮ののの</a></li>
                <li><a href="Kano.php">鹿乃</a></li>
                <li class="active"><a href="HitonaKohigashi.php">小東ひとな</a></li>
                <li><a href="HareruHanamaru.php">花丸はれる</a></li>
        </div>
    </div>
    </div>
</nav>
<div class="container">
    <div class="alert alert-success">热烈庆祝中华人民共和国成立70周年！</div>
    <div class="alert alert-info">注意！本站还在初期测试阶段</div>
    <div class="col-center">
        <script src="https://cdn.bootcss.com/flv.js/1.4.0/flv.min.js"></script>
        <video id="videoElement" width="100%" controls></video>
        <script>
            if (flvjs.isSupported()) {
                var videoElement = document.getElementById('videoElement');
                var flvPlayer = flvjs.createPlayer({
                    type: 'flv',
                    url: 'http://www.cndd.live:8000/live/HK.flv'
                });
                flvPlayer.attachMediaElement(videoElement);
                flvPlayer.load();
                flvPlayer.play();
            }
        </script>
    </div>
    <div class="alert alert-info">注意！如有延迟纯属正常，为了防止放送事故我们一般会设置一些延迟，请大家谅解！</div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
