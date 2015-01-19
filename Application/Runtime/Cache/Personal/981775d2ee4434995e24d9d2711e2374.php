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


	<hr />
	<div class="panel panel-info">
		<div class="panel-heading">
			基本信息
		</div>

		<div class="panel-body">
		
			<div class="userinfo" style="display:none"><div class="userinfoswitch"><span class="badge pull-right">&times;</span></div>
			<form class="form" method="post" action="<?php echo U('saveUserinfo');?>">
				<input type="hidden" name="uid" value="<?php echo ($user["uid"]); ?>" />
				<div class="form-group">
					<label for="username">姓名：</label>
					<input type="text" name="username" id="username" value="<?php echo ($userinfo["name"]); ?>" />
				</div>
				<div class="form-group">
					<label for="sex">性别：</label>
						<?php if(is_array($user_gender)): $i = 0; $__LIST__ = $user_gender;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><label for="sex_<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></label>
							<input type="radio" name="sex" value="<?php echo ($item["id"]); ?>" id="sex_<?php echo ($item["id"]); ?>" <?php if($item['id'] == $userinfo['sex']): ?>checked<?php endif; ?> /><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				
				<div class="form-group">
					<label for="birthday">出生日期：</label>
					<input type="text" name="birthday" id="birthday" value="<?php echo ($userinfo["birthday"]); ?>" />
				</div>
				<div class="form-group">			
					<label for="city">常住地区：</label>
					<input type="text" name="city" id="city" value="<?php echo ($userinfo["city"]); ?>" />
				</div>
				<div class="form-group">
					<label for="email">Email：</label>
					<input type="email" name="email" id="email" value="<?php echo ($user["email"]); ?>" readOnly="true" />		
				</div>

				<div class="form-group">			
					<label for="telphone">手机号：</label>
					<input type="text" name="telphone" id="telphone" value="<?php echo ($userinfo["telphone"]); ?>" />
				</div>

				<div class="form-group">			
					<label for="marriage">婚姻状况：</label>
					<select name="marriage" id="marriage">
						<?php if(is_array($user_marriage)): $i = 0; $__LIST__ = $user_marriage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>	

				<div class="form-group">			
					<label for="workstatus">工作状态：</label>
					<input type="text" name="workstatus" id="workstatus" value="<?php echo (userclass_value($userinfo["workstatus"])); ?>" />
				</div>			
				<div class="form-group">			
					<label for="keyword">关键词：</label>
					<input type="text" name="keyword" id="keyword" value="<?php echo ($userinfo["keyword"]); ?>" />
				</div>			
				<div class="form-group">			
					
					<input type="submit" name="submit_userinfo" value="保存" class="btn btn-primary"/>
					<input type="button" value="取消" class="btn btn-default userinfoswitch"/>
				</div>		
			</form>
			</div>
					
			<div class="userinfo"><div class="userinfoswitch"><span class="glyphicon glyphicon-pencil pull-right"></span></div>
			<table class="table table-bordered">
				<tbody>
					<tr><th>姓名：</th><td><?php echo ($userinfo["name"]); ?></td><th>性别：</th><td><?php echo (userclass_value($userinfo["sex"])); ?></td></tr>
					<tr><th>出生日期：</th><td><?php echo ($userinfo["birthday"]); ?></td><th>常住地区：</th><td><?php echo (userclass_value($userinfo["city"])); ?></td></tr>
					<tr><th>Email：</th><td><?php echo ($user["email"]); ?></td><th>手机号：</th><td><?php echo ($userinfo["telphone"]); ?></td></tr>
					<tr><th>婚姻状况：</th><td><?php echo (userclass_value($userinfo["marriage"])); ?></td><th>状态：</th><td>在职，看看新机会</td></tr>
					<tr><th>关键词：</th><td colspan="3"><?php echo ($userinfo["keyword"]); ?></td></tr>

				</tbody>
			</table>			
			</div>
		</div>
	</div>

	
	<hr />
	<div class="panel panel-warning expect" style="display:none">
		<div class="panel-heading">
			求职意向 <span class="badge pull-right expectswitch">&times;</span>
		</div>
		<div class="panel-body">
			<form class="form" method="post" action="<?php echo U('saveUserExpect');?>">
				<div class="form-group">
					<label for="industry">期望行业：</label>
					<input type="text" name="industry" id="industry" value="<?php echo ($userexpect["industry"]); ?>" />
				</div>
				<div class="form-group">
					<label for="overtime">能否加班：</label>
						<?php if(is_array($user_overtime)): $i = 0; $__LIST__ = $user_overtime;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; echo ($item["name"]); ?><input type="radio" name="Sex" value="<?php echo ($item["id"]); ?>" <?php if($item['id'] == $userexpect['overtime']): ?>checked<?php endif; ?> /><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="form-group">
					<label for="salary">期望薪水：</label>
					<input type="text" name="salary" id="salary" value="<?php echo ($userexpect["salary"]); ?>" />
				</div>
				<div class="form-group">			
					<label for="city">期望地区：</label>
					<input type="text" name="city" id="city" value="<?php echo ($userexpect["city"]); ?>" />
				</div>


				<div class="form-group">			
					<label for="worktype">工作性质：</label>
					<select name="worktype" id="worktype">
						<?php if(is_array($user_worktype)): $i = 0; $__LIST__ = $user_worktype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>	

				<div class="form-group">			
					<label for="workstatus">工作状态：</label>
					<input type="text" name="workstatus" id="workstatus" value="<?php echo (userclass_value($userinfo["workstatus"])); ?>" />
				</div>			
				<div class="form-group">			
					
					<input type="submit" name="submit_userinfo" value="保存" class="btn btn-primary"/>
					<input type="button" value="取消" class="btn btn-default expectswitch"/>					
				</div>		
			</form>
		</div>
	</div>

	<div class="panel panel-info expect">
		<div class="panel-heading">
			求职意向 <span class="badge pull-right expectswitch"><span class="glyphicon glyphicon-pencil"></span></span>
		</div>
		<div class="panel-body">
		</div>
		<table class="table table-bordered">
			<tbody>
				<tr><th>期望行业：</th><td><?php echo ($userexpect["industry"]); ?></td><th>到岗时间：</th><td></td></tr>
				<tr><th>期望薪水：</th><td><?php echo ($userinfo["birthday"]); ?></td><th>期望地区：</th><td></td></tr>
				<tr><th>工作性质：</th><td><?php echo (userclass_value($userinfo["worktype"])); ?></td><th>能否加班：</th><td><?php echo (userclass_value($userexpect["overtime"])); ?></td></tr>
				<tr><th>期望职能：</th><td colspan="3"><select><option>运营经理</option><option>运营总监</option><option> 市场运营</option><option> 产品经理</option><option> 市场营销</option><option> PM 项目经理</option></select></td></tr>

			</tbody>
		</table>
	</div>

	<hr />
	<div class="panel panel-info">
	
		<div class="panel-heading">
			教育经历
		</div>
	<?php if(is_array($usereducations)): $i = 0; $__LIST__ = $usereducations;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$usereducation): $mod = ($i % 2 );++$i;?><div class="panel-body">
			<div class="education" style="display:none"><div class="educationswitch"><span class="badge pull-right">&times;</span></div>
			<form class="form" method="post" action="<?php echo U('saveUserEducation');?>">
				<div class="form-group">
					<label for="school">学校：</label>
					<input type="text" name="school" id="school" value="<?php echo ($usereducation["school"]); ?>" />
				</div>
				<div class="form-group">
					<label for="overtime">学历：</label>
					<select name="education">
						<?php if(is_array($user_education)): $i = 0; $__LIST__ = $user_education;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>

				<div class="form-group">			
					<label for="city">地区：</label>
					<input type="text" name="city" id="city" value="<?php echo ($usereducation["city"]); ?>" />
				</div>

				<div class="form-group">			
					<label for="major">专业：</label>
					<input type="text" name="major" id="major" value="<?php echo ($usereducation["major"]); ?>" />
				</div>			
				<div class="form-group">			
					
					<input type="submit" name="submit_userinfo" value="保存" class="btn btn-primary"/>
					<input type="button" value="取消" class="btn btn-default educationswitch"/>					
				</div>		
			</form>
			</div>
					
			<div class="education"><div class="educationswitch"><span class="glyphicon glyphicon-pencil pull-right"></span></div>
				<table class="table table-bordered">
					<tbody>
						<tr><th>学校：</th><td><?php echo ($usereducation["school"]); ?></td><th>学历：</th><td><?php echo (userclass_value($usereducation["education"])); ?></td></tr>
						<tr><th>专业：</th><td><?php echo ($usereducation["major"]); ?></td</tr>

					</tbody>
				</table>		
			</div>		

		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<button class="btn btn-block educationbutton educationform education">添加教育经历</button>
	<form class="form educationform" method="post" action="<?php echo U('addUserEducation');?>" style="display:none">
		<input type="hidden" name="eid" value="<?php echo ($eid); ?>" />
		<div class="form-group">
			<label for="school">学校：</label>
			<input type="text" name="school" id="school" value="" />
		</div>
		<div class="form-group">
			<label for="overtime">学历：</label>
			<select name="education">
				<?php if(is_array($user_education)): $i = 0; $__LIST__ = $user_education;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>

		<div class="form-group">			
			<label for="major">专业：</label>
			<input type="text" name="major" id="major" value="" />
		</div>			
		<div class="form-group">			
			
			<input type="submit" name="submit_userinfo" value="保存" class="btn btn-primary"/>
			<input type="button" value="取消" class="btn btn-default educationbutton"/>					
		</div>		
	</form>	
	</div>


	<hr />
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


<script>
	$("form").submit(function(){
		var self = $(this);
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;

		function success(data){
			if(data.status){
				alert(data.info);
				window.location.reload();
			} else {
				self.find(".Validform_checktip").text(data.info);
				alert(data.info);
			}
		}
	});
	
	$(".userinfoswitch").click(function(){
		$(".userinfo").toggle();
	});	
	
	$(".expectswitch").click(function(){
		$(".expect").toggle();
	});

	$(".educationswitch").click(function(){
		$(".education").toggle();
	});
	$(".educationbutton").click(function(){
		$(".educationform").toggle();
	});	
</script>

	<!-- /底部 -->
</body>
</html>