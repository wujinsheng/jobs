<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="/sae/1/Jobs/Public/css/bootstrap.spacelab.css" type="text/css">
<link rel="stylesheet" href="/sae/1/Jobs/Public/css/jquery.treetable.css" />
<link rel="stylesheet" href="/sae/1/Jobs/Public/css/jquery.treetable.theme.default.css" />
<link rel="stylesheet" href="/sae/1/Jobs/Public/jui/jquery-ui.min.css" />

<script src="/sae/1/Jobs/Public/js/jquery-1.10.2.js"></script>
<script src="/sae/1/Jobs/Public/jui/jquery-ui.min.js"></script>

<script src="/sae/1/Jobs/Public/js/bootstrap.min.js" language="javascript"></script>
<script src="/sae/1/Jobs/Public/js/bootswatch.js" language="javascript"></script>
<script src="/sae/1/Jobs/Public/js/jquery.treetable.js" language="javascript"></script>

<title>管理- Powered by wujinsheng.</title>

</head>
<body style="padding-top: 5em">
	<!-- 头部 -->
	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo U('/admin');?>" class="navbar-brand">管理后台</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">用户分类 <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">

                <li><a href="<?php echo U('userclass/index');?>">个人用户分类</a></li>
                <li><a href="<?php echo U('comclass/index');?>">企业用户分类</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">用户管理 <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">

                <li><a href="<?php echo U('user/index');?>">个人用户</a></li>
                <li><a href="<?php echo U('com/index');?>">企业用户</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="job">职位管理 <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="job">

                <li><a href="<?php echo U('Industry/index');?>">行业分类</a></li>
                <li><a href="<?php echo U('title/index');?>">职能分类</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo U('city/index');?>">城市</a>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?php echo U('/home');?>">前台首页</a></li>
          </ul>

        </div>
      </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
		<div class="container">
		<div class="row">
			

	<table class="table table-bordered">
		<thead>
			<tr><th>用户ID</th><th>email</th><th>姓名</th><th>注册时间</th><th>上次登录</th><th>登录IP</th><th>登录次数</th><th>状态</th><th>操作</th>
		</thead>
	  <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>

			<td><?php echo ($user["uid"]); ?></td><td><?php echo ($user["email"]); ?></td><td><?php echo ($user["name"]); ?></td>
			<td><?php if(!empty($user["reg_time"])): echo (date("Y-m-d H:i",$user["reg_time"])); endif; ?></td>
			<td><?php if(!empty($user["login_time"])): echo (date("Y-m-d H:i",$user["login_time"])); endif; ?></td>
			<td><?php echo (long2ip($user["login_ip"])); ?></td><td><?php echo ($user["login_hits"]); ?></td><td><?php echo ($user["status"]); ?></td>
			<td></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>


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