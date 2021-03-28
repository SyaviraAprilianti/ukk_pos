<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <!-- <p class="centered"><a href="profile.html"><img src="{{asset('img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5> -->
<li>
  <center>
        <h5> Welcome,{{ Auth::user()->name }}</h5>
    </center>
           
          </li>
          @if(auth()->user()->role == 'admin')
          <li class="mt">
            <a class="active" href="/admin">
              <i class="fa fa-dashboard"></i>
              <span>DASHBOARD</span>
              
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-angle-right"></i>
              <span>REPORTS</span>
              </a>
            <ul class="sub">
              {{-- <li><a href="/sales">Sales</a></li> --}}
              <li><a href="/transaksi">Transaction</a></li>
              {{-- <li><a href="/invoices">Invoices</a></li>
              <li><a href="/shift">Shift</a></li>
              <li><a href="/loginnya">login</a></li>
              <li><a href="/registernya">regs</a></li> --}}
            </ul>
          </li>                   

          <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-angle-right"></i>
              <span>LIBRARY</span>
              </a>
            <ul class="sub">
              <li><a href="/itemlibrary">Item Library</a></li>
              <li><a href="/modifiers">Modifiers</a></li>
              <li><a href="/categories">Categories</a></li>
              {{-- <li><a href="/promo">Promo </a></li> --}}
              {{-- <li><a href="/discount">Discount</a></li> --}}
              {{-- <li><a href="/taxes">Taxes</a></li> --}}
              {{-- <li><a href="/gratuity">Gratuity</a></li>
              <li><a href="/salestype">Sales Type</a></li> --}}
              {{-- <li><a href="/brands">Brands</a></li> --}}

            </ul>
          </li>
          {{-- <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-angle-right"></i>
              <span>INGREDIENT</span>
              </a>
            <ul class="sub">
              <li><a href="/ingredient_library">Ingredient Library</a></li>
              <li><a href="/ingredient_categories">Ingredient Categories</a></li>
              <li><a href="/recipes">Recipes</a></li>
            </ul>
          </li> --}}

          {{-- <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-angle-right"></i>
              <span>INVENTORY</span>
              </a>
            <ul class="sub">
              <li><a href="/summary">Summary</a></li>
              <li><a href="/suppliers">Suppliers</a></li>
              <li><a href="/purchase_order">Puchase Order (PO)</a></li>
              <li><a href="/transfer">Transfer</a></li>
              <li><a href="/adjustment">Adjustment</a></li>

            </ul>
          </li> --}}

          {{-- <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-angle-right"></i>
              <span>CUSTOMERS</span>
              </a>
            <ul class="sub">
              <li><a href="/customerslist">Customers List</a></li>
              <li><a href="/feedback">Feedback</a></li>
              <li><a href="/loyalty_program">Loyalty Program</a></li>
            </ul>
          </li> --}}
         {{-- <li>
            <a  href="/suppliers">
              <i class="fa fa-dashboard"></i>
              <span>Suppliers</span>
              </a>
          </li> --}}
         <li>
            <a  href="/outlet">
              <i class="fa fa-dashboard"></i>
              <span>Outlet</span>
              </a>
          </li>

           {{-- <li>
            <a  href="/public_profile">
              <i class="fa fa-dashboard"></i>
              <span>Public Profile</span>
              </a>
          </li> --}}
          {{-- <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-angle-right"></i>
            <span>ACCOUNT SETTINGS</span>
              </a>
            <ul class="sub">
              <li><a href="/account">Account</a></li>
              <li><a href="/outlet"> Outlets</a></li>
              <li><a href="/public_profile"> Public Profile</a></li>
              
            </ul>
          </li> --}}
          @endif

           @if(auth()->user()->role == 'kasir')
          <li class="mt">
            <a class="active" href="/kasir">
              <i class="fa fa-dashboard"></i>
              <span>DASHBOARD</span>
              
              </a>
          </li>
          
          <li>
            <a  href="/order">
              <i class="fa fa-dashboard"></i>
              <span>Order</span>
              </a>
          </li>
          @endif

          <!-- <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul> -->
        <!-- sidebar menu end-->
      </div>
    </aside>