window.addEventListener("load",()=>{
    document.addEventListener("contextmenu",function(e){
        e.preventDefault;
    })
    document.addEventListener("selectstart",function(e){
        e.preventDefault();
    })
    let pic=document.querySelector("img");
    document.addEventListener("mouseover",function(e){
        let x=e.pageX;
        let y=e.pageY;
        pic.style.left=x-23+"px";
        pic.style.top=y-22+"px";

    })
})