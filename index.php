<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>致小猪</title>
<link type="text/css" rel="stylesheet" href="renxi/default.css">
<script type="text/javascript" src="renxi/jquery.min.js"></script>
<script type="text/javascript" src="renxi/jscex.min.js"></script>
<script type="text/javascript" src="renxi/jscex-parser.js"></script>
<script type="text/javascript" src="renxi/jscex-jit.js"></script>
<script type="text/javascript" src="renxi/jscex-builderbase.min.js"></script>
<script type="text/javascript" src="renxi/jscex-async.min.js"></script>
<script type="text/javascript" src="renxi/jscex-async-powerpack.min.js"></script>
<script type="text/javascript" src="renxi/functions.js" charset="utf-8"></script>
<script type="text/javascript" src="renxi/love.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/qqZone.css">
<style type="text/css">
<!--
.STYLE1 {
	color: #666666
}
-->
</style>
</head>
<body>
<audio autoplay="autopaly">
  <source src="pyghlkn-lmx.mp3" type="audio/mp3" />
</audio>
<div id="main">
  <div id="error">本页面采用HTML5编辑，目前您的浏览器无法显示，请换成谷歌(<a href="http://www.google.cn/chrome/intl/zh-CN/landing_chrome.html?hl=zh-CN&brand=CHMI">Chrome</a>)或者火狐(<a href="http://firefox.com.cn/download/">Firefox</a>)浏览器，或者其他游览器的最新版本。</div>
  <div id="wrap">
    <div id="text">
      <div id="code"> <font color="#666666"> <span class="say">亲爱的小猪：</span><br>
        <span class="say"> 这是我们在一起的第三个情人节了哇</span><br>
        <span class="say"> 一晃时间过的好快</span><br>
        <span class="say"> 第一个情人节的画面我还记忆由心</span><br>
        <span class="say"> 那个晚上，让你哭的好难受</span><br>
        <span class="say"> 我总是太过愚笨</span><br>
        <span class="say"> </span><br>
        <span class="say"> 但是我真的很幸运</span><br>
        <span class="say"> 我庆幸一路上有小猪的陪伴</span><br>
        <span class="say"> 我庆幸地理上的距离并没有阻止我们相聚</span><br>
        <span class="say"> 我更庆幸有个那么爱我的你^_^</span><br>
        <span class="say"> </span><br>
        <span class="say"> 在这个情人节快要到来的时候</span><br>
        <span class="say"> 我想对你说...</span><br>
        <span class="say"> 我爱你，我愿意去改正自己的缺点</span><br>
        <span class="say"> 我爱你，我更加珍惜和你在一起的时光</span><br>
        <span class="say"> </span><br>
        <span class="say"> 我知道自己还有很多地方做的不好</span><br>
        <span class="say"> 但是我会去慢慢变好，会改掉那些坏毛病</span><br>
        <span class="say"> </span><br>
        <span class="say"> 我还想对你说:</span><br>
        <span class="say"> 情人节快乐!</span><br>
        <span class="say"> </span><br>
        <span class="say"><span class="space"></span> -- 爱你的小屁孩--</span> </font>
        </p>
      </div>
    </div>
    <div id="clock-box"> <span class="STYLE1"></span><font color="#33CC00"></font> <span class="STYLE1"></span>
      <div id="clock"></div>
    </div>
    <canvas id="canvas" width="1100" height="660"></canvas>

      <!-- 下面实现留言板功能 -->
      <div id="test" class="mainframe">
          <div class="title">心语墙</div>
          <div class="content" contenteditable="true"></div>
          <input type="button" name="submit" value="发表" class="subbtn">
          <?php
          include_once("connect.php");
          $q=mysqli_query($link,"select * from comments");//获取数据库的数据
          $comments = [];
          while($row=mysqli_fetch_array($q)){
              $comments[] = array("id"=>$row['id'],"content"=>$row['content'],"time"=>$row['time']);
          }
          echo '<div class="numofmessage">留言('.count($comments).')</div>';
          echo '<div class="msgFrame">';
          foreach ($comments as $key=>$value){
              echo '<div class="content_1">';
              echo '<div class="conInfo">';
              echo $value['content'];
              echo '</div>';
              echo '<div class="time">'.$value['time'].'</div></div>';
          }
          ?>


      </div>
  </div>

  </div>
</div>

<script>
    </script>
<script>
    (function(){
        var canvas = $('#canvas');
		
        if (!canvas[0].getContext) {
            $("#error").show();
            return false;
        }

        var width = canvas.width();
        var height = canvas.height();        
        canvas.attr("width", width);
        canvas.attr("height", height);
        var opts = {
            seed: {
                x: width / 2 - 20,
                color: "rgb(190, 26, 37)",
                scale: 2
            },
            branch: [
                [535, 680, 570, 250, 500, 200, 30, 100, [
                    [540, 500, 455, 417, 340, 400, 13, 100, [
                        [450, 435, 434, 430, 394, 395, 2, 40]
                    ]],
                    [550, 445, 600, 356, 680, 345, 12, 100, [
                        [578, 400, 648, 409, 661, 426, 3, 80]
                    ]],
                    [539, 281, 537, 248, 534, 217, 3, 40],
                    [546, 397, 413, 247, 328, 244, 9, 80, [
                        [427, 286, 383, 253, 371, 205, 2, 40],
                        [498, 345, 435, 315, 395, 330, 4, 60]
                    ]],
                    [546, 357, 608, 252, 678, 221, 6, 100, [
                        [590, 293, 646, 277, 648, 271, 2, 80]
                    ]]
                ]]
            ],
            bloom: {
                num: 700,
                width: 1080,
                height: 650,
            },
            footer: {
                width: 1200,
                height: 5,
                speed: 10,
            }
        }

        var tree = new Tree(canvas[0], width, height, opts);
        var seed = tree.seed;
        var foot = tree.footer;
        var hold = 1;

        canvas.click(function(e) {
            var offset = canvas.offset(), x, y;
            x = e.pageX - offset.left;
            y = e.pageY - offset.top;
            if (seed.hover(x, y)) {
                hold = 0; 
                canvas.unbind("click");
                canvas.unbind("mousemove");
                canvas.removeClass('hand');
            }
        }).mousemove(function(e){
            var offset = canvas.offset(), x, y;
            x = e.pageX - offset.left;
            y = e.pageY - offset.top;
            canvas.toggleClass('hand', seed.hover(x, y));
        });

        var seedAnimate = eval(Jscex.compile("async", function () {
            seed.draw();
            while (hold) {
                $await(Jscex.Async.sleep(10));
            }
            while (seed.canScale()) {
                seed.scale(0.95);
                $await(Jscex.Async.sleep(10));
            }
            while (seed.canMove()) {
                seed.move(0, 2);
                foot.draw();
                $await(Jscex.Async.sleep(10));
            }
        }));

        var growAnimate = eval(Jscex.compile("async", function () {
            do {
    	        tree.grow();
                $await(Jscex.Async.sleep(10));
            } while (tree.canGrow());
        }));

        var flowAnimate = eval(Jscex.compile("async", function () {
            do {
    	        tree.flower(2);
                $await(Jscex.Async.sleep(10));
            } while (tree.canFlower());
        }));

        var moveAnimate = eval(Jscex.compile("async", function () {
            tree.snapshot("p1", 240, 0, 610, 680);
            while (tree.move("p1", 500, 0)) {
                foot.draw();
                $await(Jscex.Async.sleep(10));
            }
            foot.draw();
            tree.snapshot("p2", 500, 0, 610, 680);

            // 会有闪烁不得意这样做, (＞﹏＜)
            canvas.parent().css("background", "url(" + tree.toDataURL('image/png') + ")");
            canvas.css("background", "#ffe");
            $await(Jscex.Async.sleep(300));
            canvas.css("background", "none");
        }));

        var jumpAnimate = eval(Jscex.compile("async", function () {
            var ctx = tree.ctx;
            while (true) {
                tree.ctx.clearRect(0, 0, width, height);
                tree.jump();
                foot.draw();
                $await(Jscex.Async.sleep(25));
            }
        }));

        var textAnimate = eval(Jscex.compile("async", function () {
		    var together = new Date();
		    together.setFullYear(2015,8 , 7); 			//时间年月日
		    together.setHours(0);						//小时
		    together.setMinutes(0);					//分钟
		    together.setSeconds(0);					//秒前一位
		    together.setMilliseconds(0);				//秒第二位

		    $("#code").show().typewriter();
            document.getElementById("test").style.visibility="visible"

            $("#clock-box").fadeIn(500);
            while (true) {
                $await(Jscex.Async.sleep(1000));
            }
        }));

        var runAsync = eval(Jscex.compile("async", function () {
            $await(seedAnimate());
            $await(growAnimate());
            $await(flowAnimate());
            $await(moveAnimate());

            textAnimate().start();

            $await(jumpAnimate());
        }));

        runAsync().start();
    })();
    </script>

<script type="text/javascript">
    //接下来使用数据库储存留言数据
    <?php
        echo 'var count='.count($comments);
        ?>;
    $(".subbtn").click(function(){
        var text= $(".content").text();
        var time=getCurrentTime();

        if(text==""){
            alert("您还没有输入任何内容！");
        }
        else{
            loadmessage(text,'zipple',time);
            count++;
            $.ajax({
                type: "POST",
                url: "comment.php",
                data: "text=" + text + "&time=" + time,
                dataType : 'JSON',
                success: function(res) {
                    if (res.code == 1) {
                        alert("插入成功！");
                    } else {
                        alert("插入失败！");
                    }
                }
            });
            console.log('success!');
            $(".content").text("");
            $(".numofmessage").text("留言("+count+")");
        }
    })
    function loadmessage(message,id,time){
        //创建content_index
        //包含img.name + mainInfo
        //.userId .conInfo .time

        var contentDiv='<div class="content_1">';
        contentDiv+='<div>'
        contentDiv+='<div class="conInfo">';
        contentDiv+=message;
        contentDiv+='</div> <div class="time">';
        contentDiv+=time;
        contentDiv+='</div> </div> </div>'
        $(".msgFrame").prepend(contentDiv);


    }
    function getCurrentTime(){
        var today=new Date();
        var y=today.getFullYear();
        var mh=today.getMonth();
        mh++;
        var d=today.getDate();
        var h=today.getHours();
        var m=today.getMinutes();
        var s=today.getSeconds();
        m=checkTime(m)
        s=checkTime(s)
        var time=y+"-"+mh+"-"+d+"  "+h+":"+m+":"+s;
        return time;
    }
    function checkTime(i){
        if(i<10)
            i="0"+i
        return i
    }

</script>
</body>
</html>
