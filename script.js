let generate = document.querySelector("#generate_key");
let get = document.querySelector("#get_key");
let feedback = document.querySelector("#response");

function loadDoc(data) {
  feedback.style.height = 0;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      handleRequest(this.responseText);
    }
  };
  xhttp.open("POST", "request.php", true);
  xhttp.send(data);
}

function handleRequest(response) {
  feedback.style.height = "50px";
  response = JSON.parse(response);
  switch (response.status) {
    case "success":
      feedback.style.background = "#44c559";
      feedback.innerHTML = `YOUR API KEY: ${response.message}`;
      break;
    case "error":
      feedback.style.background = " #ec2e2e";
      feedback.innerHTML = response.message;
      break;
  }
}

generate.addEventListener("submit", function (e) {
  e.preventDefault();
  let data = new FormData(this);
  data.append("generate", true);
  loadDoc(data);
});
get.addEventListener("submit", function (e) {
  e.preventDefault();
  let data = new FormData(this);
  data.append("get", true);
  loadDoc(data);
});
