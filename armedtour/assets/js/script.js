// alert("Some test alert");;

//Header burger scripts
document.querySelector('.header__burger').addEventListener("click",()=>{
    document.querySelector('.header__burger').classList.toggle("active");
    document.querySelector('.header__socialmenu').classList.toggle("active");
    document.querySelector('.header__menu').classList.toggle("active");
    document.body.classList.toggle("lock");
});

document.querySelector('.header__list1').addEventListener("click",()=>{
    document.querySelector('.header__burger').classList.remove("active");
    document.querySelector('.header__socialmenu').classList.remove("active");
    document.querySelector('.header__menu').classList.remove("active");
    document.body.classList.remove("lock");
})

//Header position scripts
window.addEventListener('scroll',function(){
    let scrollPos = this.scrollY;
    if(scrollPos >100 && this.screen.width >1024){
        document.querySelector('.header__fixed').classList.add('animate-top');
    }else if(scrollPos < 100){
        document.querySelector('.header__fixed').classList.remove('animate-top');
    }
    if(scrollPos >300){
        document.querySelector('.header__fixed').classList.add("scrolled");
        document.querySelector('.header__fixed').classList.remove('animate-top');
    }else{
        document.querySelector('.header__fixed').classList.remove("scrolled");
    }
})

//GoTop button 
document.querySelector('.footer_gotop').addEventListener('click',()=>{
    window.scrollTo({top: 0, behavior: 'smooth'});
})