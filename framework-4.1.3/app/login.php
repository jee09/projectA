<!DOCTYPE html>
<meta charset="utf-8"/>
<title>jQuery 로그인</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
    function login_ajax(value) {
        var form_data =
            {
                id: $("#userID").val(),
                id: $("#userPw").val()
            };
        console.log(form_data);

        $.ajax({
            url: 'ajax/login',
            dataType: 'json',
            type: 'post',
            data: $(value).serialize(),
            success: function (value) {

            }
            error: function (xhr, status, error) {

            }
        });
    }
</script>

<form onsubmit="return login_ajax(this)">
    <input type="text" id="userId" placeholder="ID">아이디<br>
    <input type="password" id="userPw" placeholder="PW">비밀번호<br>
    <input type="submit" value="로그인">
</form>
<br><br><br>