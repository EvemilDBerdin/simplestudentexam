$(document).ready(() => {
  dis.table_admin()
})

function table_admin() {
  $('#table_admin').DataTable({
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
      "data": "user_status",
      "width": "20%",
      "render": function (data, type, row, meta) {
        var str = '';
        var status = row.status
        if (status === 1) {
          str += '<label class="badge badge-success">Disabled</label>';
        } else {
          str += '<label class="badge badge-secondary">Enabled</label>';
        }
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
      "url": dis.base_url + "admin/getAllStudent",
      "type": "POST",
    },
  });
}
function sendAjax(url, data = {}) {
  var promise = new Promise(function (resolve, reject) {
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