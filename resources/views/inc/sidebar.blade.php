@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
            
        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories" id="accordionExample">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                    <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                        <a href="#dashboard" data-active="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'dashboard') ? 'show' : '' }}" id="dashboard" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                                <a href="/sales"> Sales </a>
                            </li>
                            <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                                <a href="/analytics"> Analytics </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'datatable') ? 'active' : '' }}">
                        <a href="#datatables" data-active="{{ ($category_name === 'datatable') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'datatable') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Leads</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'datatable') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'buyer_leads') ? 'active' : '' }}">
                                <a href="/tables/datatables/buyer_leads"> Buyer Leads </a>
                            </li>
                        </ul>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'datatable') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'seller_leads') ? 'active' : '' }}">
                                <a href="/tables/datatables/seller_leads"> Seller Leads </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'users' && $page_name === 'users') ? 'active' : '' }}">
                        <a href="/tables/datatables/users" data-active="{{ ($category_name === 'users' && $page_name === 'users') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'users' && $page_name === 'users') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'withdrawals') ? 'active' : '' }}">
                        <a href="#datatables" data-active="{{ ($category_name === 'withdrawals') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'withdrawals') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Withdrawals</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'withdrawals') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'pending_withdrawals') ? 'active' : '' }}">
                                <a href="/tables/datatables/pending_withdrawals"> Pending Withdrawals </a>
                            </li>
                        </ul>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'withdrawals') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'completed_withdrawals') ? 'active' : '' }}">
                                <a href="/tables/datatables/completed_withdrawals"> Completed Withdrawals </a>
                            </li>
                        </ul>
                    </li>

                    <!--TESTIMONIAL-->

                    <li class="menu {{ ($category_name === 'testimonials') ? 'active' : '' }}">
                        <a href="#datatables" data-active="{{ ($category_name === 'testimonials') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'testimonials') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Testimonials</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'testimonials') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'add_testimonial') ? 'active' : '' }}">
                                <a href="/add/testimonial"> Add Testimonial </a>
                            </li>
                        </ul>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'testimonials') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'view_testimonials') ? 'active' : '' }}">
                                <a href="/tables/datatables/testimonials"> View Testimonials </a>
                            </li>
                        </ul>
                    </li>

                    <!-- SUCCESS STORIES -->

                    <li class="menu {{ ($category_name === 'stories') ? 'active' : '' }}">
                        <a href="#datatables" data-active="{{ ($category_name === 'stories') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'stories') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Success Stories</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'stories') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'add_story') ? 'active' : '' }}">
                                <a href="/add/story"> Add Success Story </a>
                            </li>
                        </ul>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'stories') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'view_stories') ? 'active' : '' }}">
                                <a href="/tables/datatables/stories"> View Success Stories </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'forms') ? 'active' : '' }}">
                        <a href="#forms" data-active="{{ ($category_name === 'forms') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'forms') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Forms</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'forms') ? 'show' : '' }}" id="forms" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'basic') ? 'active' : '' }}">
                                <a href="/forms/basic"> Basic </a>
                            </li>
                            <li class="{{ ($page_name === 'input_group') ? 'active' : '' }}">
                                <a href="/forms/input_group"> Input Group </a>
                            </li>
                            <li class="{{ ($page_name === 'layouts') ? 'active' : '' }}">
                                <a href="/forms/layouts"> Layouts </a>
                            </li>
                            <li class="{{ ($page_name === 'validation') ? 'active' : '' }}">
                                <a href="/forms/validation"> Validation </a>
                            </li>
                            <li class="{{ ($page_name === 'input_mask') ? 'active' : '' }}">
                                <a href="/forms/input_mask"> Input Mask </a>
                            </li>
                            <li class="{{ ($page_name === 'bootstrap_select') ? 'active' : '' }}">
                                <a href="/forms/bootstrap_select"> Bootstrap Select </a>
                            </li>
                            <li class="{{ ($page_name === 'select2') ? 'active' : '' }}">
                                <a href="/forms/select2"> Select2 </a>
                            </li>
                            <li class="{{ ($page_name === 'touchspin') ? 'active' : '' }}">
                                <a href="/forms/touchspin"> TouchSpin </a>
                            </li>
                            <li class="{{ ($page_name === 'maxlength') ? 'active' : '' }}">
                                <a href="/forms/maxlength"> Maxlength </a>
                            </li>                          
                            <li class="{{ ($page_name === 'checkbox_radio') ? 'active' : '' }}">
                                <a href="/forms/checkbox_radio"> Checkbox &amp; Radio </a>
                            </li>                            
                            <li class="{{ ($page_name === 'switches') ? 'active' : '' }}">
                                <a href="/forms/switches"> Switches </a>
                            </li>
                            <li class="{{ ($page_name === 'wizards') ? 'active' : '' }}">
                                <a href="/forms/wizards"> Wizards </a>
                            </li>
                            <li class="{{ ($page_name === 'file_upload') ? 'active' : '' }}">
                                <a href="/forms/file_upload"> File Upload </a>
                            </li>
                            <li class="{{ ($page_name === 'quill') ? 'active' : '' }}">
                                <a href="/forms/quill_editor"> Quill Editor </a>
                            </li>
                            <li class="{{ ($page_name === 'markdown') ? 'active' : '' }}">
                                <a href="/forms/markdown_editor"> Markdown Editor </a>
                            </li>
                            <li class="{{ ($page_name === 'date_range_picker') ? 'active' : '' }}">
                                <a href="/forms/date_range_picker"> Date &amp; Range Picker </a>
                            </li>
                            <li class="{{ ($page_name === 'clipboard') ? 'active' : '' }}">
                                <a href="/forms/clipboard"> Clipboard </a>
                            </li>
                            <li class="{{ ($page_name === 'typeahead') ? 'active' : '' }}">
                                <a href="/forms/typeahead"> Typeahead </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu {{ ($category_name === 'usersa') ? 'active' : '' }}">
                        <a href="#users" data-active="{{ ($category_name === 'usersa') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'usersa') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'usersa') ? 'show' : '' }}" id="users" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'profile') ? 'active' : '' }}">
                                <a href="/users/profile"> Profile </a>
                            </li>
                            <li class="{{ ($page_name === 'account_setting') ? 'active' : '' }}">
                                <a href="/users/account_settings"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'pages') ? 'active' : '' }}">
                        <a href="#pages" data-active="{{ ($category_name === 'pages') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'pages') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'pages') ? 'show' : '' }}" id="pages" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'helpdesk') ? 'active' : '' }}">
                                <a href="/pages/helpdesk"> Helpdesk </a>
                            </li>
                            <li class="{{ ($page_name === 'contact_us') ? 'active' : '' }}">
                                <a href="/pages/contact_us_form"> Contact Form </a>
                            </li>
                            <li class="{{ ($page_name === 'faq') ? 'active' : '' }}">
                                <a href="/pages/faq"> FAQ </a>
                            </li>
                            <li class="{{ ($page_name === 'faq2') ? 'active' : '' }}">
                                <a href="/pages/faq2"> FAQ 2 </a>
                            </li>
                            <li class="{{ ($page_name === 'privacy') ? 'active' : '' }}">
                                <a href="/pages/privacy_policy"> Privacy Policy </a>
                            </li>
                            <li class="{{ ($page_name === 'coming_soon') ? 'active' : '' }}">
                                <a href="/pages/coming_soon"> Coming Soon </a>
                            </li>
                            <li class="{{ ($page_name === 'dashboard') ? 'active' : '' }}">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages"> 
                                    <li class="{{ ($page_name === 'error404') ? 'active' : '' }}">
                                        <a href="/pages/error_404"> 404 </a>
                                    </li>
                                    <li class="{{ ($page_name === 'error500') ? 'active' : '' }}">
                                        <a href="/pages/error_500"> 500 </a>
                                    </li>
                                    <li class="{{ ($page_name === 'error503') ? 'active' : '' }}">
                                        <a href="/pages/error_503"> 503 </a>
                                    </li>
                                    <li class="{{ ($page_name === 'maintenence') ? 'active' : '' }}">
                                        <a href="/pages/maintenence"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'auth') ? 'active' : '' }}">
                        <a href="#authentication" data-active="{{ ($category_name === 'auth') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'auth') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Authentication</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'auth') ? 'show' : '' }}" id="authentication" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/login_boxed"> Login Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/register_boxed"> Register Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/lockscreen_boxed"> Unlock Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/pass_recovery_boxed"> Recover ID Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/login"> Login Cover </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/register"> Register Cover </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/lockscreen"> Unlock Cover </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/pass_recovery"> Recover ID Cover </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'drag_n_drop') ? 'active' : '' }}">
                        <a href="/drag_and_drop" data-active="{{ ($category_name === 'drag_n_drop') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'drag_n_drop') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>
                                <span>Drag and Drop</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'charts') ? 'active' : '' }}">
                        <a href="/charts" data-active="{{ ($category_name === 'charts') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'charts') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span>Charts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <span>Starter Kit</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                            <li>
                                <a href="/starter-kit/blank_page"> Blank Page </a>
                            </li>
                            <li>
                                <a href="/starter-kit/breadcrumbs"> Breadcrumbs </a>
                            </li>
                            <li>
                                <a href="/starter-kit/boxed"> Boxed </a>
                            </li>
                            <li>
                                <a href="/starter-kit/alternative_menu"> Alternate Menu </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="https://designreset.com/cork/documentation/" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>Documentation</span>
                            </div>
                        </a>
                    </li>

                @else

                    <li class="menu {{ ($category_name === 'starter_kits') ? 'active' : '' }}">
                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="{{ ($category_name === 'starter_kits') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <span>Starter Kit</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'starter_kits') ? 'show' : '' }}" id="starter-kit" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'blank_page') ? 'active' : '' }}">
                                <a href="/starter-kit/blank_page"> Blank Page </a>
                            </li>
                            <li class="{{ ($page_name === 'breadcrumb') ? 'active' : '' }}">
                                <a href="/starter-kit/breadcrumbs"> Breadcrumb </a>
                            </li>
                            <li class="{{ ($page_name === 'boxed') ? 'active' : '' }}">
                                <a href="/starter-kit/boxed"> Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'alt_menu') ? 'active' : '' }}">
                                <a href="/starter-kit/alternative_menu"> Alternate Menu </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span> Menu 1</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> Menu 2</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> Submenu 1 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Submenu 2 </a>
                            </li>                           
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span> Menu 3</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> Submenu 1 </a>
                            </li>
                            <li>
                                <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Submenu 2 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sub-Submenu 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sub-Submenu 2 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sub-Submenu 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                
                @endif
                
            </ul>
            
        </nav>

    </div>
    <!--  END SIDEBAR  -->

@endif