const form = document.querySelector(".wrapper form"),
    fullURL = document.querySelector("input"),
    shortenBtn = document.querySelector("button");
form.onsubmit = (e)=>{
    e.preventDefault();
}
shortenBtn.onclick = ()=>{
   	// Ajax code
    let xhr = new XMLHttpRequest();
    xhr.open("POST","");
    xhr.onload = ()=>{}
    xhr.send();
}