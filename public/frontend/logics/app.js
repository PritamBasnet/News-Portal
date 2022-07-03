const MyReadMore = document.querySelector('.MyReadMore');
const ReadMoreText = document.querySelector('.ReadMore-Text');
const ReadMoreMagic = document.querySelector('.ReadMore-Magic');
MyReadMore.addEventListener("mouseover",()=>{
    ReadMoreMagic.style.width = "100%";
    ReadMoreMagic.style.height = "100%";
});
MyReadMore.addEventListener("mouseout",()=>{
    ReadMoreMagic.style.height = "0%";
    ReadMoreMagic.style.width = "0%";
});
// Let us make the logic for the sidebar
const sideBar = document.getElementById('sideBar');
const bars = document.querySelector('.Area-Bar');
// const allStripte = document.querySelectorAll('.stripe');
const stripe2 = document.querySelector('.stripe2');
const stripe1 = document.querySelector('.stripe1');
const stripe3 = document.querySelector('.stripe3');
const sideBarCheck = sideBar.style.transform;
const SideBar_Class = document.querySelector('.SideClose');
let bars2;
bars.addEventListener("click", ()=>{
    bars.classList.toggle("active");
    sideBar.classList.toggle("sideBar2");
    bars2 = document.querySelector('.active');
    // sideBar.style.transform = "translateX(0px)";
});
bars2.addEventListener("click",()=>{
    sideBar.style.transform = "translateX(-380px)";
})
