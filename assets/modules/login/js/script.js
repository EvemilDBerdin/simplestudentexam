
$(document).ready(() => {
    // Password Show/Hide Toggle
    $('#passwordShowToggle').click(()=>{  
        if($('#createAccountForm').find('input[name="password"]').attr('type') === "password"){ 
            $('form#createAccountForm').find('input[name="password"]').attr('type', 'text') 
            $('form#createAccountForm').find('button#passwordShowToggle').css('color', 'green') 
        }
        else if($('#createAccountForm').find('input[name="password"]').attr('type') === "text") {
            $('form#createAccountForm').find('input[name="password"]').attr('type', 'password')
            $('form#createAccountForm').find('button#passwordShowToggle').css('color', 'black')
        }
    })

    //login auth 
    $('#userAuth').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget)  
        sendAjax(dis.base_url + 'login/userAuth', data)
        .then(function (res) { 
            if (res.response == 200) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = base_url + 'login'
                })
            }
            else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    })

    //register
    $('#createAccountForm').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget)
        sendAjax(dis.base_url + 'login/createAccount', data).then(function (res) { 
            if (res.response == 200) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    $('#createAccount').modal('hide')
                })
            }
            else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops credentials',
                    text: res.message,
                })
            }
        })
    })
})

function sendAjax(url, data = {}) {
    let promise = new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            async: false,
            processData: false,
            contentType: false,
            beforeSend: function () { },
            success: function (data) {
                resolve(data)
            },
            error: function (xhr) {

            },
        });
    });

    return promise;
}