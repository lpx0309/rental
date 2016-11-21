<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="http://cdn.bootcss.com/jqueryui/1.11.0/jquery-ui.min.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/jqueryui/1.11.0/jquery-ui.min.js"></script>
  <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <title><?php echo $title; ?></title>
</head>

<body>

<nav class="navbar navbar-inverse" role="navigation" style="border-radius:0px;">
  <div class="container">
    <div class="navbar-header"> <a class="navbar-brand" href="<?php echo $this->config->base_url(); ?>"><?php echo $title; ?></a> </div>
    <!--<div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:;">自助服务</a></li>
        <li><a href="javascript:;">	Q&A	</a></li>
      </ul>
    </div>-->
    
    <!--<div id="navbar" class="collapse navbar-collapse">-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:;" class="glyphicon glyphicon-user"></a></li>
        <li><a href="javascript:;" id="login_open">登录</a></li></li>
        <li><a href="javascript:;" id="regist_open">注册</a></li></li>
        <!--<li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">李沛新&nbsp;<span class="caret"></span></a>
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">登录<span class="caret"></span></a>
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">注册<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          	<li><a href="<?php echo makeurl('Login'); ?>" onclick="pwdmdf()">我的发布</a></li>
            <li><a href="<?php echo makeurl('Login'); ?>" onclick="pwdmdf()">修改密码</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo makeurl('Login','logout'); ?>">登出</a></li>
          </ul>
        </li>-->
      </ul>
    <!--</div>-->
    
  </div>
</nav>

<div id="pop_login" style="padding:35px">
  <form id="form_login">
    <div class="form-group">
      <label class="sr-only" for="">用户名</label>
      <div class="input-group">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-user"></span>
        </div>
        <input type="text" class="form-control" placeholder="用户名/邮箱/手机" />
      </div>
    </div>
    
    <div class="form-group has-error">
      <label class="sr-only" for="">密码</label>
      <div class="input-group">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-lock"></span>
        </div>
        <input type="password" class="form-control" placeholder="密码" />
      </div>
    </div>
    
    <div class="checkbox">
      <label>
        <input type="checkbox"> 保持登录
      </label>
      <!--<a href="javascript:;">忘记密码？</a>
      <a href="javascript:;">还没注册？</a>-->
    </div>
    
    <div style="float:right; margin-top:10px">
      <input type="submit" class="btn btn-default" id="login_action" value="登录" />
      <input type="button" class="btn btn-default" id="login_close" value="取消" />
    </div>
  </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('#pop_login').dialog({
		modal: true,				 
		autoOpen:false,
		resizable:false,
		width: 350,
        /*height: 160,*/
        open: function(){
            $(this).parent().find('.ui-dialog-titlebar').hide();
        },
    	close: function(){
    		//$(this).remove();
    	}
    });
	$('#login_open').click(function(){
		$('#pop_login').dialog('open');					   
	});
	$('#login_close').click(function(){
		$('#pop_login').dialog('close');					   
	});
	$('#login_action').click(function(){
		alert(1);
		return false;
	});
});

</script>