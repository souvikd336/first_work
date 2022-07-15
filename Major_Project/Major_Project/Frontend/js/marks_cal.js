function total_1(){
	            var p_1 = parseInt(document.getElementById("P1_Marks").value);
	            var p_2 = parseInt(document.getElementById("P2_Marks").value);
	            var p_3 = parseInt(document.getElementById("P3_Marks").value);
	            var p_4 = parseInt(document.getElementById("P4_Marks").value);
	            var p_5 = parseInt(document.getElementById("P5_Marks").value);
	            var p_6 = parseInt(document.getElementById("P6_Marks").value);
                if( p_1>100  ||  p_2>100  ||  p_3>100  || p_4>100  ||  p_5>100 || p_6>100 ){
		            alert("Please enter the Marks in range of 100....");
	            }
                else{
                    var min =  Math.min(p_3,p_4,p_5,p_6);
		            var t = p_1 + p_2 + p_3 + p_4 + p_5 + p_6 - min;
                    document.getElementById("Total_Marks").value = t;
                }
                
            }            