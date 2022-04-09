function KiemTra(){
	var name=document.getElementById("name");
	var phone=document.getElementById("phone");
	var note=document.getElementById("note");

	
	var loisai1=document.getElementById("loi1");
	var loisai2=document.getElementById("loi2");
	var loisai3=document.getElementById("loi3");

	if(name.value.length==0){
		name.style.border="2px solid red";
		name.style.background="yellow";
		loisai1.innerHTML="Tên không được để trống!";
        loisai1.style.color="red";
		return false;
	}else{
		name.style.border="2px solid #26975e";
		name.style.background="white";
		loisai1.innerHTML="";
	}


	if(phone.value.length==0){
		phone.style.border="2px solid red";
		phone.style.background="yellow";
		loisai2.innerHTML="Số điện thoại không được để trống!";
        loisai2.style.color="red";
		return false;
	}else{
		phone.style.border="2px solid #26975e";
		phone.style.background="white";
		loisai2.innerHTML="";
	}

	if(!(note.value.length>10)){
		loisai3.innerHTML="Bạn chỉ được nhập ít nhất 10 ký tự!";
		note.style.background="yellow";
        loisai3.style.color="red";
		note.style.border="2px solid red";
		return false;
	}else{
		loisai3.innerHTML="";
		note.style.background="white";
		note.style.border="2px solid #26975e"; 
		alert("Cảm ơn bạn đã gửi phản hồi về chúng tôi chúng tôi sẽ trả lời sớm nhất")
	}
}

function Del(name){
	return confirm("Bạn có chắc chắn muốn xóa Sản phẩm: "+ name + "?");
}