<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>订单列表</title>
    <link href="../Styles/main.css" rel="stylesheet" type="text/css" />
    <link rel="Stylesheet" type="text/css" href="../css/admin.css" />
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
                	<tr class="tr_nav2">
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                		<td></td>
                    </tr>            
                </tbody>
            </table>
        </div>
       
    </div>

</body>
</html>