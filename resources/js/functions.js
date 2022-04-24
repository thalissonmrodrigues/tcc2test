// Open file input for work file send.
let btn_upload = document.querySelector('.btn-upload');
if(btn_upload) {
  let input_file = document.querySelector('.input-file');
  btn_upload.addEventListener('click', function(e) {
    // Add file name.
    input_file.addEventListener('change', function(e) {
      let file_name = document.querySelector('.file-name');
      file_name.innerHTML = "";
      for(let i = 0; i < input_file.files.length; i++) {
        if(i < input_file.files.length-1) {
          file_name.innerHTML += input_file.files[i].name + ', ';
        }
        else {
          file_name.innerHTML += input_file.files[i].name;
        }
      }
    })

    input_file.click();
  })
}