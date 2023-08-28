<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />
    {{-- <link href="../../../public/css/bootstrap/bootstrap.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="global">
        <div class="container c-main">
            <div class="row justify-content-center" >

                <div class="col-md-4 d-none d-md-block benefits-slider p-3 pt-5 d-flex align-items-center">
                    <div>

                        <div class="p-4 pt-5    ">
                            <img src="{{ Voyager::image(setting('site.logo')) }}" class="img-fluid pt-4" style="margin-top: 14px;" alt=""></div>

                        <h4 class="text-center">
                            Enjoy The Benefits Of
                            Becoming an <br>Highness
                        </h4>

                        <br>
                        <div class="items-images">
                            <div class="mb-4">
                                <img src="/images/new_images/icons/investing.svg"
                                    height="40px" alt="">
                                    140+ Tradable Instruments
                            </div>
                            <div class="mb-4">
                                <img src="/images/new_images/icons/zero.svg"
                                    height="40px" alt="">
                                    Zero Commission
                            </div>
                            <div class="mb-4">
                                <img src="/images/new_images/icons/zero.svg"
                                    height="40px" alt="">
                                    Zero Pips
                            </div>
                            <div class="mb-4">
                                <img src="/images/new_images/icons/spread.svg"
                                    height="40px" alt="">
                                    Leverage Up to 1.400
                            </div>
                            <div class="mb-4">
                                <img src="/images/new_images/icons/money-back.svg"
                                    height="40px" alt="">
                                    Quick Deposits & Withdrawals
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 bg-white g-0">
                    
                    <div class="dropdown lang02">
                        <button class="btn dropdown-toggle" id="dr01" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="flag-icon flag-icon-us"></span>
                            
                        </button>
                        <div class="dropdown-menu sub_lang">
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-my"></span>
                                Melayu
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-tr"></span>
                                Türkçe
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-cn"></span>
                                繁體中文
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-sa"></span>
                                Arabic
                            </a>
                        </div>
                    </div>

                    <div class="p-5 pb-3">
                        <div class="text-center">
                            <h3 class="">Account Registration</h3>
                            <h5 class="text-white-50">You are just a few simple steps away from placing your first trade
                            </h5>
                        </div>
    
                        <form class="mt-4" action="" method="post">
                            <div class="input-group mb-3">
                                <input type="radio" name="type" class="btn-check" id="btn-check-outlined1"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="btn-check-outlined1"
                                    style="border-top-left-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">Individual</label>
                                <input type="radio" name="type" class="btn-check" id="btn-check-outlined"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="btn-check-outlined">Company</label>
                            </div>
                            <div class="mb-3">
                                <input name="name" class="form-control " placeholder="Name">
                                {{-- <span role="alert" class="error link-danger small">Name is required</span> --}}
                            </div>
                            <div class="mb-3">
                                <input name="lname" class="form-control " placeholder="Last name">
                            </div>
                            <div class="mb-3">
                                <input name="email" class="form-control " placeholder="Email">
                            </div>
                            <div class="input-group mb-3">
                                <div class="inline-flex w-100 d-flex">
                                    <input type="password" name="password" class="form-control me-2 pass" placeholder="Password">
                                    <input type="password" name="repeatPassword" class="form-control pass"
                                        placeholder="Repeat Password">
                                        <span class="input-group-text" style="margin-left: 8px">
                                            <i class="far fa-eye" id="togglePassword" 
                                           style="cursor: pointer"></i>
                                           </span>
                                    </div>
                                
                            </div>
    
                            <div class="mb-3">
                                <select class="form-select" name="country">
                                    <option disabled="" value="0">Country</option>
                                    <option value="283">Aland Islands</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="266">American Samoa</option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                    <option value="7">Anguilla</option>
                                    <option value="8">Antarctica</option>
                                    <option value="9">Antigua and Barbuda</option>
                                    <option value="289">AP</option>
                                    <option value="11">Argentina</option>
                                    <option value="12">Armenia</option>
                                    <option value="13">Aruba</option>
                                    <option value="14">Australia</option>
                                    <option value="15">Austria</option>
                                    <option value="16">Azerbaijan</option>
                                    <option value="17">Bahamas</option>
                                    <option value="18">Bahrain</option>
                                    <option value="19">Bangladesh</option>
                                    <option value="20">Barbados</option>
                                    <option value="21">Belarus</option>
                                    <option value="22">Belgium</option>
                                    <option value="23">Belize</option>
                                    <option value="24">Benin</option>
                                    <option value="25">Bermuda</option>
                                    <option value="26">Bhutan</option>
                                    <option value="27">Bolivia</option>
                                    <option value="268">Bosnia and Herzegovina</option>
                                    <option value="29">Botswana</option>
                                    <option value="32">Brazil</option>
                                    <option value="33">British Indian Ocean Territory</option>
                                    <option value="269">Brunei Darussalam</option>
                                    <option value="35">Bulgaria</option>
                                    <option value="36">Burkina Faso</option>
                                    <option value="37">Burundi</option>
                                    <option value="38">Cambodia</option>
                                    <option value="39">Cameroon</option>
                                    <option value="40">Canada</option>
                                    <option value="41">Cape Verde</option>
                                    <option value="42">Cayman Islands</option>
                                    <option value="43">Central African Republic</option>
                                    <option value="44">Chad</option>
                                    <option value="45">Chile</option>
                                    <option value="46">China</option>
                                    <option value="47">Christmas Island</option>
                                    <option value="48">Cocos (Keeling) Islands</option>
                                    <option value="49">Colombia</option>
                                    <option value="50">Comoros</option>
                                    <option value="51">Congo</option>
                                    <option value="52">Cook Islands</option>
                                    <option value="53">Costa Rica</option>
                                    <option value="55">Croatia</option>
                                    <option value="56">Cuba</option>
                                    <option value="290">Curacao</option>
                                    <option value="57">Cyprus</option>
                                    <option value="58">Czech Republic</option>
                                    <option value="59">Denmark</option>
                                    <option value="60">Djibouti</option>
                                    <option value="61">Dominica</option>
                                    <option value="62">Dominican Republic</option>
                                    <option value="64">Ecuador</option>
                                    <option value="65">Egypt</option>
                                    <option value="66">El Salvador</option>
                                    <option value="67">Equatorial Guinea</option>
                                    <option value="69">Eritrea</option>
                                    <option value="70">Estonia</option>
                                    <option value="71">Ethiopia</option>
                                    <option value="288">EU</option>
                                    <option value="72">Falkland Islands</option>
                                    <option value="73">Faroe Islands</option>
                                    <option value="144">Federal States of Micronesia</option>
                                    <option value="75">Fiji</option>
                                    <option value="76">Finland</option>
                                    <option value="77">France</option>
                                    <option value="79">French Guiana</option>
                                    <option value="81">French Polynesia</option>
                                    <option value="270">French Southern Territories</option>
                                    <option value="84">Gabon</option>
                                    <option value="85">Gambia</option>
                                    <option value="86">Georgia</option>
                                    <option value="87">Germany</option>
                                    <option value="88">Ghana</option>
                                    <option value="89">Gibraltar</option>
                                    <option value="90">Greece</option>
                                    <option value="91">Greenland</option>
                                    <option value="92">Grenada</option>
                                    <option value="93">Guadeloupe</option>
                                    <option value="94">Guam</option>
                                    <option value="95">Guatemala</option>
                                    <option value="255">Guernsey</option>
                                    <option value="96">Guinea</option>
                                    <option value="97">Guinea-Bissau</option>
                                    <option value="98">Guyana</option>
                                    <option value="99">Haiti</option>
                                    <option value="100">Heard and McDonald Islands</option>
                                    <option value="101">Honduras</option>
                                    <option value="271">Hong Kong</option>
                                    <option value="103">Hungary</option>
                                    <option value="31">Iceland</option>
                                    <option value="105">India</option>
                                    <option value="108">Iraq</option>
                                    <option value="109">Ireland</option>
                                    <option value="282">Isle of Man</option>
                                    <option value="111">Italy</option>
                                    <option value="54">Ivory Coast</option>
                                    <option value="112">Jamaica</option>
                                    <option value="113">Japan</option>
                                    <option value="256">Jersey</option>
                                    <option value="114">Jordan</option>
                                    <option value="272">Kazakhstan</option>
                                    <option value="116">Kenya</option>
                                    <option value="117">Kiribati</option>
                                    <option value="120">Kuwait</option>
                                    <option value="121">Kyrgyzstan</option>
                                    <option value="122">Laos Peoples Democratic Republic</option>
                                    <option value="123">Latvia</option>
                                    <option value="124">Lebanon</option>
                                    <option value="125">Lesotho</option>
                                    <option value="126">Liberia</option>
                                    <option value="127">Libya</option>
                                    <option value="128">Liechtenstein</option>
                                    <option value="129">Lithuania</option>
                                    <option value="130">Luxembourg</option>
                                    <option value="131">Macao</option>
                                    <option value="83">Macedonia</option>
                                    <option value="132">Madagascar</option>
                                    <option value="133">Malawi</option>
                                    <option value="134">Malaysia</option>
                                    <option value="135">Maldives</option>
                                    <option value="136">Mali</option>
                                    <option value="137">Malta</option>
                                    <option value="138">Marshall Islands</option>
                                    <option value="139">Martinique</option>
                                    <option value="140">Mauritania</option>
                                    <option value="141">Mauritius</option>
                                    <option value="142">Mayotte</option>
                                    <option value="143">Mexico</option>
                                    <option value="275">Moldova</option>
                                    <option value="276">Monaco</option>
                                    <option value="147">Mongolia</option>
                                    <option value="277">Montenegro</option>
                                    <option value="148">Montserrat</option>
                                    <option value="149">Morocco</option>
                                    <option value="150">Mozambique</option>
                                    <option value="151">Myanmar, Burma</option>
                                    <option value="152">Namibia</option>
                                    <option value="153">Nauru</option>
                                    <option value="154">Nepal</option>
                                    <option value="155">Netherlands</option>
                                    <option value="156">Netherlands Antilles</option>
                                    <option value="157">New Caledonia</option>
                                    <option value="158">New Zealand</option>
                                    <option value="159">Nicaragua</option>
                                    <option value="160">Niger</option>
                                    <option value="161">Nigeria</option>
                                    <option value="162">Niue</option>
                                    <option value="163">Norfolk Island</option>
                                    <option value="164">Northern Mariana Islands</option>
                                    <option value="165">Norway</option>
                                    <option value="166">Oman</option>
                                    <option value="167">Pakistan</option>
                                    <option value="168">Palau</option>
                                    <option value="285">Palestinian Territory, Occupied</option>
                                    <option value="169">Panama</option>
                                    <option value="170">Papua New Guinea</option>
                                    <option value="171">Paraguay</option>
                                    <option value="172">Peru</option>
                                    <option value="173">Philippines</option>
                                    <option value="174">Pitcairn Islands</option>
                                    <option value="175">Poland</option>
                                    <option value="176">Portugal</option>
                                    <option value="177">Puerto Rico</option>
                                    <option value="178">Qatar</option>
                                    <option value="179">Reunion Island</option>
                                    <option value="181">Russian Federation</option>
                                    <option value="182">Rwanda</option>
                                    <option value="183">Saint Helena</option>
                                    <option value="184">Saint Kitts and Nevis</option>
                                    <option value="186">Saint Lucia</option>
                                    <option value="189">Saint Vincent and The Grenadines</option>
                                    <option value="191">San Marino</option>
                                    <option value="192">Sao Tome and Principe</option>
                                    <option value="194">Saudi Arabia</option>
                                    <option value="195">Senegal</option>
                                    <option value="265">Serbia</option>
                                    <option value="286">SERBIA AND MONTENEGRO</option>
                                    <option value="287">Serbia and Montenegro (formerl</option>
                                    <option value="196">Seychelles</option>
                                    <option value="197">Sierra Leone</option>
                                    <option value="198">Singapore</option>
                                    <option value="199">Slovakia</option>
                                    <option value="200">Slovenia</option>
                                    <option value="201">Solomon Islands</option>
                                    <option value="202">Somalia</option>
                                    <option value="203">South Africa</option>
                                    <option value="204">South Georgia and South Sandwich Islands</option>
                                    <option value="205">Spain</option>
                                    <option value="206">Sri Lanka</option>
                                    <option value="278">State of Palestine</option>
                                    <option value="207">Sudan</option>
                                    <option value="208">Suriname</option>
                                    <option value="209">Svalbard and Jan Mayen Islands</option>
                                    <option value="210">Swaziland</option>
                                    <option value="211">Sweden</option>
                                    <option value="212">Switzerland</option>
                                    <option value="213">Syrian Arab Republic</option>
                                    <option value="214">Taiwan (Republic of China)</option>
                                    <option value="215">Tajikistan</option>
                                    <option value="216">Tanzania</option>
                                    <option value="217">Thailand</option>
                                    <option value="218">Togo</option>
                                    <option value="219">Tokelau</option>
                                    <option value="220">Tonga</option>
                                    <option value="221">Trinidad and Tobago</option>
                                    <option value="222">Tunisia</option>
                                    <option value="223">Turkey</option>
                                    <option value="224">Turkmenistan</option>
                                    <option value="225">Turks and Caicos Islands</option>
                                    <option value="226">Tuvalu</option>
                                    <option value="232">U.S. Minor Outlying Islands</option>
                                    <option value="227">Uganda</option>
                                    <option value="228">Ukraine</option>
                                    <option selected value="229">United Arab Emirates</option>
                                    <option value="230">United Kingdom</option>
                                    <option value="284">Unknown</option>
                                    <option value="233">Uruguay</option>
                                    <option value="234">Uzbekistan</option>
                                    <option value="235">Vanuatu</option>
                                    <option value="236">Vatican City State</option>
                                    <option value="237">Venezuela</option>
                                    <option value="238">Vietnam</option>
                                    <option value="239">Virgin Islands (British)</option>
                                    <option value="240">Virgin Islands (U.S.)</option>
                                    <option value="241">Wallis And Futuna Islands</option>
                                    <option value="242">Western Sahara</option>
                                    <option value="243">Yemen</option>
                                    <option value="246">Zambia</option>
                                    <option value="247">Zimbabwe</option>
                                </select>
                            </div>
    
                            <div class="mb-3">
                                <div class="phones-inline w-100 d-flex">
                                    <select class="form-select me-2" name="tel_country_code"
                                        style="width: 45%!important;">
                                        <option data-countryCode="GB" value="44">UK (+44)</option>
                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                        <optgroup label="Other countries">
                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)
                                            </option>
                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)
                                            </option>
                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)
                                            </option>
                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                            <option data-countryCode="CF" value="236">Central African Republic (+236)
                                            </option>
                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)
                                            </option>
                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)
                                            </option>
                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)
                                            </option>
                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands
                                                (+1649)</option>
                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                            <option data-countryCode="AE" selected value="971">United Arab Emirates
                                                (+971)</option>
                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)
                                            </option>
                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)
                                            </option>
                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)
                                            </option>
                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                        </optgroup>
                                    </select>
                                    <input name="phone" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <div class="form-check small text-black-50">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label small" for="flexCheckDefault">
                                        I hereby acknowledge and agree that the company will keep and process my Personal
                                        Data for regulatory purpose in accordance with GDPR*. I have read, understood and
                                        accepted TrioMarkets Client agreement, <a href="#">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
    
                            <div class="mb-3 text-center">
                                <button type="button" class="btn btn-primary btn-lg w-45">Sign up</button>
                            </div>
    
                            <div class="text-center">
                                <p class="mb-0">Already registered? Then <a href="https://portal.TradeLive AI.com/en/auth/login"
                                        class="text-primary">Login</a></p>
                            </div>
    
                        </form>
                    </div>

                    <p class="mt-3 small text-black-50 small" style="background: #f1f1f1; padding: 8px; margin: 0;">
                        Invest Responsibly: CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.
                    </p>

                </div>
                
            </div>
        </div>
    </div>

    
    
    <div class="chat-right-b position-fixed">
        <img src="/images/icons/life chat3.png" class="rounded-circle" alt="" />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>


    <style>

        h3{
            font-weight: 800;
    color: #0068c7;
        }

        * {
            font-family: 'Cairo', sans-serif;
        }

        .items-images img {
            margin-right: 8px;
        }

        .global {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(../../images/new_images/auth/30.jpg);
            background-size: cover;
        }

        .c-main {
            max-width: 1000px;
            border-radius: 10px;
            box-shadow: 0 0 30px 2px #00000099;
            background: transparent;
            overflow: hidden;
        }

        .input-group label {
            width: 50%;
            padding: 6px 0px;
        }

        .input-group label:nth-child(0) {
            margin-left: -1px;
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }

        .w-45 {
            width: 45%;
        }

        /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #0068c7;
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #025fb6; 
}


.benefits-slider {
    color: #fff;
    background: url(../images/new_images/benefits-slider-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
body{
    background: #0f3e5c;
}


.lang02{
            float: right;
            margin: 10px;
            margin-right: 0;
        }
        

.chat-right-b{
    display: table;
    right: 10px;
    bottom: 10px;
}

.chat-right-b img{
    background-color: #ffffff4f;
    padding: 8px;
    display: block;
    width: 60px;
    height: 60px;
    margin: 8px 0px;
    cursor: pointer;
}

    </style>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>

</body>

</html>
