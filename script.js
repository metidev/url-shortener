const form = document.querySelector(".wrapper form"),
    fullURL = form.querySelector("input"),
    shortenBtn = form.querySelector("button"),
    blurEffect = document.querySelector(".blur-effect"),
    popupBox = document.querySelector(".popup-box"),
    form2 = popupBox.querySelector("form"),
    shortenUrl = popupBox.querySelector("input"),
    saveBtn = popupBox.querySelector("button"),
    copyBtn = popupBox.querySelector(".copy-icon"),
    infoBox = popupBox.querySelector(".info-box");
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

                let domain = "localhost/url/"
                shortenUrl.value = domain + data;
                copyBtn.onclick = () => {
                    shortenUrl.select();
                    document.execCommand('copy');
                }
                form2.onsubmit = (e) => {
                    e.preventDefault();
                }
                saveBtn.onclick = () => {
                    let xhr2 = new XMLHttpRequest();
                    xhr2.open("POST", "php/url-save.php", true);
                    xhr2.onload = () => {
                        if (xhr2.readyState === 4 && xhr2.status === 200) {
                            let data = xhr2.response;
                            if (data == "success") {
                                location.reload();
                            } else {
                               infoBox.innerText = data;
                               infoBox.classList.add("error");
                            }
                        }
                    }
                    let short_url = shortenUrl.value;
                    let hidden_url = data;
                    xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr2.send("shorten_url=" + short_url + "&hidden_url=" + hidden_url);
                }
            } else {
                alert(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}