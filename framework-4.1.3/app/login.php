<!DOCTYPE html>
<meta charset="utf-8" />
<title>jQuery 로그인</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
    function login_ajax(value)
    {
        var form_data =
            {
                id: $("#userId").val(),
                pw: $("#userPw").val()
            };
        console.log(form_data);

        $.ajax({
            type: "GET",
            url: "/Models/ajax.php",
            dataType: "json",
            data: form_data,
            success: function(response)
            {
                alert("code:"+response.status+"\n");
            },
            error:function(request,status,error)
            {
                alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
            }
        });
        console.log(1);
    }
</script>

<form onsubmit="return login_ajax(this)">
    <input type="text" id="userId" placeholder="ID">아이디<br>
    <input type="password" id="userPw" placeholder="PW">비밀번호<br>
    <input type="submit" value="로그인">
</form>
<br><br><br>