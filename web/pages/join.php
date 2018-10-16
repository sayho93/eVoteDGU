<?php
/**
 * Created by PhpStorm.
 * User: sayho
 * Date: 2018. 10. 15.
 * Time: PM 5:08
 */
?>

<? include_once "../inc/header.php"; ?>

<script>
    $(document).ready(function(){
        $(".jSubmit").click(function(){
            var id = $(this).attr("id");
            var next = $(this).attr("next");
            if(confirm("상태를 변경하시겠습니까?")){
                var ajax = new AjaxSender("/route.php?cmd=Management.changeFpubStatus", true, "json", new sehoMap().put("id", id).put("next", next));
                ajax.send(function(data){
                    if(data.returnCode === 1){
                        alert("변경되었습니다");
                        location.reload();
                    }
                })
            }
        });
    });
</script>

<body>

<header id="home">
    <div class="bg-img" style="background-image: url('/web/img/background1.jpg');">
        <div class="overlay"></div>
    </div>
    <? include_once "../inc/navigator.php"; ?>

    <form id="form">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <div class="home-content">
                            <h2 class="white-text">회원가입</h2>
                        </div>
                    </div>
                </div>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">이메일</span>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="input-group input-group-lg" style="margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">비밀번호</span>
                    <input type="text" class="form-control" name="password">
                </div>

                <div class="input-group input-group-lg" style="margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">이름</span>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="input-group input-group-lg" style="margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">휴대전화번호</span>
                    <input type="text" class="form-control" name="phone">
                </div>

                <div class="input-group input-group-lg" style="margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">닉네임</span>
                    <input type="text" class="form-control" name="nick">
                </div>

                <button class="btn btn-primary btn-lg pull-right jSubmit" style="margin-top: 10px;">회원가입</button>

            </div>
        </div>
    </form>

</header>


<!--<div id="about" class="section md-padding">-->
<!---->
<!--</div>-->



<? include_once "../inc/footer.php"; ?>
