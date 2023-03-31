$(document).ready(()=> {
let upload = document.getElementsByClassName("upload");
    for(let i=0; i< upload.length; i++) {
      upload[i].addEventListener("click",()=>{
        document.getElementsByClassName("inpFile")[i].click();
        document.getElementsByClassName("inpFile")[i].addEventListener("change",()=> {
            document.getElementsByClassName("uploadImage")[i].src = window.URL.createObjectURL(event.target.files[0]);
        })
       
      })
    }
})