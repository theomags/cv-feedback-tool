
inputs = document.getElementsByTagName('input');

function changeTextofCheckboxes(){
  for (var index = 1; index < inputs.length; index++ ){
    var x = document.getElementById("inp" + index).value;
    document.getElementById("com" + index).innerHTML = x;
  }
}

function getValueOfCheckboxes(){
  var checks = document.getElementsByClassName('com');
  var str = " ";

  for (i = 0; i < checks.length; i++){
    if (checks[i].checked === true){
      str += checks[i].value + " ";
    }
  }
  alert("Summary is being created!");
  var newForm = document.getElementById("form");
  newForm.innerHTML += str;
}

function getForm(){
    document.getElementById("form").style.visibility = "visible";
    document.getElementById("form").style.display = "block";
    document.getElementById("form").style.margin = "auto";
    document.getElementById("form1").style.visibility = "visible";
    document.getElementById("form1").style.display = "block";
    document.getElementById("form1").style.margin = "auto";
    document.getElementById("form2").style.visibility = "visible";
    document.getElementById("form2").style.display = "table";
    document.getElementById("form2").style.margin = "auto";
    document.getElementById("applyButton").style.visibility = "hidden";
    document.getElementById("applyButton").style.display = "none";
}

function showCheckboxes(element){
    var id = element.id;
    for (var index = 0; index < inputs.length; index++ ){
      var show = document.getElementById(id + "group" + index);
      if (show.style.display === 'block') {
        show.style.display = 'none';
      } else {
        show.style.display = 'block';
      }
    }
  }

  function submitforms(){
      document.mainForm.action = "remover.php";
      document.mainForm.target = "my_iframe1";
      document.mainForm.submit();
      document.mainForm.action = "mail.php";
      document.mainForm.target = "my_iframe2";
      document.mainForm.submit();
      window.location='../upWeb';
      return true;
  }

  function addSpace() {
    for (i=0;i<3;i++){
      var br = document.createElement("br");
      var add = document.getElementById("bar");
      add.appendChild(br);
    }
  }
