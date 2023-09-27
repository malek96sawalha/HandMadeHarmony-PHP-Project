<?php 
$pageTitle = 'Checkout';
include 'includes/head-vars.php';
include 'includes/navbar.php';
 ?>
    <div class="offcanvas-overlay"></div>
    
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="https://htmldemo.net/learts/learts/assets/images/bg/page-title-1.webp">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Checkout</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->
    <!-- Checkout Section Start -->
        <div class="section section-padding">
        <div class="container">
                <?php
                $user_id = $_SESSION['loggedInUserData']['id'];
                $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);
                ?>
            <div class="section-title2">
                <h2 class="title">Billing details</h2>
            </div>
            <form action="final.php" class="checkout-form learts-mb-50" method="post">
                <div class="row">   
                    <div class="col-md-6 col-12 learts-mb-20">
                        <?php 
                        $row = mysqli_fetch_array($result);
                        ?>
                        <label for="bdFirstName">User Name <abbr class="required">*</abbr></label>
                        <p><?php echo $row["username"];?></p>
                            <?php ?>
                    </div>
                    
                    <div class="col-12 learts-mb-20">
                        <label for="bdCountry">Country <abbr class="required">*</abbr></label>
                        <select id="bdCountry" class="select2-basic">
                            <option value="">Select a country…</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option> 
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="PW">Belau</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo (Brazzaville)</option>
                            <option value="CD">Congo (Kinshasa)</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="CI">Ivory Coast</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO" selected>Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Laos</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="KP">North Korea</option>
                            <option value="MK">North Macedonia</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PS">Palestinian Territory</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="ST">São Tomé and Príncipe</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="SX">Saint Martin (Dutch part)</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia/Sandwich Islands</option>
                            <option value="KR">South Korea</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syria</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom (UK)</option>
                            <option value="US">United States (US)</option>
                            <option value="UM">United States (US) Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (US)</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                    
                    <?php 
                    
                   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if(isset($_POST['user_city'])){
                    $user_city = $_POST['user_city'];
                    }
                    if(isset($_POST['user_city'])){

                    $user_address = $_POST['user_address'];
                    }
                    
                    $check_order_sql = "SELECT * FROM orders WHERE user_id = '$user_id'";
                    $check_order_result = mysqli_query($conn, $check_order_sql);
                
                    if (mysqli_num_rows($check_order_result) > 0) {
                       
                        $update_order_sql = "UPDATE users SET user_city = '$user_city', user_address = '$user_address' WHERE user_id = '$user_id'";
                        $update_order_result = mysqli_query($conn, $update_order_sql);
                    } else {
                        if($_SESSION['loggedInStatus'] == true){
                            $email = $_SESSION['loggedInUserData']['email'];
                            
                            $insert_order_sql = "INSERT INTO users ( user_city, user_address) VALUES ('$user_city', '$user_address')";
                            $insert_order_result = mysqli_query($conn, $insert_order_sql);
                        }
                    }
                    
                    }
                 

                    ?>
                    <div class="col-12 learts-mb-20">
                        <label for="bdDistrict">City <abbr class="required">*</abbr></label>
                        <select id="bdDistrict" name="user_city" class="select2-basic">
                            <option value="">Select an option…</option>
                            <option value="Ajloun">Ajloun</option>
                            <option value="Amman">Amman</option>
                            <option value="Aqaba">Aqaba</option>
                            <option value="Balqa">Balqa</option>
                            <option value="Irbid">Irbid</option>
                            <option value="Jerash">Jerash</option>
                            <option value="Karak">Karak</option>
                            <option value="Ma'an">Ma'an</option>
                            <option value="Madaba">Madaba</option>
                            <option value="Mafraq">Mafraq</option>
                            <option value="Tafilah">Tafilah</option>
                            <option value="Zarqa">Zarqa</option>  
                        </select>
                    </div>
                    
                    <div class="col-12 learts-mb-20">
                        <label for="bdAddress1">Shipping address <abbr class="required">*</abbr></label>
                        <input type="text" id="bdAddress1"name="user_address" placeholder="House number and street name">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdEmail">Email address <abbr class="required">*</abbr></label>
                        <p><?php echo $row["user_email"];?></p>
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdPhone">Phone <abbr class="required">*</abbr></label>
                        <input type="text" id="bdPhone" name="user_phone" value="<?php echo $_SESSION['loggedInUserData']['phone'] ?>">
                    </div>
                    
                </div>
            <?php
            $sql = "SELECT products.product_name, cart.product_quantity, products.product_price FROM cart INNER JOIN products ON cart.product_id=products.product_id";
            $sql_run = mysqli_query($conn, $sql);
            $rows = array();
            while ($row = mysqli_fetch_assoc($sql_run)) {
                $rows[] = $row;
            }

            ?>
            <div class="section-title2 text-center">
                <h2 class="title">Your order</h2>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-6 order-lg-2 learts-mb-30">
                    <div class="order-review">
                        <table class="table">
                            <thead>   
                                <?php foreach($rows as $item){?>
                                <tr>
                                    <td class="name"><?=$item['product_name']?>&nbsp; <strong class="quantity">×&nbsp;<?=$item['product_quantity']?></strong></td>
                                    <td class="total"><span><?=$item['product_price']?></span></td>
                                </tr>
                                <?php
                                } 
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="total">
                                    <th>Total</th>
                                    <td><strong><span><?php echo $_SESSION['total'] ;?>JD</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 learts-mb-30">
                    <div class="order-payment">
                        <div class="payment-method">
                            <div class="accordion" id="paymentMethod">
                                <div class="card active">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#checkPayments">Check payments</button>
                                    </div>
                                    <div id="checkPayments" class="collapse show" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#cashkPayments">Cash on delivery </button>
                                    </div>
                                    <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#payPalPayments">PayPal <img src="https://htmldemo.net/learts/learts/assets/images/others/pay-2.webp" alt=""></button>
                                    </div>
                                    <div id="payPalPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            <div id="paypal-button-container"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="payment-note">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-dark btn-outline-hover-dark">place order</button>
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>