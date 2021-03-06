@extends('adminlte::layouts.app')
@section('content')
    

<div class="card" style="background-color: #420E09">
              <div class="card-header">
                
                <div class="row">
        <div class="col-12">
            <h1 style="color: white"class="card-purple card-title">Clientes</h1>
            <div class="float-right">
                
                <a class="btn btn-app" href="DatosPersonales/create">
                  <i class="fas fa-plus-square"></i> Agregar
                </a>
            </div>
        </div>
    </div>
              </div>
              <div class="card-body">
                <div id="example2_wrapper" class="table dt-responsive data-table dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row">
                      <th class=" dt-responsive sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending">Nombre</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Peso: activate to sort column descending">Peso</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Estatura: activate to sort column descending">Estatura</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sexo: activate to sort column descending">Sexo</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Hora de dormir: activate to sort column descending">Hora de dormir</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Hora de despertar: activate to sort column descending">Hora de despertar</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Hora de entrenamiento: activate to sort column descending">Hora de entrenamiento</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Opciones: activate to sort column descending">Opciones</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Jesus Ricardo Arrazola</td>
                    <td style="">60</td>
                    <td style="">1.60</td>
                    <td style="">Masculino</td>
                     <td style="">10:00 p.m</td>
                      <td style="">7:00 a.m</td>
                       <td style="">7:00 p.m</td>
                    <td>
                     <a style="color: #FD7E14" href="" class="edit far fa-eye btn-sm" title="Ver"></a>   
                     <a style="color: #670d2e" href="" class="edit fas fa-edit btn-sm" title="Editar"> </a>   
                     <a style="color: #D93025" href="" class="edit fas fa-user-minus btn-sm" title="Borrar"></a>
                    </td>
                    </tr>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Nestor Usiel García López</td>
                    <td style="">80</td>
                    <td style="">1.60</td>
                    <td style="">Masculino</td>
                    <td style="">11:00 p.m</td>
                      <td style="">7:00 a.m</td>
                       <td style="">1:00 p.m</td>
                    <td>
                     <a style="color: #FD7E14" href="" class="edit far fa-eye btn-sm" title="Ver"></a>   
                     <a style="color: #670d2e" href="" class="edit fas fa-edit btn-sm" title="Editar"> </a>   
                     <a style="color: #D93025" href="" class="edit fas fa-user-minus btn-sm" title="Borrar"></a>
                    </td>
                  </tr><tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Pedro Paramo</td>
                    <td style="">60</td>
                    <td style="">1.60</td>
                    <td style="">Masculino</td>
                     <td style="">10:00 p.m</td>
                      <td style="">7:00 a.m</td>
                       <td style="">7:00 p.m</td>
                    <td>
                     <a style="color: #FD7E14" href="" class="edit far fa-eye btn-sm" title="Ver"></a>   
                     <a style="color: #670d2e" href="" class="edit fas fa-edit btn-sm" title="Editar"> </a>   
                     <a style="color: #D93025" href="" class="edit fas fa-user-minus btn-sm" title="Borrar"></a>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Juan Iturbe</td>
                    <td style="">80</td>
                    <td style="">1.60</td>
                    <td style="">Masculino</td>
                    <td style="">11:00 p.m</td>
                      <td style="">7:00 a.m</td>
                       <td style="">1:00 p.m</td>
                    <td>
                     <a style="color: #FD7E14" href="" class="edit far fa-eye btn-sm" title="Ver"></a>   
                     <a style="color: #670d2e" href="" class="edit fas fa-edit btn-sm" title="Editar"> </a>   
                     <a style="color: #D93025" href="" class="edit fas fa-user-minus btn-sm" title="Borrar"></a>
                    </td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                      <th rowspan="1" colspan="1">Nombre</th>
                      <th rowspan="1" colspan="1" style="">Peso</th>
                      <th rowspan="1" colspan="1" style="">Estatura</th>
                      <th rowspan="1" colspan="1" style="">Sexo</th>
                      <th rowspan="1" colspan="1" style="">Hora de dormir</th>
                      <th rowspan="1" colspan="1" style="">Hora de despertar</th>
                      <th rowspan="1" colspan="1" style="">Hora de entrenamiento</th>
                      <th rowspan="1" colspan="1" style="">Opciones</th>

                  </tr>
                  </tfoot>
                </table>
                   </div>
                    </div>
                    <div class="row"><div class="col-sm-12 col-md-5">
                            <div style="color: white"class="dataTables_info" id="example2_info" role="status" aria-live="polite">Mostrando 1 de 10 de un total de 1</div>
                                
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example2_previous">
                                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="example2_next">
                                        <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Siguiente</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

@endsection
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
   