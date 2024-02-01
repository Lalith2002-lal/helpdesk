// FUNCTIONS TO WORK AFTER THE FORM SUBMISSION
/*Form Validation */
$.validator.setDefaults({
  submitHandler: function () {
    // $.ajax({
    //   url: "../../../../../errorcode/includes/tickets/tickets.php",
    //   type: "post",
    //   data: $("#form").serialize(),
    //   success: function (result) {
    //     alert(result);
    //   },
    // });
    //../../../../../errorcode/includes/tickets/tickets.php
    const form = document.getElementById("form");
    fetch("../../../../../errorcode/includes/tickets/tickets.php", {
      method: "POST",
      body: new FormData(form),
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("The request http request is invalid");
        }
        return response.text();
      })
      .then((data) => {
        alert("Submitted data:\n" + data);
      })
      .catch((errorPrompt) => {
        console.error(errorPrompt);
      });
  },
});

// Form Validation

$("#form").validate({
  // Requiring fields
  rules: {
    ticket_title: {
      required: true,
    },
    assigning_group: {
      required: true,
    },
    assigning_to: {
      required: true,
    },
    priority: {
      required: true,
    },
    category: {
      required: true,
    },
    date: {
      required: true,
    },
    hours_needed: {
      required: true,
    },
    file: {
      required: true,
    },
    description: {
      required: true,
    },
  },
  //   Message to show if that the input was error
  messages: {
    ticket_title: {
      required: "Please Enter Your Email Address",
    },
    assigning_group: {
      required: "Please select the assigning group",
    },
    assigning_to: {
      required: "Please select the assigning to",
    },
    priority: {
      required: "Please select the priority",
    },
    category: {
      required: "Please select the category",
    },
    date: {
      required: "Please enter the  date",
    },
    hours_needed: {
      required: "Please enter the hours required",
    },
    file: {
      required: "Please choose the file",
    },
    description: {
      required: "Please enter the description",
    },
  },
});
