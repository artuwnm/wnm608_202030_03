const myPhotos = {
    
}
let PhotoAlbum = {

    init: function() {
        // console.log($(".img-container"));
        $.delegate($(".img-container")[0], "img", "click", function(e) {
            let a = e.target.parentNode;
            console.log(a,a.className);
            if(a.className == "img-box active") {
                $(".img-container")[0].className = "img-container";
                removeClass( $('.active')[0],'active');
                // $('.img-container .img-box').removeClass('active');
            } else {
                $(".img-container")[0].className = "img-container open";
                // removeClass( $('.img-container .img-box'),'active');
                // $('.img-container .img-box').removeClass('active');
                a.className = "img-box active";
            }
            // $.delegate($(".open")[0], "div", "click", function(e) {
            //     console.log(e.target);
            // });

        });
        $.delegate($("#left")[0], "div", "click", this.prevPhoto);
        $.delegate($("#right")[0], "div", "click", this.nextPhoto);
        $.delegate($("#middle")[0], "div", "click", this.showThumbnail);
    },

    readFromFolder: function() {
        

    }, 
    nextPhoto: function() {
        console.log("right");
        let next = $(".active")[0].nextElementSibling;
        console.log(next);
        if (next == null || next.className !== "img-box") {
            next = $('.img-box')[0];
        }
        removeClass( $('.active')[0],'active');
        addClass(next, "active")
    },
    prevPhoto: function() {
        console.log("left");
        let pre = $(".active")[0].previousElementSibling;
        // console.log(pre);
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
        $(".img-container")[0].className = "img-container";
        removeClass( $('.active')[0],'active');

    },
    addSidebar: function() {
        
    }
}
window.onload = function() {
    PhotoAlbum.init();
    // $.delegate(document.getElementById("list"), "li", "click", clickListener);
    // checkCookie();
}