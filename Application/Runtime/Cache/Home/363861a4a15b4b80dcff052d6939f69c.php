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
<body style="padding-top:5.0em">
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
              <a href="<?php echo U('jobs/index');?>">职位探索</a>
            </li>
            <li class="dropdown">
            <li>
              <a href="<?php echo U('news/index');?>">新闻资讯</a>
            </li>
            </li>
            <li>
              <a href="<?php echo U('video/index');?>">视频招聘</a>
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
			
<div class="col-lg-10">
	<form method="get">
	
	  <div class="form-group">
		<select name="type">
			<option value="1">职位</option>
			<option value="2">公司</option>	
		</select>	  
	  </div>
	
	  <div class="form-group">
		<input type="text" name="keyword" placeholder="搜索条件"/>  
	  </div>
	
	
	  <div class="form-group">
		<input type="text" name="industry" placeholder="请选择行业" value="" />
	  </div>


		<input type="submit" value="搜索" class="btn btn-primary btn-sm" />
	</form>
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