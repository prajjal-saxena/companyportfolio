<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "development";

                $conn = mysqli_connect($servername, $username, $password, $database);
                if(!$conn){
                    die("Connection not successful!");
                }
                else{
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $proposal_to = $_POST['proposal_to'];
                        $group_company = $_POST['group_company'];
                        $ntpl_dl_pq_200027 = $_POST['ntpl_dl_pq_200027'];
                        $billing_address = $_POST['billing_address'];
                        $sp_ref = $_POST['sp_ref'];
                        $gstin =$_POST['gstin'];
                        $pan = $_POST['pan'];
                        $delivery_days = $_POST['delivery_days'];
                        $email_id = $_POST['email_id'];
                        $mob = $_POST['mob'];
                        $pq_validity = $_POST['pq_validity'];
                        $credit_limit = $_POST['credit_limit'];
                        $credit_days = $_POST['credit_days'];

                        $rate_per_unit1 = $_POST['rate_per_unit1'];
                        $nos_set1 = $_POST['nos/set1'];
                        $amount1 = $_POST['amount1'];

                        $rate_per_unit2 = $_POST['rate_per_unit2'];
                        $nos_set2 = $_POST['nos/set2'];
                        $amount2 = $_POST['amount2'];

                        $rate_per_unit4 = $_POST['rate_per_unit4'];
                        $nos_set4 = $_POST['nos/set4'];
                        $amount4 = $_POST['amount4'];

                        $rate_per_unit5 = $_POST['rate_per_unit5'];
                        $nos_set5 = $_POST['nos/set5'];
                        $amount5 = $_POST['amount5'];

                        $sql = "INSERT INTO `develop` (`proposal_to`, `group_company`, `ntpl_dl_pq_200027`, `billing_address`, `sp_ref`, `gstin`, `pan`, `delivery_days`, `email_id`, `mob`, `pq_validity`, `credit_limit`, `credit_days`, `rate_per_unit1`, `nos/set1`, `amount1`, `rate_per_unit2`, `nos/set2`, `amount2`, `rate_per_unit4`, `nos/set4`, `amount4`, `rate_per_unit5`, `nos/set5`, `amount5`) 
                        VALUES ('$proposal_to', '$group_company', '$ntpl_dl_pq_200027', '$billing_address', '$sp_ref', '$gstin', '$pan', '$delivery_days', '$email_id', '$mob', '$pq_validity', '$credit_limit', '$credit_days', '$rate_per_unit1', '$nos_set1', '$amount1', '$rate_per_unit2', '$nos_set2', '$amount2', '$rate_per_unit4','$nos_set4','$amount4', '$rate_per_unit5','$nos_set5','$amount5')";
                        $result = mysqli_query($conn, $sql);  
                }
            }
        ?>
                 <form action="/companyportfolio/admin.php" method="POST">
                    <div class="form-pq">
                        <div>
                            <label for="fname">Proposal To</label>
                            <input type="text" id="fname" name="proposal_to">
                        </div>
                        <div>
                            <label for="lname">Group Company</label>
                            <input type="text" id="lname" name="group_company">
                        </div>
                        <div>
                            <label for="lname">NTPL/DL/PQ/200027</label>
                            <input type="text" id="lname" name="ntpl_dl_pq_200027">
                        </div>
                    </div>
                   <div class="form-pq">
                        <div>
                            <label for="fname">Billing Address</label>
                            <input type="text" id="fname" name="billing_address">
                        </div>
                        <!-- <div>
                            <label for="lname">             </label>
                            <input type="text" id="lname" name="lname">
                        </div> -->
                        <div>
                            <label for="lname">SP REF</label>
                            <input type="text" id="lname" name="sp_ref">
                        </div>
                    </div>
                    <div class="form-pq">
                        <div>
                            <label for="fname">GSTIN</label>
                            <input type="text" id="fname" name="gstin">
                        </div>
                        <div>
                            <label for="lname">PAN</label>
                            <input type="text" id="lname" name="pan">
                        </div>
                        <div>
                            <label for="lname">Delivery Days</label>
                            <input type="text" id="lname" name="delivery_days">
                        </div>
                    </div>
                    <div class="form-pq">
                        <div>
                            <label for="fname">E-Mail ID</label>
                            <input type="text" id="fname" name="email_id">
                        </div>
                        <div>
                            <label for="lname">Mob</label>
                            <input type="text" id="lname" name="mob">
                        </div>
                        <div>
                            <label for="lname">PQ_Validity</label>
                            <input type="text" id="lname" name="pq_validity">
                        </div>
                    </div>
                    <div class="form-pq">
                        <div>
                            <label for="fname">Credit Limit</label>
                            <input type="text" id="fname" name="credit_limit">
                        </div>
                        <div>
                            <label for="lname">Credit Days</label>
                            <input type="text" id="lname" name="credit_days">
                        </div>
                    </div>
       
                     <div>
                        <h2 style="text-align:center;">Price Quote</h2>
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">SPECIFICATION</th>
                                <th scope="col">RATE PER UNIT</th>
                                <th scope="col">NOS./SET</th>
                                <th scope="col">AMOUNT</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Website Design (Frontend U.I.) - One time<br>React JS(Frontend)</td>
                                <td><input type="tel" id="lname" name="rate_per_unit1"></td>
                                <td><input type="tel" id="lname" name="nos/set1"></td>
                                <td><input type="tel" id="lname" name="amount1"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Website Development Coding - One time<br>Node(Backend)- Database table</td>
                                <td><input type="tel" id="lname" name="rate_per_unit2"></td>
                                <td><input type="tel" id="lname" name="nos/set2"></td>
                                <td><input type="tel" id="lname" name="amount2"></td>
                              </tr>
                              
                              <tr>
                                <th scope="row">3</th>
                                <td>AMC Anually<br>AMC- Modification, upgradation, Backup, Changes</td>
                                <td><input type="tel" id="lname" name="rate_per_unit4"></td>
                                <td><input type="tel" id="lname" name="nos/set4"></td>
                                <td><input type="tel" id="lname" name="amount4"></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>Domain+Hosting( If Required )- Godaddy Ultimate Plan with SSL-Anually</td>
                                <td><input type="tel" id="lname" name="rate_per_unit5"></td>
                                <td><input type="tel" id="lname" name="nos/set5"></td>
                                <td><input type="tel" id="lname" name="amount5"></td>
                              </tr>
                            </tbody>
                          </table>
       
                    </div>
                    <a href="index.php?gstin='.$gstin.'" class="btn btn-primary">Submit</a>
       
                </form>

