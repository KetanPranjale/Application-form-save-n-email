<?php
function savenEmail(){
	echo "about to retrieve name <br>";
	if($_GET('name')){
		echo $_GET('name');
		echo '<br>';
	}
}
 ?>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<title>
Application Form - SacredWalks Auto save email version
</title>
	<link href="/css/cupertino/jquery-ui-1.8.6.custom.css" media="all" rel="stylesheet" type="text/css">
	<!-- <link href="/css/fg-menu.css" media="all" rel="stylesheet" type="text/css"> -->
	<link href="/css/ui.jqgrid.css" media="all" rel="stylesheet" type="text/css">
	<link href="/css/facebox.css" media="all" rel="stylesheet" type="text/css">
	<link href="/css/fileuploader.css" media="all" rel="stylesheet" type="text/css">
	<style type="text/css">
	@font-face {
		font-family: 'MuseoSlab700';
		src: url('/css/museo_slab_700-webfont.eot');
		src: url('/css/museo_slab_700-webfont.eot?#iefix') format('embedded-opentype'), url('/css/museo_slab_700-webfont.woff') format('woff'), url('/css/museo_slab_700-webfont.ttf') format('truetype'), url('/css/museo_slab_700-webfont.svg#MuseoSlab700') format('svg');
	    font-weight: normal;
		font-style: normal;
	}
	@font-face {
		font-family: 'MuseoSlab500';
		src: url('/css/museo_slab_500-webfont.eot');
		src: url('/css/museo_slab_500-webfont.eot?#iefix') format('embedded-opentype'), url('/css/museo_slab_500-webfont.woff') format('woff'), url('/css/museo_slab_500-webfont.ttf') format('truetype'), url('/css/museo_slab_500-webfont.svg#MuseoSlab500') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	</style>

	<!--[if IE]><script type="text/javascript" src="/js/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="/js/url.js"></script>
	<script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-1.8.6.custom.min.js"></script>
	<!-- <script type="text/javascript" src="/js/fg-menu.js"></script> -->
	<script type="text/javascript" src="/js/jquery.bt.min.js"></script>
	<script type="text/javascript" src="/js/i18n/grid.locale-en.js"></script>
	<script type="text/javascript" src="/js/jquery.jqGrid.min.js"></script>
	<script type="text/javascript" src="/js/facebox.js"></script>
	<!-- <script type="text/javascript" src="/js/jquery.slidingmessage.min.js"></script> -->
	<script type="text/javascript" src="/js/jquery.showMessage.min.js"></script>
	<script type="text/javascript" src="/js/underscore-min.js"></script>
	<script type="text/javascript" src="/js/knockout-2.0.0.js"></script>

	<style type="text/css">
		.notification
		{
			font-family: Arial, Helvetica, clean, sans-serif;
			font-size: large;
			font-weight: bold;
			background-color: rgb(247, 247, 247);
			color: red;
		}
		.success
		{
			font-family: Arial, Helvetica, clean, sans-serif;
			font-size: large;
			font-weight: bold;
			background-color: #52aa49;
			color: white;
		}
		.fail
		{
			font-family: Arial, Helvetica, clean, sans-serif;
			font-size: large;
			font-weight: bold;
			background-color: #EB7C00;
			color: white;
		}

	</style>

<!-- <script type="text/javascript" src="/js/themeswitchertool.js"></script> -->
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/knockout-2.0.0.js"></script>
	<script type="text/javascript" src="/js/ajaxupload.js"></script>
	<script type="text/javascript" src="/js/journo.js"></script>
	<script type="text/javascript" src="/js/jform2.js"></script>
	<script type="text/javascript" src="/js/iy17applform.js"></script>
	<style type="text/css">
	  @font-face {
		  font-family: "Britannic Bold";
		  src: local("Britannic Bold"), url("/css/Britannic_Bold.ttf") format("truetype");
	  }
	  @font-face {
		  font-family: "BakerSignet BT";
		  src: local("BakerSignet BT"), url("/css/baker-signet-bt.ttf") format("truetype");
	  }
	  @font-face {
		  font-family: "Draconian";
		  src: local("Draconian"), url("/css/dracon.ttf") format("truetype");
	  }
		.ui-icon
		{
			display: inline-block !important;
		}
	  body {
		  /* font-family: 'Trebuchet MS', 'BakerSignet BT', 'Arial';  */
		  font-family: 'MuseoSlab500', 'Trebuchet MS','Times New Roman',sans-serif,'arial';
		  font-size: 10pt;
		  color: #533800;
	  }
		label.error {
			display: none;
			color: red;
			font-style: italic;
		}
		.ys-label {
			width: 40%;
			text-align: right;
			vertical-align: middle;
			padding-right: 15px;
			color: #82706e;
			font-weight: bold;
		}
	  input [type=checkbox] {
		  border: 1px solid #f37021;
		  height:13px;
		  width:13px;
		  filter:alpha(opacity=0.0);
		  opacity:0.0;
		  outline:0
	  }
	  .inpcheck {
		  border: 1px solid #f37021;
		  height:13px;
		  width:13px;
	  }
	  .inptext {
		  border: none;
		  border-bottom: 2px dotted gray;
		  font-family: 'Times New Roman';
		  font-size: 11pt;
		  color: navy;
		  background-color: transparent;
	  }
	  .inptext:focus {
		  border: none;
		  border-bottom: 2px dotted gray;
		  font-family: 'Times New Roman';
		  font-size: 11pt;
		  color: navy;
		  background-color: #f7e1b6;
	  }
	  .oneline {
		  margin-top: 8px;
	  }
	  .yotonly {
		  display: none;
	  }
	  .flexcol {
		  /* border-right: 2px solid red; */
	  }
	  .headlabel {
		  font-size: 11pt;
		  font-family: 'Times New Roman';
		  color: #f37021;
		  font-weight: bold;
	  }
	  .smalllabel {
		  font-size: 10pt;echo
	  }
	  .biglabel {
		  font-size: 11pt;
	  }
	  label {
		  font-size: 10pt;
		  color: #333333;
	  }
	  .implabel {
		  font-size: 12pt;
		  color: #533800;
	  }
	  .boxgood {
		  border: 1px solid transparent;
		  background-color: transparent;
		  display: inline;
		  padding-top: 4px;
		  padding-bottom: 4px;
	  }
	  .boxbad {
		  border: 1px solid #f37021;
		  /* border: 2px solid #c43b1d; */
		  background-color: #ffe6cc;
		  display: inline;
		  padding-top: 4px;
		  padding-bottom: 4px;
		  line-height: 25px;
	  }
	  .oldmedicalth {
		  background-color: rgb(102,102,102);
		  color: rgb(255,255,255);
		  font-size: 14pt;
		  border: 1px solid black;
	  }
	  .medicalth {
		  border: 1px solid black;
		  vertical-align: middle;
		  text-align: center;
		  font-size: 12pt;
		  background-color: #f7e1b6;
	  }
	  .medicaltd {
		  border: 1px solid black;
		  vertical-align: middle;
		  padding-left: 10px;
		  text-align: left;
	  }
	  .paymenttable {
		  margin-top: 10px;
		  border-collapse: collapse;
		  border: 1px solid black;
		  width: 90%;
		  margin-right: 10px;
	  }
	  tr,td,th {
		  border-collapse: collapse;
		  border: 1px solid black;
		  padding: 5px;
	  }
	  .epaymenttable {
		  margin-top: 10px;
		  border-collapse: collapse;
		  border: 1px solid black;
		  width: 99%;
		  margin-right: 10px;
	  }
	  .eptrdh {
		  border-collapse: collapse;
		  border: 1px solid black;
		  padding: 5px;
	  }
	  a.button { display:inline-block; overflow:hidden; text-decoration:none; }
	  a.button:hover { color:#F3A536; }
	  a.button span { display:block; float:left; height:38px; border:none; }
 		white-space:nowrap; font-family: 'Georgia', 'Times New Roman'; font-size: 16px; }
	  .bigButtonMiddle:hover { color:#F3A536 }
	</style>



    <script type="text/javascript">
		var upre = "";
		var _loggedin = 1;
		var _role = "", _username = "", _sector = "", _sectors = [];
		if(_loggedin) {
			_role = "Coordinator";
			_sector = "AP";
			_sectors = JSON.parse('["AP","CH","India","KA","LB","NP","OS","SG","TN","UK","US"]');
			_roles = JSON.parse('["HYCoordinator","HYEnquiry","KMCoordinator","KMEnquiry","Summary"]');
			_username = "pranjale.ks@gmail.com";
		}
    $(function(){
				$(document).ready(function() {
		});

	});

	</script>

</head>
<body>

	<!-- content -->

<div style="width: 100%; border: 0px; background-color: transparent">
	<form id="registerform">
	<div style="width: 60%; min-width: 840px; margin: 0 auto; border: 1px solid black; background-image: url('/images/home-content-bg.jpg');">
        <div style="height:30px">&nbsp;</div>
		<img src="/images/applformhdr.png" style="width: 840px;" data-bind="visible: !assignacn()">
		<h3 style="display: none; width: 600px; margin: 0 auto; color: red">Application form is temporarily out of service. Please check back shortly</h3>

		<input type="hidden" name="center" value="">
		<input type="hidden" name="sector" value="">
		<input type="hidden" name="_status" value="">
		<input type="hidden" name="checklist.applform" value="">
		<input type="hidden" name="meta.status" value="">
		<input type="hidden" name="group" value="" data-bind="value: group">
		<input type="hidden" name="departure" value="" data-bind="value: departure">
		<input type="hidden" name="arrival" value="" data-bind="value: arrival">
		<input type="hidden" style="display: none" id="statem" name="statem" data-bind="value:statem">
		<input type="hidden" style="display: none" id="state" title="State" name="state" data-bind="value:state">
				<div style="float: right">
			<select id="formmode" name="formmode" data-bind="value: formmode" style="display: none">
				<option value="">--Choose Form Mode--</option>
				<option value="part">Fill in Partial Details</option>
				<option value="full">Fill in Entire Application Form</option>
			</select>
		</div>
		<div style="clear: both"></div>
				<div style="float: left; margin-left: 40px; margin-top: 0px; margin-right: 2px; width: 580px;">
			<div style="font-family: 'BakerSignet BT'; margin-top: 15px; font-weight: Bold; font-size: 12pt; text-align: left"> <br>
			</div>
			<div class="oneline" style="display: none" data-bind="visible: assignacn()">
				<span style="color: black; display: inline-block; margin-left: 300px; width: 400px; font-size: 200%"><b>Assign ACN</b></span>
			</div>
			<div class="oneline" id="preferred_walks" data-bind="visible: editmode() == 'add'">
				<label class="implabel">Your Preferred Sacred Walks 2017 </label>
				<br>
				<div class="boxgood required">

				<!--<input type="checkbox" title="Your Preferred Sacred Walks" name="walks" value="CH17" class="inpcheck" data-bind="checked: walks" id="ch17sw">
					<label for="ch17sw"> Chamundi</label>
				<input type="checkbox" title="Your Preferred Sacred Walks" name="walks" value="SS17" class="inpcheck" data-bind="checked: walks" id="ss17sw">
					<label for="ss17sw"> Southern Sacred Walks</label>-->
				<input type="checkbox" title="Your Preferred Sacred Walks" name="walks" value="KM17" class="inpcheck" data-bind="checked: walks">
					<label> Kailash Manasarovar&nbsp;&nbsp; </label>

				<input type="checkbox" title="Your Preferred Sacred Walks" name="walks" value="HY17" class="inpcheck" data-bind="checked: walks">
					<label> Himalayas</label>
				<!--<input type="checkbox" title="Your Preferred Sacred Walks" name="walks" value="VN17" class="inpcheck" data-bind="checked: walks">
					<label> Varanasi</label>-->
				</div>
			</div>
			<div class="oneline" data-bind="visible: editmode() == 'edit'">
				<label class="implabel"><span data-bind="text: program"></span> Sacred Walks 2017 </label>
			</div>
			<div class="oneline" data-bind="visible: editmode() == 'edit'">
				<div class="boxgood"
					><label class="implabel">Application code No : </label
					><input type="text" readonly class="inptext flexcol" title="ACN" name="acn" id="acn" placeholder="" value="" style="width: 200px; text-transform:uppercase"
				></div
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label>Country of Residence : </label
					><select style="width: 150px" class="inptext flexcol" data-bind="value: country" id="country" title="Country" name="country">
						<option value="" selected="selected">Select Country</option>
						<option value="India">India</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Singapore">Singapore</option>
<option>-------------</option>
<option value="Afghanistan">Afghanistan</option>
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
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
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
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea">Korea</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia">Macedonia</option>
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
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
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
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
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
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
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
					</select>
				</div
				><div class="boxgood required"
					><label>&nbsp;&nbsp;&nbsp;Nationality :</label
					><select style="width: 150px" class="inptext" data-bind="value: nationality" id="nationality" title="Nationality" name="nationality">
						<option value="" selected="selected">Select Nationality</option>
						<option value="India">India</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Singapore">Singapore</option>
<option>-------------</option>
<option value="Afghanistan">Afghanistan</option>
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
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
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
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea">Korea</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia">Macedonia</option>
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
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
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
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
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
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
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
					</select>
				</div
			></div>
			<div class="oneline">
			</div>

		</div>
		<div id="photodiv" >
			<!--
			<center>
			<br>
			Passport<br><br>

			Size Photo<br><br>
			<a class="button" name="uploadphoto" id="uploadphoto" href="#"><span class="bigButtonLeft"></span><span class="bigButtonMiddle">Upload</span><span class="bigButtonRight"></span></a>

			</center>
			-->
		</div>
		<div style="clear: both"></div>

		<div style="margin-left: 40px; margin-right: 30px; margin-top: 0px">
			<fieldset id="kailash-fieldset" data-bind="visible: walks.indexOf('KM17') > -1" style="display: none; background-color: #f7e1b6; margin-top: 8px; border: 1px groove #ffffce">
				<legend style="font-size: 130%">Kailash Manasarovar 2017</legend>
				<div class="oneline"
					><label class="implabel">Your Travel group and date</label
				></div>
				<div class="oneline">
					<div class="boxgood required">
						<label>Group: </label>
						<select class="inptext" style="width: 150px" title="Group" name="kailash_group" data-bind="options: kailash_groups, optionsCaption: 'Choose Group', value: kailash_group"></select>
					</div>
					<div class="boxgood"
						><label>Date: From </label
						><span id="kailash_startdate" class="inptext" style="color: navy" data-bind="text: kailash_startdate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
						><label> &nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</label
						><span id="kailash_enddate" class="inptext" style="color: navy" data-bind="text: kailash_enddate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
						><label data-bind="visible: kailash_showMedium()">&nbsp;Communication Medium </label
						><span style="color: navy" class="inptext" data-bind="text: kailash_medium"></span
					></div></div>
				<div class="oneline"
					><label class="implabel">Check your preferred destination for <i>Departure</i> and <i>Arrival</i></label
				></div>
				<div class="oneline">
					<div style="width: 70px; float: left">
					<label style="color: black">Departure:</label>
					</div>
					<script style="display: none" type="text/html" id="departure_kailash">
						<% _.each(get_travel(kailash_data, cnnt(), kailash_gp(), "departure"), function(dest) { %>
							<input type="radio" title="Departure" name="kailash_departure" value="<%=dest%>" id="id_<%=dest%>_dep" data-bind="checked: kailash_departure">
							<label for="id_<%=dest%>_dep"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'departure_kailash' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<div class="oneline ">
					<div style="width: 70px; float: left">
					<label style="color: black">Arrival:</label>
					</div>
					<script style="display: none" type="text/html" id="arrival_kailash">
						<% _.each(get_travel(kailash_data, cnnt(), kailash_gp(), "arrival"), function(dest) { %>
							<input type="radio" title="Arrival" name="kailash_arrival" value="<%=dest%>" id="id_<%=dest%>_arr" data-bind="checked: kailash_arrival">
							<label for="id_<%=dest%>_arr"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'arrival_kailash' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<br style="margin-bottom: 10px">
			</fieldset>


			<fieldset id="himalayas-fieldset" data-bind="visible: walks.indexOf('HY17') > -1" style="display: none; background-color: #f7e1b6; border: 1px groove #ffffce">
				<legend style="font-size: 130%">Himalayas 2017</legend>
				<div class="oneline"
					><label class="implabel">Your Travel group and date</label
				></div>
				<div class="oneline" data-bind="visible: cnnt() == 'India-India'"
					><div class="boxgood required"
						><label>Options: </label><br>
						A1 - Ex NewDelhi<br>
						A2 - 3AC Train travel from Chennai/Vijayawada<br>
					</div
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Group: </label
						><select class="inptext" style="width: 150px" title="Group" name="himalayas_group" data-bind="options: himalayas_groups, optionsCaption: 'Choose Group', value: himalayas_group"></select
					></div
					><div class="boxgood"
						><label>Date: From </label
						><span id="himalayas_startdate" style="color: navy" data-bind="text: himalayas_startdate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
						><label> &nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</label
						><span id="himalayas_enddate" style="color: navy" data-bind="text: himalayas_enddate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
					></div
				></div>
				<div class="oneline"
					><label class="implabel">Check your preferred destination for <i>Departure</i> and <i>Arrival</i></label
				></div>
				<div class="oneline">
					<div style="width: 70px; float: left">
					<label style="color: black">Departure:</label>
					</div>
					<script style="display: none" type="text/html" id="departure_himalayas">
						<% _.each(get_travel(himalayas_data, cnnt(), himalayas_gp(), "departure"), function(dest) { %>
							<input type="radio" title="Departure" name="himalayas_departure" value="<%=dest%>" id="id_<%=dest%>_dep" data-bind="checked: himalayas_departure">
							<label for="id_<%=dest%>_dep"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'departure_himalayas' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<div class="oneline ">
					<div style="width: 70px; float: left">
					<label style="color: black">Arrival:</label>
					</div>
					<script style="display: none" type="text/html" id="arrival_himalayas">
						<% _.each(get_travel(himalayas_data, cnnt(), himalayas_gp(), "arrival"), function(dest) { %>
							<input type="radio" title="Arrival" name="himalayas_arrival" value="<%=dest%>" id="id_<%=dest%>_arr" data-bind="checked: himalayas_arrival">
							<label for="id_<%=dest%>_arr"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'arrival_himalayas' }">
					</div>
					<div style="clear: both"></div>
				</div>
			<div class="oneline"
					><label><i>(Individual requests for travel on a particular date and train / flight other than the ones fixed for the entire
						group cannot be accommodated)</i></label
			></div>
			<br style="margin-bottom: 10px">
			</fieldset>


			<fieldset id="chamundi-fieldset" data-bind="visible: walks.indexOf('CH17') > -1" style="display: none; background-color: #f7e1b6; border: 1px groove #ffffce">
				<legend style="font-size: 130%">Chamundi 2017</legend>
				<div class="oneline"
					><label class="implabel">Your Travel group and date</label
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Options: </label><br>
						A1 - Ex Mysore<br>
						C1 - Ex Coimbatore<br>
					</div
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Option: </label
							><select class="inptext" style="width: 150px" title="Group" name="chamundi_group" data-bind="options: chamundi_groups, optionsText: function(item) { if(item == 'A1') return 'A1 - Ex Mysore'; if(item == 'C1') return 'C1 - Ex Coimbatore'; }, optionsCaption: 'Choose Option', value: chamundi_group"></select
					></div
					><div class="boxgood"
						><label>Date: From </label
						><span id="chamundi_startdate" style="color: navy" data-bind="text: chamundi_startdate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
						><label> &nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</label
						><span id="chamundi_enddate" style="color: navy" data-bind="text: chamundi_enddate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
					></div
				></div>
				<div class="oneline"
					><label class="implabel">Check your preferred destination for <i>Departure</i> and <i>Arrival</i></label
				></div>
				<div class="oneline">
					<div style="width: 70px; float: left">
					<label style="color: black">Departure:</label>
					</div>
					<script style="display: none" type="text/html" id="departure_chamundi">
						<% _.each(get_travel(chamundi_data, cnnt(), chamundi_gp(), "departure"), function(dest) { %>
							<input type="radio" title="Departure" name="chamundi_departure" value="<%=dest%>" id="id_<%=dest%>_dep" data-bind="checked: chamundi_departure">
							<label for="id_<%=dest%>_dep"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'departure_chamundi' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<div class="oneline ">
					<div style="width: 70px; float: left">
					<label style="color: black">Arrival:</label>
					</div>
					<script style="display: none" type="text/html" id="arrival_chamundi">
						<% _.each(get_travel(chamundi_data, cnnt(), chamundi_gp(), "arrival"), function(dest) { %>
							<input type="radio" title="Arrival" name="chamundi_arrival" value="<%=dest%>" id="id_<%=dest%>_arr" data-bind="checked: chamundi_arrival">
							<label for="id_<%=dest%>_arr"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'arrival_chamundi' }">
					<div style="clear: both"></div>
					</div>
				</div>
				<br style="margin-bottom: 10px">
			</fieldset>

			<fieldset id="varanasi-fieldset" data-bind="visible: walks.indexOf('VN17') > -1" style="display: none; background-color: #f7e1b6; border: 1px groove #ffffce">
				<legend style="font-size: 130%">Varanasi 2017</legend>
				<div class="oneline"
					><label class="implabel">Your Travel option</label
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Options: </label><br>
						A1 - Ex Gaya - Registration Open<br>
						A2 - 3rd A/C Train travel from Chennai/Bangalore/Vijayawada - Registration Open<br>
					</div
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Option: </label
							><select class="inptext" style="width: 150px" title="Group" name="varanasi_group" data-bind="options: varanasi_groups, optionsText: function(item) { if(item == 'A1') return 'A1 - Ex Gaya'; if(item == 'B1') return 'B1 - Ex Gaya (a day earlier at Gaya)'; if(item == 'A2') return 'A2 - 3rd A/C Train Travel'; }, optionsCaption: 'Choose Option', value: varanasi_group"></select
					></div
					><div class="boxgood"
						><label>Date: From </label
						><span id="varanasi_startdate" style="color: navy" data-bind="text: varanasi_startdate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
						><label> &nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</label
						><span id="varanasi_enddate" style="color: navy" data-bind="text: varanasi_enddate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
					></div
				></div>
				<div class="oneline"
					><label class="implabel">Check your preferred destination for <i>Departure</i> and <i>Arrival</i></label
				></div>
				<div class="oneline">
					<div style="width: 70px; float: left">
					<label style="color: black">Departure:</label>
					</div>
					<script style="display: none" type="text/html" id="departure_varanasi">
						<% _.each(get_travel(varanasi_data, cnnt(), varanasi_gp(), "departure"), function(dest) { %>
							<input type="radio" title="Departure" name="varanasi_departure" value="<%=dest%>" id="id_<%=dest%>_dep" data-bind="checked: varanasi_departure">
							<label for="id_<%=dest%>_dep"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'departure_varanasi' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<div class="oneline ">
					<div style="width: 70px; float: left">
					<label style="color: black">Arrival:</label>
					</div>
					<script style="display: none" type="text/html" id="arrival_varanasi">
						<% _.each(get_travel(varanasi_data, cnnt(), varanasi_gp(), "arrival"), function(dest) { %>
							<input type="radio" title="Arrival" name="varanasi_arrival" value="<%=dest%>" id="id_<%=dest%>_arr" data-bind="checked: varanasi_arrival">
							<label for="id_<%=dest%>_arr"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'arrival_varanasi' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<div class="oneline"
					><label style="font-size: 12pt">(Individual requests for travel on a particular date and train other than the ones fixed for the entire
					group cannot be accommodated)</label
				></div>
				<br style="margin-bottom: 10px">
			</fieldset>

			<fieldset id="southern-fieldset" data-bind="visible: walks.indexOf('SS17') > -1" style="display: none; background-color: #f7e1b6; border: 1px groove #ffffce">
				<legend style="font-size: 130%">Southern 2017</legend>
				<div class="oneline"
					><label class="implabel">Your Travel group and date</label
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Options: </label><br>
						A1 - Ex Isha Yoga Centre, Coimbatore<br>
					</div
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Group: </label
						><select class="inptext" style="width: 150px" title="Group" name="southern_group" data-bind="options: southern_groups, optionsCaption: 'Choose Group', value: southern_group"></select
					></div
					><div class="boxgood"
						><label>Date: From </label
						><span id="southern_startdate" style="color: navy" data-bind="text: southern_startdate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
						><label> &nbsp;&nbsp;&nbsp;To &nbsp;&nbsp;&nbsp;</label
						><span id="southern_enddate" style="color: navy" data-bind="text: southern_enddate"> &nbsp;&nbsp; / &nbsp;&nbsp; /&nbsp;&nbsp; </span
					></div
				></div>
				<div class="oneline"
					><label class="implabel">Check your preferred destination for <i>Departure</i> and <i>Arrival</i></label
				></div>
				<div class="oneline">
					<div style="width: 70px; float: left">
					<label style="color: black">Departure:</label>
					</div>
					<script style="display: none" type="text/html" id="departure_southern">
						<% _.each(get_travel(southern_data, cnnt(), southern_gp(), "departure"), function(dest) { %>
							<input type="radio" title="Departure" name="southern_departure" value="<%=dest%>" id="id_<%=dest%>_dep" data-bind="checked: southern_departure">
							<label for="id_<%=dest%>_dep"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'departure_southern' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<div class="oneline ">
					<div style="width: 70px; float: left">
					<label style="color: black">Arrival:</label>
					</div>
					<script style="display: none" type="text/html" id="arrival_southern">
						<% _.each(get_travel(southern_data, cnnt(), southern_gp(), "arrival"), function(dest) { %>
							<input type="radio" title="Arrival" name="southern_arrival" value="<%=dest%>" id="id_<%=dest%>_arr" data-bind="checked: southern_arrival">
							<label for="id_<%=dest%>_arr"> <%= dest %> </label>
						<% }) %>
					</script>
					<div class="boxgood required" data-bind="template: { name: 'arrival_southern' }">
					</div>
					<div style="clear: both"></div>
				</div>
				<br style="margin-bottom: 10px">
			</fieldset>

			<br style="margin-bottom: 20px">
			<div class="oneline"
				><div class="boxgood required"
					><label>Name : </label
					><input type="text" data-bind="value: name" spellcheck="false" class="inptext flexcol" title="Name" name="name" id="pname" style="width: 260px"
				></div
				><div class="boxgood required"
					><label>Date of Birth : </label
					><input type="text" class="inptext" title="Date of Birth" name="dob" style="width: 120px" placeholder="  dd -  mm  - yyyy " data-bind="value: dob"
				></div
				><div class="boxgood required"
					><label>Gender : </label
					><input type="radio" title="Gender" name="gender" value="M" data-bind="checked: gender"
					><label> Male / </label><input type="radio" title="Gender" name="gender" value="F" data-bind="checked: gender"
					><label>Female </label
				></div
			></div>
			<div class="oneline"
				><div class="boxgood"
					><label>Occupation / Designation : </label
					><input type="text" style="text-transform: uppercase" class="inptext flexcol" name="occupation" style="width: 200px"
				></div
				><div class="boxgood"
					><label>Company Name : </label
					><input type="text" class="inptext" name="companyname" style="width: 200px"
				></div
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label>Postal Address : </label
					><input type="text" class="inptext flexcol" title="Address" name="address" style="width: 200px"
				></div
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label>City : </label
					><input type="text" class="inptext flexcol" title="City" name="city" style="width: 200px"
				></div
				><div class="boxgood required"
					><label>&nbsp;&nbsp;Zip/PIN code : </label
					><input type="text" class="inptext" title="Pincode" name="pincode" style="width: 150px"
				></div
				><div class="boxgood"
					><label>&nbsp;&nbsp;District : </label
					><input type="text" class="inptext" title="District" name="district" style="width: 200px"
				></div
			></div>
			<div class="oneline" id="t3"
				><div class="boxgood required" id="statediv"
					><label>State : </label>
					<select style="width: 170px" class="inptext" data-bind="visible: country() == 'India', options: states, value: state1, optionsCaption: 'Select State'" id="state1" title="State" name="state1"> </select>
					<input style="width: 170px" class="inptext" data-bind="visible: country() != 'India', value: state2" id="state2" title="State" name="state2"></select>
				</div>
				<div class="boxgood required" id="emaildiv"
					><label>Email: </label
					><input type="text" class="inptext flexcol" name="email" style="width: 367px"
				></div
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label>Mobile : </label
					><input type="text" class="inptext" name="mobile" style="width: 260px"
				></div
				><div class="boxgood required"
					><label>&nbsp;&nbsp;Ph : </label
					><input type="text" class="inptext flexcol" name="phone" style="width: 365px" placeholder="Area-STD Code    /	   Phone Number"
				></div
			></div>
			<div class="oneline" style="display: none; text-align: center; font-weight: bold; font-family: Times">
				<label class="smalllabel"><b>(Please enter at least one telephone number so we may contact you if necessary)</b></label>
			</div>

			<div id="t1" data-bind="visible: showIdCard">
				<div class="oneline"
					><label class="implabel">Do you have a Voter ID card?</label
					><div class="boxgood required"
						><input for="Yes" type="radio" title="Do you have a Voter ID Card" name="hasvoterid" value="Yes" data-bind="checked: hasvoterid"
						><label class="smalllabel"> Yes</label
						><input for="No" type="radio" title="Do you have a Voter ID Card" name="hasvoterid" value="No" data-bind="checked: hasvoterid"
						><label class="smalllabel"> No </label
					></div
				></div>
				<div class="oneline"
					><label class="implabel">Do you have any other valid Government ID cards?</label
					><div class="boxgood required"
						><input for="Yes" type="radio" title="Do you have any other Valid Govt ID Cards" name="hasidcard" value="Yes" data-bind="checked: hasidcard"
						><label class="smalllabel"> Yes</label
						><input for="No" type="radio" title="Do you have any other Valid Govt ID Cards" name="hasidcard" value="No" data-bind="checked: hasidcard"
						><label class="smalllabel"> No </label
					></div
					><br><label class="implabel">If yes, please check the ID cards you will be carrying during the journey: </label><br
				></div>
				<div class="oneline"
					><div class="boxgood"
						><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label
						><input type="checkbox" title="ID Card you have" name="idcards" value="VoterID" data-bind="checked: idcards, disable: hasidcard() == 'No'"
						><label>Voter ID </label
						><input type="checkbox" title="ID Card you have" name="idcards" value="DrivingLicense" data-bind="checked: idcards, disable: hasidcard() == 'No'"
						><label>DrivingLicense</label
						><input type="checkbox" title="ID Card you have" name="idcards" value="Passport" data-bind="checked: idcards, disable: hasidcard() == 'No'"
						><label>Passport </label
						><input type="checkbox" title="ID Card you have" name="idcards" value="PANCard" data-bind="checked: idcards, disable: hasidcard() == 'No'"
						><label>PANCard </label
					></div
					><div class="boxgood"
						><label> &nbsp;&nbsp; Others: </label
						><input type="text" class="inptext flexcol" title="ID Card you have" name="idcards_others" style="width: 320px" data-bind="disable: hasidcard() == 'No'"
					></div
				></div>
				<div class="oneline"
					><div class="boxgood"
						><label>ID Card Type and its Number: </label
						><input type="text" style="text-transform: uppercase" class="inptext flexcol" title="ID Card No" name="idcardno" style="width: 350px"
					></div
				></div>
				<div class="oneline"
					><label>&nbsp;&nbsp;(Please enter the type of ID Card and No - like PANCard:12349809809x and send a scan copy of the ID card) </label
				></div>
			</div>

			<div id="t2" data-bind="visible: walks.indexOf('KM17') > -1 || needPassport()">
				<div class="oneline"
					><label class="implabel">Passport Details </label> <br
					><div class="boxgood required"
						><label>Please check whether you have</label
						><input class="validpp" type="radio" title="Do you have a valid Passport" name="haspassport" value="valid"
						><label class="smalllabel"> Valid Passport</label
						><input class="validpp" type="radio" title="Do you have a valid Passport" name="haspassport" value="renewal"
						><label class="smalllabel"> Applied for Passport Renewal</label
						><input type="radio" title="Do you have a valid Passport" name="haspassport" value="none"
						><label class="smalllabel"> Applied for New Passport</label
					></div
					><br><label>And if you have a passport, fill in the following details exactly as they appear on your passport </label><br
				></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>Passport No.: </label
						><input type="text" style="text-transform: uppercase" class="inptext" title="Passport Number" name="passportno" style="width: 150px"
					></div
					><div class="boxgood required"
						><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Issue :</label
						><input type="text" class="inptext" title="Date of Issue" name="dateofissue" style="width: 100px" placeholder="  dd -  mm - yy "
					></div
					><div class="boxgood required"
						><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Expiry :</label
						><input type="text" class="inptext flexcol" title="Date of Expiry" name="dateofexpiry" style="width: 100px" placeholder="  dd -  mm - yy "
					></div
				></div>
				<div class="oneline"
					><div class="boxgood"
						><label>Surname / Last Name: </label
						><input type="text" style="text-transform: uppercase" class="inptext" title="Last Name" name="lastname" style="width: 250px"
					></div
					><div class="boxgood required"
						><label>&nbsp;&nbsp;Given Name / First Name: </label
						><input type="text" style="text-transform: uppercase" class="inptext flexcol" title="First Name" name="firstname" style="width: 360px"
					></div
				></div>
				<div class="oneline">
					<div class="boxgood">
						<label>Gender: </label><span style="width: 150px; display: inline-block" class="inptext" data-bind="text: gender"></span>
					</div>
					<div class="boxgood">
						<label>Date of Birth: </label><span style="width: 150px; display: inline-block" class="inptext" data-bind="text: dob"></span>
					</div>
					<div class="boxgood">
						<label>Nationality: </label><span style="width: 230px; display: inline-block" class="inptext flexcol" data-bind="text: nationality"></span>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
			<p>
			<div id="t31" data-bind="visible: showIdCard() || needPassport()">
				<div id="idcardsheader" style="display: none">
					<div style="float: left">
						<div class="oneline">
							<label class="implabel" data-bind="visible: needPassport()">Upload Passport (for ID Card) </label>
							<label class="implabel" data-bind="visible: showIdCard()">Upload ID Card </label>
						</div>
					</div>
					<div style="float: right; font-size: 300%; margin-right: 100px"><input type="button" name="zoomout" value="-"><input type="button" name="zoomin" value="+"></div>
					<div style="clear: both"></div>
				</div>
				<div id="idcard1div" style="float: left; border: 1.5px solid black; display: none;
					margin-left: 35px; margin-top: 15px;
					width: 240px; height: 135px; overflow: hidden;
					text-align: center line-height: 200%;
					font-family: 'BakerSignet BT'; font-size: 13pt">
					<img id="uploadidcard1" src="/images/uploadidcard.png" style="width: 240px; height: 135px; overflow:hidden" > <br>
					<script type="text/javascript"></script>
				</div>
				<div style="float:left; margin-top: 15px">
					<a target="blank" href="" id="downloadidcard1" download><button type="button"><img src="/images/dl.png" width="10" height="10"></button></a>
				</div>				<div id="idcard2div" style="float: left; border: 1.5px solid black; display: none;
					margin-left: 105px; margin-top: 15px;
					width: 240px; height: 135px; overflow: hidden;
					text-align: center line-height: 200%;
					font-family: 'BakerSignet BT'; font-size: 13pt">
					<img id="uploadidcard2" src="/images/uploadidcard.png" width="240px" height="135px" style="overflow:hidden" > <br>
				</div>
				<div style="float:left; margin-top: 15px">
					<a target="blank" href="" id="downloadidcard2" download><button type="button"><img src="/images/dl.png" width="10" height="10"></button></a>
				</div>				<div style="clear: both"></div>
			</div>
			<p>
			<div class="oneline"
				><label class="implabel">How did you hear about us? :</label
				><div class="boxgood required"
					><select style="width: 150px" data-bind="value: howto" class="inptext" id="howto" name="howto">
					<option value="">Select Option</option>
					<option value="Friends">Friends</option>
					<option value="Isha Program">Isha Program</option>
					<option value="Word of mouth">Word of mouth</option>
					<option value="Web">Web</option>
					<option value="Email or Newsletter">Email or Newsletter</option>
					<option value="Article">Article</option>
					<option value="TV">TV</option>
					<option value="Advt">Advt</option>
					<option value="BillBoard">BillBoard</option>
					<option value="Flyer">Flyer</option>
					</select
				></div
			></div>
			<div class="oneline" data-bind="visible: (walks.indexOf('KM17') > -1 && howto() == 'Friends')"
				><div class="boxgood"
					><label>&nbsp;&nbsp;Referred by : </label
					><input type="text" class="inptext" name="referral.name" style="width: 200px"
				></div>
				<div class="boxgood"
					><label>&nbsp;&nbsp;Referral Id : </label
					><input type="text" class="inptext" name="referralId" style="width: 150px"
				></div
			></div>
		<div class="oneline" data-bind="visible: (kailash_gp() != 'SP' && country() == 'India')"
				><label class="implabel">How would you prefer to receive your registration confirmation? :</label
				><div class="boxgood"
					><input type="radio" title="Preference to receive confirmation" name="rcvconf" value="email"  					><label class="smalllabel"> By Email &nbsp;&nbsp;</label
					><input type="radio" title="Preference to receive confirmation" name="rcvconf" value="post"
					><label class="smalllabel"> &nbsp;By SMS </label
				></div
			></div>
			<div class="oneline"
				><label class="implabel">Languages known : </label
				><div class="boxgood required"
					><input type="checkbox" name="languages" value="English" class="inpcheck"
					><label> English &nbsp;&nbsp; </label
                    ><span style="display: none"
					><input type="checkbox" name="languages" value="Hindi" class="inpcheck"
					><label> Hindi </label></span
					><label> &nbsp;&nbsp; Others: </label
				></div
				><div class="boxgood"
					><input type="text" class="inptext flexcol" name="languages_others" style="width: 320px"
				></div
			></div>
			<div class="oneline"
				><label class="implabel">Would you like to volunteer for:</label
				><div class="boxgood"
					><input type="checkbox" name="volunteering" value="General organizing" class="inpcheck"
					><label> General organizing </label
					><input type="checkbox" name="volunteering" value="Trek" class="inpcheck"
					><label> Trek </label
					><input type="checkbox" name="volunteering" value="First aid" class="inpcheck"
					><label> First aid </label
					><input type="checkbox" name="volunteering" value="Music / Bhajan" class="inpcheck"
					><label> Music / Bhajan </label
				></div
			></div>
			<div class="oneline" style="display: none"
				><label class="implabel">Do you have experience in rendering First Aid / Medical Assistance? :</label
				><div class="boxgood"
					><input type="radio" title="Experience in rendering First Aid" name="firstaid" value="Yes"
					><label class="smalllabel"> Yes &nbsp;&nbsp;</label
					><input type="radio" title="Experience in rendering First Aid" name="firstaid" value="No"
					><label class="smalllabel"> &nbsp;No </label
				></div
			></div>
            <br>
			<div class="oneline"
				><label class="implabel">Highlight the Isha Programs attended so far: </label
			></div>
			<div class="oneline">
				<div style="float: left; padding-left: 25px; width: 420px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="None" data-bind="checked: ishaprograms, disable: ishaprograms().length > 0 && ishaprograms.indexOf('None') == -1">
						<label class="smalllabel">None of the Isha programs taken yet </label>
					</div>
				</div>

				<div style="display: none; float: left; padding-left: 10px; width: 250px">
					<div class="boxgood">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="Isha Kriya" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> Isha Kriya </label>
					</div>
					<div class="boxgood">
						<input type="text" placeholder="MM/YY" name="ishakriya_date" size="6" data-bind="enable: ishaprograms.indexOf('Isha Kriya') > -1">
					</div>
				</div>
				<div style="clear: both"></div>
			</div>
			<div class="oneline">
				<div style="float: left; padding-left: 25px; width: 175px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="Isha Yoga" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> Isha Yoga </label>
					</div>
					<div class="boxgood required">
						<input type="text" placeholder="MM/YY" name="ishayoga_date" size="6" data-bind="enable: ishaprograms.indexOf('Isha Yoga') > -1">
					</div>
				</div>

				<div style="float: left; padding-left: 5px; width: 250px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="Inner Engineering" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> Inner Engineering </label>
					</div>
					<div class="boxgood required">
						<input type="text" placeholder="MM/YY" name="ie_date" size="6" data-bind="enable: ishaprograms.indexOf('Inner Engineering') > -1">
					</div>
				</div>

				<div style="float: left; padding-left: 5px; width: 250px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="Wholeness" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> Wholeness </label>
					</div>
					<div class="boxgood required">
						<input type="text" placeholder="MM/YY" name="wholeness_date" size="6" data-bind="enable: ishaprograms.indexOf('Wholeness') > -1">
					</div>
				</div>
				<div style="clear: both"></div>
			</div>
			<div class="oneline" data-bind="visible: !(nationality() == 'India' && country() == 'India') && !(nationality() == '' || country() == '')">
				<div style="float: left; padding-left: 25px; width: 305px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="IE Online" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> Inner Engineering Online &nbsp;</label>
					</div>
					<div class="boxgood required">
						<input type="text" name="ieo_date" placeholder="MM/YY" size="6" data-bind="enable: ishaprograms.indexOf('IE Online') > -1">
					</div>
				</div>

				<div style="float: left; padding-left: 5px; width: 350px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="Shambhavi Initiation" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1, enable: ishaprograms.indexOf('IE Online') > -1">
						<label> Shambhavi Mahamudra Initiation &nbsp;</label>
					</div>
					<div class="boxgood required">
						<input type="text" name="shambhavi_date" placeholder="MM/YY" size="6" data-bind="enable: ishaprograms.indexOf('Shambhavi Initiation') > -1">
					</div>
				</div>
				<div style="clear: both"></div>
			</div>
			<div class="oneline">
				<div style="float: left; padding-left: 25px; width: 175px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="BSP" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> BSP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					</div>
					<div class="boxgood required">
						<input type="text" name="bsp_date" placeholder="MM/YY" size="6" data-bind="enable: ishaprograms.indexOf('BSP') > -1">
					</div>
				</div>

				<div style="float: left; padding-left: 5px; width: 250px">
					<div class="boxgood required">
						<input type="checkbox" title="Isha Programs" name="ishaprograms" value="Samyama" data-bind="checked: ishaprograms, disable: ishaprograms.indexOf('None') > -1">
						<label> Samyama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					</div>
					<div class="boxgood required">
						<input type="text" name="samyama_date" placeholder="MM/YY" size="6" data-bind="enable: ishaprograms.indexOf('Samyama') > -1">
					</div>
				</div>

				<div style="float: left; padding-left: 5px; width: 220px">
						<label> Others </label>
						<div class="boxgood"
							><input type="text" class="inptext flexcol" title="Isha Programs" name="ishaprograms_others" style="width: 150px" data-bind="value: ishaprograms_others, disable: ishaprograms.indexOf('None') > -1"
						></div>
				</div>
				<div style="clear: both"></div>
			</div>
			<!--<div class="oneline" data-bind="visible: (walks.indexOf('KM17') > -1 && country() == 'India' && kailash_gp() != 'SP')">
				<div class="boxgood">
					<label>If you have not attended any of the above, check whether you wish to attend Isha Yoga Program: </label><br>
					<span style="float: left; padding-left: 20px;"
						><input type="radio" title="Where you wish to attend Isha Yoga Program" name="ishaclassat" value="At nearby center" data-bind="checked: ishaclassat, enable: ishaprograms.indexOf('None') > -1"
						><label class="smalllabel"> At nearby center &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
						Or You can attend a special one day program at one of the following centers before the journey:<br>
						<input type="radio" title="Where you wish to attend Isha Yoga Program" name="ishaclassat" value="Delhi" data-bind="checked: ishaclassat, enable: ishaprograms.indexOf('None') > -1"
						><label class="smalllabel"> Delhi </label
						><input type="radio" title="Where you wish to attend Isha Yoga Program" name="ishaclassat" value="Bangalore" data-bind="checked: ishaclassat, enable: ishaprograms.indexOf('None') > -1"
						><label class="smalllabel"> Bangalore </label
						><input type="radio" title="Where you wish to attend Isha Yoga Program" name="ishaclassat" value="Chennai" data-bind="checked: ishaclassat, enable: ishaprograms.indexOf('None') > -1"
						><label class="smalllabel"> Chennai </label
						><input type="radio" title="Where you wish to attend Isha Yoga Program" name="ishaclassat" value="Hyderabad" data-bind="checked: ishaclassat, enable: ishaprograms.indexOf('None') > -1"
						><label class="smalllabel"> Hyderabad </label
						><input type="radio" title="Where you wish to attend Isha Yoga Program" name="ishaclassat" value="Mumbai" data-bind="checked: ishaclassat, enable: ishaprograms.indexOf('None') > -1"
						><label class="smalllabel"> Mumbai </label
					></span
					><div style="margin-bottom: 0px; clear: both"></div>
				</div>
			</div>-->

			<div class="oneline">
				<label class="implabel">Person to contact in case of emergency : </label>
			</div>
			<div class="oneline"
				><div class="boxgood required"
					><label>Name : </label
					><input type="text" class="inptext" name="emergency.name" style="width: 340px"
				></div
				><div class="boxgood required"
					><label>Relationship : </label
					><input type="text" class="inptext flexcol" name="emergency.relationship" style="width: 255px"
				></div
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label>Postal Address : </label
					><input type="text" class="inptext flexcol" name="emergency.address" style="width: 200px"
				></div
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label>City : </label
					><input type="text" class="inptext" name="emergency.city" style="width: 200px"
				></div
				><div class="boxgood"
					><label>&nbsp;&nbsp;Zip/PIN code : </label
					><input type="text" class="inptext flexcol" name="emergency.pincode" style="width: 150px"
				></div
				><div class="boxgood"
					><label>&nbsp;&nbsp;District : </label
					><input type="text" class="inptext" name="emergency.district" style="width: 200px"
				></div
			></div>
				<div class="oneline"
					><div class="boxgood required"
						><label>State : </label
						><input type="text" class="inptext" name="emergency.state" style="width: 120px"
					></div
					><div class="boxgood required"
						><label>Country : </label
						><input type="text" class="inptext" name="emergency.country" style="width: 100px"
					></div
					><div class="boxgood"
						><label>&nbsp;&nbsp;Email: </label
						><input type="text" class="inptext flexcol" name="emergency.email" style="width: 367px"
					></div
				></div>
				<div class="oneline"
					><div class="boxgood"
						><label>Mobile : </label
						><input type="text" class="inptext" name="emergency.mobile" style="width: 260px"
					></div
					><div class="boxgood"
						><label>&nbsp;&nbsp;Ph : </label
						><input type="text" class="inptext flexcol" placeholder="Area-STD code  /  Phone Number" name="emergency.phone" style="width: 265px"
					></div
				></div>
				<div class="oneline" style="display: none; text-align: center; font-weight: bold; font-family: Times">
					<label class="smalllabel"><b>(Please enter at least one telephone number so we may contact on emergency if necessary)</b></label>
				</div>
				<!-- all online over -->
			</div>

		<div style="margin-left: 40px; margin-right: 40px; margin-top: 10px" data-bind="visible: !assignacn()">
			<div class="oneline" style="margin-top: 20px"
				><label class="implabel" style="font-size:13pt">Medical Information</label
			></div>
			<div class="oneline"
				><div class="boxgood required"
					><label class="biglabel"><b>a.</b> Blood Group: </label
					><input type="text" class="inptext flexcol" name="medical.bloodgroup" style="width: 120px"
				></div
				><div class="boxgood required"
					><label class="biglabel">Height: </label
					><input type="text" class="inptext" name="medical.height" style="width: 120px"
					><label>&nbsp;cm </label
				></div
				><div class="boxgood required"
					><label class="biglabel">Weight: </label
					><input type="text" class="inptext" name="medical.weight" style="width: 120px"
					><label>&nbsp;Kg </label
				></div
			></div>
			<div class="oneline"
				><label class="biglabel" style="margin-left: 0px"><b>b.</b> Do you presently have or have ever had any of the medical conditions listed below?
						If so,  please tick applicable & provide complete details
				</label
			></div>

			<table style="border-collapse: collapse; border: 1px solid black; margin: 0 auto" width="100%" border="1">
			<tr>
				<th width="60%" class="medicalth" colspan="2">Medical Conditions</th>
				<th width="32%" class="medicalth">If applicable, please provide complete details
				</th>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.swelling" value="Swelling">
						<label> Swelling of both feet </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.swelling" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.swelling_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.transient" value="Transient">
						<label> Transient loss of consciousness on &amp; off </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.transient" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.transient_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.breathing" value="Breathing Difficulty">
						<label> Breathing Difficulty </label>
						<input type="checkbox" name="medical.breathing" value="Chest Pain on climbing or walking">
						<label> Chest Pain on climbing stairs / walking on flat surface</label>
						<input type="checkbox" name="medical.breathing" value="Palpitations">
						<label> Palpitations </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.breathing" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.breathing_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.bp" value="High BP">
						<label> High BP </label>
						<input type="checkbox" name="medical.bp" value="Low BP">
						<label> Low BP</label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.bp" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.bp_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.diabetes" value="Diabetes">
						<label> Diabetes </label>
						<input type="checkbox" name="medical.diabetes" value="Impaired Glucose Tolerance">
						<label> Impaired Glucose Tolerance</label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.diabetes" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.diabetes_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.heart" value="Heart Problems since birth">
						<label> Heart Problems since birth </label>
						<input type="checkbox" name="medical.heart" value="Heart Attack">
						<label> Heart Attack </label>
						<br><input type="checkbox" name="medical.heart" value="Heart Failure">
						<label> Cardiac Arrest </label>
						<input type="checkbox" name="medical.heart" value="Heart Operations">
						<label> Heart Surgery / Angioplasty </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.heart" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.heart_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.asthma" value="Asthma">
						<label> Asthma </label>
						<input type="checkbox" name="medical.asthma" value="Bronchitis">
						<label> Bronchitis </label>
						<input type="checkbox" name="medical.asthma" value="Sinusitis">
						<label> Sinusitis </label>
						<input type="checkbox" name="medical.asthma" value="Persistent Cough">
						<label> Persistent Cough </label>
						<input type="checkbox" name="medical.asthma" value="Tuberculosis">
						<label> Tuberculosis </label>
						<input type="checkbox" name="medical.asthma" value="Lung Disorders">
						<label> Lung Disorders </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.asthma" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.asthma_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.anemia" value="Anemia">
						<label> Anemia </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.anemia" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.anemia_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.thyroid" value="Thyroid">
						<label> Thyroid </label>
						<input type="checkbox" name="medical.thyroid" value="Endocrine">
						<label> Endocrine Disorders </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.thyroid" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.thyroid_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.stroke" value="Stroke">
						<label> Stroke </label>
						<input type="checkbox" name="medical.stroke" value="Fits">
						<label> Seizures </label>
						<input type="checkbox" name="medical.stroke" value="Neurological Problems">
						<label> Neurological Problems </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.stroke" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.stroke_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.migraine" value="Migraine">
						<label> Migraine </label>
						<input type="checkbox" name="medical.migraine" value="Repeated headache">
						<label> Repeated headache </label>
						<input type="checkbox" name="medical.migraine" value="Dizziness">
						<label> Dizziness </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.migraine" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.migraine_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.mental" value="Depression">
						<label> Depression </label>
						<input type="checkbox" name="medical.mental" value="Anxiety">
						<label> Anxiety </label>
						<input type="checkbox" name="medical.mental" value="Mental Disorders">
						<label> Mental Disorders </label>
						<br><input type="checkbox" name="medical.mental" value="Treated by Psychiatrist">
						<label> Treated by Psychiatrist </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.mental" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.mental_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.kidney" value="Kidney Problem">
						<label> Kidney Problem </label>
						<input type="checkbox" name="medical.kidney" value="Kidney Failure">
						<label> Kidney Failure</label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.kidney" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.kidney_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.ulcer" value="Peptic Ulcer">
						<label> Peptic Ulcer </label>
						<input type="checkbox" name="medical.ulcer" value="Acidity">
						<label> Acidity</label>
						<input type="checkbox" name="medical.ulcer" value="Indigestion">
						<label> Indigestion</label>
						<input type="checkbox" name="medical.ulcer" value="Constipation">
						<label> Constipation</label>
						<input type="checkbox" name="medical.ulcer" value="Stomach Problems">
						<label> Stomach Problems</label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.ulcer" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.ulcer_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<label> Sudden  </label>
						<input type="checkbox" name="medical.weightloss" value="Sudden Gain">
						<label> weight gain </label>
						<input type="checkbox" name="medical.weightloss" value="Sudden Loss">
						<label> weight loss</label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.weightloss" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.weightloss_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.ent" value="Ear">
						<label> Ear </label>
						<input type="checkbox" name="medical.ent" value="Nose">
						<label> Nose </label>
						<input type="checkbox" name="medical.ent" value="Throat problems">
						<label> Throat problems </label>
						<input type="checkbox" name="medical.ent" value="Allergy">
						<label> Allergy </label>
						<br><input type="checkbox" name="medical.ent" value="Dental caries">
						<label> Dental caries / Cavities </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.ent" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.ent_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.sleep" value="Sleep apnea">
						<label> Sleep apnea </label>
						<input type="checkbox" name="medical.sleep" value="Snoring">
						<label> Snoring </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.sleep" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.sleep_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.eye" value="Increased Eye Pressure">
						<label> Increased Eye Pressure </label>
						<input type="checkbox" name="medical.eye" value="Vision/Eye Problem">
						<label> Vision/Eye Problem </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.eye" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.eye_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.joint" value="Varicose vein">
						<label> Varicose vein </label>
						<input type="checkbox" name="medical.joint" value="Back pain">
						<label> Back pain </label>
						<input type="checkbox" name="medical.joint" value="Arthritis">
						<label> Arthritis </label>
						<input type="checkbox" name="medical.joint" value="Joint mobility problem">
						<label> Joint mobility problem </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.joint" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.joint_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<label> Allergies: </label>
						<input type="checkbox" name="medical.allergy" value="Sulpha">
						<label> Sulpha </label>
						<input type="checkbox" name="medical.allergy" value="any drug">
						<label> any drug </label>
						<input type="checkbox" name="medical.allergy" value="Food">
						<label> Food </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.allergy" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.allergy_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr data-bind="visible: walks.indexOf('KM17') > -1">
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.surgery" value="Surgery">
						<label> Surgery </label>
						<input type="checkbox" name="medical.surgery" value="Significant Injuries">
						<label> Significant Injuries </label>
						<input type="checkbox" name="medical.surgery" value="Hospitilization">
						<label> Hospitilization </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.surgery" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.surgery_details" style="width:220px"></textarea></div></td>
			</tr>
			<tr>
				<td width="50%" style="padding-top: 10px; padding-bottom: 10px" class="medicaltd">
					<div class="boxgood required">
						<input type="checkbox" name="medical.deformity" value="Physical Deformity">
						<label> Any Physical Deformity </label>
					</div>
				</td>
				<td width="10%">
					<input type="checkbox" name="medical.deformity" value="No">
					<label> No </label>
				</td>
				<td class="medicaltd"><div class="boxgood" style="display: block"><textarea class="mtdetails" name="medical.deformity_details" style="width:220px"></textarea></div></td>
			</tr>
			</table>
			<br>
			<div class="oneline"
				><label class="biglabel" ><b>c. </b> Have you suffered any other illness NOT mentioned above? If yes, please give details</label
			></div>
			<div class="oneline"
				><div class="boxgood required" style="display: block"
					><textarea name="medical.others" rows="3" style="margin-left: 0px; width: 99%"></textarea
				></div
			></div>
			<div class="oneline"
				><label class="biglabel" ><b>d. </b> Are you currently taking any medication for treatment of a medical condition? If yes, list name, dose and duration of the medication.</label
			></div>
			<div class="oneline"
				><div class="boxgood required" style="display: block"
					><textarea name="medical.medications" rows="6" style="margin-left: 0px; width: 99%"></textarea
				></div
			></div>
			<div class="oneline">
				<label class="biglabel" ><b>e.</b> Do you smoke; consume Alcohol / Tobacco products / Addictive Drugs or Narcotics such as cocaine, heroin, etc on a
					regular basis? </label>
					<div class="boxgood required">
						<input type="radio" name="medical.drugs" value="Yes"> <label>Yes / </label>
						<input type="radio" name="medical.drugs" value="No"> <label>No</label>
						<label>&nbsp;&nbsp;&nbsp;(If 'Yes', please Give details): </label>
					</div>
			</div>
			<div class="oneline"
				><div class="boxgood required" style="display: block"
					><textarea name="medical.alcoholdrugs" rows="3" style="margin-left: 0px; width: 99%"></textarea
				></div
			></div>
			<div class="oneline" data-bind="visible: walks.indexOf('KM17') > -1"
				><label class="biglabel" ><b>f.</b> Have you had problems with high altitude before (on flight, moutain climbing)? If yes, please give details.
					</label
			></div>
			<div class="oneline" data-bind="visible: walks.indexOf('KM17') > -1"
				><div class="boxgood" style="display: block"
					><textarea name="medical.altitude" rows="3" style="margin-left: 0px; width: 99%"></textarea
				></div
			></div>

			<div class="oneline" data-bind="visible: walks.indexOf('KM17') == -1"
				><label><b><i>Note: </i></b><u>This Sacred Walks is not advised for pregnant women and those suffering from chronic health problems like
					epilepsy, heart ailment, psychological problems and physical disabilities</u></label>
			</div>
			<div class="oneline" data-bind="visible: walks.indexOf('KM17') > -1"
				><label><b><i>Note: </i></b><u>This Sacred Walks is not advised for pregnant women, those suffering from chronic health problems like
				epilepsy, heart ailments, uncontrolled BP or diabetes or asthma, psychological problems, physical disabilities and obesity</u></label>
			</div>

			<div class="oneline">
				<label class="implabel">Declaration by the participant:</label>
			</div>
			<div class="oneline" style="text-align: justify; margin-left: 0px; margin-right: 0px">
				<label>I, </label>
				<div class="boxgood required">
					<span class="inptext" style="width: 220px; display: inline-block" data-bind="text: name"></span>
				</div>
				<span style="text-align: justify"><label>, hereby willingly undertake to attend
					this 'Sacred Walks' for my well-being at my own risk and will not lay blame under any circumstances for
					any loss, damage or possible injuries to person or property. I further indemnify Isha against all
					claims and suits and state that my legal heirs shall also not lay any claim against Isha in this regard.
					Furthermore I state that I have undertaken a recent full medical examination and take full responsibility for my
					physical condition. I confirm that Isha  will bear no liability should any medical matter arise during
					this Sacred Walks and that I shall be financially responsible for any consequential medical expenses.</label>
				</span>
				<br>
				<br>
				<span style="text-align: justify"><label>
					I confirm that all information provided is true and accurate and agree to it being shared with Isha. <b>I
					acknowledge the Isha's terms and conditions.</b>
				</span>
				<br>
				<br>
				<span style="text-align: justify"><label>
					I have understood the contents translated and read to me in a language that I fully understand.</label></span>
				<br>
				<br>
				<span style="text-align: justify"><label>
					By submitting this form, I agree to the Terms and Conditions mentioned below:
					</label>
				</span>
				<br>
				<div class="oneline"
					><div class="boxgood" style="display: block"
						><textarea name="termsnconditions" rows="8" readonly style="margin-left: 0px; width: 99%; font-size: 80%">
	I understand that the ISHA SACRED WALKS trip is challenging, in a variety of ways, including but not limited to the nature of the accommodations, the weather conditions, the size of the group and the journey itself. On this trip, I may be exposed to certain known and unknown risks, dangers, hazards and liabilities. In particular, I understand that there are certain risks inherent with this trip, including but not limited to the possibility of medical complications arising from the altitude, weather or travel conditions. I affirm that I am in good health and capable of performing whatever physical exercise or activity is required of me. I freely accept and fully assume any legal responsibility for any personal injury, death, losses, inconvenience or property damage that may arise from such risks, dangers and hazards as a result of my voluntary participation on this trip.

	I hereby agree to follow all rules, regulations, and instructions of the trip organizers while on this trip. I understand that the itinerary for this trip and the travel details are subject to change by the organizers, as needed to further the interests of the travel group at large. Isha has organized this trip on the clear understanding that it shall not be, in any way, responsible or liable for any accident, damages, loss, delay, international flight cancellation/delays, or inconvenience caused in connection with the travel facilities arranged.

	I agree to unconditionally abide by any decision ISHA may take in the event the trip be rendered impossible, due to unforeseen acts of nature, or any other unforeseen event or incident that renders it impossible for the travel group to make or continue the journey or if I am required to drop from the trip due to any act or omission on my part which in Isha's view would amount to breach of the travel code of conduct, whether explicit or implied. Isha's decision in this regard shall be final and binding. Isha reserves the right to modify any arrangements required by and made on behalf of the participants and to cancel the same without prior notice due to unforeseen circumstances.

	I understand that as this is a trip that is spiritual in nature, I may be asked to refrain from certain activities or follow certain prescribed spiritual practices; I agree to make my best effort to follow the recommended schedule and practice guidelines. I understand that as my experience will vary on numerous factors including my own actions; I cannot hold Isha, its volunteers, agents or those in active concert with them liable should I not be satisfied with my experience of this trip.

	In consideration of Isha allowing me to participate in this trip, I, on behalf of myself, my heirs, executors, administrators and assigns, hereby release, discharge, indemnify and hold harmless Isha, its officers, directors, employees, servants, agents and volunteers and each of their heirs, executors, administrators and assigns from any claim, cause of action, costs, attorneys fees, expenses or demands and all liability whatsoever arising or that may arise as a result of my participation in this trip due to any cause whatsoever, including negligence, breach of contract, or breach of any statutory or other duty of care, on the part of Isha, and further including the failure on the part of Isha to safeguard or protect me from the risks, dangers and hazards of the trip. Should emergency medical services become necessary for the undersigned participant, the expenses are the sole responsibility of the participant and not that of Isha.

	I hereby agree that Isha may use film or photographic records of this trip for its promotional and/or commercial purpose.

	This agreement shall be governed by and interpreted solely in accordance with the laws of India and no other jurisdiction. Any litigation involving the parties to this Agreement shall be brought solely within the state of Tamil Nadu, India and shall be within the exclusive jurisdiction of the courts of India.

	I CONFIRM THAT I HAVE READ AND UNDERSTOOD THIS AGREEMENT PRIOR TO SIGNING IT/THIS AGREEMENT HAS BEEN READ OVER AND EXPLAINED TO ME IN A LANGUAGE I UNDERSTAND PRIOR TO MY SIGNING IT, AND I AM AWARE THAT BY SIGNING THIS AGREEMENT I AM WAIVING CERTAIN LEGAL RIGHTS WHICH I OR MY HEIRS, NEXT OF KIN, EXECUTORS, ADMINISTRATORS, AND REPRESENTATIVES MAY HAVE AGAINST ISHA.
						</textarea
					></div
				></div>

			</div>
		</div>
		<br>
		<center>
		<span id="buttons">
			<a class="button" href="#"><span class="bigButtonLeft"></span><span id="buttonsubmit" class="bigButtonMiddle">Submit</span><span class="bigButtonRight"></span></a>
			<a class="button" href="#"><span class="bigButtonLeft"></span><span class="bigButtonMiddle">Reset</span><span class="bigButtonRight"></span></a>
		</span>
		<span id="altbuttons" style="display: none; color: red">
			<label><b>You have already filled the form and cannot submit/modify the form. If you need to change the contents, please contact your coordinator</b></label>
		</span>
		</center>
		<br>
		<br>
		<br>
	</form>
</div>

<div style="display: none" id="terms-conditions">
	I understand that the SACRED WALKS trip is challenging, in a variety of ways, including but not limited to the nature of the accommodations, the weather conditions, the size of the group and the journey itself. On this trip, I may be exposed to certain known and unknown risks, dangers, hazards and liabilities.  In particular, I understand that there are certain risks inherent with this trip, including but not limited to the possibility of medical complications arising from the altitude, weather or travel conditions.  I affirm that I am in good health and capable of performing whatever physical exercise or activity is required of me. I freely accept and fully assume any legal responsibility for any personal injury, death, losses, inconvenience or property damage that may arise from such risks, dangers and hazards as a result of my voluntary participation on this trip.

	I hereby agree to follow all rules, regulations, and instructions of the trip organizers while on this trip. I understand that the itinerary for this trip and the travel details are subject to change by the organizers, as needed to further the interests of the travel group at large. Isha has organized this trip on the clear understanding that it shall not be, in any way, responsible or liable for any accident, damages, loss, delay, international flight cancellation/delays, or inconvenience caused in connection with the travel facilities arranged. 

	I agree to unconditionally abide by any decision ISHA may take in the event the trip be rendered impossible, due to unforeseen acts of nature, or any other unforeseen event or incident that renders it impossible for the travel group to make or continue the journey or if I am required to drop from the trip due to any act or omission on my part which in Isha’s view would amount to breach of the travel code of conduct, whether explicit or implied. Isha’s decision in this regard shall be final and binding. Isha reserves the right to modify any arrangements required by and made on behalf of the participants and to cancel the same without prior notice due to unforeseen circumstances.

	I understand that as this is a trip that is spiritual in nature, I may be asked to refrain from certain activities or follow certain prescribed spiritual practices; I agree to make my best effort to follow the recommended schedule and practice guidelines.  I understand that as my experience will vary on numerous factors including my own actions; I cannot hold Isha, its volunteers, agents or those in active concert with them liable should I not be satisfied with my experience of this trip.

	In consideration of Isha allowing me to participate in this trip, I, on behalf of myself, my heirs, executors, administrators and assigns, hereby release, discharge, indemnify and hold harmless Isha, its officers, directors, employees, servants, agents and volunteers and each of their heirs, executors, administrators and assigns from any claim, cause of action, costs, attorneys fees, expenses or demands and all liability whatsoever arising or that may arise as a result of my participation in this trip due to any cause whatsoever, including negligence, breach of contract, or breach of any statutory or other duty of care, on the part of Isha, and further including the failure on the part of Isha to safeguard or protect me from the risks, dangers and hazards of the trip. Should emergency medical services become necessary for the undersigned participant, the expenses are the sole responsibility of the participant and not that of Isha.

	I hereby agree that Isha may use film or photographic records of this trip for its promotional and/or commercial purpose. 

	This agreement shall be governed by and interpreted solely in accordance with the laws of India and no other jurisdiction. Any litigation involving the parties to this Agreement shall be brought solely within the state of Tamil Nadu, India and shall be within the exclusive jurisdiction of the courts of India.

	I CONFIRM THAT I HAVE READ AND UNDERSTOOD THIS AGREEMENT PRIOR TO SIGNING IT/THIS AGREEMENT HAS BEEN READ OVER AND EXPLAINED TO ME IN A LANGUAGE I UNDERSTAND PRIOR TO MY SIGNING IT, AND I AM AWARE THAT BY SIGNING THIS AGREEMENT I AM WAIVING CERTAIN LEGAL RIGHTS WHICH I OR MY HEIRS, NEXT OF KIN, EXECUTORS, ADMINISTRATORS, AND REPRESENTATIVES MAY HAVE AGAINST ISHA.
</div>
</body>
</html>
