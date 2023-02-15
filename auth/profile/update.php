<?php 
include '../connection.php';

?>
<html>
    <head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    body{color: #000;
        overflow-x: hidden;
        height: auto; 
    background-image: url("../img/cabin-crew2.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto 100%}
    .card{padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}
    .blue-text{color: #00BCD4}
    .form-control-label{margin-bottom: 0}
    input, textarea, button{padding: 8px 15px;border-radius: 5px !important;
        margin: 5px 0px;box-sizing: border-box;
        border: 1px solid #ccc;
        font-size: 18px !important;
        font-weight: 300}
        input:focus, textarea:focus{-moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}
            .btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}
            .btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
</style>
    </head>
    <body>
        
    <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center" style="background-color: rgb(0,0,0,0.2);color:white">

        <h3><img src="../img/airtz.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center; font-size:24px;">AIR TANZANIA AVIATION INSTITUTE</h1> 
<h2 style="text-align:center; font-size:14px;">Acredited by Tanzania Civil Aviation Authority (TCAA)</h2></h3>
<div class="card-body" style="background-color:rgb(255,255,255,0.9);">
<div class="card-header" style="background-color:#65b3d6; font-size:14px"> <strong> PERSONAL DETAILS</strong></div>
<?php include('../errors.php'); ?> 
    <table class="table" style ="width:100%;">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form" method="POST">
               

                <th colspan="3"><p style="color:red">(Provide your names as they appear in your form four certificate)</p>
                
               </th>
              
                <tr>
                    <td>
                      First Name <input type="text"  name="fname"   class="form-control" value="<?php echo $first_name; ?>">
                  </td>
                    <td>Middle Name  <input type="text" name="mname" class="form-control" value="<?php echo $middle_name; ?>"></td>
                    <td>Last Name </span> <input type="text"  name="lname" class="form-control" value="<?php echo $last_name; ?>"></td>
                </tr>
                <tr>
                    <td>Gender  <select name="gender" id="" class="form-control" >
                                    <option  selected > --Select--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                    </select>
                    </td>
                    <td>Date of Birth <input type="date" name="date_of_birth" class="form-control" value="<?php echo $date_of_birth; ?>"></td>
                    <td>Place of Birth  <input type="text" name="pob" class="form-control" value="<?php echo $pob; ?>"></td>
                </tr>
                <tr>
                <td>Citizenship <select name="citizenship" id="" class="form-control" >
                <option value="none" selected>--Select--</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </td> 
                  </select> 
                <td></td>                   
                <td>Marital Status  <select name="marital-status" id="" class="form-control">
                                    <option value="none" selected> --Select--</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                    </select>
                    </td>
                </tr>

                <th colspan="3">Form four index number
                <p style="color:red">(Specify details of your index number as they appear in your form four certificate)</p>
                </th>
                

                <tr>

                <td>Type of candidate  <select name="toc" id=""  class="form-control">
                                    <option value="none" selected> --Select--</option>
                                    <option value="Government Candidate">Goverment Candidate</option>
                                    <option value="Private Candidate">Private Candidate</option>
                    </select>
                    </td>
                     <td>Index Number  <input type="number" name="candidate-number" class="form-control" placeholder="e.g S1234-5678-2016" value="<?php echo $candidate_number; ?>"></td>
                     <td>Year Of Completion <input type="date" name="yoc" class="form-control" value="<?php echo $year_of_completion; ?>"></td>
                </tr>

                <th colspan="3">How can we reach you?
                <p style="color:red">(Make sure you have Working Email address and mobile phone, we shall use these to contact you)</p>
                </th>
              

                <tr>
                    <td>contact Address </Address><input type="text" name="contact-address" class="form-control" value="<?php echo $contact_address; ?>"></td>
                    <td>Mobile phone Number  <input type="number" placeholder="e.g 0858633252" name="pnumber" class="form-control" value="<?php echo $pnumber; ?>"></td>
                    <td>Email <input type="text" placeholder="e.g airtanzania@gmail.com" name="email" class="form-control"  value="<?php echo $email; ?>"></td>
                </tr>
                <th colspan="3">Login Credentials
                <p style="color:red">(You will use form four index number as your username and create password to login to this system.Required format for 
                is SXXXX-XXXX-YYYY </p>
                </th>
                
                <tr>
                    <td>Username <input type="text" name="uname" class="form-control" value="<?php echo $candidate_number1;?>"></td>
                    <td>Passoword <input type="password" name="pwd" class="form-control"></td>
                    <td>Confirm password <input type="password" name="pwd1" class="form-control"></td>
                </tr>
                <td><input type="submit" name="save" id="" value="Save" class="btn btn-success form-control"></td>
                
                    <td></td>
                    <td><input type="reset" class="btn btn-danger form-control"></td>

            </form>
    </table>
</div>
            </div>
        </div>
    </div>
</div>

    </body>
    <script>
        function validate(val) {
    v1 = document.getElementById("fname");
    v2 = document.getElementById("mname");
    v3 = document.getElementById("lname");
    v4 = document.getElementById("gender");
    v5 = document.getElementById("dob");
    v6 = document.getElementById("pob");
    v7 = document.getElementById("citizenship");
    v8 = document.getElementById("marital-status");
    v9 = document.getElementById("toc");
    v10 = document.getElementById("yoc");
    v11 = document.getElementById("contact-address");
    v12 = document.getElementById("pnumber");
    v13 = document.getElementById("email");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;
    flag5 = true;
    flag6 = true;
    flag7 = true;
    flag9 = true;
    flag10 = true;
    flag11 = true;
    flag12 = true;
    flag13 = true;
    flag14 = true;

    if(val>=1 || val==0) {
        if(v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        }
        else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=3 || val==0) {
        if(v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        }
        else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
    if(val>=4 || val==0) {
        if(v4.value == "") {
            v4.style.borderColor = "red";
            flag4 = false;
        }
        else {
            v4.style.borderColor = "green";
            flag4 = true;
        }
    }
    if(val>=5 || val==0) {
        if(v5.value == "") {
            v5.style.borderColor = "red";
            flag5 = false;
        }
        else {
            v5.style.borderColor = "green";
            flag5 = true;
        }
    }
    if(val>=6 || val==0) {
        if(v6.value == "") {
            v6.style.borderColor = "red";
            flag6 = false;
        }
        else {
            v6.style.borderColor = "green";
            flag6 = true;
        }
    }
    if(val>=7 || val==0) {
        if(v7.value == "") {
            v7.style.borderColor = "red";
            flag7 = false;
        }
        else {
            v7.style.borderColor = "green";
            flag7 = true;
        }
    }
    if(val>=8 || val==0) {
        if(v8.value == "") {
            v8.style.borderColor = "red";
            flag8 = false;
        }
        else {
            v8.style.borderColor = "green";
            flag8 = true;
        }
    }
    if(val>=9 || val==0) {
        if(v9.value == "") {
            v9.style.borderColor = "red";
            flag9 = false;
        }
        else {
            v9.style.borderColor = "green";
            flag9 = true;
        }
    }
    if(val>=10 || val==0) {
        if(v10.value == "") {
            v10.style.borderColor = "red";
            flag10 = false;
        }
        else {
            v10.style.borderColor = "green";
            flag10 = true;
        }
    }
    if(val>=11 || val==0) {
        if(v11.value == "") {
            v11.style.borderColor = "red";
            flag11 = false;
        }
        else {
            v11.style.borderColor = "green";
            flag11 = true;
        }
    }
    if(val>=12 || val==0) {
        if(v12.value == "") {
            v12.style.borderColor = "red";
            flag12 = false;
        }
        else {
            v12.style.borderColor = "green";
            flag12 = true;
        }
    }
    if(val>=13 || val==0) {
        if(v13.value == "") {
            v13.style.borderColor = "red";
            flag13 = false;
        }
        else {
            v13.style.borderColor = "green";
            flag13 = true;
        }
    }
   

    flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6 && flag7 && flag8 && flag9 && flag10 && flag11 
    && flag12 && flag13 && flag14;

    return flag;
}
    </script>
</html>