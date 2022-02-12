// document.addEventListener("DOMContentLoaded", function() {
//     var splide = new Splide( '.splide', {
//         direction: 'ttb',
//         height   : '20rem',
//         wheel    : true,
//         // gap        : '1.4rem',
//         breakpoints: {
//             765: {
//                 perPage: 1,
//             },
//         }
//     } );
    
//     splide.mount();
// });

$(".toggle-password").click(function () {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// validasi input
function validasi_user(form) {
    var minchars = 5;
    //validasi dimulai
    if (form.username.value == "") {
        alert("Username TIdak Boleh Kosong!");
        form.username.focus();
        return (false);
    } else if (form.username.value.length < minchars) {
        alert("Username Minimal 5 Karakter!");
        form.username.focus();
        return (false);
    }
}

function validasi_ubahpw(form) {
    var minchars = 5;
    //validasi dimulai
    if (form.password_lama.value == "") {
        alert("Password Lama Harus Diisi!");
        form.password_lama.focus();
        return (false);
    } else if (form.password_baru.value == "") {
        alert("Password Baru Harus Diisi!");
        form.password_baru.focus();
        return (false);
    } else if (form.password_baru.value.length < minchars) {
        alert("Password Baru Minimal 5 Huruf!");
        form.password_baru.focus();
        return (false);
    } else if (form.konfirmasi_password.value == "") {
        alert("Konfirmasi Password Harus Diisi!");
        form.konfirmasi_password.focus();
        return (false);
    }

}

// validasi profil
function validasi_profil(form) {
    //validasi dimulai
    if (form.nama.value == "") {
        alert("Nama TIdak Boleh Kosong!");
        form.nama.focus();
        return (false);
    } else if (form.username.value == "") {
        alert("Username Tidak Boleh Kosong!");
        form.username.focus();
        return (false);
    }
}

// validasi huruf dan angka
$(document).ready(function () {

    $('#alpabet').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9 /,-.& )(]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#password-field').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#password-field2').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#password-field3').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#alpabet_user').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9_-]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });

    $('#akunName').keyup(function () {
        var $th = $(this);
        $th.val($th.val().replace(/[^a-zA-Z0-9 /,-.& _)(]/g, function (str) {
            alert('Kamu menulis " ' + str + ' ".\n\ dimohon huruf dan angka saja.');
            return '';
        }));
    });
})

$("#alpabet_user").on({
    keydown: function (e) {
        if (e.which === 32)
            return false;
    },
    keyup: function () {
        this.value = this.value.toLowerCase();
    },
    change: function () {
        this.value = this.value.replace(/\s/g, "");

    }
})