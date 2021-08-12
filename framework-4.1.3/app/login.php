<!DOCTYPE html>
<meta charset="utf-8" />
<title>jQuery 로그인</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#login").click(function() {
            let action = $("#form1").attr('action');
            let form_data = {
                user_id: $("#user_id").val(),
                user_pw: $("#user_pw").val(),
                is_ajax: 1
            };
            $.ajax({
                type: "POST",
                url: action,
                data: form_data,
                success: function(response) {
                    if(response == 'success') {
                        $("#message").html("<p style='color:green;font-weight:bold'>로그인 성공!</p>");
                        $("#form1").slideUp('slow');
                    }
                    else {
                        $("#message").html("<p style='color:red'>아이디 또는 비밀번호가 잘못되었습니다.</p>");
                    }
                }
            });
            return false;
        });
    });
</script>
<body>
<form id="form1" name="form1" action="login_ok.php" method="post">
    <table>
        <tr>
            <td>아이디</td>
            <td><input type='text' id='user_id' name='user_id' tabindex='1'/></td>
            <td rowspan='2'><input type='button' id='login' tabindex='3' value='로그인' style='height:50px'/></td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type='password' id='user_pw' name='user_pw' tabindex='2'/></td>
        </tr>
    </table>
</form>
<div id="message"></div>
</body>