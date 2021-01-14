<!DOCTYPE html>
<html>
<head>
<style>
table, th,td {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body bgcolor="#E6E6FA">
<h1 style="text-align:center;background-color:DodgerBlue;">GREEN PHARMACY STORE</h1>
<table>
<caption><b>Drug_Suppliers</b></caption>
  <tr>
    <th>Company_Name</th>
    <th>Company_Id</th>
    <th>Address</th>
    <th>Phone_No</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>AAA Ezee Soulnature Healthcare</td>
    <td>236140</td>
    <td>J-195 Saket,New Delhi,17 India</td>
     <td>Tel: 91 98 1105 3751</td>
     <td>soulnature@gmail.com</td>
  </tr>
  <tr>
    <td>Aash Biotech Pvt Ltd</td>
    <td>236141</td>
     <td>417, Advait Complex,Near Sandesh Press Vastrapur,Ahmedabad,380015 India</td>
    <td>Tel: +91 79 40039970</td>
    <td>info@aashbiotech.com</td>
  </tr>
  <tr>
      <td>Accure Labs Pvt. Ltd.t</td>
    <td>236142</td>
     <td>S-1,Greater Kailash-1,New Delhi,110048 India</td>
    <td>Tel: +91 11 41037221</td>
    <td>siddharth@accurelabs.com</td>
  </tr>
  <tr>
      <td>Actimus Biosciences Pvt. Ltd.</td>
    <td>236143</td>
     <td>4th Floor, Varun Towers,,Kasturba Marg, Siripuram,Visakhapatnam,Andhra Pradesh,530 003 India</td>
    <td>Tel: +91 891 5572 000</td>
    <td>abhijit@actimusbio.com</td>
  </tr>
  <tr>
     <td>Admit Pharmaceuticals Pvt.Ltd.</td>
    <td>236144</td>
     <td>408, Aalap-A,Limda Chowk,Rajkot,Gujarat,360001 India</td>
    <td>Tel: 02812464018</td>
    <td>marketing@admitpharma.co.in</td>
  </tr>
  <tr>
      <td>Alben Biotec Pvt. Ltd.</td>
    <td>236145</td>
     <td>b-111,Manav Apartment, Sec-9,Rohini,Delhi,85India</td>
    <td>Tel: 09891123847</td>
    <td>rakeshsingla7@yahoo.com</td>
  </tr>
</table>

<table style="margin-top:60px; margin-left:320px;">
<caption><b>Medicine_Details</b></caption>
  <tr>
    <th>Company_Id</th>
    <td>236140</td>
    <th>Related_To</th>
	<td><b>Price/Unit</b></td>
  </tr>
<tr>
    <th rowspan="3">Medicine_Names</th>
    <td>Atorvastatin CALCIUM</td>
    <td>Respiratory viral diseases</td>
	<td>Rs. 5</td>
	
</tr>
     <tr><td>Fluvastatin (Lescol)</td><td>coughing or sneezing</td><td>Rs. 3</td></tr>
    <tr><td>Pravastatin (Pravachol)</td><td>respiratory syncytial virus infection</td><td>Rs. 8</td></tr>
<tr>
    <th>Company_Id</th>
    <td>236141</td>
  </tr>
<tr>
    <th rowspan="5">Medicine_Names</th>
    <td>Rivaroxaban (Xarelto)</td>
    <td>parainfluenza virus infection</td>
	<td>Rs. 5</td>
</tr>
<tr><td>Warfarin (Coumadin)</td><td>Gastrointestinal viral diseases</td><td>Rs. 11.5</td></tr>
<tr><td>Apixaban (Eliquis) </td><td>abdominal cramps</td><td>Rs. 15</td></tr>
<tr><td>Heparin (various)</td><td>diarrhea</td><td>Rs. 7</td></tr>
<tr><td>Ticagrelor (Brilinta)</td><td>norovirus infection</td><td>Rs. 12</td></tr>
<tr>
    <th>Company_Id</th>
    <td>236142</td>
  </tr>
<tr>
    <th rowspan="8">Medicine_Names</th>
    <td>Benazepril (Lotensin)</td>
    <td>astrovirus infection</td>
	<td>Rs. 4</td>
</tr>
<tr><td>Captopril (Capoten)</td><td>skin rashes</td><td>Rs. 6</td></tr>
<tr><td>Enalapril (Vasotec)</td><td>chikungunya virus infection</td><td>Rs. 20</td></tr>
<tr><td>Fosinopril (Monopril)</td><td>hepatic viral diseases</td><td>Rs. 5</td></tr>
<tr><td>Lisinopril (Prinivil, Zestril)</td><td>warts, including genital warts</td><td>Rs. 2.5</td></tr>
<tr><td>Moexipril (Univasc)</td><td>oral herpes</td><td>Rs. 5.68</td></tr>
<tr><td>Perindopril</td><td>genital herpes</td><td>Rs. 3.25</td></tr>
<tr><td>Quinapril (Accupril)</td><td>molluscum contagiosum</td><td>Rs. 8.23</td></tr>
<tr>
    <th>Company_Id</th>
    <td>236143</td>
  </tr>
<tr>
    <th rowspan="2">Medicine_Names</th>
    <td>Metoprolol (Lopressor, Toprol XL)</td>
     <td>bleeding from the mouth or ears</td>
	 <td>Rs. 7.25</td>
</tr>
<tr><td>Bisoprolol/hydrochlorothiazide (Ziac)</td><td>bleeding in internal organs</td><td>Rs. 7</td></tr>
<tr>
    <th>Company_Id</th>
    <td>236144</td>
  </tr>
<tr>
    <th rowspan="4">Medicine_Names</th>
    <td>Amlodipine (Norvasc, Lotrel)</td>
     <td>Marburg hemorrhagic fever</td>
	 <td>Rs. 3.45</td>
</tr>
<tr><td>Diltiazem (Cardizem, Tiazac)</td><td>Crimean-Congo hemorrhagic fever</td><td>Rs. 5.10</td></tr>
<tr><td>Felodipine (Plendil)</td><td>coordination problems</td><td>Rs. 21</td></tr>
<tr><td>Verapamil (Calan, Verelan)</td><td>seizures</td><td>Rs. 6.75</td></tr>
<tr>
    <th>Company_Id</th>
    <td>236145</td>
  </tr>
<tr>
    <th rowspan="5">Medicine_Names</th>
    <td>Isosorbide dinitrate (Isordil)</td>
     <td>seizures</td>
	 <td>Rs. 5.16</td>
</tr>
<tr><td>Nesiritide (Natrecor)</td><td>viral meningitis</td><td>Rs. 4.56</td></tr>
<tr><td>Hydralazine (Apresoline)</td><td>viral encephalitis</td><td>Rs. 2.10</td></tr>
<tr><td>Minoxidil</td><td>rabies</td><td>Rs. 1.15</td></tr>
<tr><td>Nitrates</td><td>drowsiness</td><td>Rs. 7.8</td></tr>
</table>

<p style="color:hsl(0, 100%, 25%);text-align:center"><b><font size="10">Insert Details</font></b></p>

<center>
<form action="insert_drug_manufacturer.php" method="get">
		Company_Name :<pre><input type="text" name="Company_Name"></pre><br>
		Company_Id :<pre><input type="text" name="Company_Id"></pre><br>
		Phone_No :<pre><input type="text" name="Phone_No"></pre><br>
		Email :<pre><input type="text" name="Email"></pre><br>
		Address :<pre><input type="text" name="Address"></pre><br>
		Medicine_Names :<pre><input type="text" name="Medicine_Names"></pre><br>
		Price/Unit :<pre><input type="text" name="Price/Unit"></pre><br>
		DOP :<pre><input type="text" name="DOP"></pre><br>
		<input type="submit" value="Insert">
</form>
</center>

<p style="color:hsl(0, 100%, 25%);text-align:center"><b><font size="10">Delete Details</font></b></p>
<center>
<form action="Delete_Drug_suppliers.php" method="get">
		Company_Id :<pre><input type="text" name="Company_Id"></pre><br>
		<input type="submit" value="Delete">
</form>
</center>

<p style="text-align:center;"><a href="Display_Drug_manufacturer_info.php"><font size="6">Get Drug_Suppliers_Details</font></a></p>
<p style="text-align:center;"><a href="Display_medicine_details.php"><font size="6">Get Medicines_Details</font></a></p>

<p style="color:rgb(255, 255, 255);background-color:darkblue"><marquee behavior="scroll" direction="left"><b>Copyright 2012 © Green Farmacy Store, All Rights Reserved. No part of this website can be reproduced in any form without the written permission of Green Farmacy. Website Design, Website Development by INI Technologies Pvt Ltd, Cochin, India</b></marquee></p>
</body>
</html>
