var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function myfunction() {

    var brandName = $('#brand').val();
    var catName = $('#category').val();
    var firstName = $('#insightly_firstName').val();
    var email = $('#insightly_Email').val();
    var phone = $('#insightly_Phone').val();
    var dept = $('#insightly_department').val();
    var comm = $('#insightly_comment').val();
    var source = getUrlParameter('utm_source');
    var medium = getUrlParameter('utm_medium');
    var campaign = getUrlParameter('utm_campaign');
    var term = getUrlParameter('utm_term');
    var formData = { brandName : brandName, catName : catName, firstName : firstName, email : email, phone : phone, dept : dept, comm : comm, source : source, medium : medium, campaign : campaign, term : term };
    // alert(formData);
    // alert('i m here');

      
  if (callValidation()) // Calling validation function
{
 $.ajax({
            type: 'POST',
            url: "data.php",
            data: formData,
            success: function(resultData) { alert("Thank You, Your Form has been submitted Successfully");
            location.reload();
            // location.href = "http://m3mproperties.online/andrews-june2020/thankyou.php"
            }
        });
}
    
 
}


function callValidation(){
    // console.log('i m here');
	var str = 'Please Enter ';
	var name = document.getElementById('insightly_firstName').value;
	var email = document.getElementById('insightly_Email').value;
    var phone = document.getElementById('insightly_Phone').value;
    var dept = document.getElementById('insightly_department').value;

 if(name == '' && email == '' && phone == '' && dept == '') {
 		alert ('Please fill all the Fields');
 		return false;
 	}

 else if(name == '' || email == '' || phone == '' || dept == '') {
         if(name == '') {
             str = str + 'Name';
             if(email == '' || phone == '' || dept == '') {
                 str = str + ', ';
             } else {
                 str = str + '.';
             }
         }
    
        if(email == '') {
             str = str + 'Email ID';
             if(name == '' || phone == '' || dept == '') {
                 str = str + ', ';
             } else {
                 str = str + '.';
             }
         }
        
         if(phone == '') {
             str = str + 'Contact No.';
        }

        
          if(dept == '') {
            str = str + 'Department';
         }
        
 
        
    alert(str);
     return false;
     }
	
    if(document.getElementById('insightly_firstName').value == ''){
        // console.log('i m if name');
        alert('Please enter Name');
        return false;
    } else {
        // console.log('i m else name');
        var x=document.getElementById('insightly_firstName').value; 
        var reg = /^[A-z ]+$/;
        if(!reg.test(x)) {
            // console.log('i m else if name');
            alert('Name must contain only characters');
            return false;
        }
    }
    // console.log('after name if');


    if(document.getElementById('insightly_Email').value == ''){
        // console.log('i m if email');
            alert('Please enter Email');
            return false;
        } else {
            var email = document.getElementById('insightly_Email').value;
            var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
            if(!emailReg) {
               // console.log('i m in if');
                alert("You have entered an invalid email address!")
                return false;
            }
          //  console.log('i m outside if');
        }
        
        
    if(document.getElementById('insightly_Phone').value == ''){
        // console.log('i m if phone');
            alert('Please enter Number');
            return false;
        }
    else {
        // console.log('i m else phone');
        var p;
        p = document.getElementById('insightly_Phone').value;
        // If x is Not a Number or less than one or greater than 10
        if (isNaN(p) || p < 5999999999 || p > 10000000000) {
            // console.log('i m else if phone');
            alert("Enter a valid mobile number");
           return false;
        }
    }
    
    if(document.getElementById('insightly_department').value == ''){
        alert("Please select department");
        return false;
    }
    return true;
}


function myfunction2() {

    var brandName = $('#brand2').val();
    var catName = $('#category2').val();
    var firstName = $('#insightly_firstName2').val();
    var email = $('#insightly_Email2').val();
    var phone = $('#insightly_Phone2').val();
    var dept = $('#insightly_department2').val();
    var comm = $('#insightly_comment2').val();
    var source = getUrlParameter('utm_source');
    var medium = getUrlParameter('utm_medium');
    var campaign = getUrlParameter('utm_campaign');
    var term = getUrlParameter('utm_term');
    var formData = { brandName : brandName, catName : catName, firstName : firstName, email : email, phone : phone, dept : dept, comm : comm, source : source, medium : medium, campaign : campaign, term : term };
    // alert(formData);
    // alert('i m here');

      
  if (callValidation2()) // Calling validation function
{
 $.ajax({
            type: 'POST',
            url: "data.php",
            data: formData,
            success: function(resultData) { alert("Thank You, Your Form has been submitted Successfully");
            location.reload();
            // location.href = "http://m3mproperties.online/andrews-june2020/thankyou.php"
            }
        });
}
    
 
}


function callValidation2(){
    // console.log('i m here');
	var str = 'Please Enter ';
	var name = document.getElementById('insightly_firstName2').value;
	var email = document.getElementById('insightly_Email2').value;
    var phone = document.getElementById('insightly_Phone2').value;
    var dept = document.getElementById('insightly_department2').value;

 if(name == '' && email == '' && phone == '' && dept == '') {
 		alert ('Please fill all the Fields');
 		return false;
 	}

 else if(name == '' || email == '' || phone == '' || dept == '') {
         if(name == '') {
             str = str + 'Name';
             if(email == '' || phone == '' || dept == '') {
                 str = str + ', ';
             } else {
                 str = str + '.';
             }
         }
    
        if(email == '') {
             str = str + 'Email ID';
             if(name == '' || phone == '' || dept == '') {
                 str = str + ', ';
             } else {
                 str = str + '.';
             }
         }
        
         if(phone == '') {
             str = str + 'Contact No.';
        }

        
          if(dept == '') {
            str = str + 'Department';
         }
        
 
        
    alert(str);
     return false;
     }
	
    if(document.getElementById('insightly_firstName2').value == ''){
        // console.log('i m if name');
        alert('Please enter Name');
        return false;
    } else {
        // console.log('i m else name');
        var x=document.getElementById('insightly_firstName2').value; 
        var reg = /^[A-z ]+$/;
        if(!reg.test(x)) {
            // console.log('i m else if name');
            alert('Name must contain only characters');
            return false;
        }
    }
    // console.log('after name if');


    if(document.getElementById('insightly_Email2').value == ''){
        // console.log('i m if email');
            alert('Please enter Email');
            return false;
        } else {
            var email = document.getElementById('insightly_Email2').value;
            var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
            if(!emailReg) {
               // console.log('i m in if');
                alert("You have entered an invalid email address!")
                return false;
            }
          //  console.log('i m outside if');
        }
        
        
    if(document.getElementById('insightly_Phone2').value == ''){
        // console.log('i m if phone');
            alert('Please enter Number');
            return false;
        }
    else {
        // console.log('i m else phone');
        var p;
        p = document.getElementById('insightly_Phone2').value;
        // If x is Not a Number or less than one or greater than 10
        if (isNaN(p) || p < 5999999999 || p > 10000000000) {
            // console.log('i m else if phone');
            alert("Enter a valid mobile number");
           return false;
        }
    }
    
    if(document.getElementById('insightly_department2').value == ''){
        alert("Please select department");
        return false;
    }
    return true;
}


