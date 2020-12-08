<div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Clientes</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" >
                <div class="card-body" style="background-color: #F7F3A6" >
                  <div class="form-group">
                    <label for="Peso">Peso</label>
                    <input class="form-control" id="Peso" placeholder="Peso">
                  </div>
               
               
                <div class="form-group">
                  <label>Estatura</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11">1.65</option>
                    <option data-select2-id="49">1.40</option>
                    <option data-select2-id="50">1.41</option>
                    <option data-select2-id="51">1.42</option>
                    <option data-select2-id="52">1.43</option>
                    <option data-select2-id="53">1.44</option>
                    <option data-select2-id="54">1.45</option>
                    <option data-select2-id="55">1.46</option>
                    <option data-select2-id="56">1.47</option>
                    <option data-select2-id="57">1.48</option>
                    <option data-select2-id="58">1.49</option>
                    <option data-select2-id="59">1.50</option>
                    <option data-select2-id="60">1.51</option>
                    <option data-select2-id="61">1.52</option>
                    <option data-select2-id="62">1.53</option>
                    <option data-select2-id="63">1.54</option>
                    <option data-select2-id="64">1.55</option>
                    <option data-select2-id="65">1.56</option>
                    <option data-select2-id="66">1.57</option>
                    <option data-select2-id="67">1.58</option>
                    <option data-select2-id="68">1.59</option>
                    <option data-select2-id="69">1.60</option>
                    <option data-select2-id="70">1.61</option>
                    <option data-select2-id="71">1.62</option>
                    <option data-select2-id="72">1.63</option>
                  </select>
                </div>
                    
                    <div class="form-group">
                  <label>Sexo</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11">Masculino</option>
                    <option data-select2-id="49">Femenino</option>
                   
                    </select>
                </div>
<!--                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                 /.card-body -->
<div class="form-group">
                    <label for="Hora de dormir">Hora de dormir</label>
                    <input class="form-control" id="Hora de dormir" placeholder="Hora de dormir">
                  </div>
<div class="form-group">
                    <label for="Hora de despertar">Hora de despertar</label>
                    <input class="form-control" id="Hora de despertar" placeholder="Hora de despertar">
                  </div>
<div class="form-group">
                    <label for="Hora de entrenamiento">Hora de entrenamiento</label>
                    <input class="form-control" id="Hora de entrenamiento" placeholder="Hora de entrenamiento">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>
            </div>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>