inputs = document.getElementsByClassName('form');

  for (var index = 1; index < inputs.length; index++ ){
    const myForm = document.getElementById('myForm' + index);
    const inpFile = document.getElementById('inpFile' + index);

    myForm.addEventListener("submit", e =>{
      e.preventDefault();

      const endpoint = "upload.php";
      const formData = new FormData(); //holds file while submit

      formData.append("inpFile", inpFile.files[0]);

      fetch(endpoint, {
        method: "post",
        body: formData
      }).catch(console.error);
      AlertIt();
    });


  }





// const myForm = document.getElementById('myForm');
// const inpFile = document.getElementById('inpFile');

//prevent default webpage behaviour
// myForm.addEventListener("submit", e =>{
//   e.preventDefault();
//
//   const endpoint = "upload.php";
//   const formData = new FormData(); //holds file while submit
//
//   formData.append("inpFile", inpFile.files[0]);
//
//   fetch(endpoint, {
//     method: "post",
//     body: formData
//   }).catch(console.error);
//   AlertIt();
// });


function AlertIt() {
var answer = confirm ("File has been uploaded. Please click on OK to continue.")
if (answer)
document.location='mover.php';
}
