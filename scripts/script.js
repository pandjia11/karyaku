const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("p.drag-drop"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");

let gambar; // variabel global

button.onclick = () =>{
    input.click();
}

input.addEventListener("change", function(){
    gambar = this.files[0];
    showFile();
    dropArea.classList.add("active");
});

dropArea.addEventListener("dragover", (event)=>{
    event.preventDefault();
    // console.log("file di area drag");
    dropArea.classList.add("active");
    dragText.textContent = "Taruh Disini"
});

dropArea.addEventListener("dragleave", ()=>{
    // console.log("file di luar drag");
    dropArea.classList.remove("active");
    dragText.textContent = "Arahkan Gambar Disini"
});

dropArea.addEventListener("drop", (event)=>{
    event.preventDefault();
    // console.log("Gambar drop ke droparea");
    gambar = event.dataTransfer.files[0];
    showFile();
});

function showFile(){
    let gambarTipe = gambar.type;
    console.log(gambarTipe);

    let validasiGambar = ["image/jpeg", "image/jpg", "image/png"]
    if (validasiGambar.includes(gambarTipe)){
        let fileReader = new FileReader();
        fileReader.onload = () =>{
            let fileUrl = fileReader.result;
            let imgTag = `<img src="${fileUrl}">`;
            dropArea.innerHTML = imgTag;
        }
        fileReader.readAsDataURL(gambar);
    }else{
        alert("bukan file gambar");
        dropArea.classList.remove("active");
    }
}


const textarea = document.querySelector("textarea");
textarea.addEventListener("keyup", e =>{
    textarea.style.height = "30px";
    let scHeight = e.target.scrollHeight;
    textarea.style.height = `${scHeight}px`;
});
