$(function() {
      // Initialize form validation on the registration form.
      // It has the name attribute "registration"
      $("form[name='submitfrm']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          name: "required",
          password:"required",
          email:"required",
          date:"required",
          tracking_no:"required",
          father_name:"required",
          father_email:"required",
          mother_email:"required",
          mother_name:"required",
          lastname:"required",
          mobno:"required",
          information:{
            required:true
          },
          fileToUpload:{
            required:true,
            accept:"image/*",
            extension: "jpg|png"

          },
          mark:{
            required:true,
            number:true
          },
          class:"required",
          caption:"required",
          content:"required",
          author:"required",
          confirmpassword:"required",
          newpassword:"required",
          password:"required",
          servicetext:{
            required:true,
            minlength:200,
            maxlength:300
          },
        },
        // Specify validation error messages
        messages: {
          tracking_no:"Please Enter Tracking Number",
          email:"Please Enter UserName",
          password:"Please Enter Password",
          name: "Please enter your firstname",
          fileToUpload:"Please upload File",
          mark:{
            required:"Please Enter Mark",
            number:"please Enter Number Only"
          },
           information:{
            required:"Please enter your Information"
          } ,
          servicetext:{
            required:"Please enter your Information",
            minlength:"please enter at least 200 charactor",
            maxlength:"Plese do not enter geater than 250"
          },
          date:{
            required:"please Enter Date"
          },
          fileToUpload:{
            required:"please upload file",
            accept:"only accept Images",
            extension: "only accept png jpg images"
         },
          class:"Plese Enter class",
          caption:"please Enter Caption",
          content:"please Enter content",
          author:"please Enter author",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid

        submitHandler: function(form) {
          form.submit();
        }
      });
    });  