
@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">Corporate Form</h2>
   </div>
</section> <!-- header-title -->
 <section class="about-office-section hiring-section  section-padding">
       <div class="container">
           <div class="right-content">
               @if(session('success'))
                <div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
               @endif

                              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
               <form class="contact-form" action="/accountopening-corporate" method="POST" enctype="multipart/form-data">
                   @csrf
                  <fieldset>
                       <legend>Company Detail</legend>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control" required placeholder="Company Name*">
                                </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="email" name="email" type="email" class="form-control" required placeholder="Email*">
                                </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="phone" name="phone" type="text" class="form-control" required placeholder="Phone Number*">
                                </div>
                           </div>

                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input id="csc-account" name="csc_account" type="number" class="form-control" placeholder="CSCS Account No">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" name="incorporation_date" onfocus="(this.type='date')" class="form-control" onblur="(this.type='text')" placeholder="Date of Incorporation">
                                </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" name="business_date" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date Commencement Of Business">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="number" name="reg_no" class="form-control" placeholder="CAC Registration No">
                                </div>
                           </div>

                       </div>
                       <div class="row">
                           <div class="col-md-12">
                               <div class="form-group">
                                    <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                </div>
                           </div>

                       </div>

                  </fieldset>
                  <fieldset>
                      <legend>Bank Information</legend>
                      <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <input type="text" class="form-control" name="bank_name"  placeholder="Bank Name">

                                </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input type="number" class="form-control" name="acct_no" placeholder="Account No">

                                </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input type="text" class="form-control" name="bvn" placeholder="BVN of Directors">

                                </div>
                           </div>
                       </div>
                       <!--<div class="row">-->
                       <!--    <div class="col-md-12">-->
                       <!--        <div class="form-group">-->
                       <!--            <textarea name="bank_address" class="form-control" placeholder="Address Of Bank"></textarea>-->
                       <!--         </div>-->
                       <!--    </div>-->

                       <!--</div>-->
                  </fieldset>

                  <fieldset>
                      <legend>Basic Requirement</legend>
                      <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label> Board Resolution : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
                           </label>
                               <input type="file" name="board_resolution" class="form-control">
                                </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                              <label>Power of Attorney : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
                           </label>
                              <input type="file" class="form-control" name="attorney_power">

                                <!--<input type="file" class="form-control" name="attorney_power" onfocus="(this.type='file')" onblur="(this.type='text')" placeholder="Power of Attorney">-->
                                </div>
                       </div>
                        
                   </div>
                    <div class="row">
                     
                       <div class="col-md-6">
                          <div class="form-group">
                              <label>Particulars of Directors(Form Co7)/Trustees : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
                          </label>
                              <input type="file" class="form-control" name="director_particular">

                                <!--<input type="file" class="form-control" name="director_particular" onfocus="(this.type='file')" onblur="(this.type='text')" placeholder="Particulars of Directors(Form Co7)/Trustees">-->
                                </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label>Certificate of Incorporation/Registration : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
                           </label>
                               <input type="file" class="form-control" name="incorporation_cert">
                                <!--<input type="file" class="form-control" name="incorporation_cert" onfocus="(this.type='file')" onblur="(this.type='text')" placeholder="Certificate of Incorporation/Registration">-->
                                 </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label> Approval Letter (for Government/Ministries/Parastatals) : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
                            </label>
                               <input type="file" class="form-control" name="approv_letter">
                                 </div>
                       </div>
                       
                       
                       <div class="col-md-6">
                           <div class="form-group">
                               <label> Memorandum & Article of Association : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
                           </label>
                                <input type="file" class="form-control" name="memorandum">
                                <!--<input type="file" class="form-control" name="memorandum" onfocus="(this.type='file')" onblur="(this.type='text')" placeholder="Memorandum & Article of Association">-->
                                 </div>
                       </div>
                      
                   </div>
                   
                        

                    <div class="row">
                       
<div class="col-md-12">
                           <div class="form-group">
                               <label>Partnership Deed : <small class="form-text text-danger">Upload your file in these formats (.jpg, .jpeg, .png, PDF)</small>
</label>
                               <input type="file" class="form-control" name="partnership_deed">

                                <!--<input type="file" class="form-control" name="partnership_deed" onfocus="(this.type='file')" onblur="(this.type='text')" placeholder="Partnership Deed">-->
                                
                            </div>
                       </div>
                   </div>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                              {!! NoCaptcha::renderJs() !!}
                              {!! NoCaptcha::display() !!}
                            </div>
                </div>
                </div>
                    <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                              <input type="checkbox" name="declaration" aria-label="Checkbox for following text input">
                              By submitting this form, I agree and acknowledge that Osborne Capital Limited shall not be liable for any loss or damage whether direct or
                              indirect, arising from any Transactions conducted through the System and the use of any channel to access the trading portal,
                              suffered by me arising from the unlawful interception, corruption, delay, non-delivery or wrong delivery of  any information provided through/for the Website,
                              suffered by me arising from the breach of my security profile. I agree to the <a href="site/assets/documents/pdf/data-privacy.pdf">Data Protection Policy</a> and <a href="site/assets/documents/pdf/consent-form.pdf">Data Consent Policy.</a>
                            </div>
                       </div>
                   </div>

                  </fieldset>
                           <input type="submit" class="btn btn-primary btn-block" value="Submit">
               </form>
           </div>


       </div>
   </section> <!-- about-office-section -->
@endsection
