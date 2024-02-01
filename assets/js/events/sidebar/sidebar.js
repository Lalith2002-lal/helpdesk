document.addEventListener("DOMContentLoaded", function () {
  const menuBtn = document.querySelector(".menu_btn");
  const sidebar = document.querySelector(".sidebar_container");
  const closeBtn = document.querySelector(".close_btn");
  // console.log(closeBtn);
  //   ADDING THE ACTIVE CLASS TO BRING THE SIDEBAR
  menuBtn.addEventListener("click", function () {
    sidebar.classList.add("active");
    menuBtn.style.visibility = "hidden";
  });

  //   REMOVING THE ACTIVE CLASS TO SEND THE SIDEBAR
  closeBtn.addEventListener("click", function () {
    sidebar.classList.remove("active");
    menuBtn.style.visibility = "visible";
  });
});
