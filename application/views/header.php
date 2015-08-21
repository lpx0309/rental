<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?php echo $this->config->base_url(); ?>public/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->config->base_url(); ?>public/css/bootstrap.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $this->config->base_url(); ?>public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url(); ?>public/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url(); ?>public/js/bootstrap.js"></script>

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
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:;" class="glyphicon glyphicon-user"></a></li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">李沛新&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="javascript:;" onclick="pwdmdf()">修改密码</a></li>
            <li class="divider"></li>
            <li><a href="">登出</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
    
  </div>
</nav>
