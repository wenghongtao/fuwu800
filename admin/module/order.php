<?php 
include_once '../../include/conn.php';
include_once '../../lib/page.class.php';

session_start();
if (!isset($_SESSION["user"])) {
	header("Location: ../login.php");  
}

global $db;

//订单列表信息
$page=$_GET['page'];
$order = $db->get_results("select * from order_infos WHERE 1");

$totail = count($order); //总条数
$number = 5;//每页显示条数
//参数设定：总记录，每页显示的条数，当前页，连接的地址
$my_page = new PageClass($totail,$number,$page,'?page={page}');
$sql = "SELECT * FROM order_infos WHERE 1 LIMIT ".$my_page->page_limit.",".$my_page->myde_size;
$order_p = $db->get_results($sql);



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>订单列表</title>
    <link href="../Styles/main.css" rel="stylesheet" type="text/css" />
    <link rel="Stylesheet" type="text/css" href="../css/admin.css" />
    <link rel="Stylesheet" type="text/css" href="../css/page.css" />
    <script type="text/javascript" src="../../js/jquery-1.6.4.js"></script>
</head>
<body>
	<div>
        <!-- 头部 -->
        <div class="header">
            <a>[订单列表 ]</a>
            </div>
        <!-- 搜索栏 -->
        <div class="isearcher">
            <select id="SearchType" name="SearchType">
                <option value="0">全部</option>
                <option value="1">产品名称</option>
                <option value="2">订单编号</option>
                <option value="3">用户名</option>
            </select>
            <input id="SearchValue" name="SearchValue" type="text" />
          
            <label>订单状态：</label>
            <select id="selOrderStatus" name="selOrderStatus">
                <option value="0">全部数据</option>
                <option value="1">订单正常</option>
                <option value="2">已经取消</option>
                <option value="3">订单失败</option>
                <option value="4">已经返款</option>
            </select>
            <label>处理进程：</label>
            <select id="selShippingStatus" name="selShippingStatus">
                <option value="0">全部数据</option>
                <option value="1">等待付款</option>
                <option value="2">配送中</option>
                <option value="3">已送达</option>
                <option value="4">配送超时</option>
                <option value="5">交易完成</option>
            </select>
            <input type="button" value="搜索" />
        </div>
        <!-- 列表 -->
        <div>
            <table id="table1" cellpadding="4" cellspacing="1" width="100%">
                <thead>
                    <tr class="tr_nav">
                        <td width="8%">订单编号</td>
                        <td width="12%">订单信息</td>
                        <td width="10%">用户信息</td>
                        <td width="10%">下单时间</td>
                        <td width="8%">订单金额</td>
                        <td width="8%">实付金额</td>
                        <td width="5%">订单类型</td>
                        <td width="8%">订单状态</td>
                        <td width="14%">订单操作</td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                	foreach ($order_p as $value) {
                ?>
                	<tr class="tr_nav2">
                		<td><?php echo $value->order_sn; ?></td>
                		<td><?php echo $value->order_id; ?></td>
                		<td><?php echo $value->user_id; ?></td>
                		<td><?php echo $value->created_at; ?></td>
                		<td><?php echo $value->order_amount; ?></td>
                		<td><?php echo $value->pay_fee; ?></td>
                		<td><?php echo $value->created_at; ?></td>
                		<td><?php echo $value->order_status; ?></td>
                		<td><a>查看状态</a></td>
                    </tr>            
                	
                	
                	<?php } ?>
                	
                </tbody>
            </table>
        </div>
        <?php
   			echo $my_page->myde_write();//输出分页
	    ?>
    </div>

</body>
</html>