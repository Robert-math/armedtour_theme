// alert("Some test alert");;

//Header burger scripts
document.querySelector('.header__burger').addEventListener("click",()=>{
    document.querySelector('.header__burger').classList.toggle("active");
    document.querySelector('.header__socialmenu').classList.toggle("active");
    document.querySelector('.header__menu').classList.toggle("active");
    document.body.classList.toggle("lock");
});

document.querySelector('.main').addEventListener("click",()=>{
    document.querySelector('.header__burger').classList.remove("active");
    document.querySelector('.header__socialmenu').classList.remove("active");
    document.querySelector('.header__menu').classList.remove("active");
    document.body.classList.remove("lock");
    document.querySelector('.header__search__content').classList.remove("active");
    
});
//Header search scripts
document.querySelector(".header__search").addEventListener("click",(e)=>{
    
    e.preventDefault();
    document.querySelector(".header__search__content").classList.toggle("active");
    document.body.classList.toggle("lock");
    document.querySelector('.header__burger').classList.remove("active");
    document.querySelector('.header__socialmenu').classList.remove("active");
    document.querySelector('.header__menu').classList.remove("active");
});

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

//Sub menu scripts
    //Add arrows to has-children items
    const hasSubMenu = document.querySelectorAll('.menu-item-has-children');
    for(let i = 0;i<hasSubMenu.length;i++){
        let arrowRight = document.createElement('div');
        let arrowLeft = document.createElement('div');
        arrowRight.className = "arrow_right";
        arrowLeft.className = "arrow_left";
        hasSubMenu[i].appendChild(arrowRight);
        hasSubMenu[i].appendChild(arrowLeft);
    }
    //Event listeners for arrows
    const subMenuArrowsR = document.querySelectorAll('.arrow_right') ;
    const subMenuArrowsL = document.querySelectorAll('.arrow_left');
    for(let i = 0;i< subMenuArrowsR.length;i++){
        subMenuArrowsR[i].addEventListener('click',function(){
            this.classList.toggle('clicked');
            subMenuArrowsL[i].classList.toggle('clicked');
            this.previousElementSibling.classList.toggle('active');
        });  
        subMenuArrowsL[i].addEventListener('click',function(){
            this.classList.toggle('clicked');
            subMenuArrowsR[i].classList.toggle('clicked');
            this.previousElementSibling.previousElementSibling.classList.toggle('active');

            
        });       
    }    
