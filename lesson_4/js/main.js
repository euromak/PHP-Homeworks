/*
* 3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
* (материал в помощь: http://dontforget.pro/javascript/prostoe-modalnoe-okno-na-jquery-i-css-bez-plaginov/)
* */

const catalog = {
    mainBlock: document.querySelectorAll('.catalog'),
    elementsArr: document.querySelectorAll('.catalog_item'),
    imgArr: document.querySelectorAll('.catalog_img'),
    linkArr: document.querySelectorAll('.catalog_link'),

    init(){
        this.zoomImg();
        addEventListener('click', ()=>{
            console.log(event.target);
            event.preventDefault();

            if(event.target.className === 'catalog_img') {
                this.createModal();
            } else if((event.target.className === 'modal') || (event.target.classList.contains('modal_btn'))){
                console.log(event.target);
                this.closeModal();
            }

        })

    },

    zoomImg(){
        console.log(this.elementsArr);
        console.log(this.imgArr);
        console.log(this.linkArr);
    },

    createModal(){
        this.mainBlock[this.mainBlock.length - 1].insertAdjacentHTML('afterend', `<div class="modal">
        <img src="${event.target.src}" class="modal_img"><div class="btn_close"><span class="modal_btn one"></span>
        <span class="modal_btn two"></span></div></div>`);
        console.log(event.target.src);
    },

    closeModal(){
        document.querySelector('.modal').className = "hidden";
    },

}

addEventListener('load', ()=>{
   catalog.init();
})