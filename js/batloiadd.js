function KiemTra(){
	var ten=document.getElementById("tensp");
	var gia=document.getElementById("gia");
	var xuatxu=document.getElementById("xuatxu");
	var donggoi=document.getElementById("donggoi");
	var hinh=document.getElementById("hinh");

	
	var loisai1=document.getElementById("loi1");
	var loisai2=document.getElementById("loi2");
	var loisai3=document.getElementById("loi3");
	var loisai4=document.getElementById("loi4");
	var loisai5=document.getElementById("loi5");

	if(ten.value.length==0){
		ten.style.border="2px solid red";
		ten.style.background="yellow";
		loisai1.innerHTML="Tên Sản phẩm không được để trống!";
		return false;
	}else{
		ten.style.border="none";
		ten.style.background="white";
		loisai1.innerHTML="";
	}


	if(gia.value.length==0){
		gia.style.border="2px solid red";
		gia.style.background="yellow";
		loisai2.innerHTML="Giá sản phẩm không được để trống!";
		return false;
	}else{
		gia.style.border="none";
		gia.style.background="white";
		loisai2.innerHTML="";
	}


	if(xuatxu.value.length==0){
		xuatxu.style.border="2px solid red";
		xuatxu.style.background="yellow";
		loisai3.innerHTML="Xuất xứ không được để trống!";
		return false;
	}else{
		xuatxu.style.border="none";
		xuatxu.style.background="white";
		loisai3.innerHTML="";
	}

	if(donggoi.value.length==0){
		donggoi.style.border="2px solid red";
		donggoi.style.background="yellow";
		loisai4.innerHTML="Quy cách đông gói được để trống!";
		return false;
	}else{
		donggoi.style.border="none";
		donggoi.style.background="white";
		loisai4.innerHTML="";
	}

	if(hinh.value.length==0){
		loisai5.innerHTML="Cần phải thêm hình vào!!";
		return false;
	}else{
		loisai5.innerHTML="";
	}
}
function KiemTraUser(){
	var username=document.getElementById("username");
	var password=document.getElementById("password");
	var name=document.getElementById("name");

	
	var loisai1=document.getElementById("loi1");
	var loisai2=document.getElementById("loi2");
	var loisai3=document.getElementById("loi3");


	
	if(username.value.length==0){
		username.style.border="2px solid red";
		username.style.background="yellow";
		loisai1.innerHTML="Username không được để trống!";
		return false;
	}else{
		username.style.border="none";
		username.style.background="white";
		loisai1.innerHTML="";
	}


	if(password.value.length==0){
		password.style.border="2px solid red";
		password.style.background="yellow";
		loisai2.innerHTML="Pasword không được để trống!";
		return false;
	}else{
		password.style.border="none";
		password.style.background="white";
		loisai2.innerHTML="";
	}


	if(name.value.length==0){
		name.style.border="2px solid red";
		name.style.background="yellow";
		loisai3.innerHTML="Name không được để trống!";
		return false;
	}else{
		name.style.border="none";
		name.style.background="white";
		loisai3.innerHTML="";
	}
}

function KiemTradanhmuc(){
	var username=document.getElementById("username");
	var password=document.getElementById("password");


	
	var loisai1=document.getElementById("loi1");
	var loisai2=document.getElementById("loi2");



	
	if(username.value.length==0){
		username.style.border="2px solid red";
		username.style.background="yellow";
		loisai1.innerHTML="Tên Danh Mục không được để trống!";
		return false;
	}else{
		username.style.border="none";
		username.style.background="white";
		loisai1.innerHTML="";
	}


	if(password.value.length==0){
		password.style.border="2px solid red";
		password.style.background="yellow";
		loisai2.innerHTML="Link không được để trống!";
		return false;
	}else{
		password.style.border="none";
		password.style.background="white";
		loisai2.innerHTML="";
	}

}