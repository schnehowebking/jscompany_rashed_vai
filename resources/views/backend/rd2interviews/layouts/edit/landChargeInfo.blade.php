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
          <?php
              $municipalities = array(
                  '97319 Awala-Yalimapo',
                  '97330 Camopi',
                  '97340 Grand-Santi',
                  '97350 Iracoubo',
                  '97310 Kourou',
                  '97355 Macouria',
                  '97318 Mana',
                  '97360',
                  '97370 Maripasoula',
                  '97351 Matoury',
                  '97356 Montsinéry-Tonnegrande',
                  '97380 Ouanary',
                  '97316 Papaichton',
                  '97353 Régina',
                  '97390',
                  '97354 Remire-Montjoly',
                  '97311 Roura',
                  '97352',
                  '97312 Saint-Élie',
                  '97313 Saint-Georges',
                  '97320 Saint-Laurent-du-Maroni',
                  '97314 Saül',
                  '97315 Sinnamary',
              );
          ?>
          <select class="form-control"  name="land_charge_info_site_municipality">
              <option value="{{$landChargeInfo->site_municipality}}">{{$landChargeInfo->site_municipality}}</option>
              @foreach ($municipalities as $item)
                <option value="{{$item}}" {{ $landChargeInfo->site_municipality == $item ? 'selected' : "" }}>97319 Awala-Yalimapo</option>
              @endforeach
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_geotechnical_study">Geotechnical
              Study</label>
          <select class="form-control" name="land_charge_info_geotechnical_study">
              <option value="1" {{ $landChargeInfo->geotechnical_study == 1 ? 'selected' : '' }}>Yes</option>
              <option value="0" {{ $landChargeInfo->geotechnical_study == 0 ? 'selected' : '' }}>No</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_land_serviced">Land serviced
              "EDF-SGDE-PTT"</label>
          <select class="form-control"  name="land_charge_info_land_serviced">
              <option value="1" {{ $landChargeInfo->land_serviced == 1 ? 'selected' : '' }}>Yes</option>
              <option value="0" {{ $landChargeInfo->land_serviced == 0 ? 'selected' : '' }}>No</option>
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_everything_in_sewer">Everything In
              Sewer</label>
          <select class="form-control"  name="land_charge_info_everything_in_sewer">
              <option value="1" {{ $landChargeInfo->everything_in_sewer == 1 ? 'selected' : '' }}>Yes</option>
              <option value="0" {{ $landChargeInfo->everything_in_sewer == 0 ? 'selected' : '' }}>No</option>
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
              <?php
                  $type_of_work_selected = array(
                      'V.E.FA',
                      'M.I NEUVE',
                      'RENOREHAAMEN.',
                      'Building',
                      'PROF.',
                      'Whats app',
                      'Telephone',
                      'Instagrams',
                      'Facebook',
                      'Cinema',
                      'Paper ad',
                      'Sign',
                      '4x3 panel',
                      'Construction panel',
                      'Word of mouth',
                      'Sponsorship',
                      'Others (to be defined)',
                  );
              ?>


          <select class="form-control"  name="land_charge_info_type_of_work_selected">
              <option value="{{$landChargeInfo->type_of_work_selected}}">{{$landChargeInfo->type_of_work_selected}}</option>
              @foreach ( $type_of_work_selected as $item)
                <option value="{{$item}}" {{$landChargeInfo->type_of_work_selected == $item ? 'selected' : ''}}>{{ $item }}</option>
              @endforeach
          </select>
      </div>

      <div class="col-md-3">
          <label class="form-label" for="land_charge_info_land_on_excessive_slope">Land On Excessive
              Slope</label>
          <select class="form-control" ame="land_charge_info_land_on_excessive_slope">
              <option value="1" {{ $landChargeInfo->land_on_excessive_slope == 1 ? 'selected' : '' }}>Yes</option>
              <option value="0" {{ $landChargeInfo->land_on_excessive_slope == 0 ? 'selected' : '' }}>No</option>
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
          <?php
              $land_acquisition_stage = array(
                  'Compromise signed',
                  'Waiting for compromise',
                  'Acquired land',
              );
          ?>

          <select class="form-control"  name="land_charge_info_land_acquisition_stage">
              <option value="{{$landChargeInfo->land_acquisition_stage}}">{{$landChargeInfo->land_acquisition_stage}}</option>
              @foreach ($land_acquisition_stage as $item)
                <option value="{{$item}}" {{ $landChargeInfo->land_acquisition_stage == $item ? 'selected' : "" }}>{{ $item }}</option>
              @endforeach
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
