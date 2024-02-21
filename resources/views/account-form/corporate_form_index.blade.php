@extends('layouts.admin_dashboard')

@section('content')
<style>

th{
    background: #2A3F54;
    color:white;
}


/*#modalContainer {*/
/*  background-color:rgba(0, 0, 0, 0.3);*/
/*  position:absolute;*/
/*  top:0;*/
/*  width:100%;*/
/*  height:100%;*/
/*  left:0px;*/
/*  z-index:10000;*/
  background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
/*}*/

/*#alertBox {*/
/*  position:relative;*/
/*  width:33%;*/
/*  min-height:100px;*/
/*  max-height:400px;*/
/*  margin-top:50px;*/
/*  border:1px solid #fff;*/
/*  background-color:#fff;*/
/*  color:#000;*/
/*  background-repeat:no-repeat;*/
/*  top:30%;*/
/*}*/

/*#modalContainer > #alertBox {*/
/*  position:fixed;*/
/*}*/

/*#alertBox h1 {*/
/*  margin:0;*/
/*  font:bold 1em Raleway,arial;*/
/*  background-color:#000;*/
/*  color:#FFF;*/
/*  border-bottom:1px solid #f97352;*/
/*  padding:10px 0 10px 5px;*/
/*}*/

/*#alertBox p {*/
/*  height:50px;*/
/*  padding-left:5px;*/
/*  padding-top:30px;*/
/*  text-align:center;*/
/*  vertical-align:middle;*/
/*}*/

/*#alertBox #closeBtn {*/
/*  display:block;*/
/*  position:relative;*/
/*  margin:10px auto 10px auto;*/
/*  padding:7px;*/
/*  border:0 none;*/
/*  width:70px;*/
/*  text-transform:uppercase;*/
/*  text-align:center;*/
/*  color:#FFF;*/
/*  background-color:#f97352;*/
/*  border-radius: 0px;*/
/*  text-decoration:none;*/
/*  outline:0!important;*/
/*}*/

/* unrelated styles */

/*#mContainer {*/
/*  position:relative;*/
/*  width:600px;*/
/*  margin:auto;*/
/*  padding:5px;*/
/*  border-top:2px solid #fff;*/
/*  border-bottom:2px solid #fff;*/
/*}*/

/*h1,h2 {*/
/*  margin:0;*/
/*  padding:4px;*/
/*}*/

/*code {*/
/*  font-size:1.2em;*/
/*  color:#069;*/
/*}*/

/*#credits {*/
/*  position:relative;*/
/*  margin:25px auto 0px auto;*/
/*  width:350px; */
/*  font:0.7em verdana;*/
/*  border-top:1px solid #000;*/
/*  border-bottom:1px solid #000;*/
/*  height:90px;*/
/*  padding-top:4px;*/
/*}*/

/*#credits img {*/
/*  float:left;*/
/*  margin:5px 10px 5px 0px;*/
/*  border:1px solid #000000;*/
/*  width:80px;*/
/*  height:79px;*/
/*}*/

/*.important {*/
/*  background-color:#F5FCC8;*/
/*  padding:2px;*/

/*}*/

/*@media (max-width: 600px) */
/*{*/
/*  #alertBox {*/
/*  position:relative;*/
/*  width:90%;*/
/*  top:30%;*/
/*}*/

</style>


    
  
   <br> 
<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel mt-4 ">
      <div class="x_title">
        <h2>View Users</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content ">
  <div class="table-responsive">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

        <table class="table ">
          <thead>
            <tr>
           
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>CAC Reg No:</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              
              @if (!$acct_approves->acct_approve = null)
             @forelse ($acct_approves as $corporateAccountOpening)
              <tr class="info">

              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $corporateAccountOpening->name }}</td>
              <td>{{ $corporateAccountOpening->email }}</td>
              <td>{{ $corporateAccountOpening->phone }}</td>
              <td>{{ $corporateAccountOpening->reg_no }}</td>
              
               <td>    
                    
                <form method="POST" action="{{ route('account.destroy', $corporateAccountOpening->id) }}"   enctype="multipart/form-data" >
                 
                       
                       <li class="list-inline-item">
                     <a class="btn btn-success btn-sm rounded-0" href="{{ route('corporate-acctForm.show', $corporateAccountOpening->id) }} " type="button" data-toggle="tooltip" data-placement="top" title="view"><i class="fa fa-eye">view</i></a>
                      </li>
                    
                  
                   @csrf
                        @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="fa fa-trash">Delete</i></button>
                      </form>
                   
               </td>
                   @empty
                  <p class="card-header text-danger btn-info"> No Pending User 
                  </p>    
            </tr>
                      
                    @endforelse
          @endif
          
          
          </tbody>
        </table>

      </div>
      </div>
    </div>
  </div>
  

<!--<div class="btn card alert alert-dark alert-block col-md-4 x_content">-->
    
<!--    <button type="button " class="btn btn-success" value = "Progress Report" onclick="alert(`You have {{ $Countapproved }} Approved Forms Already in the Database`);" />Progress Report-->
<!--    </button><button type="button" class="close" data-dismiss="alert">×</button>-->
     <!--<span class="badge badge-info right">{{ $Countapproved }}</span-->
<!--    </div>-->
<!--    </div>-->
    
    
<!--    <script>-->
<!--     var ALERT_TITLE = "View Approved Forms";-->
<!--var ALERT_BUTTON_TEXT = "Ok";-->

<!--if(document.getElementById) {-->
<!--  window.alert = function(txt) {-->
<!--    createCustomAlert(txt);-->
<!--  }-->
<!--}-->

<!--function createCustomAlert(txt) {-->
<!--  d = document;-->

<!--  if(d.getElementById("modalContainer")) return;-->

<!--  mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));-->
<!--  mObj.id = "modalContainer";-->
<!--  mObj.style.height = d.documentElement.scrollHeight + "px";-->
  
<!--  alertObj = mObj.appendChild(d.createElement("div"));-->
<!--  alertObj.id = "alertBox";-->
<!--  if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";-->
<!--  alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";-->
<!--  alertObj.style.visiblity="visible";-->

<!--  h1 = alertObj.appendChild(d.createElement("h1"));-->
<!--  h1.appendChild(d.createTextNode(ALERT_TITLE));-->

<!--  msg = alertObj.appendChild(d.createElement("p"));-->
  <!--//msg.appendChild(d.createTextNode(txt));-->
<!--  msg.innerHTML = txt;-->

<!--  btn = alertObj.appendChild(d.createElement("a"));-->
<!--  btn.id = "closeBtn";-->
<!--  btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));-->
<!--  btn.href = "#";-->
<!--  btn.focus();-->
<!--  btn.onclick = function() { removeCustomAlert();return false; }-->

<!--  alertObj.style.display = "block";-->
  
  
<!--}-->

<!--function removeCustomAlert() {-->
<!--  document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));-->
<!--}-->
<!--function ful(){-->
<!--alert({{ $Countapproved }});-->
<!--}-->
<!--    </script>-->
</div>


@endsection