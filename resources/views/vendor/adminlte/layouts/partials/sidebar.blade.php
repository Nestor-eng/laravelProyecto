

<aside class="main-sidebar">

   
    <section class="sidebar">

    
         
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <a style="overflow: hidden;text-overflow: ellipsis;max-width: 170px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
                    
                    <br>Estatus
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
      

    
        <ul class="sidebar-menu" data-widget="tree">
              <li class="treeview">
                <a href="#"><i class='fas fa-dumbbell'></i> <span>Clientes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#" class='far fa-circle nav-icon'> Inicio</a></li>
                    <li><a href="{{ asset('Clientes')}}"  class='far fa-circle nav-icon'> Clientes</a></li>
                    <li><a href="#" class='far fa-circle nav-icon'> Datos Personales</a></li>
                    <li><a href="#" class='far fa-circle nav-icon'> Medidas</a></li>
                    <li><a href="#" class='far fa-circle nav-icon'> Plan de alimentación</a></li>
                    <li><a href="#" class='far fa-circle nav-icon'> Galeria</a></li>
                    <li><a href="#" class='far fa-circle nav-icon'> Información</a></li>
                    
                </ul>
            </li>
           
            </ul>
        
    </section>
  
</aside>
