<div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Clientes</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" >
                <div class="card-body" style="background-color: #F7F3A6" >
                  <div class="form-group">
                    <label for="Pecho">Pecho</label>
                    <input class="form-control" id="Pecho" placeholder="Pecho">
                  </div>
               
                 <div class="form-group">
                    <label for="Brazo">Brazo</label>
                    <input class="form-control" id="Brazo" placeholder="Brazo">
                  </div>
                      <div class="form-group">
                    <label for="Cintura">Cintura</label>
                    <input class="form-control" id="Cintura" placeholder="Cintura">
                  </div>
                    
                      <div class="form-group">
                    <label for="Cadera">Cadera</label>
                    <input class="form-control" id="Cadera" placeholder="Cadera">
                  </div>
                     <div class="form-group">
                    <label for="Piernas">Piernas</label>
                    <input class="form-control" id="Piernas" placeholder="Piernas">
                  </div>
                     <div class="form-group">
                    <label for="Pantorrilla">Pantorrilla</label>
                    <input class="form-control" id="Pantorrilla" placeholder="Pantorrilla">
                  </div>
                   <div class="form-group">
                    <label for="Porcentaje de grasa">Porcentaje de grasa</label>
                    <input class="form-control" id="Porcentaje de grasa" placeholder="Porcentaje de grasa">
                  </div>
<!--                <div class="form-group">
                  <label>Edad</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11">16</option>
                    <option data-select2-id="49">17</option>
                    <option data-select2-id="50">18</option>
                    <option data-select2-id="51">19</option>
                    <option data-select2-id="52">20</option>
                    <option data-select2-id="53">21</option>
                    <option data-select2-id="54">22</option>
                    <option data-select2-id="55">23</option>
                    <option data-select2-id="56">24</option>
                    <option data-select2-id="57">25</option>
                    <option data-select2-id="58">26</option>
                    <option data-select2-id="59">27</option>
                    <option data-select2-id="60">28</option>
                    <option data-select2-id="61">29</option>
                    <option data-select2-id="62">30</option>
                    <option data-select2-id="63">31</option>
                    <option data-select2-id="64">32</option>
                    <option data-select2-id="65">32</option>
                    <option data-select2-id="66">34</option>
                    <option data-select2-id="67">35</option>
                    <option data-select2-id="68">36</option>
                    <option data-select2-id="69">37</option>
                    <option data-select2-id="70">38</option>
                    <option data-select2-id="71">39</option>
                    <option data-select2-id="72">40</option>
                  </select>
                </div>-->
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
<!--<div class="form-group">
                    <label for="Teléfono">Teléfono</label>
                    <input class="form-control" id="Teléfono" placeholder="Teléfono">
                  </div>
<div class="form-group">
                    <label for="Dirección">Dirección</label>
                    <input class="form-control" id="Dirección" placeholder="Dirección">
                  </div>-->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>
            </div>
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