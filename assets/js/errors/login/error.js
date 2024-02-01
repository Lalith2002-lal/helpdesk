/****
 * Field error message init
 */

// DECLARING THE VARIABLES HERE
const form = document.getElementById("login_form");
const email = document.getElementById("email");
const password = document.getElementById("password");
const show_Password_Btn = document.getElementById("show");
// console.log(show_Password_Btn);

// REGEX FOR THE EMAIL ID
String.prototype.isEmail = function () {
  return !!this.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
};

// FUNCTION TO DISPLAY THE INPUT NAME IF THAT IS ERROR
function getName(input) {
  return input.getAttribute("data-name");
}

// FUNCTION FOR THE ERROR INPUT
function errorInput(input, message) {
  const formGroup = input.parentElement;
  formGroup.classList.add("error");

  let p = formGroup.querySelector("p");

  if (!p) {
    p = document.createElement("p");
    formGroup.appendChild(p);
  }

  p.textContent = message;
}

// FUNCTION TO CLEAR THE ERROR TAG
function clearError(input) {
  const formGroup = input.parentElement;
  formGroup.classList.remove("error");

  let p = formGroup.querySelector("p");

  if (!p) {
    p = document.createElement("p");
    formGroup.appendChild(p);
  }

  p.textContent = "";
}

// FUNCTION FOR THE SUCCESS INPUT
function successInput(input) {
  const formGroup = input.parentElement;
  formGroup.classList.add("success");
  formGroup.classList.remove("error");
  let p = formGroup.querySelector("p");

  if (!p) {
    p = document.createElement("p");
    formGroup.appendChild(p);
  }
  p.innerHTML = "";
}

// FUNCTION TO CHECK THE VALUE ON THE INPUTS ARE EMPTY OR NOT
function checkRequired(input) {
  const inputContent = input.value.trim();
  if (inputContent === "") {
    errorInput(input, `${getName(input)} is Required`);
  } else {
    successInput(input);
    clearError(input);
    return inputContent;
  }
}

// FUNCTION TO CHECK THE EMAIL IS VALID
function checkEmail(input) {
  const content = input.value.trim();
  const isValid = content.isEmail();

  if (!content) {
    errorInput(input, `${getName(input)} is must required`);
  } else if (!isValid) {
    errorInput(input, `This is not a valid ${getName(input)} address`);
  } else {
    successInput(input);
    return content;
  }
}
