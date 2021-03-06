<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <!-- swiper slider link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <!-- animtaion css link -->
    <link rel="stylesheet" href="assets/css/animation.css">
    <!-- font-awsome link-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- <link rel="stylesheet" href="assets/css/all.css"> -->

    <!--theme css-->
    <link rel="stylesheet" href="assets/sass/style.css">
    <link href="assets/fontawesome-pro-5.11.2/fontawesome-pro-5.11.2-web/css/all.min.css" type="text/css"
          rel="stylesheet">
    <link href="assets/fontawesome-pro-5.11.2/fontawesome-pro-5.11.2-web/css/fontawesome.min.css" type="text/css"
          rel="stylesheet">
    <title>codeshub_contect</title>
</head>
<body class="">
<!-- header area start -->

@include('header')
<!-- header are end -->
<!--contect-form area start -->
<section class="container">
    <div class="contect-area">
        <div class="backgroud-images">
            <div class="image-positoin">
                <img src="assets/images/contect_page/form/01.svg" class="img-fluid position-1" alt="n/a">
                <img src="assets/images/contect_page/form/02.svg" class="img-fluid position-2" alt="n/a">
                <img src="assets/images/contect_page/form/03.svg" class="img-fluid position-3" alt="n/a">
            </div>
            <div class="form-area">
                <div class="section-margin">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <form action="{{route('storeContact')}}" class="form" method="post" id="contactInfo" enctype="multipart/form-data">
                        @csrf
                        <div class="progress-area">
                            <div class="area-active" id="progressarea"></div>
                        </div>
                        <div class="icremant-num"><span class="counter" id="counter">1</span>/3</div>
                        <div class="" id="">
                            <div class="choose-block" id="choose">
                                <div class="from-header">
                                    <h3>Choose your service area</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="row" id="service">
                                    <div class="col-md-6 col-12">
                                        <div class="design-check">
                                            <p>Design</p>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Product Design"
                                                       id="product_design">
                                                <label class="form-check-label" for="product_design"> Product Design
                                                    (UI/UX)</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Graphics
                                                    Design"
                                                       id="graphics_design">
                                                <label class="form-check-label" for="graphics_design">Graphics
                                                    Design</label>
                                            </div>
                                        </div>
                                        <div class="application-check">
                                            <p>Application</p>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Web Design"
                                                       id="web_desig">
                                                <label class="form-check-label" for="web_desig">Web Design</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Web
                                                    Development"
                                                       id="web_development">
                                                <label class="form-check-label" for="web_development">Web
                                                    Development</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="CMS Solution"
                                                       id="cms_solution">
                                                <label class="form-check-label" for="cms_solution">CMS Solution
                                                    (Wordpress, Shopify, Squarespace, Wix)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="digital-check">
                                            <p>Digital Marketing</p>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Social Media
                                                    Management"
                                                       id="social_media">
                                                <label class="form-check-label" for="social_media">Social Media
                                                    Management</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="SEO"
                                                       id="advance_seo">
                                                <label class="form-check-label" for="advance_seo">Advanced Search Engine
                                                    Optimization (SEO)</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Advertising
                                                    Support"
                                                       id="advertising">
                                                <label class="form-check-label" for="advertising">Advertising
                                                    Support</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Campaign
                                                    Management"
                                                       id="campaign">
                                                <label class="form-check-label" for="campaign">Campaign
                                                    Management</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Event Management"
                                                       id="event">
                                                <label class="form-check-label" for="event">Event Management</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input check-box" type="checkbox"
                                                       name="service_area[]" value="Competition
                                                    Tracking"
                                                       id="Competition">
                                                <label class="form-check-label" for="Competition">Competition
                                                    Tracking</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input other-box" type="checkbox"
                                                       name="service_area[]" value="Other"
                                                       id="Other">
                                                <label class="form-check-label other" for="Other">Other</label>
                                                <span class="px-2 check-text"
                                                      id="checktext"> *Please check this box</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav d-flex justify-content-end py-3" id="nav-tab" role="tablist">
                                    <button class=" btn-skip " type="button" onclick="skip1()">Skip</button>
                                    <button class=" btn-next" type="button" onclick="next1()">Next</button>
                                </div>
                            </div>
                            <div class="requirement-none" id="requirement">
                                <div class="from-header">
                                    <h3>Requirements</h3>
                                </div>
                                <div class="py-4">
                                    <textarea id="editor" name="requirements"></textarea>
                                </div>
                                <div class="nav d-flex justify-content-between py-4" id="nav-tab" role="tablist">
                                    <div class="back-btn-area">
                                        <button class="btn-next process" type="button" onclick="back1()">Back</button>
                                    </div>
                                    <div class="skip-next-area">
                                        <button class=" btn-skip " type="button" onclick="skip2()">Skip</button>
                                        <button class=" btn-next " type="button" onclick="next2()" id="next">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="contect-none" id="conetctarea">
                                <div class="from-header">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 input-field">
                                        <div class="me-4">
                                            <input type="text" name="name" class="contect-form" id="inputfield"
                                                   onblur=" inputload()" autocomplete="off">
                                            <span class="placeholder-name" id="placeholder">Name* </span>
                                            <span class="check-text" id="subtext"> *Please fill up this field</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 input-field">
                                        <div class="me-4">
                                            <input type="email" name="email" class="contect-form" id="inputfield2"
                                                   onblur=" inputload2()" autocomplete="off">
                                            <span class="placeholder-name" id="placeholder2">Email* </span>
                                            <span class="check-text" id="subtext2"> *Please fill up this field</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="group-input">
                                            <label>
                                                <select class="country-code" name="country_code">
                                                    <option data-countryCode="DZ" value="213">DZ (+213)</option>
                                                    <option data-countryCode="AD" value="376">AD (+376)</option>
                                                    <option data-countryCode="AO" value="244">AO (+244)</option>
                                                    <option data-countryCode="AI" value="1264">AI (+1264)</option>
                                                    <option data-countryCode="AG" value="1268">AG(+1268)</option>
                                                    <option data-countryCode="AR" value="54">AR (+54)</option>
                                                    <option data-countryCode="AM" value="374">AM (+374)</option>
                                                    <option data-countryCode="AW" value="297">AW (+297)</option>
                                                    <option data-countryCode="AU" value="61">AU (+61)</option>
                                                    <option data-countryCode="AT" value="43">AT (+43)</option>
                                                    <option data-countryCode="AZ" value="994">AZ (+994)</option>
                                                    <option data-countryCode="BS" value="1242">BS (+1242)</option>
                                                    <option data-countryCode="BH" value="973">BH (+973)</option>
                                                    <option data-countryCode="BD" selected value="880">BD (+880)
                                                    </option>
                                                    <option data-countryCode="BB" value="1246">BB (+1246)</option>
                                                    <option data-countryCode="BY" value="375">BY (+375)</option>
                                                    <option data-countryCode="BE" value="32">BE (+32)</option>
                                                    <option data-countryCode="BZ" value="501">BZ (+501)</option>
                                                    <option data-countryCode="BJ" value="229">BJ (+229)</option>
                                                    <option data-countryCode="BM" value="1441">BM (+1441)</option>
                                                    <option data-countryCode="BT" value="975">BT (+975)</option>
                                                    <option data-countryCode="BO" value="591">BO (+591)</option>
                                                    <option data-countryCode="BA" value="387">BA (+387)</option>
                                                    <option data-countryCode="BW" value="267">BW (+267)</option>
                                                    <option data-countryCode="BR" value="55">BR (+55)</option>
                                                    <option data-countryCode="BN" value="673">BN (+673)</option>
                                                    <option data-countryCode="BG" value="359">BG (+359)</option>
                                                    <option data-countryCode="BF" value="226">BF (+226)</option>
                                                    <option data-countryCode="BI" value="257">BI (+257)</option>
                                                    <option data-countryCode="KH" value="855">KH (+855)</option>
                                                    <option data-countryCode="CM" value="237">CM (+237)</option>
                                                    <option data-countryCode="CA" value="1">CA (+1)</option>
                                                    <option data-countryCode="CV" value="238">CV (+238)</option>
                                                    <option data-countryCode="KY" value="1345">KY (+1345)</option>
                                                    <option data-countryCode="CF" value="236">CF (+236)</option>
                                                    <option data-countryCode="CL" value="56">CL (+56)</option>
                                                    <option data-countryCode="CN" value="86">CN (+86)</option>
                                                    <option data-countryCode="CO" value="57">CO (+57)</option>
                                                    <option data-countryCode="KM" value="269">KM (+269)</option>
                                                    <option data-countryCode="CG" value="242">CG (+242)</option>
                                                    <option data-countryCode="CK" value="682">CK (+682)</option>
                                                    <option data-countryCode="CR" value="506">CR (+506)</option>
                                                    <option data-countryCode="HR" value="385">HR (+385)</option>
                                                    <option data-countryCode="CU" value="53">CU (+53)</option>
                                                    <option data-countryCode="CY" value="90392">CYN (+90392)</option>
                                                    <option data-countryCode="CY" value="357">CYS (+357)</option>
                                                    <option data-countryCode="CZ" value="42">CZ (+42)</option>
                                                    <option data-countryCode="DK" value="45">DK (+45)</option>
                                                    <option data-countryCode="DJ" value="253">DJ (+253)</option>
                                                    <option data-countryCode="DM" value="1809">DM (+1809)</option>
                                                    <option data-countryCode="DO" value="1809">DO (+1809)</option>
                                                    <option data-countryCode="EC" value="593">EC (+593)</option>
                                                    <option data-countryCode="EG" value="20">EG (+20)</option>
                                                    <option data-countryCode="SV" value="503">SV (+503)</option>
                                                    <option data-countryCode="GQ" value="240">GQ (+240)</option>
                                                    <option data-countryCode="ER" value="291">ER (+291)</option>
                                                    <option data-countryCode="EE" value="372">EE (+372)</option>
                                                    <option data-countryCode="ET" value="251">ET (+251)</option>
                                                    <option data-countryCode="FK" value="500">FK (+500)</option>
                                                    <option data-countryCode="FO" value="298">FO (+298)</option>
                                                    <option data-countryCode="FJ" value="679">FJ (+679)</option>
                                                    <option data-countryCode="FI" value="358">FI (+358)</option>
                                                    <option data-countryCode="FR" value="33">FR (+33)</option>
                                                    <option data-countryCode="GF" value="594">GF (+594)</option>
                                                    <option data-countryCode="PF" value="689">PF (+689)</option>
                                                    <option data-countryCode="GA" value="241">GA (+241)</option>
                                                    <option data-countryCode="GM" value="220">GM (+220)</option>
                                                    <option data-countryCode="GE" value="7880">GE (+7880)</option>
                                                    <option data-countryCode="DE" value="49">DE (+49)</option>
                                                    <option data-countryCode="GH" value="233">GH (+233)</option>
                                                    <option data-countryCode="GI" value="350">GI (+350)</option>
                                                    <option data-countryCode="GR" value="30">GR (+30)</option>
                                                    <option data-countryCode="GL" value="299">GL (+299)</option>
                                                    <option data-countryCode="GD" value="1473">GD (+1473)</option>
                                                    <option data-countryCode="GP" value="590">GP (+590)</option>
                                                    <option data-countryCode="GU" value="671">GU (+671)</option>
                                                    <option data-countryCode="GT" value="502">GT (+502)</option>
                                                    <option data-countryCode="GN" value="224">GN (+224)</option>
                                                    <option data-countryCode="GW" value="245">GW (+245)</option>
                                                    <option data-countryCode="GY" value="592">GY (+592)</option>
                                                    <option data-countryCode="HT" value="509">HT (+509)</option>
                                                    <option data-countryCode="HN" value="504">HN (+504)</option>
                                                    <option data-countryCode="HK" value="852">HK (+852)</option>
                                                    <option data-countryCode="HU" value="36">HU (+36)</option>
                                                    <option data-countryCode="IS" value="354">IS (+354)</option>
                                                    <option data-countryCode="IN" value="91">IN (+91)</option>
                                                    <option data-countryCode="ID" value="62">ID (+62)</option>
                                                    <option data-countryCode="IR" value="98">IR (+98)</option>
                                                    <option data-countryCode="IQ" value="964">IQ (+964)</option>
                                                    <option data-countryCode="IE" value="353">IE (+353)</option>
                                                    <option data-countryCode="IL" value="972">IL (+972)</option>
                                                    <option data-countryCode="IT" value="39">IT (+39)</option>
                                                    <option data-countryCode="JM" value="1876">JM (+1876)</option>
                                                    <option data-countryCode="JP" value="81">JP (+81)</option>
                                                    <option data-countryCode="JO" value="962">JO (+962)</option>
                                                    <option data-countryCode="KZ" value="7">KZ (+7)</option>
                                                    <option data-countryCode="KE" value="254">KE (+254)</option>
                                                    <option data-countryCode="KI" value="686">KI (+686)</option>
                                                    <option data-countryCode="KP" value="850">KP (+850)</option>
                                                    <option data-countryCode="KR" value="82">KR (+82)</option>
                                                    <option data-countryCode="KW" value="965">KW (+965)</option>
                                                    <option data-countryCode="KG" value="996">KG (+996)</option>
                                                    <option data-countryCode="LA" value="856">LA (+856)</option>
                                                    <option data-countryCode="LV" value="371">LV (+371)</option>
                                                    <option data-countryCode="LB" value="961">LB (+961)</option>
                                                    <option data-countryCode="LS" value="266">LS (+266)</option>
                                                    <option data-countryCode="LR" value="231">LR (+231)</option>
                                                    <option data-countryCode="LY" value="218">LY (+218)</option>
                                                    <option data-countryCode="LI" value="417">LI (+417)</option>
                                                    <option data-countryCode="LT" value="370">LT (+370)</option>
                                                    <option data-countryCode="LU" value="352">LU (+352)</option>
                                                    <option data-countryCode="MO" value="853">MO (+853)</option>
                                                    <option data-countryCode="MK" value="389">MK (+389)</option>
                                                    <option data-countryCode="MG" value="261">MG (+261)</option>
                                                    <option data-countryCode="MW" value="265">MW (+265)</option>
                                                    <option data-countryCode="MY" value="60">MY (+60)</option>
                                                    <option data-countryCode="MV" value="960">MV (+960)</option>
                                                    <option data-countryCode="ML" value="223">ML (+223)</option>
                                                    <option data-countryCode="MT" value="356">MT (+356)</option>
                                                    <option data-countryCode="MH" value="692">MH (+692)</option>
                                                    <option data-countryCode="MQ" value="596">MQ (+596)</option>
                                                    <option data-countryCode="MR" value="222">MR (+222)</option>
                                                    <option data-countryCode="YT" value="269">YT (+269)</option>
                                                    <option data-countryCode="MX" value="52">MX (+52)</option>
                                                    <option data-countryCode="FM" value="691">FM (+691)</option>
                                                    <option data-countryCode="MD" value="373">MD (+373)</option>
                                                    <option data-countryCode="MC" value="377">MC (+377)</option>
                                                    <option data-countryCode="MN" value="976">MN (+976)</option>
                                                    <option data-countryCode="MS" value="1664">MS (+1664)</option>
                                                    <option data-countryCode="MA" value="212">MA (+212)</option>
                                                    <option data-countryCode="MZ" value="258">MZ (+258)</option>
                                                    <option data-countryCode="MN" value="95">MN (+95)</option>
                                                    <option data-countryCode="NA" value="264">NA (+264)</option>
                                                    <option data-countryCode="NR" value="674">NR (+674)</option>
                                                    <option data-countryCode="NP" value="977">NP (+977)</option>
                                                    <option data-countryCode="NL" value="31">NL (+31)</option>
                                                    <option data-countryCode="NC" value="687">NC (+687)</option>
                                                    <option data-countryCode="NZ" value="64">NZ (+64)</option>
                                                    <option data-countryCode="NI" value="505">NI (+505)</option>
                                                    <option data-countryCode="NE" value="227">NE (+227)</option>
                                                    <option data-countryCode="NG" value="234">NG (+234)</option>
                                                    <option data-countryCode="NU" value="683">NU (+683)</option>
                                                    <option data-countryCode="NF" value="672">NF (+672)</option>
                                                    <option data-countryCode="NP" value="670">NP (+670)</option>
                                                    <option data-countryCode="NO" value="47">NO (+47)</option>
                                                    <option data-countryCode="OM" value="968">OM (+968)</option>
                                                    <option data-countryCode="PW" value="680">PW (+680)</option>
                                                    <option data-countryCode="PA" value="507">PA (+507)</option>
                                                    <option data-countryCode="PG" value="675">PG (+675)</option>
                                                    <option data-countryCode="PY" value="595">PY (+595)</option>
                                                    <option data-countryCode="PE" value="51">PE (+51)</option>
                                                    <option data-countryCode="PH" value="63">PH (+63)</option>
                                                    <option data-countryCode="PL" value="48">PL (+48)</option>
                                                    <option data-countryCode="PL" value="351">PL (+351)</option>
                                                    <option data-countryCode="PR" value="1787">PR (+1787)</option>
                                                    <option data-countryCode="PK" value="92">PK (+92)</option>
                                                    <option data-countryCode="QA" value="974">QA (+974)</option>
                                                    <option data-countryCode="RE" value="262">RE (+262)</option>
                                                    <option data-countryCode="RO" value="40">RO (+40)</option>
                                                    <option data-countryCode="RU" value="7">RU (+7)</option>
                                                    <option data-countryCode="RW" value="250">RW (+250)</option>
                                                    <option data-countryCode="SM" value="378">SM (+378)</option>
                                                    <option data-countryCode="ST" value="239">ST (+239)</option>
                                                    <option data-countryCode="SA" value="966">SA(+966)</option>
                                                    <option data-countryCode="SN" value="221">SN (+221)</option>
                                                    <option data-countryCode="CS" value="381">CS (+381)</option>
                                                    <option data-countryCode="SC" value="248">SC (+248)</option>
                                                    <option data-countryCode="SL" value="232">SL (+232)</option>
                                                    <option data-countryCode="SG" value="65">SG (+65)</option>
                                                    <option data-countryCode="SK" value="421">SK (+421)</option>
                                                    <option data-countryCode="SI" value="386">SI (+386)</option>
                                                    <option data-countryCode="SB" value="677">SB (+677)</option>
                                                    <option data-countryCode="SO" value="252">SO (+252)</option>
                                                    <option data-countryCode="ZA" value="27">ZA (+27)</option>
                                                    <option data-countryCode="ES" value="34">ES (+34)</option>
                                                    <option data-countryCode="LK" value="94">LK (+94)</option>
                                                    <option data-countryCode="SH" value="290">SH (+290)</option>
                                                    <option data-countryCode="KN" value="1869">KN (+1869)</option>
                                                    <option data-countryCode="SC" value="1758">SC (+1758)</option>
                                                    <option data-countryCode="SD" value="249">SD (+249)</option>
                                                    <option data-countryCode="SR" value="597">SR (+597)</option>
                                                    <option data-countryCode="SZ" value="268">SZ (+268)</option>
                                                    <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                    <option data-countryCode="CH" value="41">CH (+41)</option>
                                                    <option data-countryCode="SI" value="963">SI (+963)</option>
                                                    <option data-countryCode="TW" value="886">TW (+886)</option>
                                                    <option data-countryCode="TJ" value="7">TJ (+7)</option>
                                                    <option data-countryCode="TH" value="66">TH (+66)</option>
                                                    <option data-countryCode="TG" value="228">TG (+228)</option>
                                                    <option data-countryCode="TO" value="676">TO (+676)</option>
                                                    <option data-countryCode="TT" value="1868">TT (+1868)</option>
                                                    <option data-countryCode="TN" value="216">TN (+216)</option>
                                                    <option data-countryCode="TR" value="90">TR (+90)</option>
                                                    <option data-countryCode="TM" value="7">TM (+7)</option>
                                                    <option data-countryCode="TM" value="993">TM (+993)</option>
                                                    <option data-countryCode="TC" value="1649">TC (+1649)</option>
                                                    <option data-countryCode="TV" value="688">TV (+688)</option>
                                                    <option data-countryCode="UG" value="256">UG (+256)</option>
                                                    <option data-countryCode="GB" value="44">UK (+44)</option>
                                                    <option data-countryCode="UA" value="380">UA (+380)</option>
                                                    <option data-countryCode="AE" value="971">AE (+971)</option>
                                                    <option data-countryCode="UY" value="598">UY (+598)</option>
                                                    <option data-countryCode="US" value="1">USA (+1)</option>
                                                    <option data-countryCode="UZ" value="7">UZ (+7)</option>
                                                    <option data-countryCode="VU" value="678">VU (+678)</option>
                                                    <option data-countryCode="VA" value="379">VA (+379)</option>
                                                    <option data-countryCode="VE" value="58">VE (+58)</option>
                                                    <option data-countryCode="VN" value="84">VN (+84)</option>
                                                    <option data-countryCode="VG" value="84">VG (+1284)</option>
                                                    <option data-countryCode="VI" value="84">VI (+1340)</option>
                                                    <option data-countryCode="WF" value="681">WF (+681)</option>
                                                    <option data-countryCode="YE" value="969">YE (North)(+969)</option>
                                                    <option data-countryCode="YE" value="967">YE (South)(+967)</option>
                                                    <option data-countryCode="ZM" value="260">ZM (+260)</option>
                                                    <option data-countryCode="ZW" value="263">ZW (+263)</option>
                                                </select>
                                            </label>
                                            <div class="col-sm-12 input-field">
                                                <input type="text" name="number" class="contect-form" id="inputfield3"
                                                       onblur=" inputload3()" autocomplete="off">
                                                <span class="placeholder-name" id="placeholder3">Phone Number</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 input-field">
                                        <div class="me-4">
                                            <input type="text" class="contect-form" name="company_name" id="inputfield4"
                                                   onblur=" inputload4()" autocomplete="off">
                                            <span class="placeholder-name" id="placeholder4">Company Name </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 input-field">
                                        <div class="me-4">
                                            <select class="company" name="company_type">
                                                <option>Type of Company</option>
                                                <option>Bank/ Non-Bank Fin. Institution</option>
                                                <option> Education/Training</option>
                                                <option>Engineering/Architecture</option>
                                                <option>Garments/Textile</option>
                                                <option> Design/Creative</option>
                                                <option>Limited Company</option>
                                                <option> Hospitality/ Travel/ Tourism</option>
                                                <option> Beauty Care/ Health & Fitness</option>
                                                <option> IT & Telecommunication</option>
                                                <option> Marketing/Sales Customer Support/Call Centre</option>
                                                <option>Media/Ad./Event Mgt.</option>
                                                <option> Medical/Pharma</option>
                                                <option> Agro (Plant/Animal/Fisheries)</option>
                                                <option> Service</option>
                                                <option> NGO/Development</option>
                                                <option> Research/Consultancy</option>
                                                <option> Security/Support</option>
                                                <option> Law/Legal </option>
                                                <option> Others </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 input-field">
                                        <input type="text" class="contect-form" id="inputfield5" onblur=" inputload5()"
                                               autocomplete="off" name="website">
                                        <span class="placeholder-name" id="placeholder5">Website</span>
                                    </div>
                                </div>
                                <div class="input-field2">
                                    <input type="text" class="contect-form" id="inputfield6" onblur=" inputload6()"
                                           autocomplete="off" name="address">
                                    <span class="placeholder-name" id="placeholder6">Address </span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="group-input">
                                            <select class="country-code" name="social_type">
                                                <option value="Whatsapp">Whatsapp</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="LinkedIn">LinkedIn</option>
                                                <option value="Instagram">Instagram</option>
                                            </select>
                                            <div class="col-sm-12 input-field">
                                                <input type="text" class="contect-form" id="inputfield7"
                                                       onblur=" inputload7()" autocomplete="off" name="network_id">
                                                <span class="placeholder-name"
                                                      id="placeholder7">Social Network ID</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="nav d-flex justify-content-between py-4" id="nav-tab" role="tablist">
                                    <div class="back-btn-area">
                                        <button class="btn-next process" type="button" onclick="back2()">Back</button>
                                    </div>
                                    <div class="skip-next-area">
                                        <button class=" btn-skip-disable process" type="button">Skip</button>
                                        <button class=" btn-next" onclick="leststep()" id="btnsubmit" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contect-form area end -->

<!-- footer area start -->

@extends('footer')
<!-- footer are end -->

<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>

<script src="assets/js/jquery.js"></script>
<!-- bootstrap cdn -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
<!-- swiper js -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<!-- theme js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="assets/js/functtion.js"></script>
<!-- wow js -->
<script src="assets/js/wow.js"></script>
<!-- font awsome js -->
<script src="assets/js/ckeditor4/ckeditor.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


<script>
    CKEDITOR.replace('editor');
</script>
<!-- <script src="assets/js/all.js"></script> -->
<script>
    new WOW().init();
</script>
{!! Toastr::message() !!}

</body>
</html>
