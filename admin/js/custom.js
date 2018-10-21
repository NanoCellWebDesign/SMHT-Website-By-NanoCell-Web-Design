$(document).on("click", ".open-UploadModalLink", function () {
     var imgId = $(this).data('id');
     $(".modal-body #selImgText").val( imgId );
     $(".modal-body #selImg").attr('src', imgId);
    // Not necessary to call the modal
    // $('#addBookDialog').modal('show');
});
$(document).on("click", ".open-BoxOfficeModalLink", function () {
     var boxId = $(this).data('id');
     $(".modal-body #eventText").val( boxId );
    // Not necessary to call the modal
    // $('#addBookDialog').modal('show');
});
