// contact
jQuery(document).ready(function () {

  
  jQuery("#get_contact_form").submit(function (event) {
    event.preventDefault();
    // jQuery("#get_contact_form").addClass("processing-loader");
    
    var ajax_url = jQuery(this).attr("ajax_url");
    
    alert(ajax_url) ; 
    
    var form = jQuery("#get_contact_form").serialize();

    var formdata = new FormData();
    formdata.append("action", "get_contact_data");
    formdata.append("get_contact_data", form);
  
    var formDataString = "";
    for (var pair of formdata.entries()) {
      formDataString += pair[0] + ": " + pair[1] + "\n";
    }
    
    alert(formDataString);
    
    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {

        document.getElementById("get_contact_form").reset(); 

        if (res.success === false) {
          alert(res.message);
        } else {
          alert(res.data);
          window.location.href = home_url;
        }
      },
      error: function (err) {},
    });
  });
});












