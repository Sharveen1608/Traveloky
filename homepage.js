var newsbutton=document.querySelector("#newsbutton")

function buttonfade(){
    if(this.scrollY > this.innerHeight/2.3){
        newsbutton.className="fade"
    }else{
        newsbutton.className=""
    }
}
window.addEventListener("scroll",buttonfade);

var wrapper=document.querySelector("#wrapper")

function newsfade(){
    if(this.scrollY>this.innerHeight/2.3){
        wrapper.className="image"
    }else{
        wrapper.className=""
    }
}
window.addEventListener("scroll",newsfade);


var quickbutton1=document.querySelector("#quickbutton1")

function buttonzoom1(){
    if(this.scrollY>this.innerHeight/1.1){
        quickbutton1.className="zoom"
    }else{
        quickbutton1.className=""
    }
}

window.addEventListener("scroll",buttonzoom1);

var quickbutton2=document.querySelector("#quickbutton2")

function buttonzoom2(){
    if(this.scrollY>this.innerHeight/1.1){
        quickbutton2.className="zoom"
    }else{
        quickbutton2.className=""
    }
}

window.addEventListener("scroll",buttonzoom2);

var quickbutton=document.querySelector("#quickbutton3")

function buttonzoom3(){
    if(this.scrollY>this.innerHeight/1.1){
        quickbutton3.className="zoom"
    }else{
        quickbutton3.className=""
    }
}

window.addEventListener("scroll",buttonzoom3);