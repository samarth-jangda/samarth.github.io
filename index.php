<!DOCTYPE html>
<html lang="en" data-select2-id="19"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="https://ipaytotal.solutions/newTheme/assets/img/logo01.png">
    <title>Ipaytotal Checkout Form</title>
    <link href="./Ipaytotal Checkout Form_files/all.min.css" rel="stylesheet">
    <link href="./Ipaytotal Checkout Form_files/ionicons.min.css" rel="stylesheet">
    <link href="./Ipaytotal Checkout Form_files/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./Ipaytotal Checkout Form_files/dashforge.css">
    <link rel="stylesheet" href="./Ipaytotal Checkout Form_files/dashforge.demo.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Ipaytotal Checkout Form_files/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/util.css">
    <link rel="stylesheet" type="text/css" href="Ipaytotal Checkout Form_files/main.css">
    <style type="text/css">
        footer ul{
            margin: 0px;
        }
        footer li{
            float: left;
            list-style: none;
            height: 60px;
            position: relative;
            width: 80px;
        }
        footer li img{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .content-fixed{
            margin-top: 0px;
        }
    </style>

</head>
<body data-select2-id="18">
<div style="background-image: url('Ipaytotal Checkout Form_files/images/abc.jpg');">
<div class="container" data-select2-id="17">
    <div class="row" data-select2-id="16">
        <div class="col-md-12 text-center">
            <img src="./Ipaytotal Checkout Form_files/logo.png" class="img-fluid" alt="ipaytotal" width="250px" style="margin: auto; padding: 10px 0;">
        </div>
        <div class="col-md-12" data-select2-id="15">
            <form method="POST" action="https://ipaytotal.solutions/hosted-pay/payment-request" accept-charset="UTF-8" onsubmit="document.getElementById(&quot;disableBTN&quot;).disabled=true; document.getElementById(&quot;disableBTN&quot;)" enctype="multipart/form-data" data-select2-id="14"><input name="_token" type="hidden" value="2y7u7Jk30NjsIwvpxMqeQhMwMrrRIDhU98uqSJ2A">
                <input type="hidden" name="api_key" value="16630iRX27NSvssxLrBPXJDirxT4ZZTcBW4Ajaz08qSpDiwyceDqL2jhOTjey0zfpCHa">
                <input type="hidden" name="response_url" value="https://ipaytotal.solutions/ipaytotal-iframe-checkout/VG5wTDJjTjlxVWVYaGlTNldPWjBYZzZlN3VpYTd4Uy95M3lBODN2VXdoMWhTcjVZeFdoYUJsblVrc3RSbm5kOEh3eE1QdVdqbHhuK3p2L1pobXd0bFkyNnhWRzJ4cnlkRWR1RXlka0tPRXVBeUNwV3lXMFVyeWtlclIwQjV5bmFhZ1FlZ05WN05MRmgwN0tyT2p2UlBUbE5NNCtoQUFhSkFoelhVT2JWZ3pBPQ==">
                <input type="hidden" name="payment_gateway_id" value="41">
                <input type="hidden" name="is_request_from_vt" value="IFRAME">
                <input type="hidden" name="ip_address" value="172.28.1.210">
                <div class="portlet-body form" data-select2-id="13">
                    <div class="form-body" data-select2-id="12">
                        <div class="row" data-select2-id="11">
                            <div class="col-md-12" data-select2-id="10">
                                <div data-label="Billing Info" class="df-example demo-forms" data-select2-id="9">
                                    <div class="row" data-select2-id="8">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input class="form-control spinner" name="first_name" type="text" id="first_name" placeholder="First Name" value="" required="">
                                            </div>
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] = "POST") {

                                                //first name check
                                                if (empty($_Post["first_name"])){
                                                    $first_nameErr = "First_Name required";
                                                }
                                                else{
                                                    $first_name = test_input($_POST["first_name"]);
                                                }
                                            }
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input class="form-control spinner" name="last_name" type="text" id="last_name" placeholder="Last Name" value="" required="">
                                            </div>
                                            <?php
                                            //last name check
                                            if (empty($POST["last_name"])){
                                                $last_nameERR =  "Last_Name is also required";
                                            }
                                            else{
                                                $last_name = test_input($_POST["first_name"]);
                                            }
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input class="form-control spinner" name="address" type="text" id="address" placeholder="Address" value="" required="">
                                            </div>
                                            <?php
                                            //address check
                                            if (empty($_POST["address"])){
                                                $address = "address required";
                                            }
                                            else{
                                                $address = test_input($_POST["address"]);
                                            }
                                            ?>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Customer Order ID Number <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input class="form-control spinner" name="sulte_apt_no" type="text" placeholder="Customer Order ID Number" value="" required="">
                                            </div>
                                            <?php
                                            //customer id check

                                            if (empty($_POST["sulte_apt_no"])){
                                                $sulte_apt_noERR = "customer id number is required";
                                            }
                                            else{
                                                $sulte_apt_no = test_input($_POST["sulte_apt_no"]);
                                                //now suppose a customer has an customer id of exactly 8 digits
                                                if (preg_match('/^[0-8]{9}+$/',$sulte_apt_no)){
                                                    echo "Valid customer id <br>";
                                                }
                                                else{
                                                    echo "Invalid Customer id <br>";
                                                }
                                            }
                                            ?>
                                        </div>



                                        <div class="col-md-6" data-select2-id="7">
                                            <div class="form-group" data-select2-id="6">
                                                <label>Country <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <select class="form-control select2 select2-hidden-accessible" name="country" id="country11" required="" data-select2-id="country11" tabindex="-1" aria-hidden="true">
                                                    <option selected="" disabled="" data-select2-id="2"> -- Select Country Type -- </option>
                                                    <option value="AF" data-select2-id="20">Afghanistan</option>
                                                    <option value="AX" data-select2-id="21">Åland Islands</option>
                                                    <option value="AL" data-select2-id="22">Albania</option>
                                                    <option value="DZ" data-select2-id="23">Algeria</option>
                                                    <option value="AS" data-select2-id="24">American Samoa</option>
                                                    <option value="AD" data-select2-id="25">Andorra</option>
                                                    <option value="AO" data-select2-id="26">Angola</option>
                                                    <option value="AI" data-select2-id="27">Anguilla</option>
                                                    <option value="AQ" data-select2-id="28">Antarctica</option>
                                                    <option value="AG" data-select2-id="29">Antigua and Barbuda</option>
                                                    <option value="AR" data-select2-id="30">Argentina</option>
                                                    <option value="AM" data-select2-id="31">Armenia</option>
                                                    <option value="AW" data-select2-id="32">Aruba</option>
                                                    <option value="AU" data-select2-id="33">Australia</option>
                                                    <option value="AT" data-select2-id="34">Austria</option>
                                                    <option value="AZ" data-select2-id="35">Azerbaijan</option>
                                                    <option value="BS" data-select2-id="36">Bahamas</option>
                                                    <option value="BH" data-select2-id="37">Bahrain</option>
                                                    <option value="BD" data-select2-id="38">Bangladesh</option>
                                                    <option value="BB" data-select2-id="39">Barbados</option>
                                                    <option value="BY" data-select2-id="40">Belarus</option>
                                                    <option value="BE" data-select2-id="41">Belgium</option>
                                                    <option value="BZ" data-select2-id="42">Belize</option>
                                                    <option value="BJ" data-select2-id="43">Benin</option>
                                                    <option value="BM" data-select2-id="44">Bermuda</option>
                                                    <option value="BT" data-select2-id="45">Bhutan</option>
                                                    <option value="BO" data-select2-id="46">Bolivia</option>
                                                    <option value="BA" data-select2-id="47">Bosnia and Herzegovina</option>
                                                    <option value="BW" data-select2-id="48">Botswana</option>
                                                    <option value="BV" data-select2-id="49">Bouvet Island</option>
                                                    <option value="BR" data-select2-id="50">Brazil</option>
                                                    <option value="IO" data-select2-id="51">British Indian Ocean Territory</option>
                                                    <option value="BN" data-select2-id="52">Brunei Darussalam</option>
                                                    <option value="BG" data-select2-id="53">Bulgaria</option>
                                                    <option value="BF" data-select2-id="54">Burkina Faso</option>
                                                    <option value="BI" data-select2-id="55">Burundi</option>
                                                    <option value="KH" data-select2-id="56">Cambodia</option>
                                                    <option value="CM" data-select2-id="57">Cameroon</option>
                                                    <option value="CA" data-select2-id="58">Canada</option>
                                                    <option value="CV" data-select2-id="59">Cape Verde</option>
                                                    <option value="KY" data-select2-id="60">Cayman Islands</option>
                                                    <option value="CF" data-select2-id="61">Central African Republic</option>
                                                    <option value="TD" data-select2-id="62">Chad</option>
                                                    <option value="CL" data-select2-id="63">Chile</option>
                                                    <option value="CN" data-select2-id="64">China</option>
                                                    <option value="CX" data-select2-id="65">Christmas Island</option>
                                                    <option value="CC" data-select2-id="66">Cocos (Keeling) Islands</option>
                                                    <option value="CO" data-select2-id="67">Colombia</option>
                                                    <option value="KM" data-select2-id="68">Comoros</option>
                                                    <option value="CG" data-select2-id="69">Congo</option>
                                                    <option value="CD" data-select2-id="70">Congo, The Democratic Republic of The</option>
                                                    <option value="CK" data-select2-id="71">Cook Islands</option>
                                                    <option value="CR" data-select2-id="72">Costa Rica</option>
                                                    <option value="CI" data-select2-id="73">Cote D'ivoire</option>
                                                    <option value="HR" data-select2-id="74">Croatia</option>
                                                    <option value="CU" data-select2-id="75">Cuba</option>
                                                    <option value="CY" data-select2-id="76">Cyprus</option>
                                                    <option value="CZ" data-select2-id="77">Czech Republic</option>
                                                    <option value="DK" data-select2-id="78">Denmark</option>
                                                    <option value="DJ" data-select2-id="79">Djibouti</option>
                                                    <option value="DM" data-select2-id="80">Dominica</option>
                                                    <option value="DO" data-select2-id="81">Dominican Republic</option>
                                                    <option value="EC" data-select2-id="82">Ecuador</option>
                                                    <option value="EG" data-select2-id="83">Egypt</option>
                                                    <option value="SV" data-select2-id="84">El Salvador</option>
                                                    <option value="GQ" data-select2-id="85">Equatorial Guinea</option>
                                                    <option value="ER" data-select2-id="86">Eritrea</option>
                                                    <option value="EE" data-select2-id="87">Estonia</option>
                                                    <option value="ET" data-select2-id="88">Ethiopia</option>
                                                    <option value="FK" data-select2-id="89">Falkland Islands (Malvinas)</option>
                                                    <option value="FO" data-select2-id="90">Faroe Islands</option>
                                                    <option value="FJ" data-select2-id="91">Fiji</option>
                                                    <option value="FI" data-select2-id="92">Finland</option>
                                                    <option value="FR" data-select2-id="93">France</option>
                                                    <option value="GF" data-select2-id="94">French Guiana</option>
                                                    <option value="PF" data-select2-id="95">French Polynesia</option>
                                                    <option value="TF" data-select2-id="96">French Southern Territories</option>
                                                    <option value="GA" data-select2-id="97">Gabon</option>
                                                    <option value="GM" data-select2-id="98">Gambia</option>
                                                    <option value="GE" data-select2-id="99">Georgia</option>
                                                    <option value="DE" data-select2-id="100">Germany</option>
                                                    <option value="GH" data-select2-id="101">Ghana</option>
                                                    <option value="GI" data-select2-id="102">Gibraltar</option>
                                                    <option value="GR" data-select2-id="103">Greece</option>
                                                    <option value="GL" data-select2-id="104">Greenland</option>
                                                    <option value="GD" data-select2-id="105">Grenada</option>
                                                    <option value="GP" data-select2-id="106">Guadeloupe</option>
                                                    <option value="GU" data-select2-id="107">Guam</option>
                                                    <option value="GT" data-select2-id="108">Guatemala</option>
                                                    <option value="GG" data-select2-id="109">Guernsey</option>
                                                    <option value="GN" data-select2-id="110">Guinea</option>
                                                    <option value="GW" data-select2-id="111">Guinea-bissau</option>
                                                    <option value="GY" data-select2-id="112">Guyana</option>
                                                    <option value="HT" data-select2-id="113">Haiti</option>
                                                    <option value="HM" data-select2-id="114">Heard Island and Mcdonald Islands</option>
                                                    <option value="VA" data-select2-id="115">Holy See (Vatican City State)</option>
                                                    <option value="HN" data-select2-id="116">Honduras</option>
                                                    <option value="HK" data-select2-id="117">Hong Kong</option>
                                                    <option value="HU" data-select2-id="118">Hungary</option>
                                                    <option value="IS" data-select2-id="119">Iceland</option>
                                                    <option value="IN" data-select2-id="120">India</option>
                                                    <option value="ID" data-select2-id="121">Indonesia</option>
                                                    <option value="IR" data-select2-id="122">Iran, Islamic Republic of</option>
                                                    <option value="IQ" data-select2-id="123">Iraq</option>
                                                    <option value="IE" data-select2-id="124">Ireland</option>
                                                    <option value="IM" data-select2-id="125">Isle of Man</option>
                                                    <option value="IL" data-select2-id="126">Israel</option>
                                                    <option value="IT" data-select2-id="127">Italy</option>
                                                    <option value="JM" data-select2-id="128">Jamaica</option>
                                                    <option value="JP" data-select2-id="129">Japan</option>
                                                    <option value="JE" data-select2-id="130">Jersey</option>
                                                    <option value="JO" data-select2-id="131">Jordan</option>
                                                    <option value="KZ" data-select2-id="132">Kazakhstan</option>
                                                    <option value="KE" data-select2-id="133">Kenya</option>
                                                    <option value="KI" data-select2-id="134">Kiribati</option>
                                                    <option value="KP" data-select2-id="135">Korea, Democratic People's Republic of</option>
                                                    <option value="KR" data-select2-id="136">Korea, Republic of</option>
                                                    <option value="KW" data-select2-id="137">Kuwait</option>
                                                    <option value="KG" data-select2-id="138">Kyrgyzstan</option>
                                                    <option value="LA" data-select2-id="139">Lao People's Democratic Republic</option>
                                                    <option value="LV" data-select2-id="140">Latvia</option>
                                                    <option value="LB" data-select2-id="141">Lebanon</option>
                                                    <option value="LS" data-select2-id="142">Lesotho</option>
                                                    <option value="LR" data-select2-id="143">Liberia</option>
                                                    <option value="LY" data-select2-id="144">Libyan Arab Jamahiriya</option>
                                                    <option value="LI" data-select2-id="145">Liechtenstein</option>
                                                    <option value="LT" data-select2-id="146">Lithuania</option>
                                                    <option value="LU" data-select2-id="147">Luxembourg</option>
                                                    <option value="MO" data-select2-id="148">Macao</option>
                                                    <option value="MK" data-select2-id="149">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="MG" data-select2-id="150">Madagascar</option>
                                                    <option value="MW" data-select2-id="151">Malawi</option>
                                                    <option value="MY" data-select2-id="152">Malaysia</option>
                                                    <option value="MV" data-select2-id="153">Maldives</option>
                                                    <option value="ML" data-select2-id="154">Mali</option>
                                                    <option value="MT" data-select2-id="155">Malta</option>
                                                    <option value="MH" data-select2-id="156">Marshall Islands</option>
                                                    <option value="MQ" data-select2-id="157">Martinique</option>
                                                    <option value="MR" data-select2-id="158">Mauritania</option>
                                                    <option value="MU" data-select2-id="159">Mauritius</option>
                                                    <option value="YT" data-select2-id="160">Mayotte</option>
                                                    <option value="MX" data-select2-id="161">Mexico</option>
                                                    <option value="FM" data-select2-id="162">Micronesia, Federated States of</option>
                                                    <option value="MD" data-select2-id="163">Moldova, Republic of</option>
                                                    <option value="MC" data-select2-id="164">Monaco</option>
                                                    <option value="MN" data-select2-id="165">Mongolia</option>
                                                    <option value="ME" data-select2-id="166">Montenegro</option>
                                                    <option value="MS" data-select2-id="167">Montserrat</option>
                                                    <option value="MA" data-select2-id="168">Morocco</option>
                                                    <option value="MZ" data-select2-id="169">Mozambique</option>
                                                    <option value="MM" data-select2-id="170">Myanmar</option>
                                                    <option value="NA" data-select2-id="171">Namibia</option>
                                                    <option value="NR" data-select2-id="172">Nauru</option>
                                                    <option value="NP" data-select2-id="173">Nepal</option>
                                                    <option value="NL" data-select2-id="174">Netherlands</option>
                                                    <option value="AN" data-select2-id="175">Netherlands Antilles</option>
                                                    <option value="NC" data-select2-id="176">New Caledonia</option>
                                                    <option value="NZ" data-select2-id="177">New Zealand</option>
                                                    <option value="NI" data-select2-id="178">Nicaragua</option>
                                                    <option value="NE" data-select2-id="179">Niger</option>
                                                    <option value="NG" data-select2-id="180">Nigeria</option>
                                                    <option value="NU" data-select2-id="181">Niue</option>
                                                    <option value="NF" data-select2-id="182">Norfolk Island</option>
                                                    <option value="MP" data-select2-id="183">Northern Mariana Islands</option>
                                                    <option value="NO" data-select2-id="184">Norway</option>
                                                    <option value="OM" data-select2-id="185">Oman</option>
                                                    <option value="PK" data-select2-id="186">Pakistan</option>
                                                    <option value="PW" data-select2-id="187">Palau</option>
                                                    <option value="PS" data-select2-id="188">Palestinian Territory, Occupied</option>
                                                    <option value="PA" data-select2-id="189">Panama</option>
                                                    <option value="PG" data-select2-id="190">Papua New Guinea</option>
                                                    <option value="PY" data-select2-id="191">Paraguay</option>
                                                    <option value="PE" data-select2-id="192">Peru</option>
                                                    <option value="PH" data-select2-id="193">Philippines</option>
                                                    <option value="PN" data-select2-id="194">Pitcairn</option>
                                                    <option value="PL" data-select2-id="195">Poland</option>
                                                    <option value="PT" data-select2-id="196">Portugal</option>
                                                    <option value="PR" data-select2-id="197">Puerto Rico</option>
                                                    <option value="QA" data-select2-id="198">Qatar</option>
                                                    <option value="RE" data-select2-id="199">Reunion</option>
                                                    <option value="RO" data-select2-id="200">Romania</option>
                                                    <option value="RU" data-select2-id="201">Russian Federation</option>
                                                    <option value="RW" data-select2-id="202">Rwanda</option>
                                                    <option value="SH" data-select2-id="203">Saint Helena</option>
                                                    <option value="KN" data-select2-id="204">Saint Kitts and Nevis</option>
                                                    <option value="LC" data-select2-id="205">Saint Lucia</option>
                                                    <option value="PM" data-select2-id="206">Saint Pierre and Miquelon</option>
                                                    <option value="VC" data-select2-id="207">Saint Vincent and The Grenadines</option>
                                                    <option value="WS" data-select2-id="208">Samoa</option>
                                                    <option value="SM" data-select2-id="209">San Marino</option>
                                                    <option value="ST" data-select2-id="210">Sao Tome and Principe</option>
                                                    <option value="SA" data-select2-id="211">Saudi Arabia</option>
                                                    <option value="SN" data-select2-id="212">Senegal</option>
                                                    <option value="RS" data-select2-id="213">Serbia</option>
                                                    <option value="SC" data-select2-id="214">Seychelles</option>
                                                    <option value="SL" data-select2-id="215">Sierra Leone</option>
                                                    <option value="SG" data-select2-id="216">Singapore</option>
                                                    <option value="SK" data-select2-id="217">Slovakia</option>
                                                    <option value="SI" data-select2-id="218">Slovenia</option>
                                                    <option value="SB" data-select2-id="219">Solomon Islands</option>
                                                    <option value="SO" data-select2-id="220">Somalia</option>
                                                    <option value="ZA" data-select2-id="221">South Africa</option>
                                                    <option value="GS" data-select2-id="222">South Georgia and The South Sandwich Islands</option>
                                                    <option value="ES" data-select2-id="223">Spain</option>
                                                    <option value="LK" data-select2-id="224">Sri Lanka</option>
                                                    <option value="SD" data-select2-id="225">Sudan</option>
                                                    <option value="SR" data-select2-id="226">Suriname</option>
                                                    <option value="SJ" data-select2-id="227">Svalbard and Jan Mayen</option>
                                                    <option value="SZ" data-select2-id="228">Swaziland</option>
                                                    <option value="SE" data-select2-id="229">Sweden</option>
                                                    <option value="CH" data-select2-id="230">Switzerland</option>
                                                    <option value="SY" data-select2-id="231">Syrian Arab Republic</option>
                                                    <option value="TW" data-select2-id="232">Taiwan, Province of China</option>
                                                    <option value="TJ" data-select2-id="233">Tajikistan</option>
                                                    <option value="TZ" data-select2-id="234">Tanzania, United Republic of</option>
                                                    <option value="TH" data-select2-id="235">Thailand</option>
                                                    <option value="TL" data-select2-id="236">Timor-leste</option>
                                                    <option value="TG" data-select2-id="237">Togo</option>
                                                    <option value="TK" data-select2-id="238">Tokelau</option>
                                                    <option value="TO" data-select2-id="239">Tonga</option>
                                                    <option value="TT" data-select2-id="240">Trinidad and Tobago</option>
                                                    <option value="TN" data-select2-id="241">Tunisia</option>
                                                    <option value="TR" data-select2-id="242">Turkey</option>
                                                    <option value="TM" data-select2-id="243">Turkmenistan</option>
                                                    <option value="TC" data-select2-id="244">Turks and Caicos Islands</option>
                                                    <option value="TV" data-select2-id="245">Tuvalu</option>
                                                    <option value="UG" data-select2-id="246">Uganda</option>
                                                    <option value="UA" data-select2-id="247">Ukraine</option>
                                                    <option value="AE" data-select2-id="248">United Arab Emirates</option>
                                                    <option value="GB" data-select2-id="249">United Kingdom</option>
                                                    <option value="US" data-select2-id="250">United States</option>
                                                    <option value="UM" data-select2-id="251">United States Minor Outlying Islands</option>
                                                    <option value="UY" data-select2-id="252">Uruguay</option>
                                                    <option value="UZ" data-select2-id="253">Uzbekistan</option>
                                                    <option value="VU" data-select2-id="254">Vanuatu</option>
                                                    <option value="VE" data-select2-id="255">Venezuela</option>
                                                    <option value="VN" data-select2-id="256">Viet Nam</option>
                                                    <option value="VG" data-select2-id="257">Virgin Islands, British</option>
                                                    <option value="VI" data-select2-id="258">Virgin Islands, U.S.</option>
                                                    <option value="WF" data-select2-id="259">Wallis and Futuna</option>
                                                    <option value="EH" data-select2-id="260">Western Sahara</option>
                                                    <option value="YE" data-select2-id="261">Yemen</option>
                                                    <option value="ZM" data-select2-id="262">Zambia</option>
                                                    <option value="ZW" data-select2-id="263">Zimbabwe</option>
                                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 569px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country11-container"><span class="select2-selection__rendered" id="select2-country11-container" role="textbox" aria-readonly="true" title=" -- Select Country Type -- "> -- Select Country Type -- </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <?php
                                            //country field check
                                            if (empty($_POST["country"])){
                                                $countryERR = "please enter a country";
                                            }
                                            else{
                                                $country = test_input($_POST["country"]);
                                            }
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input type="text" name="state" id="state" class="form-control" value="" required="">
                                            </div>
                                            <?php
                                            //state field check
                                            if (empty($_POST["state"])){
                                                $stateERR = "state field required";
                                            }
                                            else{
                                                $state = test_input($_POST["state"]);
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input class="form-control spinner" name="city" type="text" id="city" placeholder="City" value="" required="">
                                            </div>
                                            <?php
                                            //city field check
                                            if (empty($POST["city"])){
                                                $cityERR = "city field required";
                                            }
                                            else{
                                                $city = test_input($_POST["city"]);
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip Code <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <input class="form-control spinner" name="zip" type="text" id="zip" placeholder="Zip Code" value="" required="">
                                            </div>
                                            <?php
                                            //zip field check
                                            if (empty($_POST["zip"])){
                                                $zipERR = "zip code is also required";
                                            }
                                            else{
                                                $zip = test_input($_POST["zip"]);
                                                //zip field validation
                                                function validating($zip){
                                                    if (preg_match('/^[0-4]{5}+$/',$zip)){
                                                        echo "Valid zip code <br>";
                                                    }
                                                    else{
                                                        echo "Invalid Zip code <br>";
                                                    }

                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                    </div>
                                                    <input class="form-control spinner" name="email" type="email" id="email" placeholder="Email" value="" required="">
                                                </div>
                                            </div>
                                            <?php
                                            //email field check
                                            if (empty($_POST["email"])){
                                                $emailERR = "email field required";
                                            }
                                            else{
                                                $email = test_input($_POST["email"]);
                                                //checking if valid email address
                                                //function validating_1($emailERR){
                                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                                    $emailErr = "Invalid email format";
                                                }
                                                else{
                                                    echo "Valid email id <br>";
                                                }
                                                //}


                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone No. <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input class="form-control spinner" name="phone_no" type="text" placeholder="Phone No." id="phone_no" value="" required="">
                                                    <code> : Enter the phone number in the following format '+Country Code-Phone Number'; e.g."+441234567890"</code>
                                                </div>
                                            </div>
                                            <?php
                                            //phone_no field check
                                            if (empty($_POST["phone_no"])){
                                                $phone_noERR = "phone no is required";
                                            }
                                            else{
                                                $phone_no = test_input($_POST["phone_no"]);
                                                function PHP($phone_no){
                                                    if (preg_match('/^[0-9]{10}+$/',$phone_no)){
                                                        echo "Valid phone number <br>";
                                                    }
                                                    else{
                                                        echo "Invalid phone number <br>";
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amount <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span>
                                                    </div>
                                                    <input class="form-control spinner" name="amount" type="text" placeholder="Amount" id="amount" value="" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" data-select2-id="267">
                                            <div class="form-group " data-select2-id="266">
                                                <label>Currency <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <select class="form-control select2 select2-hidden-accessible" name="currency" id="currency" required="" data-select2-id="currency" tabindex="-1" aria-hidden="true">
                                                    <option disabled="" data-select2-id="268"> -- Select Currency -- </option>
                                                    <option value="USD" selected="" data-select2-id="4">USD</option>
                                                    <option value="HKD" data-select2-id="269">HKD</option>
                                                    <option value="GBP" data-select2-id="270">GBP</option>
                                                    <option value="JPY" data-select2-id="271">JPY</option>
                                                    <option value="EUR" data-select2-id="272">EUR</option>
                                                    <option value="AUD" data-select2-id="273">AUD</option>
                                                    <option value="CAD" data-select2-id="274">CAD</option>
                                                    <option value="SGD" data-select2-id="275">SGD</option>
                                                    <option value="NZD" data-select2-id="276">NZD</option>
                                                    <option value="TWD" data-select2-id="277">TWD</option>
                                                    <option value="KRW" data-select2-id="278">KRW</option>
                                                    <option value="DKK" data-select2-id="279">DKK</option>
                                                    <option value="TRL" data-select2-id="280">TRL</option>
                                                    <option value="MYR" data-select2-id="281">MYR</option>
                                                    <option value="THB" data-select2-id="282">THB</option>
                                                    <option value="INR" data-select2-id="283">INR</option>
                                                    <option value="PHP" data-select2-id="284">PHP</option>
                                                    <option value="CHF" data-select2-id="285">CHF</option>
                                                    <option value="SEK" data-select2-id="286">SEK</option>
                                                    <option value="ILS" data-select2-id="287">ILS</option>
                                                    <option value="ZAR" data-select2-id="288">ZAR</option>
                                                    <option value="RUB" data-select2-id="289">RUB</option>
                                                    <option value="NOK" data-select2-id="290">NOK</option>
                                                    <option value="AED" data-select2-id="291">AED</option>
                                                </select><span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" data-select2-id="3" style="width: 569px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-currency-container"><span class="select2-selection__rendered" id="select2-currency-container" role="textbox" aria-readonly="true" title="USD">USD</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <?php
                                                //currency check
                                                if (empty($_POST["currency"])){
                                                    $currencyERR = "currency field is required";
                                                }
                                                else {
                                                    $currency = test_input($_POST["currency"]);

                                                    echo "Details have been submitted , ThankYou";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-success btn-sm" id="disableBTN">Submit</button>
                                <a href="https://ipaytotal.solutions/ipaytotal-iframe-checkout/VG5wTDJjTjlxVWVYaGlTNldPWjBYZzZlN3VpYTd4Uy95M3lBODN2VXdoMWhTcjVZeFdoYUJsblVrc3RSbm5kOEh3eE1QdVdqbHhuK3p2L1pobXd0bFkyNnhWRzJ4cnlkRWR1RXlka0tPRXVBeUNwV3lXMFVyeWtlclIwQjV5bmFhZ1FlZ05WN05MRmgwN0tyT2p2UlBUbE5NNCtoQUFhSkFoelhVT2JWZ3pBPQ==#" class="btn btn-sm btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>

                </div></form>
        </div>
    </div>
    <br>
    <footer class="footer">
        <div>

        </div>
        <div>
            <nav class="nav">
                <ul class="pull-center">
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/card-logos.jpg" alt="Master Card And Visa" title="Master Card And Visa" border="0" style="width: 80px;">
                    </li>
                    <li>
                        <a href="javascript:"><img src="./Ipaytotal Checkout Form_files/pci_logo_footer.jpg" alt="PCI-DSS - certified by SISA" title="PCI-DSS - certified by SISA" border="0"></a>
                    </li>
                    <li>
                        <a href="https://ipaytotal.solutions/ipaytotal-iframe-checkout/VG5wTDJjTjlxVWVYaGlTNldPWjBYZzZlN3VpYTd4Uy95M3lBODN2VXdoMWhTcjVZeFdoYUJsblVrc3RSbm5kOEh3eE1QdVdqbHhuK3p2L1pobXd0bFkyNnhWRzJ4cnlkRWR1RXlka0tPRXVBeUNwV3lXMFVyeWtlclIwQjV5bmFhZ1FlZ05WN05MRmgwN0tyT2p2UlBUbE5NNCtoQUFhSkFoelhVT2JWZ3pBPQ==#" target="_blank" title="Norton Secured Powered by VeriSign"><img src="./Ipaytotal Checkout Form_files/norton_logo_footer.jpg" alt="Norton Secured Powered by VeriSign" title="Norton Secured Powered by VeriSign" border="0"></a>
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/mastercard_logo_footer.jpg" alt="MasterCard SecureCode" title="MasterCard SecureCode" border="0">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/visa_logo_footer.jpg" alt="Verified by VISA" title="Verified by VISA" border="0">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/american_exp_footer.jpg" alt="American Express SafeKey" title="American Express SafeKey" border="0">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/SafeSecureLogo.jpg" alt="SafeSecure" title="SafeSecure" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/ssl.png" alt="SSL" title="SSL" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/sitelock.png" alt="sitelock" title="sitelock" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/jcb_logo_footer.jpg" alt="JCB J/Secure" title="JCB J/Secure" border="0">
                    </li>
                    <li>
                        <img src="./Ipaytotal Checkout Form_files/comodo.png" alt="Comode" title="Comode" border="0" style="width: 80px;">
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    <script src="./Ipaytotal Checkout Form_files/jquery.min.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/bootstrap.bundle.min.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/feather.min.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/perfect-scrollbar.min.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/select2.min.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/dashforge.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/js.cookie.js.download"></script>
    <script src="./Ipaytotal Checkout Form_files/dashforge.settings.js.download"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();

            // get State From Country
            // $('#country11').on('change', function() {
            //     country = this.value;
            //     $.ajax({
            //         type: 'POST',
            //         url: "https://ipaytotal.solutions/getstate",
            //         data: {
            //             '_token': $('input[name=_token]').val(),
            //             'country': country
            //         },
            //         beforeSend: function() {
            //             $('#state').attr('disabled', 'disabled');
            //         },
            //         success: function(data) {
            //             $('#state').html(data.html);
            //             $('#state').attr('disabled', false);
            //         },
            //     });
            // });

            // $('#state').on('change', function() {
            //     country = $('#country11').find(":selected").val();
            //     state = this.value;
            //     $.ajax({
            //         type: 'POST',
            //         url: "https://ipaytotal.solutions/getcity",
            //         data: {
            //             '_token': $('input[name=_token]').val(),
            //             'state': state,
            //             'country' : country
            //         },
            //         beforeSend: function() {
            //             $('#city').attr('disabled', 'disabled');
            //         },
            //         success: function(data) {
            //             $('#city').html(data.html);
            //             $('#city').attr('disabled', false);
            //         },
            //     });
            // });
        });
    </script>

    <?php


    function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
    }
    ?>

</body>
</html>