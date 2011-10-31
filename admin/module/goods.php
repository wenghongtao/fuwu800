<?php 
include_once '../../include/conn.php';

session_start();
if (!isset($_SESSION["user"])) {
	header("Location: ../login.php");  
}

global $db;

//商品列表信息
$goods = $db->get_results("select * from goods");
	



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商品列表</title>
    <link href="../Styles/main.css" rel="stylesheet" type="text/css" />
    <link rel="Stylesheet" type="text/css" href="../css/admin.css" />
    <script type="text/javascript" src="../../js/jquery-1.6.4.js"></script>
</head>
<body>
	<div>
        <!-- 头部 -->
        <div class="header">
            <a>[商品列表 ]</a>
            </div>
        <!-- 搜索栏 -->
        <div class="isearcher">
            <select id="SearchType" name="SearchType">
                <option value="0">全部</option>
                <option value="1">商品名称</option>
                <option value="2">订单编号</option>
                <option value="3">用户名</option>
            </select>
            <input id="SearchValue" name="SearchValue" type="text" />
            <input type="button" value="搜索" />
        </div>
        <!-- 列表 -->
        <div>
            <table id="table1" cellpadding="4" cellspacing="1" width="100%">
                <thead>
                    <tr class="tr_nav">
                        <td width="8%">商品编号</td>
                        <td width="12%">商品名称</td>
                        <td width="10%">市场价格</td>
                        <td width="10%">购买价格</td>
                        <td width="8%">商品类型</td>
                        <td width="8%">生成时间</td>
                        <td width="14%">订单操作</td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                	foreach ($goods as $value) {
                ?>
                	<tr class="tr_nav2">
                		<td><?php echo $value->goods_sn; ?></td>
                		<td><?php echo $value->goods_name; ?></td>
                		<td><?php echo $value->market_price; ?></td>
                		<td><?php echo $value->shop_price; ?></td>
                		<td><?php echo $value->goods_type; ?></td>
                		<td><?php echo $value->created_at; ?></td>
                	
                		<td><a>查看状态</a></td>
                    </tr>            
                	
                	
                	<?php } ?>
                	
                </tbody>
            </table>
        </div>
       
    </div>

</body>
</html>