@extends('layout.site')
@section('content')

<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">Career</h2>
       <span class="sub-title">Home > Pages > Career</span>
   </div>
</section> <!-- header-title -->



<section class="hiring-section section-padding">
   <div class="container">
       <div class="header-content">
           <form class="hiringForm">
               <div class="form-wrapper">
                   <input class="searchBar" required="" placeholder="Search..">
                   <button type="submit" class="subscribeBtn btn btn-primary">Search</button>

                   <div class="row">
                       <div class="col-sm-4">
                           <div class="selector dropdown">
                               <select name="one" class="dropdown-select searchBar">
                                   <option value="">Department</option>
                                   <option value="1">Department One</option>
                                   <option value="2">Department Two</option>
                                   <option value="3">Department Three</option>
                               </select>
                           </div>
                       </div>

                       <div class="col-sm-4">
                           <div class="selector dropdown">
                               <select name="one" class="dropdown-select searchBar">
                                   <option value="">Position</option>
                                   <option value="1">Position One</option>
                                   <option value="2">Position Two</option>
                                   <option value="3">Position Three</option>
                               </select>
                           </div>
                       </div>

                       <div class="col-sm-4">
                           <input class="searchBar" placeholder="#Keywords..">
                       </div>
                   </div>
               </div>
           </form>
       </div>


       <div class="row">
           <div class="col-md-6">
               <div class="left-content">
                   <h4>International Communications Manager</h4>
                   <span class="small">Marketing, PR & Communications</span>

                   <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                   <button class="btn btn-primary">Apply Now</button>
               </div>

               <div class="left-content">
                   <h4>PR Specialists</h4>
                   <span class="small">Marketing, PR & Communications</span>

                   <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                   <button class="btn btn-primary">Apply Now</button>
               </div>

               <div class="left-content">
                   <h4>Marketing Intern</h4>
                   <span class="small">Marketing, Product Management</span>

                   <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                   <button class="btn btn-primary">Apply Now</button>
               </div>

               <div class="left-content">
                   <h4>Account Manager Strategic Partnership</h4>
                   <span class="small">Marketing, Startegic Partnership</span>

                   <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                   <button class="btn btn-primary">Apply Now</button>
               </div>
           </div>

           <div class="col-md-5 col-md-offset-1">
               <div class="right-content">
                   <h4>Don’t miss any oportunity to get hired.</h4>
                   <p><a href="#">Sign up</a> and submit your resume in our system. We will notify you if there is any match for you.</p>

                   <form class="contact-form">
                       <div class="form-group">
                           <input id="name" name="name" type="text" class="form-control"  required="" placeholder="First Name">
                       </div>

                       <div class="form-group">
                           <input id="name2" name="name" type="text" class="form-control"  required="" placeholder="Last Name">
                       </div>

                       <div class="form-group">
                           <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email address..">
                       </div>

                       <div class="form-group">
                           <input id="name3" name="name" type="text" class="form-control"  required="" placeholder="LinkedIn Profile">
                       </div>

                       <div class="form-group">
                           <input type="file" id="file2" class="custom-file-input form-control">
                       </div>
                       
                       <div class="form-group">
                           <input type="checkbox" aria-label="Checkbox for following text input"> I agree with the Term & Services 
                       </div>

                       <div class="form-group">
                           <button class="btn btn-default" type="submit">Submit Application</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section> <!-- hiring-section -->


@endsection