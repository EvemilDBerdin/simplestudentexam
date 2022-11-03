
$(document).ready(() => {
  this.teDatatables() 
})


function teDatatables() {
  $('#table_exam').DataTable({
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
      "data": "questionaire_id",
      "width": "30%"
    },
    {
      "data": "users_id",
      "width": "30%"
    },
    {
      "data": "student_answer",
      "width": "30%"
    },
    {
      "data": "correct_answer",
      "width": "30%"
    },
    {
      "data": "exam_status",
      "width": "20%",
      "render": function (data, type, row, meta) {
        var str = '';
        var status = row.status
        // if (status === 1) {
        //   str += '<label class="badge badge-success">Disabled</label>';
        // } else {
        //   str += '<label class="badge badge-secondary">Enabled</label>';
        // }
        str += '<label class="badge badge-secondary">Enabled</label>';
        return str;
      }
    },
    {
      "data": "id",
      "width": "30%",
      "render": function (data, type, row, meta) {
        var str = '';
        str += '<button id="btnAssignTodos" class="btn btn-sm btn-outline-success clickBTN" onclick="assignedTodos(' + row.id + ')">Assigned</button>';
        str += '<button class="btn btn-sm btn-outline-primary clickBTN" onclick="editTodosModal(' + row.id + ')">Edit</button>';
        str += '<button class="btn btn-sm btn-outline-danger clickBTN" onclick="deleteConfirm(' + row.id + '); event.preventDefault();">Delete</button>';
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
      "url": dis.base_url + "exam/e_result",
      "type": "POST",
    },
  });
}

function sendAjax(url, data = {}) {
  var promise = new Promise(function(resolve, reject) {
      $.ajax({
          type: 'POST',
          url: url,
          data: data,
          dataType: 'json',
          async: false,
          processData: false,
          contentType: false,
          beforeSend: function() {},
          success: function(data) {
              resolve(data)
          },
          error: function(xhr) {

          },
      });
  });

  return promise;
}