<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="/javascripts/jquery1.8.3.min.js" type="text/javascript"></script>
<script src="/javascripts/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/stylesheets/uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
    <h1>Uploadify Demo</h1>
    <form>
        <input id="file_upload" name="file_upload" type="file" multiple="true">
        <div id="queue"></div>
    </form>
    <script type="text/javascript">
    <?php $timestamp = time();?>
    $(function() {
        $('#file_upload').uploadify({
            'buttonText' : '图片上传',//替换按钮上的默认值:SELECT FILES
            'formData'     : {//表单提交附带值
                'timestamp' : '<?php echo $timestamp;?>',
                'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
            },
            'swf'      : '/javascripts/uploadify/uploadify.swf',//flash上传插件,指定上传控件的主体文件
            'uploader' : 'uploadify.php',//指定服务器端上传处理程序
            'checkExisting' : 'check-exists.php',//定义检查目标文件夹中是否存在同名文件的脚本文件路径。
            'queueID' : 'queue',//文件上传进度条的容器
            'queueSizeLimit' : '2',//允许队列文件的数量,默认:999
            'removeCompleted' : false,//完成时是否清除队列 默认true
            'onUploadSuccess' : function(file,data,response)
                {
                    alert(data);
                }
        });
    });
    </script>
</body>
</html>
