<script>
  $(".select_brand").on("change", function() {
    var brand = $(".select_brand option[value='"+$(this).val()+"']").attr("data-name");
    var val = $(this).val();
    val = isJsonString(val) ? JSON.parse(val) : false;
    var html = "";
    if(val != false) {
      for(var i = 0; i< val.length; i++) {
        html += '<option value="'+val[i]['tonage']+'" price="'+val[i]['price']+'">'+val[i]['tonage']+'</option>';
      }
    }
    $(".tonage").html(html);
  })
  function isJsonString(str) {
      try {
          JSON.parse(str);
      } catch (e) {
          return false;
      }
      return true;
  }
  $("body").on("keyup", ".calculate", function() {
    calculate();
  })
  function calculate() {
    var monthly_usage = [];
    var yearly_total_usage = 0;

    for(var i=0; i < $(".monthly_usage").length; i++) {
      var val = $(".monthly_usage").eq(i).val();
      val = val.length > 0 ? parseFloat(val) : 0;
      monthly_usage.push(val);
      yearly_total_usage += val;
    }

    $(".yearly_total_usage").text(yearly_total_usage);

    total_yearly_usage()
    avg_monthly_usage();
    total_project_cost();
  }

  $("document").ready(function() {
    $(".panel_upgrade").on("change", function() {
      total_project_cost();
    })
    $(".hvac_system").on("change", function() {
      total_project_cost();
    })
    $(".fpl_fee").on("change", function() {
      total_project_cost();
    })
    $(".line_conditioner").on("change", function() {
      total_project_cost();
    })
    $(".tier_insurance").on("change", function() {
      total_project_cost();
    })
    $("body").on("change", ".tonage", function() {
      total_project_cost();
    })
    // $("body").on("change", ".financing", function() {
    //   total_project_cost();
    // })
    $("body").on("change", ".aeroseal", function() {
      recommended_num_of_panels();
      total_project_cost();
    })
  })

  function total_yearly_usage() {
    var total = parseFloat($('.yearly_total_usage').text());
    var total = isNaN(parseFloat(total)) ? 0 : parseFloat(total);
    $(".total_yearly_usage").val(total.toFixed(2));
  }

  function change_size_of_panel() {
    calculated_num_of_panels();
    calculate_actual_system_size();
    total_project_cost();
  }

  function select_solar_panel() {
    service_finance_payment();
    total_project_cost();
  }

  function calculate_actual_system_size() {
    var actual_num_of_panel = $(".actual_no_panels").val();
    var size_of_panel = $('.select_size_of_panel').val();
    var calc = actual_num_of_panel.length > 0 ? parseFloat(actual_num_of_panel) * parseFloat(size_of_panel) : "";
    $(".actual_system_size").val(calc);
    guaranted_kw_per_month();
    total_project_cost();
  }

  function service_finance_payment() {
    var panel = $(".select_solar_panel").val();
    var text = $(".select_solar_panel option[value='"+panel+"']").text().toUpperCase();
    var net = $(".select_solar_panel option[value='"+panel+"']").attr("netprice");
    var price = $(".select_solar_panel option[value='"+panel+"']").attr("price");
    var dealer_fee = parseFloat($(".select_solar_panel option[value='"+panel+"']").attr("dealer_fee"));

    var total = parseFloat($(".total_project_cost").val());
    var match = text.split("-")[1];
    if(text.includes("SVC")) {
      var svc_299_fee = parseFloat("{{ app_setting('svc299_years_monthly') }}");
      var svc_299_dealer_fee = svc_399_dealer_fee = dealer_fee;

      var svc_399_fee = parseFloat("{{ app_setting('svc399_years_monthly') }}");
      var sfp = match <= 299 ? total * svc_299_fee : total * svc_399_fee;
      $(".service_finance_payment").val(sfp.toFixed(2));

    } else {
      $(".service_finance_payment").val("");
    }

    if(text.includes("SUNLIGHT")) {
      var sunlight_399 = parseFloat("{{ app_setting('sunlight_399_25Y') }}");
      var sunlight_499 = parseFloat("{{ app_setting('sunlight_499_25Y') }}");

      var sfp = match == 399 ? total * sunlight_399 : total * sunlight_499;
      $(".sunlight_payment").val(sfp.toFixed(2));

    } else {
      $(".sunlight_payment").val("");
    }

    if(text.includes("PACE")) {
      var pace_399_fee = parseFloat("{{ app_setting('pace399_1') }}");
      var pace_399_dealer_fee = parseFloat("{{ app_setting('pace399_1_dealer_fee') }}");
      var pace_599_fee = parseFloat("{{ app_setting('pace599_1') }}");
      var pace_599_dealer_fee = parseFloat("{{ app_setting('pace599_1_dealer_fee') }}");

      pace = match == 399 ? (total + total * pace_399_fee) * pace_399_dealer_fee : (total + total * pace_599_fee) * pace_599_dealer_fee;
      var pace_after_tax = match == 599 ? pace * parseFloat( "{{ app_setting('pace599_after_tax_credit') }}") : pace * parseFloat( "{{ app_setting('pace399_after_tax_credit') }}");

      $(".pace_payment").val(pace.toFixed(2));
      $(".pace_after_tax").val(pace_after_tax.toFixed(2));
    } else {
      $(".pace_payment").val("");
      $(".pace_after_tax").val("");
    }
    if(text.includes("MOSAIC")) {
      var mosaic_fee = parseFloat("{{ app_setting('mosiac399') }}");
      var mosaic_dealer_fee = dealer_fee;
      var mosaic = total * mosaic_fee;
      // var mosaic = 0;
      $(".mosaic").val(mosaic.toFixed(2));
    } else {
      $(".mosaic").val("");
    }
    total_yearly_usage();
  }

  // Get average monthly payment
  function avg_monthly_payment() {
    var monthly_payment = [];
    var total_monthly_payment = 0;
    var count = 0;

    for(var i=0; i < $(".monthly_payment").length; i++) {
      var val = $(".monthly_payment").eq(i).val();
      count += val.length > 0 ? 1 : 0;
      val = val.length > 0 ? parseFloat(val) : 0;
      monthly_payment.push(val);
      total_monthly_payment += val;
    }

    var avg_monthly_payment = (total_monthly_payment / count).toFixed(2);
    $(".avg_monthly_payment").text(avg_monthly_payment);
  }

  function avg_monthly_usage() {
    var total = $(".total_yearly_usage").val();
    var average = parseFloat(total) / 12 * 0.95;
    $(".monthly_avg").val(average.toFixed(2));
    daily_usage();
  }

  function daily_usage() {
    var total = $(".total_yearly_usage").val();
    $(".daily").val((parseFloat(total) / 365).toFixed(2));
    calculate_kwh_system_size();
  }

  function calculate_kwh_system_size() {
    var monthly = parseFloat($(".daily").val());
    var calc = (monthly/4.2).toFixed(3);
    $(".kwh_system_size").val(calc)
    calculated_num_of_panels();
  }

  function calculated_num_of_panels() {
    var system_size = parseFloat($(".kwh_system_size").val());
    var size_of_panel = parseFloat($(".select_size_of_panel").val());
    var calc = Math.round((system_size / size_of_panel * 1000)*10) / 10;
    $(".calculated_size_of_panel").val(Math.round(calc));
    recommended_num_of_panels();
    recommended_system_size();
     calculate_actual_system_size();
  }

  function recommended_system_size() {
    var rec_sz_of_panel = parseFloat($(".recommended_size_of_panel").val());
    var size_of_panel = parseFloat($(".select_size_of_panel").val());
    $(".recommended_system_size").val((rec_sz_of_panel*size_of_panel).toFixed(2));
  }

  function recommended_num_of_panels() {
    var cal_size_panel = parseFloat($(".calculated_size_of_panel").val());
    var cal = (cal_size_panel - Math.trunc(cal_size_panel)) > 0.299 ? Math.floor(cal_size_panel) + 1 : Math.floor(cal_size_panel);
    var aeroseal = parseFloat($(".aeroseal").val());
    if(aeroseal > 0) {
      cal = cal * (aeroseal/100);
      var x = "{{ app_setting('actual_system_multiplied_by') }}";
      x = isNaN(parseFloat(x)) ? 1 : parseFloat(x);
      var actual_system_size = parseFloat($(".actual_system_size").val());
      actual_system_size = isNaN(actual_system_size) ? 1 : actual_system_size;
      if(actual_system_size.length > 0) {
        $(".actual_system_size").val((actual_system_size * x).toFixed(2));
      }
    }
    $(".recommended_size_of_panel").val(cal.toFixed(2));
    recommended_system_size();
  }

  function guaranted_kw_per_month() {
    var actual_stm_size = $('.actual_system_size').val();
    actual_stm_size = isNaN(parseFloat(actual_stm_size)) ? 0 : parseFloat(actual_stm_size);
    calc = (actual_stm_size/1000*4.5*365*0.85/12).toFixed(2);
    $(".guaranted_kw_per_month").val(parseFloat(calc));
  }

  function total_project_cost() {
    var panel = $(".select_solar_panel").val();
    var solar_panel_price = $(".select_solar_panel option[value='"+panel+"']").attr("price");
    solar_panel_price = solar_panel_price > 0 ? solar_panel_price : 0;
    var dealer_fee = $(".select_solar_panel option[value='"+panel+"']").attr("dealer_fee");

    var actual_system_size = parseFloat($(".actual_system_size").val());
    actual_system_size = isNaN(actual_system_size) ? 0 : actual_system_size;

    var tier2_insurance = parseFloat($(".tier_insurance").val());
    tier2_insurance = tier2_insurance > 0 ? tier2_insurance : 0;
    // Tonage Calculation
    var tonage_price = $(".tonage").find("option[value='"+$(".tonage").val()+"']").attr('price');
    tonage_price = isNaN(tonage_price) || tonage_price == undefined ? 0 : parseFloat(tonage_price);
    var tonage_percent_markup = parseFloat("{{ app_setting('tonage_markup') }}");
    tonage_percent_markup = isNaN(tonage_percent_markup) ? 1 : tonage_percent_markup;
    var tonage_markup = tonage_price > 0 ? parseInt(tonage_price / (1-(tonage_percent_markup / 100))) : 0;
    // Finance calculation
    // var financing = $(".financing").val();
    // financing = isNaN(financing) ? 0 : (parseFloat(financing) > 0 ? parseFloat(financing) : 0);
    // calc = tonage_markup * (1 - financing / 100);

    var panel_upgrade = parseFloat($(".panel_upgrade").val());
    panel_upgrade = panel_upgrade > 0 ? panel_upgrade : 0;

    var hvac_system = $(".hvac_system").val();
    // hvac_system = hvac_system > 0 ? hvac_system : 0;
    hvac_system = hvac_system == 'Y' ? tonage_price : 0;
    var line_conditioner = parseFloat($(".line_conditioner").val());
    line_conditioner = line_conditioner > 0 ? line_conditioner : 0;

    var connection_fee = parseFloat($(".fpl_fee").val());
    connection_fee = connection_fee > 0 ? connection_fee : 0;

    var aeroseal = $(".aeroseal").val();
    if($("select.aeroseal option[value='"+aeroseal+"']").text() == 'Y') {
      var multiplyby = isNaN(parseFloat("{{ app_setting('actual_system_multiplied_by') }}")) ? 0 : parseFloat("{{ app_setting('actual_system_multiplied_by') }}");
      var aeroseal_val = actual_system_size * multiplyby;
    } else {
      var aeroseal_val = 0;
    }
    var total = solar_panel_price * actual_system_size + (tier2_insurance + panel_upgrade + connection_fee + line_conditioner + hvac_system + aeroseal_val)/dealer_fee;
    $(".total_project_cost").val(Math.round(total.toFixed(2)));
    service_finance_payment();
  }


</script>
