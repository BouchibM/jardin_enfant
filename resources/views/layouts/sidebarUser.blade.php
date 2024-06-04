<!doctype html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SonaKids</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="../../assets/css/core/libs.min.css" />


  <!-- Hope Ui Design System Css -->
  <link rel="stylesheet" href="../../assets/css/hope-ui.min.css?v=2.0.0" />

  <!-- Custom Css -->
  <link rel="stylesheet" href="../../assets/css/custom.min.css?v=2.0.0" />

  <!-- Dark Css -->
  <link rel="stylesheet" href="../../assets/css/dark.min.css" />

  <!-- Customizer Css -->
  <link rel="stylesheet" href="../../assets/css/customizer.min.css" />

  <!-- RTL Css -->
  <link rel="stylesheet" href="../../assets/css/rtl.min.css" />

  <style>
    .dotted-border-button {
      border: 2px dotted #000;
      /* 2px est l'épaisseur de la bordure et #000 est la couleur (noir) */
      padding: 10px 20px;
      /* Ajoutez du padding pour l'espace intérieur du bouton */
      font-size: 16px;
      /* Taille du texte */
      background-color: #fff;
      /* Couleur de fond du bouton */
      color: #000;
      /* Couleur du texte */
      cursor: pointer;
      /* Change le curseur au survol du bouton */
      outline: none;
      /* Supprime la bordure de focus par défaut */
    }

    .dotted-border-button:hover {
      background-color: #eee;
      /* Change la couleur de fond au survol */
    }
  </style>
</head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
    <div class="loader simple-loader">
      <div class="loader-body"></div>
    </div>
  </div>
  <!-- loader END -->

  <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
      <a href="../../dashboard/index.html" class="navbar-brand">
        <!--Logo start-->
        <!--logo End-->

        <!--Logo start-->
        <div class="logo-main">
          <div class="logo-normal">
            <img src="{{asset('assets\images\sonatrach-logo-vector.png')}}" alt="logo">
          </div>
          <div class="logo-mini">
            <img src="{{asset('assets\images\sonatrach-logo-vector.png')}}" alt="logo">
          </div>
        </div>
        <!--logo End-->




        <h4 class="logo-title">SonaKids</h4>
      </a>
      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
        <i class="icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round"></path>
            <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </i>
      </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
      <div class="sidebar-list">
        <!-- Sidebar Menu Start -->
        <ul class="navbar-nav iq-main-menu" id="sidebar-menu">



          <li class="nav-item">

            <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
              <li class="nav-item">
                <a class="nav-link " href="../../dashboard/special-pages/billing.html">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> B </i>
                  <span class="item-name">Billing</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../../dashboard/special-pages/calender.html">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">Calender</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../../dashboard/special-pages/kanban.html">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> K </i>
                  <span class="item-name">kanban</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../../dashboard/special-pages/pricing.html">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> P </i>
                  <span class="item-name">Pricing</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../../dashboard/special-pages/rtl-support.html">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> R </i>
                  <span class="item-name">RTL Support</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../../dashboard/special-pages/timeline.html">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> T </i>
                  <span class="item-name">Timeline</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#inscr" role="button" aria-expanded="false"
              aria-controls="sidebar-special">
              <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4"
                    d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z"
                    fill="currentColor"></path>
                </svg>
              </i>
              <span class="item-name">Inscription</span>
              <i class="right-icon">
                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </i>
            </a>
            <ul class="sub-nav collapse" id="inscr" data-bs-parent="#sidebar-menu">
              <li class="nav-item">
                <a class="nav-link " href="{{route('inscription.view')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">faire une demande</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('inscription.index')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">Consulter Historique</span>
                </a>
              </li>
            </ul>
            <a class="nav-link" data-bs-toggle="collapse" href="#Rinsc" role="button" aria-expanded="false"
              aria-controls="sidebar-special">
              <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4"
                    d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z"
                    fill="currentColor"></path>
                </svg>
              </i>
              <span class="item-name">Reinscription</span>
              <i class="right-icon">
                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </i>
            </a>
            <ul class="sub-nav collapse" id="Rinsc" data-bs-parent="#sidebar-menu">
              <li class="nav-item">
                <a class="nav-link " href="{{route('reinscription.view')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">faire une demande</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('reinscription.index')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">Consulter Historique</span>
                </a>
              </li>
            </ul>
            <a class="nav-link" data-bs-toggle="collapse" href="#Dinscr" role="button" aria-expanded="false"
              aria-controls="sidebar-special">
              <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4"
                    d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z"
                    fill="currentColor"></path>
                </svg>
              </i>
              <span class="item-name">Désincription</span>
              <i class="right-icon">
                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </i>
            </a>
            <ul class="sub-nav collapse" id="Dinscr" data-bs-parent="#sidebar-menu">
              <li class="nav-item">
                <a class="nav-link " href="{{route('desinscription.view')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">faire une demande</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('desinscription.index')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">Consulter Historique</span>
                </a>
              </li>
            </ul>
            <a class="nav-link" data-bs-toggle="collapse" href="#Transf" role="button" aria-expanded="false"
              aria-controls="sidebar-special">
              <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4"
                    d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z"
                    fill="currentColor"></path>
                </svg>
              </i>
              <span class="item-name">Transfert</span>
              <i class="right-icon">
                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </i>
            </a>
            <ul class="sub-nav collapse" id="Transf" data-bs-parent="#sidebar-menu">
              <li class="nav-item">
                <a class="nav-link " href="{{route('transfert.view')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">faire une demande</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('transfert.index')}}">
                  <i class="icon">
                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24"
                      fill="currentColor">
                      <g>
                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                      </g>
                    </svg>
                  </i>
                  <i class="sidenav-mini-icon"> C </i>
                  <span class="item-name">Consulter Historique</span>
                </a>
              </li>
            </ul>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/enfants') }}" role="button" aria-expanded="false"
              aria-controls="sidebar-special">
              <i class="icon">
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4"
                    d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z"
                    fill="currentColor"></path>
                </svg>
              </i>
              <span class="item-name">Mes enfants</span>
            </a>
          </li>
      </div>
      <div class="sidebar-footer"></div>
  </aside>
  <main class="main-content">
    <div class="position-relative iq-banner">
      <!--Nav Start-->
      <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
        <div class="container-fluid navbar-inner">
          <a href="../../dashboard/index.html" class="navbar-brand">
            <!--Logo start-->
            <!--logo End-->

            <!--Logo start-->
            <div class="logo-main">
              <div class="logo-normal">
                <img src="{{asset('assets\images\sonatrach-logo-vector.png')}}" alt="logo">
              </div>
              <div class="logo-mini">
                <img src="{{asset('assets\images\sonatrach-logo-vector.png')}}" alt="logo">

              </div>
            </div>
            <!--logo End-->




            <h4 class="logo-title">SonaKids</h4>
          </a>
          <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
              <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
              </svg>
            </i>
          </div>

          <button class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <span class="mt-2 navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
              <li class="nav-item dropdown">
                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../../assets/images/avatars/01.png" alt="User-Profile"
                    class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                  <div class="caption ms-3 d-none d-md-block ">
                    <h6 class="mb-0 caption-title">{{ $parent->nom }} {{ $parent->prenom }}</h6>
                    <p class="mb-0 caption-sub-title">Parent</p>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../../dashboard/app/user-profile.html">Profile</a></li>

                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="../../dashboard/auth/sign-in.html">Se
                      deconnecter</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav> <!-- Nav Header Component Start -->
      <!--<div class="iq-navbar-header" style="height: 215px;">
              <div class="iq-header-img">
                  <img src="../../assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../../assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../../assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../../assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../../assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="../../assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          <!-- Nav Header Component End -->
      <!--Nav End-->
      <br>
      <br>
      <br>
    </div>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
      <div>
        @yield('main')
      </div>
    </div>
    <!-- Footer Section Start -->
    <footer class="footer">
      <div class="footer-body">
        <ul class="left-panel list-inline mb-0 p-0">
        </ul>
        <div class="right-panel">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script> DC-DSI/DISI
          </span> by <a href=""> Design</a>.
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->
  </main>

  <!-- Wrapper End-->
  <!-- offcanvas start -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <div class="d-flex align-items-center">
        <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
      </div>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body data-scrollbar">
      <div class="row">
        <div class="col-lg-12">
          <h5 class="mb-3">Scheme</h5>
          <div class="d-grid gap-3 grid-cols-3 mb-4">
            <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="auto">
              <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
              </svg>
              <span class="ms-2 "> Auto </span>
            </div>

            <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="dark">
              <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                  d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
              </svg>
              <span class="ms-2 "> Dark </span>
            </div>
            <div class="btn btn-border active" data-setting="color-mode" data-name="color" data-value="light">
              <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                  d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
              </svg>
              <span class="ms-2 "> Light</span>
            </div>
          </div>
          <hr class="hr-horizontal">
          <div class="d-flex align-items-center justify-content-between">
            <h5 class="mt-4 mb-3">Color Customizer</h5>
            <button class="btn btn-transparent p-0 border-0" data-value="theme-color-default" data-info="#079aa2"
              data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
              data-bs-original-title="Default">
              <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                  fill="#31BAF1" />
                <path
                  d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                  fill="#0169CA" />
              </svg>
            </button>
          </div>
          <div class="grid-cols-5 mb-4 d-grid gap-x-2">
            <div class="btn btn-border bg-transparent" data-value="theme-color-blue" data-info="#573BFF"
              data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
              data-bs-original-title="Theme-1">
              <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                <circle cx="12" cy="12" r="10" fill="#00C3F9" />
                <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" />
              </svg>
            </div>
            <div class="btn btn-border bg-transparent" data-value="theme-color-gray" data-info="#FD8D00"
              data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
              data-bs-original-title="Theme-2">
              <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                <circle cx="12" cy="12" r="10" fill="#91969E" />
                <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" />
              </svg>
            </div>
            <div class="btn btn-border bg-transparent" data-value="theme-color-red" data-info="#366AF0"
              data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
              data-bs-original-title="Theme-3">
              <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                <circle cx="12" cy="12" r="10" fill="#DB5363" />
                <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" />
              </svg>
            </div>
            <div class="btn btn-border bg-transparent" data-value="theme-color-yellow" data-info="#6410F1"
              data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
              data-bs-original-title="Theme-4">
              <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                <circle cx="12" cy="12" r="10" fill="#EA6A12" />
                <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" />
              </svg>
            </div>
            <div class="btn btn-border bg-transparent" data-value="theme-color-pink" data-info="#25C799"
              data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title=""
              data-bs-original-title="Theme-5">
              <svg class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32">
                <circle cx="12" cy="12" r="10" fill="#E586B3" />
                <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" />
              </svg>
            </div>

          </div>
          <hr class="hr-horizontal">
          <h5 class="mb-3 mt-4">Scheme Direction</h5>
          <div class="d-grid gap-3 grid-cols-2 mb-4">
            <div class="text-center">
              <img src="../../assets/images/settings/dark/01.png" alt="ltr"
                class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode"
                data-name="dir" data-value="ltr">
              <img src="../../assets/images/settings/light/01.png" alt="ltr"
                class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode"
                data-name="dir" data-value="ltr">
              <span class=" mt-2"> LTR </span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/02.png" alt=""
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir"
                data-value="rtl">
              <img src="../../assets/images/settings/light/02.png" alt=""
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir"
                data-value="rtl">
              <span class="mt-2 "> RTL </span>
            </div>
          </div>
          <hr class="hr-horizontal">
          <h5 class="mt-4 mb-3">Sidebar Color</h5>
          <div class="d-grid gap-3 grid-cols-2 mb-4">
            <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
              data-value="sidebar-white">
              <span class=""> Default </span>
            </div>
            <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
              data-value="sidebar-dark">
              <span class=""> Dark </span>
            </div>
            <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
              data-value="sidebar-color">
              <span class=""> Color </span>
            </div>

            <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color"
              data-value="sidebar-transparent">
              <span class=""> Transparent </span>
            </div>
          </div>
          <hr class="hr-horizontal">
          <h5 class="mt-4 mb-3">Sidebar Types</h5>
          <div class="d-grid gap-3 grid-cols-3 mb-4">
            <div class="text-center">
              <img src="../../assets/images/settings/dark/03.png" alt="mini"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-type" data-value="sidebar-mini">
              <img src="../../assets/images/settings/light/03.png" alt="mini"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-type" data-value="sidebar-mini">
              <span class="mt-2">Mini</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/04.png" alt="hover"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
              <img src="../../assets/images/settings/light/04.png" alt="hover"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
              <span class="mt-2">Hover</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/05.png" alt="boxed"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-type" data-value="sidebar-boxed">
              <img src="../../assets/images/settings/light/05.png" alt="boxed"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-type" data-value="sidebar-boxed">
              <span class="mt-2">Boxed</span>
            </div>
          </div>
          <hr class="hr-horizontal">
          <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
          <div class="d-grid gap-3 grid-cols-2 mb-4">
            <div class="text-center">
              <img src="../../assets/images/settings/dark/06.png" alt="rounded-one-side"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-rounded">
              <img src="../../assets/images/settings/light/06.png" alt="rounded-one-side"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-rounded">
              <span class="mt-2">Rounded One Side</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/07.png" alt="rounded-all"
                class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-rounded-all">
              <img src="../../assets/images/settings/light/07.png" alt="rounded-all"
                class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-rounded-all">
              <span class="mt-2">Rounded All</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/08.png" alt="pill-one-side"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-pill">
              <img src="../../assets/images/settings/light/09.png" alt="pill-one-side"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-pill">
              <span class="mt-2">Pill One Side</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/09.png" alt="pill-all"
                class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-pill-all">
              <img src="../../assets/images/settings/light/08.png" alt="pill-all"
                class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar"
                data-name="sidebar-item" data-value="navs-pill-all">
              <span class="mt-2">Pill All</span>
            </div>
          </div>
          <hr class="hr-horizontal">
          <h5 class="mt-4 mb-3">Navbar Style</h5>
          <div class="d-grid gap-3 grid-cols-2 ">
            <div class=" text-center">
              <img src="../../assets/images/settings/dark/11.png" alt="image"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
              <img src="../../assets/images/settings/light/10.png" alt="image"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
              <span class="mt-2">Glass</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/10.png" alt="color"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
              <img src="../../assets/images/settings/light/11.png" alt="color"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
              <span class="mt-2">Color</span>
            </div>
            <div class=" text-center">
              <img src="../../assets/images/settings/dark/12.png" alt="sticky"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
              <img src="../../assets/images/settings/light/12.png" alt="sticky"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
              <span class="mt-2">Sticky</span>
            </div>
            <div class="text-center">
              <img src="../../assets/images/settings/dark/13.png" alt="transparent"
                class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
              <img src="../../assets/images/settings/light/13.png" alt="transparent"
                class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar"
                data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
              <span class="mt-2">Transparent</span>
            </div>
            <div class="btn btn-border active col-span-full mt-4 d-block" data-setting="navbar"
              data-name="navbar-default" data-value="default">
              <span class=""> Default Navbar</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Library Bundle Script -->
  <script src="../../assets/js/core/libs.min.js"></script>

  <!-- External Library Bundle Script -->
  <script src="../../assets/js/core/external.min.js"></script>

  <!-- Widgetchart Script -->
  <script src="../../assets/js/charts/widgetcharts.js"></script>

  <!-- mapchart Script -->
  <script src="../../assets/js/charts/vectore-chart.js"></script>
  <script src="../../assets/js/charts/dashboard.js"></script>

  <!-- fslightbox Script -->
  <script src="../../assets/js/plugins/fslightbox.js"></script>

  <!-- Settings Script -->
  <script src="../../assets/js/plugins/setting.js"></script>

  <!-- Slider-tab Script -->
  <script src="../../assets/js/plugins/slider-tabs.js"></script>

  <!-- Form Wizard Script -->
  <script src="{{asset('assets/js/plugins/form-wizard.js')}}"></script>

  <!-- AOS Animation Plugin-->

  <!-- App Script -->
  <script src="{{asset('assets/js/hope-ui.js')}}" defer></script>

</body>

</html>
<style>
  /* Sidebar styles */
  .sidebar-body {
    padding: 20px;
  }

  .sidebar-body .navbar-nav {
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .sidebar-body .navbar-nav .nav-item {
    margin-bottom: 15px;
  }

  .sidebar-body .navbar-nav .nav-link {
    color: #495057;
    font-size: 16px;
    padding: 10px 20px;
    text-decoration: none;
    display: flex;
    align-items: center;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  }

  .sidebar-body .navbar-nav .nav-link .icon {
    margin-right: 10px;
  }

  .sidebar-body .navbar-nav .nav-link:hover {
    background-color: #007bff;
    color: #fff;
  }

  .sidebar-body .navbar-nav .nav-link.active {
    background-color: #0056b3;
    color: #fff;
  }

  .sidebar-body .navbar-nav .sub-nav {
    margin-left: 15px;
  }
</style>