<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
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
			
<div class="col-lg-11 col-lg-offset-1">
	
</div>
<div class="col-lg-7 col-lg-offset-1">



	
	<input name="" type="text" />
	<select name="choose" id="choose" class="jlmc">
	  <option selected="selected">产品经理</option>
	  <option>我的简历2</option>
	</select>

	<hr />
	<div class="detail_line table-responsive">
		<h4>基本信息</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>姓名：</th><td><?php echo ($userinfo["name"]); ?></td><th>性别：</th><td><?php echo (userclass_value($userinfo["sex"])); ?></td></tr>
				<tr><th>出生年份：</th><td><?php echo ($userinfo["birthday"]); ?></td><th>常住地区：</th><td><?php echo (userclass_value($userinfo["city"])); ?></td></tr>
				<tr><th>Email：</th><td><?php echo ($user["email"]); ?></td><th>手机号：</th><td>13111111111</td></tr>
				<tr><th>婚姻状况：</th><td><?php echo (userclass_value($userinfo["marriage"])); ?></td><th>状态：</th><td>在职，看看新机会</td></tr>
				<tr><th>关键词：</th><td colspan="3">运营经理 运营总监 市场运营 产品经理 市场营销 PM 项目经理</td></tr>

			</tbody>
		</table>
	</div>
	
	<div class="detail_line table-responsive">
		<h4>求职意向</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>期望行业：</th><td></td><th>到岗时间：</th><td></td></tr>
				<tr><th>期望薪水：</th><td><?php echo ($userinfo["birthday"]); ?></td><th>期望地区：</th><td></td></tr>
				<tr><th>工作性质：</th><td></td><th>能否加班：</th><td></td></tr>
				<tr><th>期望职能：</th><td colspan="3"><select><option>运营经理</option><option>运营总监</option><option> 市场运营</option><option> 产品经理</option><option> 市场营销</option><option> PM 项目经理</option></select></td></tr>

			</tbody>
		</table>
	</div>

	<div class="detail_line table-responsive">
		<h4>教育经历</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>	
	
	<div class="detail_line table-responsive">
		<h4>培训经历</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>	

	<div class="detail_line table-responsive">
		<h4>专业技能</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>	
	
	<div class="detail_line table-responsive">
		<h4>工作经历</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>	
	
	<div class="detail_line table-responsive">
		<h4>项目经历</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>	
	
	<div class="detail_line table-responsive">
		<h4>证书</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>

	<div class="detail_line table-responsive">
		<h4>附加信息</h4>
		<table class="table table-bordered">
			<tbody>
				<tr><th>字段A</th><td></td><th>字段A</th><td></td></tr>

			</tbody>
		</table>
	</div>	
	
	
</div>

<div class="col-lg-3 alert alert-info">
	here put resume check
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