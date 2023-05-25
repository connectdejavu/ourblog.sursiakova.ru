let inpImgNewPost = document.querySelector('.input-image-new-post') 
let imgPrevNewPost = document.querySelector('.imgToPrevNewPost')

inpImgNewPost.addEventListener('change', ()=>{
    console.log(inpImgNewPost.files)
    imgPrevNewPost.src=URL.createObjectURL(inpImgNewPost.files[0])
})
