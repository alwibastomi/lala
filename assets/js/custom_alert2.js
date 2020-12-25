$(document).ready(function(){
  if($('.datatable-k').length>0){
    var func = $('.datatable-k').attr('data-func');
    var meth = $('.datatable-k').attr('data-meth');
    var dataTbl = $('.datatable-k').dataTable({
      "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
      "pageLength": 10,
      "processing" : true,
      'serverSide' : true,
      'aaSorting'  :[],
      'ajax' : {
        'url' : BASE_URL+func+"/"+meth,
        'type': 'POST'
      }
    });
  }
    if($('.datatable-ku').length>0){
    var func = $('.datatable-ku').attr('data-func');
    var meth = $('.datatable-ku').attr('data-meth');
    var dataTbl = $('.datatable-ku').dataTable({
      "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
      "pageLength": 10,
      "processing" : true,
      'serverSide' : true,
      'aaSorting'  :[],
      'ajax' : {
        'url' : BASE_URL+func+"/"+meth,
        'type': 'POST'
      }
    });
  }
if($('.datatable-kk').length>0){
    var func = $('.datatable-kk').attr('data-func');
    var meth = $('.datatable-kk').attr('data-meth');
    var dataTbl = $('.datatable-kk').dataTable({
      "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
      "pageLength": 10,
      "processing" : true,
      'serverSide' : true,
      'aaSorting'  :[],
      'ajax' : {
        'url' : BASE_URL+func+"/"+meth,
        'type': 'POST'
      }
    });
  }
  fiscal_year("#fsc", "performance", "performance_filter");
  fiscal_year("#fsc071", "c0re", "p071_filter");
  fiscal_year("#fsc161", "improvement", "p161_filter");
  $(document).delegate('[data-toggle="tooltip"]','mouseover',function(){
    $(this).tooltip('toggle');
  });
  function fiscal_year(selector, func, meth){
    $(selector).change(function(){
      var val = $(this).val();
      $.ajax({
        method: "POST",
        url: BASE_URL+func+"/"+meth,
        data: { val: val },
        dataType: "json",
        success: function(resp){
          if(resp.ret){
            dataTbl.fnDraw();
          }
        }
      });
    });
  }
  function btn_p041(btn){
    $(btn).click(function(){
      var value = $(this).attr("data-value");
      $("#notestt").val(value);
      $.ajax({
        url: BASE_URL+"supporting/p041_filter_notest",
        data:{notest : value},
        chache:false,
        type : 'POST',
        dataType : 'JSON',
        success : function(resp){
          if(resp.ret){
            dataTbl.fnDraw();
          }
        }
      });
    });
  }

  btn_p041("#all");
  btn_p041("#lf");
  btn_p041("#dr");
  btn_p041("#im");
  btn_p041("#mt");
  btn_p041("#pe");
  btn_p041("#ct");
  btn_p041("#ta");
  btn_p041("#ss");
  btn_p041("#di");
  btn_p041("#du");
  btn_p041("#pa");
  btn_p041("#ef");

  $("#notestt").keyup(function(){
    var notest = $(this).val();
    $.ajax({
      url: BASE_URL+"supporting/p041_filter_notest",
      data:{notest : notest},
      chache:false,
      type : 'POST',
      dataType : 'JSON',
      success : function(resp){
        if(resp.ret){
          dataTbl.fnDraw();
        }
      }
    });
  });

  $("#modell").keyup(function(){
    var model = $(this).val();
    $.ajax({
      url: BASE_URL+"supporting/p041_filter_model",
      data:{model : model},
      chache:false,
      type : 'POST',
      dataType : 'JSON',
      success : function(resp){
        if(resp.ret){
          dataTbl.fnDraw();
        }
      }
    });
  });
  

  $("#purposee").keyup(function(){
    var purpose = $(this).val();
    $.ajax({
      url: BASE_URL+"supporting/p041_filter_purpose",
      data:{purpose : purpose},
      chache:false,
      type : 'POST',
      dataType : 'JSON',
      success : function(resp){
        if(resp.ret){
          dataTbl.fnDraw();
        }
      }
    });
  });
});

function success_sweet(text, redirect){
  $(document).ready(function(){
    swal({
      title: 'Success!',
      text: text,
      type: 'success',
      showCancelButton: false,
      closeOnConfirm: false,
      showLoaderOnConfirm: false
    },
    function(){
      location.href=redirect;
    });
  });
}
function failed_sweet(text){
  $(document).ready(function(){
    swal('Failed!', text, 'error');
  });
}
function delete_sweet(button, redirect){
  $(document).ready(function(){
    $(button).click(function(){
      var id = $(this).attr("data-id");
      var url = $(this).attr("data-url");
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: url
        }).done(function(data){
          //swal("Deleted!", "Your file was successfully deleted!", "success");
          swal({
            title: 'Deleted!',
            text: 'Your file was successfully deleted!',
            type: 'success',
            showCancelButton: false,
            closeOnConfirm: false,
            showLoaderOnConfirm: false
          },
          function(){
            location.href=redirect;
          });
        }).error(function(data){
          swal("Oops", "We couldn't connect to the server!", "error");
        });
      });
    });
  });
}
function delete_sweet_dtt(button, redirect){
  $(document).ready(function(){
    $(document).delegate(button, 'click', function(ev){
      ev.preventDefault();
      var id = $(this).attr("data-id");
      var url = $(this).attr("data-url");
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: url
        }).done(function(data){
          //swal("Deleted!", "Your file was successfully deleted!", "success");
          if(data === "0"){
            swal("Failed", "Please delete files associated first!", "error");
          }else{
            swal({
              title: 'Deleted!',
              text: 'Your file was successfully deleted!',
              type: 'success',
              showCancelButton: false,
              closeOnConfirm: false,
              showLoaderOnConfirm: false
            },
            function(){
              location.href=redirect;
            });
          }
        }).error(function(data){
          swal("Oops", "We couldn't connect to the server!", "error");
        });
      });
    });
  });
}
function move_sweet_dtt(button, redirect){
  $(document).ready(function(){
    $(document).delegate(button, 'click', function(ev){
      ev.preventDefault();
      var id = $(this).attr("data-id");
      var url = $(this).attr("data-url");
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: url
        }).done(function(data){
          //swal("Deleted!", "Your file was successfully deleted!", "success");
          if(data === "0"){
            swal("Failed", "Please delete files associated first!", "error");
          }else{
            swal({
              title: 'Deleted!',
              text: 'Your file was successfully deleted!',
              type: 'success',
              showCancelButton: false,
              closeOnConfirm: false,
              showLoaderOnConfirm: false
            },
            function(){
              location.href=redirect;
            });
          }
        }).error(function(data){
          swal("Oops", "We couldn't connect to the server!", "error");
        });
      });
    });
  });
}
