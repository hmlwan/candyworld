<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no,email=no,adress=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>在线充值</title>
    <link href="/public/wx/cz/css/swiper.min.css" type="text/css" rel="stylesheet">
    <link href="/public/wx/cz/css/style.css" type="text/css" rel="stylesheet">
    <script src="/public/wx/cz/js/jquery.min.js"></script>
    <script src="/public/wx/cz/js/swiper.min.js"></script>
    <script src="/public/wx/cz/js/rem.js"></script>
    <script src="/public/wx/cz/js/safari.js"></script>
</head>
<body>
<!-- 头部-->
<div class="header">    <span class="go_black" id="goblack"></span>
    <h3>在线充值</h3>
</div>
<!--end-->
<div class="exchange">
            <input name="username" type="hidden" value="<?php echo ($username); ?>">
        <li style="margin-top: 5px;width:100%">
            <span style="display:inline-block;width:20%;">充值金额:</span>
            <input name="money" type="text" placeholder="请输入充值金额" style="height: 30px;line-height: 30px;width: 78%;border-radius: 4px;border: none; background:rgb(239, 239, 239);padding-left: 5px;-webkit-appearance:none; color:#39393d;">
        </li>
        <p style="height: 40px"></p>
    <div class="PaymentTop">
        <ul>
            <li class="fll active" data-type="1">
                <div class="PaymentPrice">
                    <span class="icon"><img src='/public/wx/cz/img/zhifubao.jpg'></span>
                    <h1>支付宝支付</h1>
                    <p>在线支付即时到账</p>
                </div>
            </li>
            <!-- <li class="frr" data-type="3"> -->
                <!-- <div class="PaymentPrice"> -->
                    <!-- <span class="icon"><img src='/public/wx/cz/img/wechat.jpg'></span> -->
                    <!-- <h1>微信支付</h1> -->
                    <!-- <p>在线支付即时到账</p> -->
                <!-- </div> -->
            <!-- </li> -->
        </ul>
    </div>
    <div class="Putforwardbox">
        <p><span>充值说明：</span><font color="red">如果充值未到账，请在群聊中联系客服！</font></p>
    </div>
    <div class="Putforwardbtn">
        <button class="btn" >立即充值</button>
    </div>

</div>



<!--end-->

<script src="/public/wx/cz/js/goblak.js"></script>

<script>
    $(function(){
        var type = "1";
        $('.PaymentTop').on('click', 'li', function () {
            type = $(this).attr("data-type");
            $(this).addClass('active').siblings('li').removeClass('active');
        });
        $('.Putforwardbtn').on('click', 'button', function () {
            var money = $("input[name='money']").val();
            var username = $("input[name='username']").val();
            if(money == ''){
                alert("充值金额不能为空");
                return false;
            }
            if(username == ''){
                alert("非法操作");
                return false;
            }

            window.location.href = '/codepay/codepay.php?user=<?php echo ($username); ?>&money='+money+'&type='+type+'';;


        });
    });
</script>
</body>
</html>