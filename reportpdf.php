
<?php
 //include("config.php");
 require ('dompdf/vendor/autoload.php');
use Dompdf\Dompdf;
include("./databaseConnection/config.php");
$dompdf = new Dompdf();
$id = $_GET['id'];                      
$html='';
 $sel = "select * from `courior` left join `courier_detail` on  courior.id=courier_detail.dc_id LEFT JOIN orders ON orders.courior_id = courior.id where id = {$id} ";
$q1 = mysqli_query($db, $sel);


        while ($row = mysqli_fetch_assoc($q1)) {
            $html.='<style>
            table , td, th {
            border: 1px solid #595959;
            border-collapse: collapse;
            }
            th {
                background:#b9b9b9; 
                }
            td, th {
            padding: 3px;
                    width: 120px;
                    height: 20px;
                    text-align: center
            }
            .container{
            border: 1px solid black;
            padding: 10px;
            border-radius: 10px;
            }
            </style>
                    <div class="container">
                    <div style="text-align: center"><span><b>Courier # '.$row['id'].' </b> </span></div>
                    <br>
                    <table>
                        <tbody>
                            <tr>
                                <th style="width:375px ;">Height</th>
                                <th style="width:200px ;">Width</th>
                                <th style="width:200px ;">Weight</th>
                                <th style="width:200px ;">Total Price</th>
                            </tr>
                            <tr>
                                <td>'.$row['height'].'</td>
                                <td>'.$row['width'].'</td>
                                <td>'.$row['weight'].'</td>
                                <td>'.$row['totalprice'].'</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table>
                        <tbody>
                        <tr>
                        <th style="width:375px ;">Departure City</th>
                        <th style="width:200px ;">Destination City</th>
                        <th style="width:200px ;">Start date</th>
                        <th style="width:200px ;">Delivery date</th>
                    </tr>
                            <tr>
                                <td>'.$row['departure'].'</td>
                                <td>'.$row['destination'].'</td>
                                <td>'.$row['startdate'].'</td>
                                <td>'.$row['deliverydate'].'</td>
                            </tr>
                        </tbody>
                    </table> 
                    <br>
                    <table>
                    <tbody>
                        <tr>
                            <th style="width:382px ;">Detail Departure: </th>
                            <td style="width:600px ;">'.$row['d_departure'].'</td>
                        </tr>
                        <tr>
                            <th>Detail Destination :</th>
                            <td>'.$row['d_destination'].'</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
                    </div>
               
            ';
       }  
        $dompdf->loadHtml($html);  


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("status.pdf",array('Attachment'=>0));
?>