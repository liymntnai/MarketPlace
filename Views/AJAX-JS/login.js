const errorMessage = document.getElementById('error-message')
const submit = document.getElementById('submit')
const form = document.querySelector('form')


submit.onclick = () => {
console.log(form)
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/AfJAX-PHP/login.php');
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            let data = xhr.response;
            console.log(data)
            errorMessage.innerHTML = data;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData)
    
    
}