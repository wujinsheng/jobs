<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/sae/1/Jobs/Public/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="/sae/1/Jobs/Public/css/jquery.treetable.css" />
<link rel="stylesheet" href="/sae/1/Jobs/Public/css/jquery.treetable.theme.default.css" />
<link rel="stylesheet" href="/sae/1/Jobs/Public/jui/jquery-ui.min.css" />

<script src="/sae/1/Jobs/Public/js/jquery-1.10.2.js"></script>
<script src="/sae/1/Jobs/Public/jui/jquery-ui.min.js"></script>

<script src="/sae/1/Jobs/Public/js/bootstrap.min.js" language="javascript"></script>
<script src="/sae/1/Jobs/Public/js/bootswatch.js" language="javascript"></script>
<script src="/sae/1/Jobs/Public/js/jquery.treetable.js" language="javascript"></script>

  
<title>jobs - Powered by wujinsheng.</title>

</head>
<body style="padding-top: 5em">
	<!-- 头部 -->
	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo U('/home');?>" class="navbar-brand">首页</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo U('/home/jobs');?>">职位搜索</a>
            </li>
            <li class="dropdown">
            <li>
              <a href="<?php echo U('/home/news');?>">新闻资讯</a>
            </li>
            </li>
            <li>
              <a href="<?php echo U('/home/video');?>">视频招聘</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
						<?php if(!empty($_SESSION['user_auth']['uid'])): if($_SESSION['user_auth']['usertype']== 1): ?><li><a href="<?php echo U('/personal');?>"><?php echo ($_SESSION['user_auth']['email']); ?></a></li>
				<?php elseif($_SESSION['user_auth']['usertype']== 2): ?>
					<li><a href="<?php echo U('/company');?>"><?php echo ($_SESSION['user_auth']['email']); ?></a></li>
				<?php else: endif; endif; ?>
			
            <li><a href="<?php echo U('/admin');?>">管理后台</a></li>
          </ul>

        </div>
      </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
		
	<div class="container">
		<div class="row">
			
<div class="col-lg-11 col-lg-offset-1">
		<ul class="nav nav-pills" role="tablist">
	  <li role="presentation"<?php if($control == 'Index'): ?>class="active"<?php endif; ?>><a href="<?php echo U('index/index');?>">个人中心</a></li>
	  <li role="presentation"<?php if($control == 'Resume'): ?>class="active"<?php endif; ?>><a href="<?php echo U('resume/index');?>">我的简历</a></li>
	  <li role="presentation"<?php if($control == 'Applyrecord'): ?>class="active"<?php endif; ?>><a href="<?php echo U('applyrecord/index');?>">申请记录</a></li>
	  <li role="presentation"><a href="<?php echo U('visitor/index');?>">谁看过我</a></li>
	  <li role="presentation"><a href="<?php echo U('message/index');?>">消息提醒</a></li>
	  <li role="presentation"><a href="<?php echo U('account/index');?>">帐户设置</a></li>
	</ul>
	<p></p>
</div>
<div class="col-lg-7 col-lg-offset-1">

<table class="table table-striped table-bordered">
	<thead>
		<tr><th>简历名称</th><th>更新时间</th><th>默认简历</th><th>简历类型</th><th>操作</th></tr>
	</thead>
	<tbody>
		<?php if(is_array($userexpects)): $i = 0; $__LIST__ = $userexpects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["title"]); ?></td><td><?php echo ($vo["update_time"]); ?></td><td></td><td></td>
			<td><a href="<?php echo U('edit?id='.$vo['id']);?>">编辑</a> <a href="<?php echo U('/home/resume/view?id='.$vo['id']);?>">查看</a></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
	
</div>

<div class="col-lg-3">
	<a href="<?php echo U('edit');?>" class="btn btn-primary btn-block">创建新简历</a>
</div>


		</div>



	<!-- /主体 -->

	<!-- 底部 -->
	<footer>
        <div class="row">
          <div class="col-lg-12">

			<hr />
            <p>Designed by WJS</p>

            <p>Based on homebrew</p>

          </div>
        </div>

 </footer>
</div>


	<!-- /底部 -->
</body>
</html>