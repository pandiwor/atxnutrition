//This file is reserved for the JavaScript functionality of careers.html

$(function() {
  $("#application").validate( {
    rules: {
      first: "required",
      last: "required",
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
        minlength: 10
      },
    },
    messages : {
      first: "<br> This Field is Required",
      last: "<br> This Field is Required",
      email: "<br> This Field is Required",
      phone: "<br> This Field is Required",
    },
  });
});
