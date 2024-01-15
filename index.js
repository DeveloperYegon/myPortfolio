window.onload = function(){
    window.setTimeout(function(){window.scrollTo(0,0);},
    10);
    };
const toggleBtn= document.querySelector(".nav-toggle");
const submitBtn= document.getElementById("btn");
const links =document.querySelector(".links");
//console.log(toggleBtn);
//console.log(document);
toggleBtn.addEventListener("click",()=>{
    //console.log(toggleBtn);
    //console.log(document);
    //toggleBtn.classList.contains("hi");
    //console.log(links.classList.contains("links"));
    links.classList.toggle("show-navbar");
});
//submitBtn.addEventListener("click",()=>{});