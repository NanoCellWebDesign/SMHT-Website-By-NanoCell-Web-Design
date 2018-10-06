$(document).on("click", ".open-AddBookDialog", function () {
     var imgId = $(this).data('id');
     $(".modal-body #selImgText").val( imgId );
     $(".modal-body #selImg").attr('src', imgId)
    // Not necessary to call the modal
    // $('#addBookDialog').modal('show');
});
