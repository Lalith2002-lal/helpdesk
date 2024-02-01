// FUNCTION TO SHOW AND HIDE PASSWORD
function show_and_hide_password(input) {
  if (input.type === "password") {
    input.type = "text";
  } else {
    input.type = "password";
  }
}

show_Password_Btn.addEventListener("click", function () {
  show_and_hide_password(password);
});

/**
 * Form validation and submission
 */

// document.getElementById("form_submit").addEventListener("click", (e) => {
//   e.preventDefault();
//   const formData = new FormData(document.getElementById("login-form"));
//   const email = login_form_validation.email(
//     document.getElementById("email").value,
//     "error-email"
//   ); //check email is valid
//   const password = login_form_validation.password(
//     document.getElementById("password").value,
//     "error-password"
//   ); // check password is empty
//   if (email && password) {
//     fetch("login.php", {
//       method: "POST",
//       body: formData,
//     })
//       .then((response) => {
//         if (!response.ok) {
//           throw new Error("The request http request is invalid");
//         }
//         return response.json();
//       })
//       .then((data) => {
//         if (data.success) {
//           window.location.href = "dashboard.php";
//         } else {
//           console.log(data.message);
//         }
//       })
//       .catch((error) => {
//         console.error(error);
//       });
//   } else {
//     return;
//   }
// });

// FORM SUBMISSION EVENT
form.addEventListener("submit", function (e) {
  e.preventDefault();

  const isEmailValid = checkEmail(email);
  const isPasswordEntered = checkRequired(password);

  if (isEmailValid && isPasswordEntered) {
    const formData = new FormData();
    formData.append("email", email.value.trim());
    formData.append("password", password.value.trim());

    fetch("includes/login/login.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error("The request http request is invalid");
        }
        return response.json();
      })
      .then((data) => {
        if (data.message === "userId or Password is incorrect!") {
          swal({
            title: "Login!",
            text: data.message,
            icon: "error",
            button: "Try Again!",
          });
        } else if (data.message === "Login Success") {
          console.log("Login Success, Data arrived here");
          window.location.href = "dashboard/dashboard.php";
        }
      })
      .catch((errorPrompt) => {
        console.error(errorPrompt);
      });
  }
});
