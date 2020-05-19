function checkOutEmail(e) {
	var value = e;
	var trimReg = /^\s+|\s+$/g;                            //去除首尾空格
    var emailReg = /^[\w]+\@([a-z0-9]+\.)+[a-z0-9]{2,4}$/i; //匹配邮箱格式
	value = value.replace(trimReg,"");                     //原始输入去除首尾空格
	
    var email = document.getElementById("email");
	console.log(value);
	if(value==null||value=="") {
		email.placeholder = "Email is required";
		return false;
	} 
	// else if (!emailReg.test(value)) {
	// 	email.placeholder = "请输入正确的邮箱格式";
	// 	return false;
	// } 
	else {
		return true;
	}
}
function checkOutName(e) {
	var value = e;
	var trimReg = /^\s+|\s+$/g;                          //去除首尾空格
    var chineseReg = /[\u4e00-\u9fa5]/g;                 //查找中文字符
	var lenReg = /^.{4,16}$/;                            //查找4~16个单字符
	value = value.replace(trimReg,"").replace(chineseReg,"ha");//原始输入去除首尾空格，将中文字符长度转换为2


	var userName = document.getElementById("user");
	console.log(value);
	if(value==null||value=="") {
		userName.placeholder = "Name is required";
		return false;
	}
	// else if (!lenReg.test(value)) {
	// 	userName.placeholder = "4~16";
	// 	return false;
	// } 
	else {
		return true;
	}
}