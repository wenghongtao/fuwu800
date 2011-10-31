<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理</title>
<link rel="Stylesheet" type="text/css" href="../css/site.css" />
<script type="text/javascript" src="../js/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $(".con li").mouseover(function () {
                $(this).css("background", "url(../Images/admin/main-left-hover.gif) no-repeat");
            });

            $(".con li").mouseout(function () {
                $(this).css("background", "url()");
            });

        });

        function setTab(name, cursel, n) {
            for (i = 1; i <= n; i++) {
                var menu = "#"+name + i;
                var con ="#con_" + name + "_" + i;
                if (i == cursel) {
                    $(menu).addClass("navon");
                    $(con).css("display", "block");
                } else {
                    $(menu).removeClass("navon");
                    $(con).css("display", "none");
                }
            }
            return false;
        }

        function go(url) {
            $("iframe").attr("src", url);
        }

        //后退一页
        function historyBack() {
            window.history.go(-1);
        }
        $(function () {
            var bwidth = $("body").width();
            var bhight = $("body").height();
            $("#mright").css("width", bwidth - 165);
            $("#mainright").css("height", bhight - 100);
            $("#main_fl").css("height", bhight - 90);

            $(window).resize(function () {
                $("#mainright").css("height", $("body").height() - 100);
                $("#mright").css("width", $("body").width() - 165);
            });
        });

        
    </script>
</head>
<body>
	<div style="width:160px; float:left; height:100%;">
         <div class="logo">
                    <img width="160" height="43" alt="logo" src="../Images/admin/logo.gif" />
                    <div class="lun"><span style="color:#ff0000">V2.0.0</span> build 20110615 </div>
            </div>
             <div id="main_fl">
              <div id="left">
                    <div id="con_nav_1">
                        <h1>常用操作</h1>
                        <div class="cc"></div>                        
                        <ul>
                        	<li><a href="#" onclick="go('model/order.php')">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                            
                        </ul>
                    </div>
                    <div id="con_nav_2" style="display:none;">
                        <h1>系统管理</h1>
                        <div class="cc"></div>                                                
                        <ul>
                            <li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        </ul>
                    </div>
                    <div id="con_nav_3" style="display:none;">
                        <h1>信息平台</h1>
                        <div class="cc"></div>                          
                        <ul>
                            <li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        </ul>
                    </div>
                    <div id="con_nav_4" style="display:none;">
                        <h1>用户管理</h1>
                        <div class="cc"></div>
                        <ul>
                            <li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        </ul>
                        <h1>角色管理</h1>
                        <div class="cc"></div>
                        <ul>
                           <li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        	<li><a href="#" onclick="go()">订单管理</a></li>
                        </ul>
                    </div>
                </div> 
              </div>
     </div>
    <div id="mright" style="width:auto; float:left; height:100%;">
        <ul class="nav">
            <li id="nav1" onclick="return setTab('nav',1,4)"><em><a href="#">常用操作</a></em></li>
            <li id="nav2" onclick="return setTab('nav',2,4)"><em><a href="#">系统管理</a></em></li>
            <!-- <li id="nav3" onclick="return setTab('nav',3,7)"><em><a href="#">团购管理</a></em></li> -->
            <li id="nav3" onclick="return setTab('nav',3,4)"><em><a href="#">互动营销</a></em></li>
            <!--<li id="nav5" onclick="return setTab('nav',5,7)"><em><a href="#">系统工具</a></em></li>-->
            <li id="nav4" onclick="return setTab('nav',4,4)"><em><a href="#">用户管理</a></em></li>
        </ul>
        <div class="wei">
             <span >用户名：</span><a href="login.php"> (退出系统) </a> &nbsp; | <a href="#" onclick="go('model/index.php')">控制面板首页</a> | <a href="../index.php">访问前台</a> | <a href="javascript:void(0)" onclick="historyBack()">退后一页</a>
         </div>
        <div id="mainright" style=" margin:5px;">
         <iframe name="main" id="iframeMain" frameborder="0" width="98%" height="98%"  scrolling="yes"  src="model/index.php"> </iframe>
         </div>
    </div>

</body>
</html>