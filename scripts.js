$(document).ready(function(){
  $('#bookForm').submit(function(e){
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: formData,
      success: function(response){
        alert('Sách đã được lưu thành công!');
        $('#bookForm')[0].reset();
      },
      error: function(){
        alert('Có lỗi xảy ra, vui lòng thử lại sau.');
      }
    });
  });
});
