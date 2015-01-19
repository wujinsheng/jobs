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
			
<button id="button" class="btn btn-primary pull-right">
  添加行业
</button>

<div id="dialog" style="display:none">  
	<div id="tabs">
	  <ul>
		<li><a href="#tabs-1">添加父类</a></li>
		<li><a href="#tabs-2">添加子类</a></li>
	  </ul>
	  <div id="tabs-1">
			<form id="parentForm" method="post" action="<?php echo u('industry/addp');?>"  onSubmit="return false;" >  
				父类名： 
					<input type="text" name="name" />

				<p>
					<br />
					<button class="btn btn-primary" id="addp">提交</button>
				</p>
			</form>
	  </div>
	  <div id="tabs-2">
			<form id="subForm" method="post" action="<?php echo u('industry/add');?>" onSubmit="return false;" >  
				子类名：
					<input type="text" name="name"/> 
				<br />		
				所属父类：
				<br />
					<select name="pid">
						<?php if(is_array($parents)): $i = 0; $__LIST__ = $parents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				<p>
					<br />
					<button class="btn btn-primary" id="add">提交</button>
				</p>
			</form>
	　</div>
	</div>  
</div>

<table  id="example-basic">
<tbody>
        <caption>行业列表</caption>
        <thead>
          <tr>
            <th>名称</th>
            <th>操作</th>
          </tr>
        </thead>
  <?php if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$city): $mod = ($i % 2 );++$i;?><tr data-tt-id="<?php echo ($city["id"]); ?>"<?php if($city["pid"] != '0'): ?>data-tt-parent-id="<?php echo ($city["pid"]); ?>"<?php endif; ?>> 

		<td><?php echo ($city["name"]); ?></td>
		<td>
			<?php if($city["pid"] != '0'): ?><a class="btn btn-warning btn-xs" href="<?php echo U('industry/del?id='.$city['id']);?>" onClick="return confirm('确定要删除此分子类？ ');">删除</a>
			<?php else: ?>
				
				<a class="btn btn-danger btn-xs" href="<?php echo U('industry/delp?id='.$city['id']);?>" onClick="return confirm('确定要删除此分类及其子类？');">删除</a><?php endif; ?>
		</td> 
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>

 
<script>
	$("#example-basic").treetable({ expandable: true });
	$( "#tabs" ).tabs();

	$("#button").click(function(){
		$("#dialog").dialog({  
			modal: true,  
			//autoOpen: false,  
			buttons:{  
 
				"关闭": function() {  
					$("#dialog").dialog("close");  
				}  
			}  
		}); 
	})
	
	$("#add").click(function(){
		var form = $("#subForm");  
		$.ajax({  
			url:form.attr('action'),  
			type:form.attr('method'),  
			data:form.serialize(),  
			dataType:"json",  
			success:function(data){  
				$("#dialog").dialog("close");  
				alert("添加成功啦"); 
				window.location.reload();
			},  
			error:function(){  
				$("#dialog").dialog("close");  
				alert("出错了哦");  
			}  
		})	
	});

	$("#addp").click(function(){
		var form = $("#parentForm");  
		$.ajax({  
			url:form.attr('action'),  
			type:form.attr('method'),  
			data:form.serialize(),  
			dataType:"json",  
			success:function(data){  
				$("#dialog").dialog("close");  
				alert("添加成功啦"); 
				window.location.reload();
			},  
			error:function(){  
				$("#dialog").dialog("close");  
				alert("出错了哦");  
			}  
		})	
	});

</script>	  

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