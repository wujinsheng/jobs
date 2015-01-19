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
		
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:-1.5em">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/sae/1/Jobs/Public/images/banner1.jpg" alt="page1">
      <div class="carousel-caption">
        jobs
      </div>
    </div>
    <div class="item">
      <img src="/sae/1/Jobs/Public/images/banner2.jpg" alt="page2">
      <div class="carousel-caption">
        telcom
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	<div class="container">
		<div class="row">
			

<section>
	<div class="col-lg-4 col-lg-offset-4">

		<h3>登录<span class="btn btn-success switch pull-right">去注册</span></h3>
		<br />
        <form class="login-form" action="<?php echo U('site/login');?>" method="post">
          <div class="form-group">
            
			<div class="input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"> </span></div>
			  <input type="text" id="inputEmail" class="form-control" placeholder="请输入邮箱" value="" name="email">
			  
			</div>
          </div>
          <div class="form-group">
    		
			<div class="input-group">
			  <div class="input-group-addon"><span class="glyphicon glyphicon-transfer"> </span></div>
              <input type="password" id="inputPassword"  class="form-control" placeholder="请输入密码" name="password">
			  
			</div>
          </div>
		  
          <div class="form-group">
				<div class="Login_return alert alert-danger" style="display:none"></div>
		  </div>
          <div class="form-group">
            <div class="controls">
              <label class="checkbox">
                <!--<input type="checkbox"> 自动登陆-->
              </label>
              <input type="submit" class="btn btn-primary" value="登录">
			  
			  <a href="<?php echo U('site/forgetpw');?>">忘记密码?</a>
			
            </div>
          </div>

        </form>
	</div>
	
	
	<div class="col-lg-4 col-lg-offset-4" style="display:none">

		<h3>注册<span class="btn btn-success switch pull-right">我要登录</span></h3>	
		<br />
        <form class="login-form" action="<?php echo U('site/register');?>" method="post">
          <div class="form-group">
            
			<div class="input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"> </span></div>
			  <input type="text" id="inputEmail" class="form-control" placeholder="请输入邮箱" value="" name="email">
			  
			</div>
          </div>
          <div class="form-group">
    		
			<div class="input-group">
			  <div class="input-group-addon"><span class="glyphicon glyphicon-transfer"> </span></div>
              <input type="password" id="inputPassword"  class="form-control" placeholder="请输入密码" name="password">
			  
			</div>
          </div>
		  
          <div class="form-group">
				<div class="Login_return alert alert-danger" style="display:none"></div>
		  </div>
          <div class="form-group">
            <div class="controls">
              <label class="checkbox">
                <!--<input type="checkbox"> 自动登陆-->
              </label>
              <input type="submit" class="btn btn-primary" value="注册">
			  


            </div>
          </div>

        </form>
	</div>
	
</section>

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


<script>
	$("form").submit(function(){
		var self = $(this);
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;

		function success(data){
			if(data.status){
				alert(data.info);
				window.location.href = data.url;
			} else {
				self.find(".Login_return").show();
				self.find(".Login_return").text(data.info);

			}
		}
	});
	
	$(".switch").click(function() {
	
	
	
		$(".col-lg-4").toggle();
	
	
	});


</script>

	<!-- /底部 -->
</body>
</html>