<?php
require_once'../news/header.php';
?>
<!--<div class="container">-->
<div class="row">
   <div class="center-block"  style="width:500px;">
      <h2>VirtualBox 5.1.16 发布，开源虚拟机</h2>
	</br>
	</br>
	</br>
	</div>

 <div class="col-md-12  abc" style="line-height: 2;font-size: 18px">

 </div>

	<script src="../make/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.getJSON ("nr3.txt", function (data){
				for (var i=0;i<data.length;i++){
					$(".abc").append("<div class=\"box\" ><div class=\"r\">"+data[i].content+"</div></div>") ;
				}

			});
		})
	</script>
</div>
</div>
	<footer id="footer">
		<div class="container">

			Copyleft 2011-2017 14110510522傅彦霖 <a href="mailto:fuyanlin14@nou.com.cn"><span class="glyphicon glyphicon-envelope"></span>IT慕课网</a> All rights reversed.<br>
		</div>
	</footer>


	<script src="./bootstrap/jquery-2.1.1.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>

	</body>
	</html>
