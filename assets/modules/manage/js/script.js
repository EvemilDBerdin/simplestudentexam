$(document).ready(() => {
    dis.tmDatatables()
    // Password Show/Hide Toggle
    $('#passwordShowToggle').click(() => {
        if ($('#editManageModalForm').find('input[name="password"]').attr('type') === "password") {
            $('form#editManageModalForm').find('input[name="password"]').attr('type', 'text')
            $('form#editManageModalForm').find('button#passwordShowToggle').css('color', 'blue')
            $('form#editManageModalForm').find('button#passwordShowToggle').css('background', 'green')
        }
        else if ($('#editManageModalForm').find('input[name="password"]').attr('type') === "text") {
            $('form#editManageModalForm').find('input[name="password"]').attr('type', 'password')
            $('form#editManageModalForm').find('button#passwordShowToggle').css('color', 'black')
            $('form#editManageModalForm').find('button#passwordShowToggle').css('background', '')
        }
    })


})

function tmDatatables() {
    $('#table_manage').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "responsive": true,
        "destroy": true,
        "order": [
            [0, 'desc']
        ], //Initial no order.
        "columns": [{
            "data": "id",
            "width": "2%"
        },
        {
            "data": "firstname",
            "width": "30%"
        },
        {
            "data": "lastname",
            "width": "30%"
        },
        {
            "data": "age",
            "width": "30%"
        },
        {
            "data": "contact",
            "width": "30%"
        },
        {
            "data": "email",
            "width": "30%"
        },
        {
            "data": "username",
            "width": "30%"
        },
        {
            "data": "status",
            "width": "20%",
            "render": function (data, type, row, meta) {
                let str = '';
                let status = row.status
                if (status === 1) {
                    str += '<label class="badge badge-success">Disabled</label>';
                } else {
                    str += '<label class="badge badge-secondary">Enabled</label>';
                }
                return str;
            }
        },
        {
            "data": "id",
            "width": "30%",
            "render": function (data, type, row, meta) {
                let str = '';
                str += `<button class="btn btn-sm btn-outline-success clickBTN" onclick="assignedTodos(${row.id})">Assigned</button>
                        <button class="btn btn-sm btn-outline-primary clickBTN" onclick="editManageModal(${row.id})">Edit</button> 
                        <button class="btn btn-sm btn-outline-danger clickBTN" onclick="deleteConfirm(${row.id}); event.preventDefault();">Delete</button>`;
                return str;
            }
        },
        ],
        "language": {
            "search": '',
            "searchPlaceholder": "Search keyword...",
            "infoFiltered": ""
        },
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url + "admin/getAllStudent",
            "type": "POST",
        },
    });
}

function editManageModal(id) {
    let temp_password = ''
    let temp_email = ''
    let data = new FormData();
    data.append('id', id)
    sendAjax(base_url + 'manage/getStudentById', data).then((res) => {
        $('input[name="firstname"]').val(res[0].firstname)
        $('input[name="lastname"]').val(res[0].lastname)
        $('input[name="age"]').val(res[0].age)
        $('input[name="contact"]').val(res[0].contact)
        $('input[name="email"]').val(res[0].email)
        $('input[name="username"]').val(res[0].username)
        temp_password = res[0].password
        temp_email = res[0].email
    })
    $('#editManageModal').modal('show')
    $('#editManageModalForm').submit((e) => {
        e.preventDefault()
        let data = new FormData(e.currentTarget)
        data.append('id', id)
        if ($('input[name="password"]').val() === temp_password) {
            if ($('input[name="email"]').val() === temp_email)
                sendAjax(base_url + 'manage/editStudentAdminForm', data).then((res) => {
                    if (res.response == 200) {
                        Swal.fire({ position: 'top-center', icon: 'success', title: res.message, showConfirmButton: false, timer: 1500 }).then(() => {
                            dis.tmDatatables()
                            $('#editManageModal').modal('hide')
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
            else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'email',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

        }
        else {
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: 'Wrong password.',
                showConfirmButton: false,
                timer: 1500
            })
        }
    })
}

function deleteConfirm(id) {
    Swal.fire({
        title: 'Do you want to delete this student?',
        showCancelButton: true,
        confirmButtonText: 'Save',
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData()
            data.append('student_id', id)
            dis.sendAjax(base_url + 'manage/delete_student', data).then((r) => {
                dis.tmDatatables()
                if (r.response == 200) Swal.fire('Deleted!', r.message, 'success')
                else Swal.fire({ icon: 'error', title: 'Oops...', text: 'Something went wrong!' })
            })
        }
    })
}

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