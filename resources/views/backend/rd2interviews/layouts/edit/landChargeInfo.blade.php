<div class="content mt-2 col-md-6">
  <div class="content-header mb-3">
      <h4 class="mb-0">STEP-2: LAND CHARGE INFORMATION</h4>
      <small>Enter LAND CHARGE INFORMATION Details.</small>
  </div>
  <div class="row mt-2">

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_site_address">Site Address</label>
          <input type="text" class="form-control" value="{{$landChargeInfo->site_address}}" name="land_charge_info_site_address">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_site_municipality">Municipality of the
              site</label>
          <select class="form-control"  name="land_charge_info_site_municipality">
              <option value="{{$landChargeInfo->site_municipality}}">{{$landChargeInfo->site_municipality}}</option>
              <option value="97319 Awala-Yalimapo">97319 Awala-Yalimapo</option>
              <option value="97330 Camopi">97330 Camopi</option>
              <option value="97340 Grand-Santi">97340 Grand-Santi</option>
              <option value="97350 Iracoubo">97350 Iracoubo</option>
              <option value="97310 Kourou">97310 Kourou</option>
              <option value="97355 Macouria">97355 Macouria</option>
              <option value="97318 Mana">97318 Mana</option>
              <option value="97360">97360</option>
              <option value="97370 Maripasoula">97370 Maripasoula</option>
              <option value="97351 Matoury">97351 Matoury</option>
              <option value="97356 Montsinéry-Tonnegrande">97356 Montsinéry-Tonnegrande</option>
              <option value="97380 Ouanary">97380 Ouanary</option>
              <option value="97316 Papaichton">97316 Papaichton</option>
              <option value="97353 Régina">97353 Régina</option>
              <option value="97390">97390</option>
              <option value="97354 Remire-Montjoly">97354 Remire-Montjoly</option>
              <option value="97311 Roura">97311 Roura</option>
              <option value="97352">97352</option>
              <option value="97312 Saint-Élie">97312 Saint-Élie</option>
              <option value="97313 Saint-Georges">97313 Saint-Georges</option>
              <option value="97320 Saint-Laurent-du-Maroni">97320 Saint-Laurent-du-Maroni</option>
              <option value="97314 Saül">97314 Saül</option>
              <option value="97315 Sinnamary">97315 Sinnamary</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_geotechnical_study">Geotechnical
              Study</label>
          <select class="form-control" name="land_charge_info_geotechnical_study">
              <option value="{{$landChargeInfo->geotechnical_study}}">{{$landChargeInfo->geotechnical_study}}</option>
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_land_serviced">Land serviced
              "EDF-SGDE-PTT"</label>
          <select class="form-control"  name="land_charge_info_land_serviced">
              <option value="{{$landChargeInfo->land_serviced}}">{{$landChargeInfo->land_serviced}}</option>
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_everything_in_sewer">Everything In
              Sewer</label>
          <select class="form-control"  name="land_charge_info_everything_in_sewer">
              <option value="{{$landChargeInfo->everything_in_sewer}}">{{$landChargeInfo->everything_in_sewer}}</option>
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_parcel_or_lot_number">Parcel Or Lot
              Number</label>
          <input type="number" class="form-control" value="{{$landChargeInfo->parcel_or_lot_number}}" name="land_charge_info_parcel_or_lot_number">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_type_of_work_selected">Type Of Work
              Selected</label>
          <select class="form-control"  name="land_charge_info_type_of_work_selected">
              <option value="{{$landChargeInfo->type_of_work_selected}}">{{$landChargeInfo->type_of_work_selected}}</option>

              <option value="V.E.FA">V.E.FA</option>
              <option value="M.I NEUVE">M.I NEUVE</option>
              <option value="RENOREHAAMEN.">RENOREHAAMEN.</option>
              <option value="Building">Building</option>
              <option value="PROF.">PROF.</option>
              <option value="Whats app">Whats app</option>
              <option value="Telephone">Telephone</option>
              <option value="Instagrams">Instagrams</option>
              <option value="Facebook">Facebook</option>
              <option value="Cinema">Cinema</option>
              <option value="Paper ad">Paper ad</option>
              <option value="Sign">Sign</option>
              <option value="4x3 panel">4x3 panel</option>
              <option value="Construction panel">Construction panel</option>
              <option value="Word of mouth">Word of mouth</option>
              <option value="Sponsorship">Sponsorship</option>
              <option value="Others">Others (to be defined)</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_land_on_excessive_slope">Land On Excessive
              Slope</label>
          <select class="form-control" ame="land_charge_info_land_on_excessive_slope">
              <option value="{{$landChargeInfo->land_on_excessive_slope}}">{{$landChargeInfo->land_on_excessive_slope}}</option>
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_cadastral_section">Cadastral
              Section</label>
          <input type="text" class="form-control" value="{{$landChargeInfo->cadastral_section}}" name="land_charge_info_cadastral_section">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_urban_planning_area">Urban Planning
              Area</label>
          <input type="text" class="form-control" value="{{$landChargeInfo->urban_planning_area}}" name="land_charge_info_urban_planning_area">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_land_acquisition_stage">Land Acquisition
              Stage</label>
          <select class="form-control"  name="land_charge_info_land_acquisition_stage">
              <option value="{{$landChargeInfo->land_acquisition_stage}}">{{$landChargeInfo->land_acquisition_stage}}</option>
              <option value="Compromise signed">Compromise signed</option>
              <option value="Waiting for compromise">Waiting for compromise</option>
              <option value="Acquired land">Acquired land</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_surface_in_square_meters">Surface In
              Square Meters</label>
          <input type="number" class="form-control"
              value="{{$landChargeInfo->surface_in_square_meters}}" name="land_charge_info_surface_in_square_meters">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_price_per_square_meter">Price Per Square
              Meter</label>
          <input type="number" class="form-control"
              value="{{$landChargeInfo->price_per_square_meter}}" name="land_charge_info_price_per_square_meter">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_venal_value_of_land">Venal value Of
              Land</label>
          <input type="number" class="form-control" value="{{$landChargeInfo->venal_value_of_land}}" name="land_charge_info_venal_value_of_land">
      </div>

  </div>
</div>
