<?php
require '../security.php';
$s_id = $_SESSION['login_user'];
require '../../connection.php';

$sql = "SELECT `Student_Name`, `College_Code`, `Course_Name` FROM `student_all` WHERE Student_Id = '$s_id'";
$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    $s_name = $row['Student_Name'];
    $college_code = $row['College_Code'];
    $course = $row['Course_Name'];
}
else{
    echo "Something went wrong";
}
?>
<DOCTYPE html>
<html>
    <head>
        <title>AICTE Registration From</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/reg_form.css">
    </head>
    <body>
        <form action="../../Backend/Reg_Method/get_data_MBA.php" method="POST" name="MBA" enctype="multipart/form-data" class="box">
            <div class = "container">
                <div class = "row">
                    <div class="panel panel-primary">
                        <div class = "panel-heading">
                          <h3 class="text-white text-center font-weight-bold bg-success" >
                              <b>AICTE Registration From ( JEMAT/MAT alloted or Direct candidate)</b>
                          </h3>
                          <h4><b>PLEASE read the instructions very carefully.</b></h4>
                          <h4><b>Fill-up this form and mail it back to us by TONIGHT with the required documents as attachments.</b></h4>
                          <h6><b>This form is being used to collect information that would be required for University (MAKAUT) Registration.</b></h6>
                          <h5><b>Registration is to be done STRICTLY as per your Student ID</b></h5>	
                          <h6>You will find your unique 10 Digits Student ID (just above your name) in the Money Receipt, that you received when you paid the college fees.</h6><br>			
                        </div>
                        <div class="panel panel-body"></div>
                        <table >
                            <tr>
                                <td><label>What is your Student ID? : </label></td>
                                <td><input type="text" name="S_Id" id="S_Id" placeholder="Enter your Student ID" value="<?php echo "$s_id";  ?>"></td>
                            </tr>
                            <tr>
                                <td><label>What is your Name? : </label></td>
                                <td><input type="text" name="S_Name" id="S_Name" placeholder="Enter your name" value="<?php echo "$s_name";  ?>"></td>
                            </tr>
                        </table>
                        <table><br>
                            <h4><b>Now, read this portion carefully.</b></h4><br>
                            <tr>
                                <td><label>Course Under by: </label></td>
                                <td><input type="text" name="C_By" id="C_By"  value="AICTE"></td>	
                            </tr>
                             <tr>
                                <td><label>Entrance Test/Scholarship : </label></td>
                                <td>
                                    <input type="radio" name="E_Type" id="E_Type" value="JEMAT/MAT ALLOTED" >JEMAT/MAT ALLOTED
                                    <input type="radio" name="E_Type" id="E_Type" value="DIRECT" >DIRECT 
                                </td>
                            </tr>
                            <tr>
                                <td><label>Course : </label></td>
                                <td><input type="text" name="C_Name" id="C_Name" value="<?php echo "$course"; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>What is your JEMAT/MAT Examination Roll No.? : </label></td>
                                <td><input type="text" name="R_N" id="R_N" placeholder="Enter your JEMAT/MAT Examination Roll No."></td>
                            </tr>
                            <tr>
                                <td><label>What is your JEMAT/MAT Rank(As per your valid allotment card)? : </label></td>
                                <td><input type="text" name="Rank" id="Rank" placeholder="Enter your jemat/mat rank"></td>
                            </tr>
                            <tr>
                                <td><label>What course have you taken addmission in? </label></td>
                                <td>
                                    <select name="C_Type" id="C_Type">
                                        <option>Select Course</option>  
                                        <option>CSE</option>  
                                        <option>IT</option>  
                                        <option>ECE</option> 
                                        <option>CV</option>  
                                        <option>ME</option>
                                        <option>AE</option>
                                        <option>BE</option>
                                        <option>EE</option>    
                                    </select> 
                                    </td> 
                            </tr>
                            <tr>
                                <td><label>What catagory do you belong to? : </label></td>
                                <td>
                                    <input type="radio" name="Category" id="Category" value="General" >General
                                    <input type="radio" name="Category" id="Category" value="SC" >SC
                                    <input type="radio" name="Category" id="Category" value="ST" >ST
                                    <input type="radio" name="Category" id="Category" value="OBC" >OBC
                                </td>
                            </tr>
                            <tr>
                                <td><label>What is your Adhaar NO.? : </label></td>
                                <td><input type="text" name="A_No" id="A_No" placeholder="Enter your adhaar no."></td>
                            </tr>
                            <tr>
                                <td><label>What is your Diploma or final year Graduation passing year? : </label></td>
                                <td>
                                    <select name="P_Year" id="P_Year">
                                        <option>Select Year</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>What is your (Diploma or Graduation)th Reg.No ? : </label></td>
                                <td><input type="text" name="G_N" id="G_N" placeholder="Enter your (Diploma or Graduation)th Reg.No"></td>
                            </tr>
                            <tr>
                                <td><label>What is your Father's Name? : </label></td>
                                <td><input type="text" name="F_Name" id="F_Name" placeholder="Enter your Father's Name"></td>
                            </tr>
                            <tr>
                                <td><label>What is your Mother's Name? : </label></td>
                                <td><input type="text" name="M_Name" id="M_Name" placeholder="Enter your Mother's Name"></td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td><input type="date" name="DOB" id="DOB"></td>
                            </tr>
                            <tr>
                                <td><label>What is your Nationality? </label></td>
                                <td>
                                    <select name="Nationality" id="Nationality">
                                        <option>Indian</option> 
                                        <option>Non-Indian</option>
                                        </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Your Gender : </label></td>
                                <td>
                                    <input type="radio" name="Gen" id="Gen" value="Male" >Male
                                    <input type="radio" name="Gen" id="Gen" value="Female" >Female
                                    <input type="radio" name="Gen" id="Gen" value="Others" >Others
                                </td>
                                <td>
                                    <label>Your Blood Group : </label></td>
                                <td>
                                    <select name="B_Group" id="B_Group">
                                        <option>Select</option>
                                        <option>A+ </option>
                                        <option>A- </option>
                                        <option>B+ </option>
                                        <option>B- </option>
                                        <option>AB+ </option>
                                        <option>AB- </option>
                                        <option>O+ </option>
                                        <option>O- </option>
                                    </select>
                                </td>
                                <td>
                                    <label>Your Religion : </label></td>
                                <td>
                                    <select name="Religion" id="Religion">
                                        <option>Select</option>
                                        <option>Hinduism</option>
                                        <option>Islam</option>
                                        <option>Christian</option>
                                        <option>Buddism</option>
                                        <option>Sikhism</option>
                                        <option>Human</option>
                                    </select>
                                </td>
                            </tr><br>
                        </table><br>
                        <h4><b>Please provide your Guardian's details.</b></h4>
                        <br>
                        <table>
                        <tr>
                            <td><label>Name : </label></td>
                            <td><input type="text" name="G_Name" id="G_Name" placeholder="Enter Guardian's Name"></td>
                        </tr>
                        <tr>
                            <td><label>Address : </label></td>
            
                                   <td><textarea name="G_Address" id="G_Address" placeholder="Enter address" cols="50" rows="3"></textarea></td>
                            </tr>
                            <tr>
                               <td><label>Contact No. : </label></td>
                               <td><input type="text" name="G_Contact" id="G_Contact" placeholder="Enter Contact No."></td>
                            </tr>
                            <tr>
                                    <td><label>Relation with Student : </label></td>
                                     <td>
                                        <select name="Relation_S" id="Relation_S">
                                            <option>Select</option>
                                            <option>Son</option>
                                            <option>Daughter</option>
                                            <option>Child</option>
                                        </select>
                                        </td>
                                </tr>
                        </table>
                                <br>
                                    <h4><b>Please provide Your Details.</b></h4>
                                    <br>
                        <table>
                                    <tr>
                                        <td><label>What is Your Residental Status : </label></td>
                                         <td>
                                            <select name="R_Status" id="R_Status">
                                                <option>Select</option>
                                                <option>Home</option>
                                                <option>Flat</option>
                                                <option>Rent</option>
                                                <option>Others</option>
                                            </select>
                                            </td>
                                    </tr>
                                    <tr>
                                        <td><label>Address : </label></td>
                                        <td><textarea name="S_Address" id="S_Address" placeholder="Enter address" cols="50" rows="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label> State : </label></td>
                                         <td>
                                    <select name="S_State" id="S_State">
                                        <option>Select</option>
                                        <option>Andhra Pradesh</option>
                                        <option>Arunachal Pradesh</option>
                                        <option>Assam</option>
                                        <option>Bihar</option>
                                        <option>Chhattisgarh</option>
                                        <option>Goa</option>
                                        <option>Gujarat</option>
                                        <option>Haryana</option>
                                        <option>Himachal Pradesh</option>
                                        <option>Jharkhand</option>
                                        <option>Karnataka</option>
                                        <option>Kerala</option>
                                        <option>Madhya Pradesh</option>
                                        <option>Maharashtra</option>
                                        <option>Manipur</option>
                                        <option>Meghalaya</option>
                                        <option>Mizoram</option>
                                        <option>Nagaland</option>
                                        <option>Odisha</option>
                                        <option>Punjab</option>
                                        <option>Rajasthan</option>
                                        <option>Sikkim</option>
                                        <option>Tamil Nadu</option>
                                        <option>Telangana</option>
                                        <option>Tripura</option>
                                        <option>Uttar Pradesh</option>
                                        <option>Uttarakhand</option>
                                        <option>West Bengal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>District : </label></td>
                                <td><input type="text" name="S_District" id="S_District" placeholder="District"></td>
                            </tr>
                            <tr>
                                <td><label>PIN-CODE : </label></td>
                                <td><input type="text" name="S_Pincode" id="S_Pincode" placeholder="Enter pincode"></td>
                            </tr>
                            <tr>
                                <td><label>Mobile No.: </label></td>
                                <td><input type="text" name="S_M" id="S_M" placeholder="Enter mobile no."></td>
                            </tr>
                            <tr>
                                <td><label>Alternative Mobile No. : </label></td>
                                <td><input type="text" name="S_Altno" id="S_Altno" placeholder="Enter alternative mobile no. "></td>
                            </tr>
                            <tr>
                                <td><label>Email: </label></td>
                                <td><input type="email" name="S_Email" id="S_Email" placeholder="Enter Email"></td>
                            </tr>
                            <tr>
                                <td><label>Your Graduation Examination Name:<br>  type Graduation Examination of Graduation <br>(refer to your marksheet/statement):</label></td>
                                <td><input type="text" name="E_12Name" id="E_12Name" placeholder="Enter Graduation Examination Name"></td>
                            </tr>
                            <tr>
                                <td><label>University: <br>(Refer to your Marksheet/Statement):</label></td>

                                <td><input type="text" name="Board_Name" id="Board_Name" placeholder="Enter your University"></td>
                            </tr>
                            <br>
                        </table>
                             <table>
                              <tr>
                                  <td><b>Marks Entry of Graduation : </b></td>
                                    <tr>
                                    <td><label>Sem 1 : </label></td>  
                                    <td><input type="number" name="S1_Marks" id="S1_Marks" placeholder="Marks of Sem 1" ></td>
                              </tr> 
                              <tr>
                                    <td><label>Sem 2 : </label></td>  
                                    <td><input type="number" name="S2_Marks" id="S2_Marks" placeholder="Marks of Sem 2"></td>
                              </tr>  
                              <tr>
                                    <td><label>Sem 3 : </label></td>  
                                    <td><input type="number" name="S3_Marks" id="S3_Marks" placeholder="Marks of Sem 3"></td>
                              </tr>
                            <tr>
                                    <td><label>Sem 4 : </label></td> 
                                    <td><input type="number" name="S4_Marks" id="S4_Marks" placeholder="Marks of Sem 4"></td>
                            </tr>
                            <tr>
                                    <td><label>Sem 5 : </label></td> 
                                    <td><input type="number" name="S5_Marks" id="S5_Marks" placeholder="Marks of Sem 5"></td>
                            </tr>  
                            <tr>
                                    <td><label>Sem 6 : </label></td>  
                                    <td><input type="number" name="S6_Marks" id="S6_Marks" placeholder="Marks of Sem 6"></td>
                            </tr>   
                            <tr>
                                    <td><label>Sem 7 : </label></td> 
                                    <td><input type="number" name="S7_Marks" id="S7_Marks" placeholder="Marks of Sem 7"></td>
                            </tr> 
                            <tr>
                                    <td><label>Sem 8 : </label></td> 
                                    <td><input type="number" name="S8_Marks" id="S8_Marks" placeholder="Marks of Sem 8"></td>
                            </tr>
                            <tr>
                                    <td><label><b>Class/Division:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" name="Division" id="Division" placeholder="division"></td>
                            </tr>
                    </table>
    <table>
    <tr>
        <td>
            <p>type 'I'(1st division),if your total marks % in class XII is <br>60% and above, 'II' (2nd division), between 50% and 60%, and 'III' (3rd division), between 40% and 50%.</p>
        </td>
    </tr>
    </table>
    
    <table>
        <tr>
            <td><label><b>DGPA/CGPA:</b> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="text" name="CGPA" id="CGPA" placeholder="Degree /semester per grade"></td>
        </tr>
    </table>
    <br>
                <p>type-in your DGPA/CGPA (If you have 1), else, type-in your 'Total % of marks in class XII':</p>
        <br>
        <h5><b>	List of Documents to be Attatched in Registration From </b></h5>
                            <h6>(Only .jpeg/.jpg format less than 200 kb is allowed)</h6><br>
    <table>
        <tr>
            <td><label>1. Filled-Up version of this Form</label></td>
        </tr>
        <tr>
            <td><label>2. Your Graduation Marks Sheet/ Statement</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="Marks_Sheet" name="Marks_Sheet" ></td>
        </tr>
        <tr>
            <td><label>3. Your AADHAAR Card</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="A_Card" name="A_Card" ></td>
        </tr>
        <tr>
            <td><label >4. Your Photo</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="Dp" name="Dp" ></td>
        </tr>
        <tr>
            <td><label >5. Your Signature</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="Sign" name="Sign" ></td>
        </tr>
        <tr>
            <td><label >6. Date of Birth Proof</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="DOB_Card" name="DOB_Card" ></td>
        </tr>
        <tr>
            <td><label >7. Anti Ragging Declaration</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="Anti_Dec" name="Anti_Dec" ></td>
        </tr>
        <tr>
            <td><label >8. Domicile Certificate</label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="Domicile" name="Domicile" ></td>
        </tr>
        <tr>
            <td><label >9. Caste Certificate (If any) </label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="Caste_Card" name="Caste_Card" ></td>
        </tr>
        <tr>
            <td><label >10. JEMAT Allotment Card <br>(If you are a 'Alloted' Candidate) </label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="MAT_A_Card" name="MAT_A_Card" ></td>
        </tr>
        <tr>
            <td><label >11. MAT  Rank card <br>(Direct or Management quota)  </label>&nbsp;&nbsp;&nbsp;</td>
            <td><input type="file" id="MAT_R_Card" name="MAT_R_Card" ></td>
        </tr>
    </table>
                            <p>
                                For the time being, you will take the print out of the Anti-ragging declaration (See Attachment) in an A4 sheet, fill it up, and sign it in the places marked. <br>								
                                In 'Discipline', write your Course/Stream Name.		<br>						
                                Make a soft copy of the completed declaration. This needs to be attached to the form. keep the soft copy with you.							
                            </p>
                            <br><br><br>
                            <center>
                                <input type="submit" value="Submit" class="btn btn-success"/> <button type="reset" value="reset" class="btn btn-secondary">reset</button>
                            </center>
                        </div>
                        <div class = "panel panel-footer">

                        </div>
                    </div> 
                </div>
            </div>
        </form>
        </body>
    </html>      
</DOCTYPE>
<?php $conn->close(); ?> 