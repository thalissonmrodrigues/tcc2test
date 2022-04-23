// Open file input for work file send.
let btn_upload = document.querySelector('.btn-upload');
if(btn_upload) {
  let input_file = document.querySelector('.input-file');
  btn_upload.addEventListener('click', function(e) {
    input_file.addEventListener('change', function(e) {
      document.querySelector('.file-name').innerHTML = input_file.files[0].name;
    })
    input_file.click();
  })
}