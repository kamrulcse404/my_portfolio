// contact
jQuery(document).ready(function () {
  jQuery("#get_contact-form").submit(function (event) {
    event.preventDefault();
    // jQuery("#get_contact-form").addClass("processing-loader");
    
    var ajax_url = jQuery(this).attr("ajax_url");

    alert(ajax_url);
    
    var form = jQuery("#get_contact-form").serialize();
    
    
    var formdata = new FormData();
    
    formdata.append("action", "get_contact_data");
    formdata.append("get_contact_data", form);

    // alert('Hello');

    jQuery.ajax(ajax_url, {
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        document.getElementById("get_contact-form").reset();

        if (res.success === false) {
          alert(JSON.stringify(res.message));
        } else {
          alert(res.data);
          window.location.href = home_url;
        }
      },

      error: function (err) {},
    });
  });
});
