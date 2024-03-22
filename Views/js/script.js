let fileInput = document.getElementById('file-input')
let imageContainer = document.getElementById('images')
let numFiles = document.getElementById('num-of-files')
let imageUpload = document.querySelector('.imageUpload')
let rightContainer = document.querySelector('.right')
let leftContainer = document.querySelector('.left')
function preview(){
    imageContainer.innerHTML = ""
    numFiles.textContent = `${fileInput.files.length} files selected`

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement('figure')
        let figCap = document.createElement('figcaption')

        figCap.innerText = i.name
        figure.appendChild(figCap)
        reader.onload  = () => {
            let image=document.createElement('img')
            image.setAttribute('src', reader.result)
            figure.insertBefore(image,figCap)
        }
        imageContainer.appendChild(figure)
        reader.readAsDataURL(i)
    }
}
function next() {
    rightContainer.style.display = 'none'
    imageUpload.style.display = 'block'
}
function back() {
    rightContainer.style.display = 'block'
    imageUpload.style.display = 'none'
}