let getStartedButton = document.getElementById("get-started-button");

getStartedButton.onclick = () => {
  let input = document.getElementsByClassName("input")[0];
  input.focus();
};

console.log("index.js is working.");
// getStartedButton.addEventListener("click", function () {
//   //Add those borders to make a fake, focus on login form.
// });

// Trigger Reload Button
let reload_button = document.getElementById("reloadbutton");
<<<<<<< HEAD
reload_button.addEventListener("click", function () {
  basicAjax();
=======
reload_button.addEventListener("click", function(){
  basicAjaxSynchronous();
  console.log("Done");
>>>>>>> 8fdf53293d5358ec8f5206b8ce895c68e7668ae0
});

function basicAjaxSynchronous() {
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // let demo = document.getElementById("demo");
      console.log(this.responseText);
      alert(this.responseText);
    }
  };

  xhttp.open("GET", "/hello_world/processes/process.php?execute=true",false);
  xhttp.send();
}
<<<<<<< HEAD
=======

>>>>>>> 8fdf53293d5358ec8f5206b8ce895c68e7668ae0
