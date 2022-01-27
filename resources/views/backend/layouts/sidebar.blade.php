<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="active">
                    <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-medkit"></i> <span>Doctor Schedule</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">            
                        <li><a href="{{ Route('doctorschedule.index') }}">Doctor Schedule List</a></li>
                    </ul>
                </li>    
                <li class="submenu">
                    <a href="#"><i class="fa fa-hospital-o"></i> <span> Prescription </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">            
                        <li><a href="{{ Route('prescription.index') }}">Prescription List</a></li>
                    </ul>
                </li>            
               
                <li class="submenu">
                    <a href="#"><i class="fa fa-pencil-square-o"></i> <span> Appointments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ Route('appointment.index') }}">Appointments List</a></li>
                    </ul>
                </li>    
                <li class="menu-title">Setup Management</li> 
                <li class="submenu">
                    <a href="#"><i class="fa fa-user-plus"></i><span> Patients </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ Route('inpatient.index') }}">In Patients</a></li>
                        <li><a href="{{ Route('outpatient.index') }}">Out Patients</a></li>
                    </ul>
                </li>    
                <li class="submenu">
                    <a href="#"> <i class="fa fa-user-md"></i> <span> Doctors </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{Route('doctor.index')}}">Doctors List</a></li>
                    </ul>
                </li>          
                <li class="submenu">
                    <a href="#"><i class="fa fa-users"></i> <span> Departments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{url('admin/department')}}">Departments List</a></li>
                    </ul>
                </li>    
                <li class="submenu">
                    <a href="#"><i class="fa fa-bed"></i> <span> Bed Management </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">            
                        <li><a href="{{Route('floor.index')}}">Floor</a></li>
                        <li><a href="{{Route('bedcategory.index')}}">Bed Category</a></li>
                        <li><a href="{{Route('bed.index')}}">Bed List</a></li>
                    </ul>
                </li>            
                <li class="menu-title">Accounts Management</li>       
                <li class="submenu">
                    <a href="#"><i class="fa fa-money"></i> <span> HRM Management </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="employees.html">Employee Role Add</a></li>
                        <li><a href="leaves.html">Employee Add</a></li>
                        <li><a href="leaves.html">Employee Add</a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="employees.html">Employees List</a></li>
                        <li><a href="leaves.html">Leaves</a></li>
                        <li><a href="holidays.html">Holidays</a></li>
                        <li><a href="attendance.html">Attendance</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-universal-access"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="invoices.html">Invoices</a></li>
                        <li><a href="payments.html">Payments</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="taxes.html">Taxes</a></li>
                        <li><a href="provident-fund.html">Provident Fund</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="salary.html"> Employee Salary </a></li>
                        <li><a href="salary-view.html"> Payslip </a></li>
                    </ul>
                </li>
                <li class="menu-title">Office Management</li>            
                <li class="submenu">
                    <a href="#"><i class="fa fa-bed"></i> <span> Assets </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="employees.html">Assets Category</a></li>
                        <li><a href="employees.html">Assets List</a></li>
                        <li><a href="leaves.html">Assets Add</a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="#"><i class="fa fa-heartbeat"></i> <span> Blood Donor</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">            
                        <li><a href="employees.html">Blood Bank</a></li>
                        <li><a href="employees.html">Blood Donor List</a></li>
                        <li><a href="leaves.html">Blood Donor Add</a></li>
                    </ul>
                </li>                           
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-child"></i> <span> Lab Test </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">            
                        <li><a href="employees.html">Lab Test Category</a></li>
                        <li><a href="employees.html">Lab Test List</a></li>
                        <li><a href="leaves.html">Lab Test Add</a></li>
                    </ul>
                </li>      
                <li class="menu-title">Pharmacy Management</li>           
                <li class="submenu">
                    <a href="#"><i class="fa fa-medkit"></i> <span> Medicine </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{Route('medicinegroup.index')}}">Medicine Group</a></li>
                        <li><a href="{{Route('medicinecompany.index')}}">Medicine Comapany</a></li>                    
                        <li><a href="{{Route('medicine.index')}}">Medicine List</a></li>                    

                    </ul>
                </li>                                                        
                <li class="menu-title">Extras</li>                                                                 
                <li class="submenu">
                    <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog View</a></li>
                        <li><a href="add-blog.html">Add Blog</a></li>
                        <li><a href="edit-blog.html">Edit Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="activities.html"><i class="fa fa-bell-o"></i> <span>Activities</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="expense-reports.html"> Expense Report </a></li>
                        <li><a href="invoice-reports.html"> Invoice Report </a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>
                <li>
                    <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                </li>
                
            </ul>
        </div>
    </div>
</div>