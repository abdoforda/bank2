
@php
    $phoneCodes =['AF'=>'93','AL'=>'355','DZ'=>'213','AS'=>'1-684','AD'=>'376','AO'=>'244','AI'=>'1-264','AQ'=>'672','AG'=>'1-268','AR'=>'54','AM'=>'374','AW'=>'297','AU'=>'61','AT'=>'43','AZ'=>'994','BS'=>'1-242','BH'=>'973','BD'=>'880','BB'=>'1-246','BY'=>'375','BE'=>'32','BZ'=>'501','BJ'=>'229','BM'=>'1-441','BT'=>'975','BO'=>'591','BA'=>'387','BW'=>'267','BR'=>'55','IO'=>'246','VG'=>'1-284','BN'=>'673','BG'=>'359','BF'=>'226','BI'=>'257','KH'=>'855','CM'=>'237','CA'=>'1','CV'=>'238','KY'=>'1-345','CF'=>'236','TD'=>'235','CL'=>'56','CN'=>'86','CX'=>'61','CC'=>'61','CO'=>'57','KM'=>'269','CK'=>'682','CR'=>'506','HR'=>'385','CU'=>'53','CW'=>'599','CY'=>'357','CZ'=>'420','CD'=>'243','DK'=>'45','DJ'=>'253','DM'=>'1-767','DO'=>'1-809','TL'=>'670','EC'=>'593','EG'=>'20','SV'=>'503','GQ'=>'240','ER'=>'291','EE'=>'372','ET'=>'251','FK'=>'500','FO'=>'298','FJ'=>'679','FI'=>'358','FR'=>'33','PF'=>'689','GA'=>'241','GM'=>'220','GE'=>'995','DE'=>'49','GH'=>'233','GI'=>'350','GR'=>'30','GL'=>'299','GD'=>'1-473','GU'=>'1-671','GT'=>'502','GG'=>'44-1481',
'GN'=>'224','GW'=>'245','GY'=>'592','HT'=>'509','HN'=>'504','HK'=>'852','HU'=>'36','IS'=>'354','IN'=>'91','ID'=>'62','IR'=>'98','IQ'=>'964','IE'=>'353','IM'=>'44-1624','IL'=>'972','IT'=>'39','CI'=>'225','JM'=>'1-876','JP'=>'81','JE'=>'44-1534','JO'=>'962','KZ'=>'7','KE'=>'254','KI'=>'686','XK'=>'383','KW'=>'965','KG'=>'996','LA'=>'856','LV'=>'371','LB'=>'961','LS'=>'266','LR'=>'231','LY'=>'218','LI'=>'423','LT'=>'370','LU'=>'352','MO'=>'853','MK'=>'389','MG'=>'261','MW'=>'265','MY'=>'60','MV'=>'960','ML'=>'223','MT'=>'356','MH'=>'692','MR'=>'222','MU'=>'230','YT'=>'262','MX'=>'52','FM'=>'691','MD'=>'373','MC'=>'377','MN'=>'976','ME'=>'382','MS'=>'1-664','MA'=>'212','MZ'=>'258','MM'=>'95','NA'=>'264','NR'=>'674','NP'=>'977','NL'=>'31','AN'=>'599','NC'=>'687','NZ'=>'64','NI'=>'505','NE'=>'227','NG'=>'234','NU'=>'683','KP'=>'850','MP'=>'1-670','NO'=>'47','OM'=>'968','PK'=>'92','PW'=>'680','PS'=>'970','PA'=>'507','PG'=>'675','PY'=>'595','PE'=>'51','PH'=>'63','PN'=>'64','PL'=>'48','PT'=>'351','PR'=>'1-787','QA'=>'974','CG'=>'242','RE'=>'262',
'RO'=>'40','RU'=>'7','RW'=>'250','BL'=>'590','SH'=>'290','KN'=>'1-869','LC'=>'1-758','MF'=>'590','PM'=>'508','VC'=>'1-784',
'WS'=>'685','SM'=>'378','ST'=>'239','SA'=>'966','SN'=>'221','RS'=>'381','SC'=>'248','SL'=>'232','SG'=>'65','SX'=>'1-721','SK'=>'421','SI'=>'386','SB'=>'677','SO'=>'252','ZA'=>'27','KR'=>'82','SS'=>'211','ES'=>'34','LK'=>'94','SD'=>'249','SR'=>'597','SJ'=>'47','SZ'=>'268','SE'=>'46','CH'=>'41','SY'=>'963','TW'=>'886','TJ'=>'992','TZ'=>'255','TH'=>'66','TG'=>'228','TK'=>'690','TO'=>'676','TT'=>'1-868','TN'=>'216','TR'=>'90','TM'=>'993','TC'=>'1-649','TV'=>'688','VI'=>'1-340','UG'=>'256','UA'=>'380','AE'=>'971','GB'=>'44','US'=>'1','UY'=>'598','UZ'=>'998','VU'=>'678','VA'=>'379','VE'=>'58','VN'=>'84','WF'=>'681','EH'=>'212','YE'=>'967','ZM'=>'260','ZW'=>'263'];


$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


@endphp


<div class="mb-3">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col">
                <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last Name">
            </div>
        </div>
    </div>
</div>
<div class="mb-3">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col">
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col">
                <select class="form-select" name="country">
                    @foreach ($countries as  $item)
                    <option @if ($item == $country) selected @endif value="{{ $item }}">{{ $item }}</option>
                                                          @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-4">
                <select class="form-select me-2" name="tel_country_code">
                    @foreach ($phoneCodes as $index => $item)
                    <option @if ($index == $countryCode) selected @endif value="+{{ $item }}">+{{ $item }}</option>
                                                          @endforeach
                </select>
            </div>
            <div class="col-8">
                <input type="phone" class="form-control" placeholder="Phone">
            </div>
        </div>
    </div>
</div>
<div class="mb-3">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col">
                <input type="password" class="form-control" placeholder="Create Password">
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Repeat Password">
            </div>
        </div>
    </div>
</div>


<div class="mb-3">
    <div class="container">
        <div class="row m-0">
            <div class="col d-grid gap-2">
                <button type="button" style="width: 80%; margin: auto;"
                    class="btn btn-primary rounded-pill">
                    @lang('Create Account')
                </button>
            </div>
        </div>
    </div>
</div>
