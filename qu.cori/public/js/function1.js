const myPhotos = {

}
const userList = {  
    init: function() {
        $.delegate($(".userList")[0], "button", "click", function(e) {
            let a = e.target;
            
            if(a.classList.contains("edit")) {
                let num = a.getAttribute("value");
                console.log(num);
                userList.edit(num);

            }

            else if(a.classList.contains("add")) {
                console.log('add');
                userList.edit(num);
                // userList.delete(num);
            }
            
            
        });
        $.delegate($("#list-popup")[0], "button", "click", function(e) {
            let a = e.target;
            if(a.classList.contains("cancel")) {
                console.log("cancel");
                $('#list-popup')[0].style.display  = 'none';
            }
            // else if(a.classList.contains("submit")) {
                // userList.write(num);
            // }

        });
        
        
    },
    read: function() {

    },
    edit: function(num) {
        
        $.delegate($("#list-popup")[0], "input", "click", function(e) {
            let a = e.target;
            if(a.classList.contains("cancel")) {
                console.log("cancel");
                $('#list-popup')[0].style.display  = 'none';
            }
            // else if(a.classList.contains("submit")) {
                // userList.write(num);
            // }

        });
        // console.log("edit",user);
        // userList.openPopup();
        let user = $("#myTable")[0].getElementsByTagName('tr')[num].getElementsByTagName('a')[0].innerHTML;
        let email = $("#myTable")[0].getElementsByTagName('tr')[num].getElementsByTagName('td')[1].innerHTML;
        $("#user")[0].value = user;
        $("#email")[0].value = email;

                console.log(user,email);
                // console.log('ha');

    },
    write: function(num) {
        let user = $("#user")[0].value;
        let password = $("#password")[0].value;
        
        // let data = <?php echo json_encode($data);?>
        
        let requestURL = '../../data/user.json';
        //创建一个HTTP请求对象
        let request = new XMLHttpRequest();
        //使用open（）打开一个新请求
        request.open('GET', requestURL);
        //设置XHR访问JSON格式数据，然后发送请求
        // request.responseType = 'json';
        //设置XHR访问text格式数据
        request.responseType = 'text';
        request.send();

        request.onload = function() {
            let dataText = request.response;
            let data = JSON.parse(dataText);
            console.log(data[num],data[num].user);
            
            data[num].user = user;
            data[num].password = password;
            console.log(data);
            userList.closePopup();
        }
        
        // let request = new XMLHttpRequest();
        //使用open（）打开一个新请求
        request.open('Post', requestURL);

    },
    delete: function(num) {
        // console.log(num,$('#myTable')[0].getElementsByTagName('tr')[num]);
        // $('#myTable')[0].removeChild($('#myTable')[0].getElementsByTagName('tr')[num]);
        // userList.reNum();


    },
    reNum: function() {
        let list = $('#myTable')[0].getElementsByTagName('tr');
        for(let i=0; i<list.length; i++) {

            var td = list[i].getElementsByTagName('td');

            for(let j=0; j<td.length; j++) {
                console.log(td[j]);
                td[i].getAttribute('index')=j;
                 console.log(td[j].getAttribute('index'));
            }
            
        }
        
    },
    add: function() {

    },
    openPopup: function() {
        $('#list-popup')[0].style.display  = 'flex';
        

    },
    closePopup: function() {
        $('#list-popup')[0].style.display  = 'none';
        

    },

}
const popup = {
    init: function() {
         console.log("init");
        $.delegate($("#close-popup")[0], "i", "click", this.close);
        $.delegate($(".img-container")[0], "img", "click", this.open);
        
    },
    close: function() {
        $('#item-popup')[0].style.display  = 'none';
    },
    open: function(e) {
        let a = e.target.parentNode;
        let link = e.target.src;
        // console.log(a);
        if(a.className == 'img-box-shop') {
            $('#item-img')[0].src = link;
            $('#item-popup')[0].style.display  = 'flex';
        }
    },
    addToBag: function() {

    }
}
const navBar = {
    init: function() {
        const heightOutput = document.querySelector('HTML');
        const widthOutput = document.querySelector('HTML');

        function reportWindowSize() {
          // heightOutput.textContent = window.innerHeight;
          // widthOutput.textContent = window.innerWidth;
            // console.log(window.innerHeight,window.innerWidth);
            if(window.innerWidth>768) {
                console.log(">768");
                // $('#menu_close')[0].style.display  = 'none';
                // $('#menu_open')[0].style.display  = 'none';
                $('.menu-inner')[0].style.display  = 'block';
                $('#menu_close')[0].style.visibility  = 'hidden';
                $('#menu_open')[0].style.visibility  = 'hidden';
            }
            else {
                
                // $('.menu-inner')[0].style.display  = 'none';
                // $('#menu_close')[0].style.display  = 'block';
                // $('#menu_open')[0].style.display  = 'block';
                $('#menu_close')[0].style.visibility  = 'visible';
                $('#menu_open')[0].style.visibility  = 'visible';
                console.log("<=768",$('#menu_open')[0].style.display,"hhh");
                if ($('#menu_open')[0].style.display == 'block') {
                    console.log("menu_open");
                    $('.menu-inner')[0].style.display  = 'none';
                } else 
                // if ($('#menu_close')[0].style.display  == 'block') 
                {
                    $('.menu-inner')[0].style.display  = 'block';
                }
            }


        }
        reportWindowSize();
        window.onresize = reportWindowSize;
        window.addEventListener('resize', reportWindowSize);


        $.delegate($("#menu_open")[0], "div", "click", function(e) {
            console.log('click on the menu')
            $('.menu-inner')[0].style.display  = 'block';
            $('#menu_close')[0].style.display  = 'block';
            $('#menu_open')[0].style.display  = 'none';
        });
        $.delegate($("#menu_close")[0], "div", "click", function(e) {
            console.log('click on the menu')
            $('.menu-inner')[0].style.display  = 'none';
            $('#menu_close')[0].style.display  = 'none';
            $('#menu_open')[0].style.display  = 'block';
        });
    }
}
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
        if (next == null || next.className == "img-cover") {
            next = $('.img-box')[0];
        }
        removeClass( $('.active')[0],'active');
        addClass(next, "active")
    },

    prevPhoto: function() {
        console.log("left");

        let pre = $(".active")[0].previousElementSibling;
        if (pre.className == "img-cover") {
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
        console.log("showCurrentPho",e.target.value);
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
    console.log($('#menu_close'));
    navBar.init();
    
    // $.delegate(document.getElementById("list"), "li", "click", clickListener);
    // checkCookie();
}