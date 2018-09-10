            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>ფუნქციები</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> მთავარი </a></li>
                  <li><a href="{{ url('admin/gallery') }}"><i class="fa fa-bar-chart-o"></i>  ალბომები </a></li>
                  <li><a><i class="fa fa-list"></i>  ბლოგი </a>
                      <ul class="nav child_menu">
                      <li><a href="{{ url('admin/blog') }}">ბლოგების სია</a></li>
                      <li><a href="{{ url('admin/blog/create') }}">ახალი ბლოგის დაწერა</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-image"></i>  ფოტოები </a>
                      <ul class="nav child_menu">
                      <li><a href="{{ url('admin/images') }}">ფოტოები</a></li>
                      <li><a href="{{ url('admin/images/create') }}">ახალი ფოტოს ატვირთვა</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-car"></i> მანქანის კატეგორიები </a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/carcategorie') }}">კატეგორიების სია</a></li>
                      <li><a href="{{url('admin/carcategorie/create')}}">კატეგორიის ფოტოს ატვიტთვა</a></li>
                    </ul>

                  </li>
                  <li><a href="{{ url('admin/categorie') }}"><i class="fa fa-edit"></i>  ბლოგის კატეგორიები </a></li>
                  
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

           