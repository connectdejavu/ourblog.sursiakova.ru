let inpImgUser = document.querySelector('.input-user-photo') 
let imgToPrev = document.querySelector('.imgToPrev')


inpImgUser.addEventListener('change', ()=>{
    console.log(inpImgUser.files)
    imgToPrev.src=URL.createObjectURL(inpImgUser.files[0])
})



