/*
* 3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
* (материал в помощь: http://dontforget.pro/javascript/prostoe-modalnoe-okno-na-jquery-i-css-bez-plaginov/)
* */
"use strict";

const catalog = {
    mainBlock: document.querySelectorAll('.catalog'),
    elementsArr: document.querySelectorAll('.catalog_item'),
    imgArr: document.querySelectorAll('.catalog_img'),
    linkArr: document.querySelectorAll('.catalog_link'),

    init(){
        // addEventListener('click', (event) => {
        //     // event.preventDefault();
        //     this.zoomImg(event);
        // })
    },

    zoomImg(event){
        if((event.target.className === 'catalog_img') || (event.target.className === 'catalog_link')) {
            this.createModal(event);
            this.addLink(event);

        } else if((event.target.className === 'modal') || (event.target.classList.contains('modal_btn'))){
            console.log(event.target);
            this.closeModal(event);
        }
    },

    createModal(event){
        let value = "";

        if(event.target.className === 'catalog_link') {
            value = event.target.href;
        } else  {
            value = event.target.src;
        }


        this.mainBlock[this.mainBlock.length - 1].insertAdjacentHTML('afterend', `<div class="modal">
        <img src="${value}" class="modal_img"><div class="btn_close"><span class="modal_btn one"></span>
        <span class="modal_btn two"></span></div></div>`);
    },

    closeModal(){
        document.querySelector('.modal').className = "hidden";
    },

    addLink(event){
        let value = 'http://php-homeworks/lesson_5/' + '?id=' + event.target.dataset.id;
        console.log(event.target.dataset.id);
        let request = fetch(value);
        request.then(result => console.log(result)).catch(error => console.log(error));
        // console.log(request);
        // history.pushState(null, null, 'http://php-homeworks/lesson_5/' + '?id=' + value);
    },

}

addEventListener('load', ()=>{
   catalog.init();
})