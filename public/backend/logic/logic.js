const Mybtn = document.querySelector('.Mybtn');
// edit_bottom
const edit_bottom = document.querySelector('.edit_bottom');
const edit_top = document.querySelector('.edit_top');
const success_cover = document.querySelector('.success_cover');
// animatedLine
const animatedLine = document.querySelector('.animatedLine');

Mybtn.addEventListener("click",()=>{
    edit_bottom.style.transform = "translateY(0)";
    // edit_top.style.transform = "translateY(-56px)";
    success_cover.style.transform = "translateX(0px)";
    animatedLine.style.width = "100%";
    setTimeout(()=>{
        // edit_bottom.style.transform = "translateY(56px)";
        edit_top.style.transform = "translateY(0px)";
        animatedLine.style.width = "0%";
        success_cover.style.transform = "translateX(295px)";
    },900);
});



