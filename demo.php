<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>test留言板</title>
    	<link rel="icon" sizes="any" mask href="http://qzonestyle.gtimg.cn/qzone/v8/img/Qzone.svg">
    	<link rel="stylesheet" type="text/css" href="css/qqZone.css">
</head>
<body>

    <!-- 下面实现留言板功能 -->
    <div class="mainframe">
    	<div class="title">留言板</div>
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


</body>
<script type="text/javascript" src="js/jquery.js"></script>
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
</html>