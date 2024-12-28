var url = 'http://localhost/e-commerce/';
$.ajaxSetup({
    beforeSend: function(xhr) {
        const token = localStorage.getItem('token');
        if (token) {
            xhr.setRequestHeader('Authorization', 'Bearer ' + token);
            console.log('Token gönderiliyor:', token);
        }
    }
});

function registerbutton() {
    $('#sendButton').prop('disabled',true);
    var data = $('#registerForm').serialize();
    $.ajax({
        type : "POST",
        url : url + "system/register.php",
        data : data,
        success : function(result) {
            if($.trim(result) === "empty"){
                alert("Lütfen tüm alanları doldurunuz.");
                $('#sendButton').prop('disabled',false);

            }else if($.trim(result) === "format"){
                alert("E posta formatında bir hata var.");
                $('#sendButton').prop('disabled',false);

            } else if($.trim(result) === "match"){
                alert("Şifreler eşleşmiyor.");
                $('#sendButton').prop('disabled',false);

            } else if($.trim(result) === "already"){
                alert("Bu e posta adresi zaten kullanılıyor.");
                $('#sendButton').prop('disabled',false);

            } else if($.trim(result) === "error"){
                alert("Bir hata oluştu.");
                $('#sendButton').prop('disabled',false);

            }
            else if($.trim(result) === "success"){
                alert("Üye olma işlemi başarılı Lütfen Giriş Ypınız.");
                $('#sendButton').prop('disabled',false);
                window.location.href = url +"login";
            }
        }
    });

}

function loginbutton() {
    $('#loginSendButton').prop('disabled', true);
    var data = $('#loginForm').serialize();
    $.ajax({
        type: "POST",
        url: url + "system/login.php",
        data: data,
        success: function(result) {
            try {
                var response = JSON.parse(result);
                console.log('Login response:', response);
                
                if (response.status === "success") {
                    // Token'ı kaydet
                    localStorage.setItem('token', response.token);
                                        $.ajax({
                        type: 'GET',
                        url: url + 'system/check_auth.php',
                        headers: {
                            'Authorization': 'Bearer ' + response.token
                        },
                        success: function() {
                            window.location.href = url;
                        },
                        error: function(xhr, status, error) {
                            console.error('Auth check failed:', error);
                            alert('Yetkilendirme hatası oluştu!');
                        }
                    });
                }
            } catch(e) {
                console.error('Parse error:', e);
                if ($.trim(result) === "empty") {
                    alert("Lütfen tüm alanları doldurunuz.");
                } else if ($.trim(result) === "password") {
                    alert("Şifre Yanlış...");
                } else {
                    alert("Bilgilerden biri yanlış.");
                }
            }
            $('#loginSendButton').prop('disabled', false);
        }
    });
}

function logout() {
    $.ajax({
        type: "POST",
        url: url + "system/logout.php",
        success: function(response) {
            // LocalStorage'dan token'ı sil
            localStorage.removeItem('token');
            
            // Ana sayfaya yönlendir
            window.location.href = url + 'login';
        },
        error: function() {
            alert('Çıkış yapılırken bir hata oluştu!');
        }
    });
}

