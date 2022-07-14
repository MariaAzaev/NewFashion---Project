function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

$(window).on('load', function() {
$('#createCommunityModal').modal('show');
});

$(document).on("click", ".tile-picker input", function(e) {
  if ($(this).is(":checked")) {
    $(this).closest(".tile-picker").addClass("active");
  } else {
    $(this).closest(".tile-picker").removeClass("active");
  }
});

$(window).on('load', function() {
$('#createCommunityModal').modal('show');
});
