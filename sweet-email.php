

####### header jquery or sweet alert   ##############

 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



######      Php code here   ########


 <?php
            
               if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $services = $_POST['services'];
                $address = $_POST['address'];
                $msg = $_POST['msg'];
                
                $to ="codewithcpn@gmail.com";
                $from =$email;
                $html="<!DOCTYPE html>
                            <html>
                             <head>
                            <style>
                            table, th, td
                            {
                                border:2px solid #000;
                                padding:5px;
                                
                            }
                            </style>
                                    <meta charset='utf-8'>
                                    <title></title>
                                </head>
                                <body>
                                    <table style='border-collapse: collapse; width:70%'>
                                         <th style='text-align:center; ' colspan='2'>Customer Enquiry Details</th>
                                         <tr><th>Name:</th><td>$name</td></tr>
                                         <tr><th>Email:</th><td>$email</td></tr>
                                         <tr><th>Phone:</th><td>$phone</td></tr>
                                         <tr><th>Services:</th><td>$services</td></tr>
                                         <tr><th>Address:</th><td>$address</td></tr>
                                         <tr><th>Message:</th><td>$msg</td></tr>
                                    </table>
                                </body>
                            </html>
                ";
                $subject = "iGEN Networks - Customer Enquiry Details";
                $message = $html;
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= "From: ".$email;
            
                //  mail($to,$subject,$message,$headers);
            
            
                 if(mail($to,$subject,$message,$headers))
                 {
                     ?>
                        <script>
                            swal("Good Job!", "We'r connect shortly", "success", {
                              button: "Ok",
                         
                            });
                        </script>
                    <?php

                            }
                            else{
                            ?>
                        <script>
                            swal("Oh No!", "Please try again", "error", {
                             button: "Ok",
                            });
                          </script> 
                          <?php
                         }
                       }
                     ?>
