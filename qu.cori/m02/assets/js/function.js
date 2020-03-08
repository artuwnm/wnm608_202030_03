const myPhotos = {

}
// let navBar = {
//     init: function() {
//         $.delegate($(".menu")[0], "a", "click", function(e) {
//             let a = e.target;
//             addClass(a, "active")
//         });
//     }
// }
let PhotoAlbum = {

    init: function() {
        this.addSidebar();
        // console.log($(".img-container"));
        $.delegate($(".img-container")[0], "img", "click", function(e) {
            let a = e.target.parentNode;
            // console.log(a,a.className);

            if(a.className == "img-box active") {
                removeClass( $('.img-container')[0],'open');
                removeClass( $('.active')[0],'active');
            } 
            else {
                addClass($(".img-container")[0], "open")
                addClass(a, "active")
            }
            // $.delegate($(".open")[0], "div", "click", function(e) {
            //     console.log(e.target);
            // });

        });
        $.delegate($("#left")[0], "div", "click", this.prevPhoto);
        $.delegate($("#right")[0], "div", "click", this.nextPhoto);
        $.delegate($("#middle")[0], "div", "click", this.showThumbnail);


        $.delegate($("#photo-nav")[0], "li", "click", this.showCurrentPho);
    },

    readFromFolder: function() {
        

    }, 
    nextPhoto: function() {
        console.log("right");
        let next = $(".active")[0].nextElementSibling;
        // console.log(next);
        if (next == null || next.className !== "img-box") {
            next = $('.img-box')[0];
        }
        removeClass( $('.active')[0],'active');
        addClass(next, "active")
    },

    prevPhoto: function() {
        console.log("left");

        let pre = $(".active")[0].previousElementSibling;
        if (pre.className !== "img-box") {
            let imgBoxs = $('.img-box');
            let leng = imgBoxs.length;
            pre = $('.img-box')[leng-1];
        }
        removeClass( $('.active')[0],'active');
        addClass(pre, "active")
    },

    showThumbnail: function() {
        console.log("middle");

        removeClass( $('.img-container')[0],'open');
        removeClass( $('.active')[0],'active');

    },

    showCurrentPho: function(e) {
        let a = e.target;
        console.log(a);
        let photoNav = $('#photo-nav')[0];
        if(photoNav.getElementsByClassName("active")[0]) {
            removeClass( photoNav.getElementsByClassName("active")[0],'active');
        }
        addClass(a, "active");

        console.log("showCurrentPho",e.target.value,a,'haha');

        if ($('.active')[0]) {
            removeClass( $('.active')[0],'active');
        }
        addClass($(".img-container")[0], "open")
        addClass($(".img-box")[a.value], "active")
        

    },

    addSidebar: function() {
        let imgBoxs = $('.img-box');
        let leng = imgBoxs.length;
        console.log(leng);
        let ul = document.createElement('ul');
        // let li = document.createElement('li');
        for(let i=0; i<leng; i++) {
            let li = document.createElement('li');
            li.value = i;
            ul.appendChild(li);
        }

        $('#photo-nav')[0].appendChild(ul);
    }
}
window.onload = function() {
    // navBar.init();
    PhotoAlbum.init();
    // $.delegate(document.getElementById("list"), "li", "click", clickListener);
    // checkCookie();
}