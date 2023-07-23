const form = document.querySelector(".wrapper form"),
    fullURL = document.querySelector("input"),
    shortenBtn = document.querySelector("button");
form.onsubmit = (e) => {
    e.preventDefault();
}
shortenBtn.onclick = () => {
    // Ajax code
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/url-controll.php", true);
    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = xhr.response;
            console.log(data);
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}