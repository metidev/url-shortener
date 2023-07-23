const form = document.querySelector(".wrapper form"),
    fullURL = form.querySelector("input"),
    shortenBtn = form.querySelector("button"),
    blurEffect = document.querySelector(".blur-effect"),
    popupBox = document.querySelector(".popup-box"),
    shortenUrl = popupBox.querySelector("input"),
    saveBtn = popupBox.querySelector("button");
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
            if (data.length <= 5) {
                blurEffect.style.display = "block";
                popupBox.classList.add("show");

                let domain = "localhost/url-shortener?u="
                shortenUrl.value = domain + data;
                saveBtn.onclick = ()=>{
                    location.reload();
                }
            } else {
                alert(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}