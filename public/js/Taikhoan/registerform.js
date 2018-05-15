//Kiểm tra tính hợp lệ của form
function validate (){
    	
    		var name = $("#txtname").val();
    		var address = $("#txtaddress").val();
    		var telephonenumber = $("#txtnumber").val();
    		var username = $("#txtusername").val();
    		var password = $("#txtpassword").val();
    		var confirmpwd = $("#txtconfirmpwd").val();
    		if(username=="" || password=="" || address == ""|| telephonenumber=="" || name==""|| confirmpwd=="")
		{
				alert("Bạn phải nhập đầy đủ các trường!");
			 	return false;
	
		}
		//Kiểm tra password có trùng nhau hay không
		else
		{
			if(password!=confirmpwd)
			{
				//alert("test");
				$('#txtconfirmpwd').after(' <label  style="color: red">Mật khẩu phải trùng nhau</label>');
				document.getElementById('txtpassword').value = '';
				document.getElementById('txtpassword').focus();
				document.getElementById('txtconfirmpwd').value = '';

				return false;
			}
		}
    	
		return true;
    }
