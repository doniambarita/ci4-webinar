/* alert copy link */
function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Link Webinar telah disalin");
}


/* search filter webinar - Ajax */
$(document).ready(function () {
    //jika data sudah siap maka akan dijalangkan
    load_data();
    $("#order_by").change(function () {
        // ini dijalankan ketika ada event dari combo box
        load_data();
    });
});

function load_data() {
    var order_by = $("#order_by").val();
    $.ajax({
        url: base_url+"/Ajax/Webinar/filter",
        data: "order_by=" + order_by,
        success: function (data) {
            $("#data").html(data);
        }
    });
}

/* live search Registered Webinars - Ajax*/
$(document).ready(function(){
    load_webinar();
    function load_webinar(keyword)
    {
        $.ajax({
            method:"POST",
            url: base_url+"/Ajax/RegisteredWebinars/search",
            data: {keyword:keyword},
            success:function(result)
            {
                $('.registeredWebinars').html(result);
            }
        });
     }
    $('#keyword').keyup(function(){
        var keyword = $("#keyword").val();
        load_webinar(keyword);
    });
});

/* Sweet alert2 js jika daftar/batal webinar yang sudah selesai */
const swalDetailWebinar = $('.swal-detail_webinar').data('swal');
if (swalDetailWebinar) {
    Swal.fire({
        icon: 'error',
        title: 'Warning',
        text: swalDetailWebinar
    })
}

/* Sweet alert2 js jika berhasil mengubah profile */
const swalEditProfile = $('.swal-edit_profile').data('swal');
if (swalEditProfile) {
    Swal.fire({
        icon: 'success',
        title: 'Information',
        text: swalEditProfile
    })
}

/* Sweet alert2 js jika berhasil mengubah webinar */
const swalEditWebinar = $('.swal-edit_webinar').data('swal');
if (swalEditWebinar) {
    Swal.fire({
        icon: 'success',
        title: 'Information',
        text: swalEditWebinar
    })
}

/* Sweet alert2 js jika berhasil mengubah webinar */
const swalNewWebinar = $('.swal-new_webinar').data('swal');
if (swalNewWebinar) {
    Swal.fire({
        icon: 'success',
        title: 'Information',
        text: swalNewWebinar
    })
}

/* Sweet alert untuk disabled edit button yang dimana akan dijalnkan jika waktu webinar nya sudah lampau dari hari skrng */
const swalDisabledButton = $('.swal-disabled-button').data('swal');
if (swalDisabledButton) {
    Swal.fire({
        icon: 'info',
        title: 'Information',
        text: swalDisabledButton
    })
}

$(document).ready(function () {
    $("#show_hide_old_password button").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_old_password input').attr("type") == "text") {
            $('#show_hide_old_password input').attr('type', 'password');
            $('#show_hide_old_password i').removeClass("fa-eye-slash");
            $('#show_hide_old_password i').addClass("fa-eye");
        } else if ($('#show_hide_old_password input').attr("type") == "password") {
            $('#show_hide_old_password input').attr('type', 'text');
            $('#show_hide_old_password i').removeClass("fa-eye");
            $('#show_hide_old_password i').addClass("fa-eye-slash");
        }
    });
    $("#show_hide_new_password button").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_new_password input').attr("type") == "text") {
            $('#show_hide_new_password input').attr('type', 'password');
            $('#show_hide_new_password i').removeClass("fa-eye-slash");
            $('#show_hide_new_password i').addClass("fa-eye");
        } else if ($('#show_hide_new_password input').attr("type") == "password") {
            $('#show_hide_new_password input').attr('type', 'text');
            $('#show_hide_new_password i').removeClass("fa-eye");
            $('#show_hide_new_password i').addClass("fa-eye-slash");
        }
    });
    $("#show_hide_password_confirm button").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password_confirm input').attr("type") == "text") {
            $('#show_hide_password_confirm input').attr('type', 'password');
            $('#show_hide_password_confirm i').removeClass("fa-eye-slash");
            $('#show_hide_password_confirm i').addClass("fa-eye");
        } else if ($('#show_hide_password_confirm input').attr("type") == "password") {
            $('#show_hide_password_confirm input').attr('type', 'text');
            $('#show_hide_password_confirm i').removeClass("fa-eye");
            $('#show_hide_password_confirm i').addClass("fa-eye-slash");
        }
    });
});


function previewImg() {
    const sampul = document.querySelector('#sampul');
    // const sampulLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    // ganti URL
    // sampulLabel.textContent = sampul.files[0].name;

    // ganti preview
    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}