<?php require_once(APPPATH . 'views/header.php'); ?>




<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box transparent" id="recent-box">
                    <div class="widget-header">
                        <h4 class="lighter smaller">
                            <i class="icon-home icon-2x green"></i>
                            Stations
                        </h4>
                          <div id="accordion2" class="accordion">
                        <div class="accordion-group">
                                <div class="accordion-heading">
                                       
                                </div>

                        <div class="accordion-body collapse" id="collapseOne">
                                <div class="accordion-inner">
                                           <div class="widget-body" style="padding: 3%;">
                                            <h4> Enter station details to below: </h4>
                               <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/station/save'  method="post">            
             
                                            <div class="widget-main">

  <div class="span6"><div class="well well-large">   
                                   
                                    
                                <input type="text" class="span12" id="latitude" name="latitude" placeholder="Latitude"  />
                                   
                                <input type="text" class="span12" name="longitude" id="longitude" placeholder="Longitude" />
                                 
                                 <input type="text" class="span12" name="altitude" id="altitude" placeholder="Altitude"  />

                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                             <input type="text" class="span12" id="number" name="number" placeholder="Station number" />  
                                                        </span>
                                                    </label>
                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                           <input type="text" id="name" name="name" class="span12" placeholder="Station name"  />   
                                                        </span>
                                                    </label>
                                                 
                                                       <label>
                                                        <span class="block input-icon input-icon-right">
                                                           <input type="text" id="location" name="location" class="span12" placeholder="Location" />
                                                           
                                                        </span>
                                                    </label>
                          <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="type" id="type" class="span12" placeholder="Type" />
                                                            
                                                        </span>                                                    
                                                     

                 
</div></div>
                                                 <div class="span6"><div class="well well-large">
                       
 <input type="text" class="span12" name="country" id="country" placeholder="Country" />                                                             
                           
                                   
                                    <input type="text" class="span12" id="region" name="region" placeholder="Region/state" />
                                   
                               <input type="text" class="span12" id="code" name="code" placeholder="Block code"  />
                                  
                                <input type="text" class="span12" id="city" name="city" placeholder="city"  />
                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" name="opened" id="opened" placeholder="year opened" />
                                                            
                                                        </span>
                                                    </label>
                                                    <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class=" span12" name="closed" id="closed" placeholder="Year closed" />
                                                            
                                                        </span>
                                                    </label>
                                                 
                                                       <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="span12" id="status" name="status" placeholder="Status" />
                                                           
                                                        </span>
                                                    </label>
                          <label>
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" name="type" id="type" class="span12" placeholder="Type" />
                                                            
                                                        </span>
                                                     
                                                     
                                                      <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-small">
                                                            <i class="icon-refresh"></i>
                                                            Clear
                                                        </button>

                                                        <button  class="width-65 pull-right btn btn-small btn-success">
                                                           Submit

                                                        </button>
                                                    </div>
                                                     
                                                     </div></div>
                                                
                                             
                                                
                                            </div>
                                        </form>
                               
                    </div>	</div>
											</div>
										</div>

									</div>
                        
   <div class="span11">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-header widget-header-flat">
                        <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                       <span class="arrowed-in-right"></span> <button  class="width-10 pull-left btn  btn-mini btn-yellow">   ADD STATION   </button>
                                        </a><a href="" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed float-right">
                       <span class="arrowed-in-right "></span> <button  class="width-10 pull-left btn float-right  btn-mini btn-success">          DELETE SELECTED      </button>     </a>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-8">
                            <div class="row-fluid">
                         <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Number</th>
                                                    <th>Name</th>
                                                    <th class="hidden-480">Location</th>

                                                    <th class="hidden-phone">
                                                        <i class="icon-time bigger-110 hidden-phone"></i>
                                                        Code(CCCC)
                                                    </th>
                                                    <th class="hidden-480">Latitude</th>

                                                    <th>Longitude</th>
                                                      <th>Altitude</th>
                                                       <th>Type</th>
                                                        <th>Status</th>
                                                         <th>Submitted on</th>
                                                          <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
 <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>  

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#"><?= $loop->number ?></a>
                                                    </td>
                                                  
                                                    <td class="hidden-480"><?= $loop->name ?></td>
                                                    <td class="hidden-phone"><?= $loop->location ?></td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success"><?= $loop->code ?></span>
                                                    </td>
                                                      <td><?= $loop->latitude ?></td>
                                                       <td><?= $loop->longitude ?></td>
                                                        <td><?= $loop->altitude ?></td>
                                                         <td><?= $loop->type ?></td>
                                                          <td><?= $loop->status ?></td>
                                                           <td><?= $loop->created ?></td>

                                                    <td class="td-actions">
                                        <a href="<?php echo base_url() . "index.php/station/edit/" . $loop->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="icon-edit bigger-120"></i>
                                                            </span>
                                                        </a>
                                                        <a href="<?php echo base_url() . "index.php/station/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="icon-trash bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }}?>
                                               


                                            </tbody>
                                        </table>      
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--/span-->
         </div>                      
                    </div>

           
                </div><!--/widget-box-->
            </div><!--/span-->

        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
        
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name'
       
    };

    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            fillInAddress();
        });
    }

// [START region_fillform]
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
// [END region_geolocation]

</script>
