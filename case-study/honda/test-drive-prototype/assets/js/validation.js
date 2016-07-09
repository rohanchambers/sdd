$(document).ready(function() {
  $("#form1").validate({
    rules: {
      first_name: "required",
      last_name: "required",
      house_name: "required",
      postcode: "required",
      address: "required",
      town: "required",
      select: "required",
      telephone: "required",
      title: "required",
      contact: "required",  
      // simple rule, converted to {required: true}
      email: { // compound rule
      required: true,
      email: true
      },
    }

  });
});