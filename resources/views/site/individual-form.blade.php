@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">Individual Form</h2>
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

               <form class="contact-form" action="/accountopening-individual" method="POST" enctype="multipart/form-data">
                   @csrf
                  <fieldset>
                       <legend>Personal Information</legend>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="first_name" name="first_name" type="text" class="form-control" required placeholder="First Name*">
                                </div>
<!--                                @error('name')-->
<!--    <div class="alert alert-danger">{{ $message }}</div>-->
<!--@enderror-->
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="last_name" name="last_name" type="text" class="form-control" required placeholder="Last Name*">
                                </div>         
                                </div>
                                <div class="col-md-4">
                               <div class="form-group">
                                    <input id="middle_name" name="middle_name" type="text" class="form-control" placeholder="Middle Name">
                                </div>
<!--                                @error('name')-->
<!--    <div class="alert alert-danger">{{ $message }}</div>-->
<!--@enderror-->
                           </div>

                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="email" name="email" type="email" class="form-control" required placeholder="Email Address*" class="@error('email') is-invalid @enderror">
                                </div>
                                @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option value="">Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                    <input id="weeding_anniversary" name="wedding_anniversary" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control"  placeholder="Wedding Anniversary">
                                </div>
                           </div>

                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <select name="marital_status" class="form-control">
                                        <option value="">Marital Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="number" name="cscs_no"class="form-control" placeholder="CSCS Number">
                                </div>
                           </div>
                           <div class="col-md-6">
                           <!--<div class="form-group">-->
                           <!--         <select name="political_exposure" class="form-control">-->
                           <!--             <option value="">Are you Politically Expose?</option>-->
                           <!--             <option value="yes">Yes</option>-->
                           <!--             <option value="no">No</option>-->
                           <!--         </select>-->
                           <!--     </div>-->
                                <div class="form-group">
                                    <input type="text" name="political_exposure" class="form-control" placeholder="Last Political Appointment and Date ">
                                </div> 
                           </div>

                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input id="date" name="dob" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control"  placeholder="Date of Birth">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <select name="nationality" class="form-control">
                                        <option value="">Nationality</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Ghana">Ghana</option>
                                    </select>
                                </div>
                           </div>
                       </div>
                   <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                                <select name="nationality_status" class="form-control">
                                    <option value="">Nationality Status</option>
                                    <option value="resident"> Resident </option>
                                    <option value="non-resident">Non Resident</option>
                                    <option value="foreigner"> Foreigner </option>
                                </select>
                            </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                                <input type="text" name="state_of_origin" class="form-control" placeholder="State of Origin (For Nigerians Only)">
                            </div>
                       </div>
                   </div>
                      <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input id="text" name="nin" type="text" class="form-control"  placeholder="NIN Number">
                                </div>
                           </div>
                           
                           <div class="col-md-6">
                           <div class="form-group">
                                <input type="text" name="mother_name" class="form-control" placeholder="Mothers Maiden Name">
                            </div>
                       </div>
                           
                       </div>
                    <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                                <label>Passport Picture : <small class="form-text text-danger">Upload your picture in these formats (.jpg, .jpeg, .png)</small> </label>
                                <input type="file" class="form-control" name="passport" id="passport">
                                <!--<small class="form-text text-danger">Upload your picture in these formats (.jpg, .jpeg, .png)</small>-->
                            </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                                <label>Proof Of Identity : <small class="form-text text-danger">National ID, International Passport, Drivers License</small></label>
                                <input type="file" class="form-control" name="proof_identity" id="proof-of-identity">
                                <!--<small class="form-text text-danger">National ID, International Passport, Drivers License</small>-->
                            </div>
                       </div>
                   </div>
                       <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                                <label>Residential Address</label>
                                <textarea name="residence_address" class="form-control" id="residence-address" placeholder="Residential Address"></textarea>

                            </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                                <label>Permanent Address</label>
                                <textarea name="permanent_address" class="form-control" id="permanent-address" placeholder="Permanent Address"></textarea>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                                <label>Proof Of Residential Address : <small class="form-text text-danger">Utility Bills (PHCN Bill, Water Bill)</small></label>
                                <input type="file" name="proof_address" class="form-control" >
                                <!--<small class="form-text text-danger">Utility Bills (NEPA Bill, House Rent e.t.c)</small>-->
                            </div>
                       </div>

                   </div>
                  </fieldset>
                  <fieldset>
                      <legend>Bank Information</legend>
                      <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                                <input type="text" name="bank_name" class="form-control" placeholder="Bank Name">
                            </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                                <input type="number" name="account_no" class="form-control" placeholder="Account Number">
                            </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                                <input type="number" name="bvn" class="form-control" placeholder="BVN">
                            </div>
                       </div>
                       <!--<div class="col-md-6">-->
                       <!--    <div class="form-group">-->
                       <!--         <input type="text" name="open-date" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" placeholder="Open Date">-->
                       <!--     </div>-->
                       <!--</div>-->
                   </div>
                   <!-- <div class="row">-->
                   <!--    <div class="col-md-12">-->
                   <!--        <div class="form-group">-->
                   <!--             <label>Address Bank</label>-->
                   <!--             <textarea name="address_bank" class="form-control" placeholder="Address Bank"></textarea>-->
                   <!--         </div>-->
                   <!--    </div>-->

                   <!--</div>-->
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label>Signature : <small class="form-text text-danger">Upload your signature in these formats (.jpg, .jpeg, .png)</small></label>
                                <input type="file" class="form-control" name="signature" id="signature">
                                <!--<input name="signature"  type="file" placeholder="Upload Signature" class="form-control" onfocus="(this.type='file')" onblur="(this.type='text')">-->
                                <!--<small class="form-text text-danger">Upload your signature in these formats (.jpg, .jpeg, .png)</small>-->
                            </div>
                       </div>
                   </div>


                  </fieldset>



                    <fieldset>
                        <legend>Next Of Kin</legend>
                        <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" name="nextOfKin_name" placeholder="Name Of Next Of Kin">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" name="nextOfKin_phone" placeholder="Phone Number Of Next Of Kin">
                                </div>
                           </div>

                       </div>
                        <div class="row">
                           <div class="col-md-12">
                               <div class="form-group">
                                    <label>Address Of Next Of Kin</label>
                                    <textarea name="nextOfKin_address" class="form-control"></textarea>
                                </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" name="nextOfKinRelationship" class="form-control" placeholder="Next Of Kin Relationship">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="email" name="nextOfKinEmail" class="form-control" placeholder="Next Of Kin Email">
                                </div>
                           </div>

                   </div>

                    </fieldset>


                    <fieldset>
                        <legend>Employment Information</legend>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" name="employer_name" class="form-control" placeholder="Employer Name">
                                </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
            
                                   <textarea class="form-control" name="employer_address"  placeholder=""> Employer's Address </textarea>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <input class="form-control" name="position_in_organization" placeholder="Position In Organization">
                                </div>
                           </div>
                           <div class="col-md-6">
                           <div class="form-group">
                                    <select name="self_employed" class="form-control">
                                        <option value="">Self Employed?</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
     
                           </div>
                        </div>

                    </fieldset>
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
                   <input type="submit" class="btn btn-primary btn-block" value="Submit">
               </form>
           </div>


       </div>
   </section> <!-- about-office-section -->
@endsection
