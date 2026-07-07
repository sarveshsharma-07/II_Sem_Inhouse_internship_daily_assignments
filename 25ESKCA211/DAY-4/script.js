let apple=0,banana=0;

document.querySelectorAll("img").forEach(img=>{
    img.style.left=Math.random()*(window.innerWidth-100)+"px";
    img.style.top=Math.random()*(window.innerHeight-120)+"px";
});
function clickImage(type,img){

    if(type=="apple"){
        document.getElementById("apple").innerText=++apple;
    }else{
        document.getElementById("banana").innerText=++banana;
    }
    img.style.left=Math.random()*(window.innerWidth-100)+"px";
    img.style.top=Math.random()*(window.innerHeight-120)+"px";
}
