<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration done sucessfully</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<style>
#employers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

#employers td, #employers th {
    border: 1px solid #ddd;
    padding: 8px;
}


#employers tr td {
    padding-top: 11px;
    padding-bottom: 12px;
    text-align: left;
    color:#333;
}

#employers tr td:first-child {
    padding-top: 11px;
    padding-bottom: 12px;
    text-align: left;
    background: #ddd;
    color:#333;
}
</style>
    
    
    
</head>
<body>
<div>
   <!--  <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header">
   <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px" src="file:///D:/xampp/htdocs/RecruitmentProject/assets/logo.png" alt="" width="152" height="108">
   </div>-->
   
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hello <?php echo "Emagine Manager";?>,</p>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Vendor has been registered successfully.</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Below are the details of registered vendor: </p>


<table id="employers">

<tr>  
     <td><b>Company Name : </b></td>
     <td> <?php echo $company_name; ?></td>
</tr>

<tr>
   <td><b>City:</b></td>
   <td><?php echo $city; ?></td>
</tr>
<tr>
   <td><b>Team Size:</b></td>
   <td><?php echo $team_size; ?></td>
</tr>
<tr>
   <td><b>Specialised Sector:</b> </td>
   <td><?php echo $specialised_sector; ?></td>
</tr>
<tr>
   <td><b>GST Number:</b> </td>
   <td> <?php echo $GST_number; ?></td>
</tr>
<tr>
   <td><b>Owner Name:</b></td>
   <td> <?php echo $owner_name; ?></td>
</tr>
<tr>
   <td><b>Contact Number: </b></td>
   <td> <?php echo $contact_number; ?></td>
</tr>
<tr>
   <td><b>Email Id: </b></td>
   <td><?php echo $email; ?></td>
</tr>
<tr>
   <td><b>SPOC Name:</b> </td>
   <td><?php echo $SPOC_name; ?></td>
</tr>
<tr>
   <td><b>SPOC Mobile Number:</b> </td>
   <td><?php echo $SPOC_mobile_number; ?></td>
</tr>
<tr>
   <td><b>SPOC Email: </b></td>
   <td><?php echo $SPOC_email; ?></td>
</tr>

</table>

</div>
</body>
</html>