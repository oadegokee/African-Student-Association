window.addEventListener("load",function(){
    this.window.addEventListener("resize",function(){
        console.log(this.innerWidth+' '+this.innerHeight)
    })
})