

####### header jquery or sweet alert   ##############

 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



######      Php code here   ########


 <?php
            
               $to ='cpn.efficientindia@gmail.com';
                         $from ='no-reply@kgpsglobal.com';
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
                                    <table style='border-collapse: collapse; width:70%; background-color:#eaf1fb'>
                                         <tr><th style='text-align:center; background-color:#fff; width:300;' colspan='2'><img src='https://www.kgpsglobal.com/demo/assets/frontend/images/logo/kgpsgloba-logo.png'></th></tr>
                                         <th style='text-align:center; ' colspan='2'>Clients Enquiry</th>
                                         <tr><th>Name:</th><td>$name</td></tr>
                                         <tr><th>Email:</th><td>$email</td></tr>
                                         <tr><th>Phone:</th><td>$phone</td></tr>
                                         <tr><th>Message:</th><td>$message</td></tr>
                                    </table>
                                </body>
                            </html>
                                    ";
                            $subject = "KGPS Global";
                            $message = $html;
                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            $headers .= "From: ".$from;
                            
                            mail($to,$subject,$message,$headers);
                
            
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
