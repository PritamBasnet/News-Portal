 {{-- >>>>>>
            Navigation bar
               >>>>>>> --}}
 <header class="Header">
     <ol class="navbar-list">
         {{-- Lets imort the menu form the databases --}}
         <li class="navbar-items"><a href="/index" class="navbar-link">home</a>
            <span class="Magic_color"></span>
        </li>
         <?php
         $menu = App\Models\menu::take(8)->get();
         ?>
         @isset($menu)
         @foreach ($menu as $data)
         <li class="navbar-items"><a href="{{ route('menu.page',$data->id) }}" class="navbar-link">{{ $data->name }}</a>
                     <span class="Magic_color"></span>
                 </li>
             @endforeach
         @endisset
     </ol>
 </header>
 {{-- >>>>>>
                    Navigation bar End
                       >>>>>>> --}}
