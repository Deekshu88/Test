<html>
    
    <head>
        <tittle> Address Form</tittle>
    </head>
    <body>
  



<label class="required">First Name:</label>
<input type="text" name="name" value="<?php echo $name;?>">
  <style>
    .required:after{
        content:" *";
    }
   </style>


Middle Name: <input type="text" name="name" value="<?php echo $nMiddlename;?>">
<label class="required">Last Name:</label>
<input type="text" name="name" value="<?php echo $Lastname;?>">
<br>
<br>

<label class="required">Street Address:</label>
<input type="text" name="name" value="<?php echo $Streetaddress;?>">


<label class="required">Unit:</label>
<input type="text" name="name" value="<?php echo $unit;?>">
<br>
<br>

<label class="required">City:</label>
<input type="text" name="name" value="<?php echo $city;?>">
   
<label class="required">State:</label>
<select name="state">
            <option value="1">California</option>
             <option value="2">Alabama</option>
              <option value="3">Alaska</option>
               <option value="4">Arizona</option>
                <option value="5">Arkansas</option>
                 <option value="6">Colorodo</option>
                  <option value="7">Connecticut</option>
                   <option value="8">Delaware</option>
                    <option value="9">Florida</option>
                     <option value="10">Georgia</option>
            
</select>
<label class="required">Zipcode:</label>
<input type="text" name="name" value="<?php echo $zipcode;?>">
<br>
<br>

<label class="required">Date Of Birth:</label>
<input type="date" name="dateofbirth" value="<?php echo $DateofBirth;?>">
<br>
<br>


<label class="required">Phone Number:</label>
<input type="text" name="name" value="<?php echo $Phonenumber;?>">

<label class="required">Email Address:</label>
<input type="text" name="name" value="<?php echo $EmailAddress;?>">
<br>
<br>

<label class="required">IS THIS HOUSE,CONDO OR HO5?:</label>
<br>
<br>
 
<input type="radio" name="HOUSE"
<?php if (isset($house) && $house=="house") echo "checked";?>
value="house">HOUSE

<input type="radio" name="CONDO"
<?php if (isset($house) && $house=="house") echo "checked";?>
value="house">CONDO

<input type="radio" name="HO5"
<?php if (isset($HO5) && $HO5r=="HO5") echo "checked";?>
value="HO5">HO5
<br>
<br>

<?php
function test_form(){
 include('test_form.php');
}
?>

   <a href="https://api.staging.myhippo.io/v1/herd/quote?auth_token=zcXbR1NoE0zoozyuqAa75s5gBATbeiUsbkGhvb5toGiNWUdDjIUkAU5XgDwCRTet&street=435%20Homer%20Ave&city=Palo%20Alto&state=CA&zip=94301&first_name=John&last_name=Gill&email=Test%40test.com&phone=7869885582&date_of_birth=05061979">
      <button>submit</button> 
   </a>



</body>
</html>


 

  
