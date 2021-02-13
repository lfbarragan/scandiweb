
<div id="errorGeneral" class="generalError"></div>
<div id="containerAdd" class="containerAdd"> 

<div class="itemsAdd">   
   <span class="span">SKU</span>
</div>
<div> 
   <input name="sku" id="sku" type="text" class="inputAdd" onblur="isValidSku(this.value)"/>
</div>
<div id= "errorSKU" class="errorMSG"> </div>


<div class="itemsAdd">   
   <span class="span">Name</span>
</div>
<div>   
   <input name="name" id="name" type="text" class="inputAdd" oninput="isValidName(this.value)"/>
</div>
<div id= "errorName" class="errorMSG"> </div>


<div class="itemsAdd">   
   <span class="span">Price ($)</span>
</div>
<div>
   <input name="price" id="price" type="text" class="inputAdd" oninput="isValidPrice(this.value)"/>
</div>
<div id= "errorPrice" class="errorMSG"> </div>


<div class="itemsAdd"> 
    <span class="span">Select</span>
</div>
<div>    
<select id = "switch"  class="switchAdd"  onchange="switchAdd()" onblur="isValidSwitch(this.value)" >
        <option value="">Select</option>
        <option value="dvd">DVD</option>
        <option value="book">Book</option>
        <option value="furniture">Furniture</option>
</select>
</div>
<div id= "errorSwitch" class="errorMSG"> </div>

</div> <!-- container -->

<div id="containerSwitch" class="hidden"> 

<div id="dvd" class="hidden">
    <span>Size in MB</span>
    <span class="itemsAdd span"><br><br>"Product Description"</span>
</div>
<div id="dvdSize" class="hidden">   
    <input type="text" id="dvdMB" name="dvdMB" class="inputAdd" oninput="isValidDVD(this.value)"> </input>
</div>
<div id= "errorDVD" class="hidden"> 
</div>

<div id="book" class="hidden">
    <span>Weight in Kg</span>
    <span class="itemsAdd span"><br><br>"Product Description"</span>
</div>
<div id="bookKg" class="hidden">   
    <input type="text" id="bookW" name="bookW"  class="inputAdd"  oninput="isValidBook(this.value)"> </input>
</div>
<div id= "errorBook" class="hidden"> 
</div>

 <div id="furniture" class="hidden">
  <span class="span">Heigth (cm)</span><br>
  <span class="span">Width (cm) </span><br>
  <span class="span">Length (cm)</span><br>
  <span class="itemsAdd span"><br><br>"Product Description"</span>
</div>
<div id="furnitureSize" class="hidden">
    <input type="text" id="height" name="furnitureH" class="inputAdd"  oninput="isValidFurniture(this.value)"></input><br>
    <input type="text" id="width" name="furnitureW" class="inputAdd"   oninput="isValidFurniture(this.value)"></input><br>
    <input type="text" id="lenght" name="furnitureL" class="inputAdd"  oninput="isValidFurniture(this.value)"></input><br>
</div>
<div id= "errorFurniture" class="hidden">
</div>

</div> 

