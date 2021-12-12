
<br></br>
<div class="content-box">
<div class="row">
  <div class="col">
    <h4>Property Details</h4>
  </div>
  <div class="col">

  </div>
</div>

<br>
<?php
  $sql1="SELECT * FROM properties ORDER BY id DESC LIMIT 0,1";
  $res1= $conn->query($sql1);
  
  //$data=$res1->fetch_assoc();
   $id=!empty($data['id'])?$data['id']:'';
  $property_title=!empty($data['property_title'])?$data['property_title']:'';
  $property_type=!empty($data['property_type'])?$data['property_type']:'';
  $price=!empty($data['price'])?$data['price']:'';
  $property_img=!empty($data['property_img'])?$data['property_img']:'';
  $liv_room=!empty($data['liv_room'])?$data['liv_room']:'';
  //$websiteFavicon=!empty($data['website_favicon'])?$data['website_favicon']:'';
  $property_address=!empty($data['property_address'])?$data['property_address']:'';
  $bed_room=!empty($data['bed_room'])?$data['bed_room']:'';

  
  $property_details=!empty($data['property_details'])?$data['property_details']:'';
  $delivery_type=!empty($data['delivery_type'])?$data['delivery_type']:'';
  $utility=!empty($data['utility'])?$data['utility']:'';
?>

<form id="updateForm" name="website_setting" rel="<?php echo $id;?>">
  <div class="row">
    <div class="col">
      <div class="form-group">
      <label>Property Type<span style="color:red">*</span></label>
      <input type="text" name="property_type" value="<?php echo $property_type ?>" class="form-control">
    </div>
  </div>
    <div class="col">
      <div class="form-group">
      <label>Property Name<span style="color:red">*</span></label>
      <input type="text" name="property_title" value="<?php echo $property_title ?>" class="form-control">
      <input type="checkbox" name="For_rent" value="1"> Sale
      <input type="checkbox" name="For_sale" value="1"> Rent
     </div>
    </div>
  </div>

    <div class="row">
    <div class="col">
      <label>Property Picture <span style="color:red">*</span></label>

      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="website_logo">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
      <img src="assets/images/<?php echo $property_img; ?>" width="200px" height="50px">
    </div>
    </div>
    <div class="col">
      <label>Other images<span style="color:red">*</span></label>
     <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="website_favicon">
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
<img src="assets/images/<?php echo $websiteFavicon; ?>" width="30px" height="30px">
    </div>
  </div>
  <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Parking space?</label>
        <input type="text" name="liv_room" value="<?php echo $liv_room; ?>" class="form-control">
       </div>
     </div>


  </div>
    <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Details</label>
        <textarea name="property_details" class="form-control"><?php echo $property_details; ?></textarea> 
       </div>
     </div>
  </div>

  <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Address</label>
        <textarea name="property_address" class="form-control"><?php echo $property_address; ?></textarea> 
       </div>
     </div>
  </div>

  <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" value="<?php echo $price; ?>" class="form-control">
       </div>
     </div>
  </div>



  <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Delivery type</label>
        <input type="text" name="delivery_type" value="<?php echo $delivery_type; ?>" class="form-control">
       </div>
     </div>
  </div>

  <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Number of Rooms</label>
        <input type="text" name="bed_room" value="<?php echo $bed_room; ?>" class="form-control">
       </div>
     </div>
  </div>

   <div class="row">
     <div class="col">
       <div class="form-group">
        <label>Utilities</label>
         <textarea name="utility"  class="form-control"><?php echo $utility; ?></textarea> 
       </div>
         <div class="form-group">
            <button class="btn btn-danger">Back</button>
      <button class="btn btn-secondary">Save</button>
     </div>
     </div>

  </div>
</form>

</div>
