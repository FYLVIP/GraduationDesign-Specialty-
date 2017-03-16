<?php
require_once'../coursera/header.php';
?>

<div class="container" >

    <video width="1200px" controls>
        <source src="../video/yd2.mp4" type="video/mp4" id="v">
        您的浏览器不支持 HTML5 video 标签。
    </video>

<!--    <button type="button" class="btn btn-success pull-right" style=" margin-top: 10px; ">收藏</button>-->
        <button type="button" class="btn btn-success " style=" margin-top: 10px; " id="sc">收藏</button>

</div>

<!---->
<div class="container" style="margin-top: 10px">
    <table class="table table-bordered" style="width: 1200px">
        <thead>
        <tr>
            <th style="width: 14%">用户</th>
            <th>留言</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class='user'><img src='..\img\userimg\01.jpg' class='img-circle'><p>测试用户</p></td>
            <td class='cont'><div class='text'>asasasdasdasdsadsa</div>
                <div class='info'>

                    <span class='sdtime'>2017-03-10 22:31:37</span>
                    <span class='sdtime'><a href='javascript:void(0);' >删除</a></span></div>
                <div class='float'><p class='text-muted text-right'>#3</p></div></td>
        </tr><tr>
            <td class='user'><img src='..\img\userimg\06.jpg' class='img-circle'><p>开发用户</p></td>
            <td class='cont'><div class='text'>asdasdsad</div>
                <div class='info'>

                    <span class='sdtime'>2017-03-10 21:16:25</span>
                    <span class='sdtime'><a href='javascript:void(0);'>删除</a></span></div>
                <div class='float'><p class='text-muted text-right'>#2</p></div></td>
        </tr><tr>
            <td class='user'><img src='..\img\userimg\06.jpg' class='img-circle'><p>开发用户</p></td>
            <td class='cont'><div class='text'>asdasdasd</div>
                <div class='info'>

                    <span class='sdtime'>2017-03-10 21:16:16</span>
                    <span class='sdtime'><a href='javascript:void(0);' >删除</a></span></div>
                <div class='float'><p class='text-muted text-right'>#1</p></div></td>
        </tr>
        </tbody>
    </table>

    <div class="container text-center">
        <ul class='pagination'><li><a href='#'>&laquo;</a></li><li class='active'><a href='#'>1</a></li><li><a href='#'>&raquo;</a></li></ul>    </div>

    <form role="form" id="sendmeg" style="width: 1200px">
        <div class="form-group">
            <label for="name">发表评论</label>
            <textarea class="form-control" rows="3" name="text"></textarea>
        </div>

        <button type="button" class="btn btn-default  pull-right">发布</button>
    </form>

</div>


<!---->
</div>


<footer id="footer">
    <div class="container">

        Copyleft 2011-2017 14110510522傅彦霖 <a href="mailto:fuyanlin14@nou.com.cn"><span class="glyphicon glyphicon-envelope"></span>IT慕课网</a> All rights reversed.<br>
    </div>
</footer>

<script src="../make/jquery-2.1.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../session.js">

</script>
<script>
    $("#sc").click(function () {
        var src=$("#v").attr("src");
        $.session.set("video","sc");
    })
</script>
</body>
</html>