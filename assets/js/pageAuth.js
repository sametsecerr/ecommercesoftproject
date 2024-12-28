$(document).ready(function() {
    const token = localStorage.getItem('token');
    if (!token) {
        window.location.href = './login';
        return;
    }
    $.ajax({
        url: './system/check_auth.php',
        method: 'GET',
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function(response) {
            console.log('Auth successful');
        },
        error: function() {
            localStorage.removeItem('token');
            window.location.href = './login';
        }
    });
});