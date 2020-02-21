let btn = document.getElementById("button");

btn.addEventListener("click", openForm);

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("page-mask").style.display = "none";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("page-mask").style.display = "block";
}