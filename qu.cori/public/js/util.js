//2.1
function isArray(arr) {
    if (!Array.isArray){
        return Object.prototype.toString.call(arr) === '[object Array]';
    } else {
        // IE9+
        return Array.isArray(arr);
    }
}

// 判断fn是否为一个函数，返回一个bool值
function isFunction(fn) {
	return Object.prototype.toString.call(fn) === '[object Function]';
}
// 使用递归来实现一个深度克隆，可以复制一个目标对象，返回一个完整拷贝
// 被复制的对象类型会被限制为数字、字符串、布尔、日期、数组、Object对象。不会包含函数、正则对象等
function cloneObject(src) {
    var clone = src;
    // 对于Date,String,Boolean等引用类型的数据，
    ///需要考虑调用构造函数重新构造，
    //直接赋值依然会有引用问题（不是真正的clone引用变量）

    if (src instanceof Date) {
        clone = new Date(src.getDate());
        return clone;
    }
    // 对于Object和Array的遍历，可以使用for in
    //这样可以保证在在Array对象上扩展的属性也可以正确复制
    if (src instanceof Array) {
        clone = [];
        for (var key in src) {
            clone[key] = cloneObject(src[key]);
        }
        return clone;
    }

    if (src instanceof Object) {
        clone = {};
        for (var key in src) {
        	// 忽略掉继承属性 判断src对象的自身属性
            if (src.hasOwnProperty(key)) {       
                clone[key] = cloneObject(src[key]);
            }
        }
        return clone;
    }

    //number string boolean null undefined
    return src;
}

/*
// 测试用例：
var array = ['a','s','d','f','g'];
var srcObj = {
    a: 1,
    b: {
        b1: ["hello", "hi"],
        b2: "JavaScript"
    },
    c: true,
    d: "original",
    e: null
};
var abObj = srcObj;
var tarObj = cloneObject(srcObj);

srcObj.a = 2;
srcObj.b.b1[0] = "Hello+";
srcObj.c = false;
srcObj.d = "change";
srcObj.e = 2;

console.log(abObj.a);       //2
console.log(abObj.b.b1[0]); //"hello"
console.log(abObj.c);       //false
console.log(abObj.d);		//"change"
console.log(abObj.e);       //

console.log(tarObj.a);      // 1
console.log(tarObj.b.b1[0]);// "hello"
console.log(tarObj.c);      //true
console.log(tarObj.d);		//"original"
console.log(tarObj.e);      //
*/



// 对数组进行去重操作，只考虑数组中元素为数字或字符串，返回一个去重后的数组
function uniqArray(arr) {
	for(var i= 0;i<arr.length;i++) {
		for(var j=i+1;j<arr.length;j++) {
			console.log(i,j,arr.length);
			if(arr[i]===arr[j]) {
				arr.splice(j, 1);
				j-=1;
			}
		}
	}
	return arr;
}
// hash + es5
// 速度最快
function uniqArray2(arr) {
    var obj = {};
    for (var i = 0, len = arr.length; i < len; i++) {
        obj[arr[i]] = true;
    }
    return Object.keys(obj);
}
// // 使用示例
// var a = [1, 3, 5, 7, 5, 3,3,5,7];
// var b = uniqArray(a);
// console.log(b); // [1, 3, 5, 7]



// 实现一个遍历数组的方法，针对数组中每一个元素执行fn函数，并将数组索引和元素作为参数传递
function each(arr, fn) {
	console.log(fn.length);
	if(fn.length >1) {
		for(var i in arr) {
			fn(i,arr[i]);
		}
	} else {
		for(var i in arr) {
			fn(arr[i]);
		}
	}
}

// 其中fn函数可以接受两个参数：item和index
/*
// 使用示例1
var arr = ['java', 'c', 'php', 'html'];
function output(item) {
    console.log(item)
}
each(arr, output);  // java, c, php, html

//使用示例2
var arr = ['java', 'c', 'php', 'html'];
function output(item, index) {
    console.log(index + ': ' + item)
}
each(arr, output);  // 0:java, 1:c, 2:php, 3:html
*/
// 获取一个对象里面第一层元素的数量，返回一个整数
function getObjectLength(obj) {
	return Object.keys(obj).length;
}

/*
// 使用示例
var obj = {
    a: 1,
    b: 2,
    c: {
        c1: 3,
        c2: 4
    }
};
console.log(getObjectLength(obj)); // 3
*/
//去除首尾空格 包括全角半角空格、Tab等，返回一个字符串
function trim(str) {
    var trimReg = /^\s+|\s+$/g; 
    return str.replace(trimReg,"");
}
// 判断是否为邮箱地址
function isEmail(emailStr) {
	//return emailStr.search(/^[a-z0-9]([-_\.]?[a-z0-9]+)*@([-_]?[a-z0-9]+)+[\.][a-z]{2,7}([\.][a-z]{2})?$/i) !== -1;
    var emailReg = /^[\w]+\@([a-z0-9]+\.)+[a-z0-9]{2,4}$/i; //匹配邮箱格式
    return  emailReg.test(emailStr);
}

// 判断是否为手机号
function isMobilePhone(phone) {
    phone = phone + '';
    // return (/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/).test(phone);
    return phone.search(/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/) !== -1;
    //search一个在字符串中测试匹配的String方法，它返回匹配到的位置索引，或者在失败时返回-1。
    //test  一个在字符串中测试是否匹配的RegExp方法，它返回true或false。
}


//3.1
// 为element增加一个样式名为newClassName的新样式
function addClass(element, newClassName) {
	var oldClassName = trim(element.className);
	element.className = oldClassName === "" ? newClassName : oldClassName + " " + newClassName;
}
// window.onload = function() {
// 	var div = document.getElementsByTagName("div")[0];
// 	console.log(div);
// 	addClass(div,"two");
// 	addClass(div,"three");
// 	removeClass(div,"three");
// 	getPosition(div);
// }



// 移除element中的样式oldClassName
function removeClass(element, oldClassName) {
	var pattern = new RegExp("\\b" + oldClassName + "\\b");//删除多余空格
	element.className = trim(element.className.replace(pattern,''));
}

// 判断siblingNode和element是否为同一个父元素下的同一级的元素，返回bool值
function isSiblingNode(element, siblingNode) {
	return element.parentNode === siblingNode.parentNode;
}

// 获取element相对于浏览器窗口的位置，返回一个对象{x, y}
function getPosition(element) {
	var pos = {};
	pos.x = element.getBoundingClientRect().left + Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
    pos.y = element.getBoundingClientRect().top + Math.max(document.documentElement.scrollTop, document.body.scrollTop);
}
// your implement
// 实现一个简单的Query
function $(selector,root) {
	// console.log(selector[0]);
	var signal = selector[0]; //
    var allChildren = null;
    var content = selector.substr(1);
    var currAttr = null;
    var result = [];
    root = root || document; //若没有给root，赋值document
    switch (signal) {
        case "#":
            result.push(document.getElementById(content));
            break;
        case ".":
            allChildren = root.getElementsByTagName("*");
            // var pattern0 = new RegExp("\\b" + content + "\\b");
            for (i = 0; i < allChildren.length; i++) {
                currAttr = allChildren[i].getAttribute("class");
                if (currAttr !== null) {
                    var currAttrsArr = currAttr.split(/\s+/);
                    // console.log(currAttr);
                    for (j = 0; j < currAttrsArr.length; j++) {
                        if (content === currAttrsArr[j]) {
                            result.push(allChildren[i]);
                            // console.log(result);
                        }
                    }
                }
            }
            break;
        case "[": //属性选择
            if (content.search("=") === -1) { //只有属性，没有值
                allChildren = root.getElementsByTagName("*");
                for (i = 0; i < allChildren.length; i++) {
                    if (allChildren[i].getAttribute(selector.slice(1, -1)) !== null) {
                        result.push(allChildren[i]);
                    }
                }
            } else { //既有属性，又有值
                allChildren = root.getElementsByTagName("*");
                var pattern = /\[(\w+)\s*\=\s*(\w+)\]/; //为了分离等号前后的内容
                var cut = selector.match(pattern); //分离后的结果，为数组
                console.log(cut);
                var key = cut[1]; //键
                var value = cut[2]; //值
                for (i = 0; i < allChildren.length; i++) {
                    if (allChildren[i].getAttribute(key) === value) {
                        result.push(allChildren[i]);
                    }
                }
            }
            break;
        default: //tag
            result = root.getElementsByTagName(selector);
            break;
    }
    return result;

}
/*
// 可以通过id获取DOM对象，通过#标示，例如
$("#adom"); // 返回id为adom的DOM对象

// 可以通过tagName获取DOM对象，例如
$("a"); // 返回第一个<a>对象

// 可以通过样式名称获取DOM对象，例如
$(".classa"); // 返回第一个样式定义包含classa的对象

// 可以通过attribute匹配获取DOM对象，例如
$("[data-log]"); // 返回第一个包含属性data-log的对象

$("[data-time=2015]"); // 返回第一个包含属性data-time且值为2015的对象

// 可以通过简单的组合提高查询便利性，例如
$("#adom .classa"); // 返回id为adom的DOM所包含的所有子节点中，第一个样式定义包含classa的对象

// 给一个element绑定一个针对event事件的响应，响应函数为listener
*/
function addEvent(element, event, listener) {
    	//对于支持DOM2级事件处理程序addeventListener方法的浏览器
    if (element.addEventListener) {
        element.addEventListener(event, listener, false);
    } else if (element.attachEvent) { 
    	//对于不支持addEventListener方法但支持attchEvent方法的浏览器
        element.attachEvent("on" + event, listener);
    } else { 
    	//对于不支持以上两种,但支持on+'事件名'的浏览器
        element["on" + event] = listener;
    }
}

// 移除element对象对于event事件发生时执行listener的响应
function removeEvent(element, event, listener) {
    //对于支持DOM2级事件处理程序addeventListener方法的浏览器
    if (element.removeEventListener) {
        element.removeEventListener(event, listener, false);
    } else if (element.attachEvent) { 
    	//对于不支持removeEventListener方法但支持attchEvent方法的浏览器
        element.attachEvent("on" + event, listener);
    } else { 
    	//对于不支持以上两种,但支持on+'事件名'的浏览器
        element["on" + event] = null;
    }
}
// 实现对click事件的绑定
function addClickEvent(element, listener) {
     addEvent(element, 'click',listener );
}

// 实现对于按Enter键时的事件绑定
function addEnterEvent(element, listener) {
     addEvent(element, 'keydown', function(e) {
        var event = e || window.event;
        var keyCode = event.which || event.keyCode;
        if (keyCode === 13) {
            listener.call(element, event);
        }
    });
}
//parentElement.insertBefore(newElement, referenceElement);
function insertAfter(newElement,targetElement) {//在元素后面添加新元素(不用获得元素的父元素)
	var parent = targetElement.parentNode;
	if(parent.lastChild == targetElement) {
		parent.appendChild(newElement);
	} else {
		parent.insertBefore(newElement,targetElement.nextSibling);
	}
}
$.on = addEvent;
$.un = removeEvent;
$.click = addClickEvent;
$.enter = addEnterEvent;
function clickListener(event) {
    console.log(event);
}

function renderList() {
    document.getElementById("list").innerHTML = '<li>new item</li><li>new item</li><li>new item</li>';
}

function init() {
	// console.log($("#list"));
	// console.log(document.getElementById("list"));
	// var ul = $("#list");
	// var li = ul.getElementsByTagName('li');
    // each(document.getElementById("list").getElementsByTagName('li'), function(item) {
    //     $.click(item, clickListener);
    // });

    $.click(document.getElementById("btn"), renderList);
}
window.onload = function() {
	// init();
	// $.delegate(document.getElementById("list"), "li", "click", clickListener);
	// checkCookie();
}


// 先简单一些
function delegateEvent(element, tag, eventName, listener) {
    addEvent(element, eventName, function(e){
        var target = e.target || e.srcElement;
        if(target.nodeName.toLowerCase() === tag.toLowerCase()) {
            listener.call(target, e);
        }
    });
}

$.delegate = delegateEvent;

// 使用示例
// 还是上面那段HTML，实现对list这个ul里面所有li的click事件进行响应






// 判断是否为IE浏览器，返回-1或者版本号
function isIE() {
     /*
    var ua = navigator.userAgent.toLowerCase();
    var ie = ua.match(/rv:([\d.]+)/) || ua.match(/msie ([\d.]+)/);
    if(ie) {
        return ie[1];
    }
    else {
        return -1;
    }
    */
    return /msie (\d+\.\d+)/i.test(navigator.userAgent)
        ? (document.documentMode || + RegExp['\x241']) : -1;
}

// 设置cookie
	// document.cookie="cookie=ok;"+cookieName+ "=" +encodeURIComponent(cookieValue)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());e
/*toUTCString() 方法把一个日期转换为一个字符串，使用UTC时区。*/
function setCookie(cookieName, cookieValue, expiredays) {
    var exdate=new Date();
    console.log(exdate.toGMTString());
	// exdate.setDate(exdate.getDate()+expiredays);
	exdate.setTime(exdate.getTime()+expiredays * 24 * 3600 * 1000);   
	console.log(cookieName+"="+escape(cookieValue),((expiredays==null) ? "" : ";expires="+exdate.toGMTString()));

	document.cookie =cookieName + '=' + encodeURIComponent(cookieValue) +
	                ((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
	console.log(document.cookie);
}

// 获取cookie值
function getCookie(cookieName) {
	console.log(document.cookie.length);
    if (document.cookie.length>0)
    {
	    c_start=document.cookie.indexOf(cookieName + "=");
	    if (c_start!=-1) { 
		    c_start=c_start + cookieName.length+1 ;
		    c_end=document.cookie.indexOf(";",c_start);
		    if (c_end==-1) c_end=document.cookie.length;

		    return unescape(document.cookie.substring(c_start,c_end));
		} 

    }
	return "";
}
function checkCookie()
{
	username=getCookie('username');
	if (username!=null && username!="") {
		alert('Welcome again '+username+'!')
	}else {
		username=prompt('Please enter your name:',"")
		console.log(username);
		if (username!=null && username!="") {
			setCookie('username',username,365)
		}
	}
}


//学习Ajax，并尝试自己封装一个Ajax方法
function ajax(url, options) {
	//XMLHttpRequest 用于在后台与服务器交换数据
    var xmlhttp;
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	//存储函数（或函数名），每当 readyState 属性改变时，就会调用onreadystatechange函数。
	//readyState存有 XMLHttpRequest 的状态。
		// 0: 请求未初始化
		// 1: 服务器连接已建立
		// 2: 请求已接收
		// 3: 请求处理中
		// 4: 请求已完成，且响应已就绪
	// status	
		// 	200: "OK"
		// 	404: 未找到页面
	xmlhttp.onreadystatechange=function() {
  		if(xmlhttp.readyState==4) {
  			if(xmlhttp.status==200) {
		    	if(options.onsuccess) {
		    		options.onsuccess(xmlhttp.responseText,xmlhttp.responseXML);
		    	} else if(options.onfail) {
		    		options.onfail();
		    	}
    		}
    	}
  	};
  	//(请求的类型；GET 或 POST)(url：文件在服务器上的位置)(async：true（异步）或 false（同步）)
  	// xmlhttp.open("GET",url,true);	
  	// 将请求发送到服务器。
  	// xmlhttp.send();

  	//处理type
  	if(!options.type) {
  		options.type = "GET";
  	} else {
  		options.type = options.type.toUpperCase();
  	}
  	if(options.type === "GET") {
  		xmlhttp.open("GET",url,true);
  		xmlhttp.send();
  	} else {
  		xmlhttp.open("POST",url,true);
  		xmlhttp.send(dataResult);
  	}

  	//处理data
  	if(options.data) {
  		var dataArr = [];
  		for(var key in options.data) {
  			dataArr.push(key + "=" + encodeURI(options.data[key]));
  		}
  		var dataResult =dataArr.join('&');
  	}

}
// 使用示例：
// ajax(
//     'http://localhost:8888/ajaxtest',
//     {
//         data: {
//             name: 'simon',
//             password: '123456'
//         },
//         onsuccess: function (responseText, xhr) {
//         	document.getElementById("myDiv").innerHTML= responseText;
//             console.log(responseText);
//         }
//     }
// );
/*options是一个对象，里面可以包括的参数为：

type: post或者get，可以有一个默认值
data: 发送的数据，为一个键值对象或者为一个用&连接的赋值字符串
onsuccess: 成功时的调用函数
onfail: 失败时的调用函数
*/