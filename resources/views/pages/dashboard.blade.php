{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}

    <link href="{{asset('css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{asset('js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('css/animate.css" rel="stylesheet')}}" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('css/icons.css" rel="stylesheet')}}" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('css/sidebar-menu.css')}}" rel="stylesheet')}}"/>
  <!-- Custom Style-->
  <link href="{{asset('css/app-style.css')}}" rel="stylesheet"/>



  <!-- Toggle-->
  <style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 20px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 20px;
      left: 6px;
      bottom: 2px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }


    .s{

      font-size: large;
      font-family:Arial, Helvetica, sans-serif;
      font-weight: bolder;
      color: black;
      font-weight: bolder;
    }
    .padma{
      
      background: rgb(230, 150, 193);
      opacity: 40%;
    }
    </style>


<link href="https://cdn.anychart.com/releases/8.9.0/css/anychart-ui.min.css?hcode=a0c21fc77e1449cc86299c5faa067dc4" rel="stylesheet" type="text/css">
<style>html, body, #container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

</style>

      <!--Start Dashboard Content-->
    
    
      <div class="col-md-12">
        <div class="row">
        <!--Cart 1-->
         <div class="card-header flex-wrap border-0 pt-6 pb-0">
    
            <div class="card" >
    
               <div class="table-responsive">
                 <table class="table align-items-center">
                   <tbody>
                     <tr class="padma">
                        
                      <td rowspan="12">
                          <span class="s">P</span><br>
                          <span class="s">A</span><br>
                          <span class="s">D</span><br>
                          <span class="s">M</span><br>
                          <span class="s">A</span><br>
                      </td>
    
                     </tr>
                    <tr>
                       <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                        <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
                      </svg></i>° T : 29</td>
    
                       <td colspan="2">
                         
                        <div class="progress-wrapper" >
                          <div class="progress" style="height: 5px;">
                           <div class="progress-bar" style="width:65%; background-color: red;"></div>
                          </div>
                         </div>  
                    
                      </td>
                    </tr>
                      <tr>
            
                       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                      </svg></i> A : 29</td>
                       <td colspan="2"> 
    
                        <div class="progress-wrapper">
                          <div class="progress" style="height: 5px;">
                           <div class="progress-bar" style="width:40%; background-color: green;"></div>
                          </div>
                         </div>  
    
    
                       </td>
     
                        
                       </tr>
                     <tr>
                       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                      </svg></i> B : 29</td>
                       <td colspan="2"> 
    
                        <div class="progress-wrapper">
                          <div class="progress" style="height: 5px;">
                           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                          </div>
                         </div> 
    
    
                       </td>
    
                     </tr>
    
    
    
    
                    </tr>
                    <tr>
                      <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                       <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                     </svg></i> B : 29</td>
                      <td colspan="2"> 
    
                       <div class="progress-wrapper">
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                         </div>
                        </div> 
    
    
                      </td>
    
                    </tr>
    
    
    
    
                  </tr>
                  <tr>
                    <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                     <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                   </svg></i> B : 29</td>
                    <td colspan="2"> 
    
                     <div class="progress-wrapper">
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                       </div>
                      </div> 
    
    
                    </td>
    
                  </tr>
    
    
    
    
                </tr>
                <tr>
                  <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                   <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                 </svg></i> B : 29</td>
                  <td colspan="2"> 
    
                   <div class="progress-wrapper">
                     <div class="progress" style="height: 5px;">
                      <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                     </div>
                    </div> 
    
    
                  </td>
    
                </tr>
    
              </tr>
              <tr>
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> B : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                   </div>
                  </div> 
    
    
                </td>
    
              </tr>
    
    
            </tr>
    
            <tr>
              <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
               <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
             </svg></i> B : 29</td>
              <td colspan="2"> 
    
               <div class="progress-wrapper">
                 <div class="progress" style="height: 5px;">
                  <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                 </div>
                </div> 
    
    
              </td>
    
            </tr>
    
    
            <tr>
              <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
               <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
             </svg></i> B : 29</td>
              <td colspan="2"> 
    
               <div class="progress-wrapper">
                 <div class="progress" style="height: 5px;">
                  <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                 </div>
                </div> 
    
    
              </td>
    
            </tr>
    
    
    
            <tr>
              <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
               <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
             </svg></i> B : 29</td>
              <td colspan="2"> 
    
               <div class="progress-wrapper">
                 <div class="progress" style="height: 5px;">
                  <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                 </div>
                </div> 
    
    
              </td>
    
            </tr>
                     
    
    
                     <tr>
                      <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                      </svg></i> Door</td>
    
                      <td> 
    
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span>
                        </label>
    
    
    
                      <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                      </svg></i> H : 100
                    
                    </td>
     
    
                    </tr>
    
                    
                   </tbody>
                 </table>
    
               </div><!--table-responsive-->
    
             </div><!--Cart-->
    
          </div><!--col-md-3 equal-column-->
    
    
    
         <div class="col-md-3 equal-column">
    
          <div class="card" >
    
             <div class="table-responsive">
              <table class="table align-items-center">
                <tbody>
                  <tr class="padma">
                     
                   <td rowspan="12">
                       <span class="s">P</span><br>
                       <span class="s">A</span><br>
                       <span class="s">D</span><br>
                       <span class="s">M</span><br>
                       <span class="s">A</span><br>
                   </td>
    
                  </tr>
                 <tr>
                    <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                     <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                     <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
                   </svg></i>° T : 29</td>
    
                    <td colspan="2">
                      
                     <div class="progress-wrapper" >
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:65%; background-color: red;"></div>
                       </div>
                      </div>  
                 
                   </td>
                 </tr>
                   <tr>
         
                    <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                     <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                   </svg></i> A : 29</td>
                    <td colspan="2"> 
    
                     <div class="progress-wrapper">
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:40%; background-color: green;"></div>
                       </div>
                      </div>  
    
    
                    </td>
    
                     
                    </tr>
                  <tr>
                    <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                     <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                   </svg></i> B : 29</td>
                    <td colspan="2"> 
    
                     <div class="progress-wrapper">
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                       </div>
                      </div> 
    
    
                    </td>
    
                  </tr>
    
    
    
    
                 </tr>
                 <tr>
                   <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                  </svg></i> B : 29</td>
                   <td colspan="2"> 
    
                    <div class="progress-wrapper">
                      <div class="progress" style="height: 5px;">
                       <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                      </div>
                     </div> 
    
    
                   </td>
    
                 </tr>
    
    
    
    
               </tr>
               <tr>
                 <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                </svg></i> B : 29</td>
                 <td colspan="2"> 
    
                  <div class="progress-wrapper">
                    <div class="progress" style="height: 5px;">
                     <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                    </div>
                   </div> 
    
    
                 </td>
    
               </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
    
         </tr>
    
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
    
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
    
    
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
                  
    
    
                  <tr>
                   <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                     <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                   </svg></i> Door</td>
    
                   <td> 
    
                     <label class="switch">
                       <input type="checkbox">
                       <span class="slider round"></span>
                     </label>
    
    
    
                   <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                     <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                   </svg></i> H : 100
                 
                 </td>
    
    
                 </tr>
    
                 
                </tbody>
              </table>
           </div>
          </div>
         </div>
    
    
    
    
    
    
    <div class="col-md-3 equal-column">
    
      <div class="card" >
        
    
         <div class="table-responsive">
          <table class="table align-items-center">
            <tbody>
              <tr class="padma">
                 
               <td rowspan="12">
                   <span class="s">P</span><br>
                   <span class="s">A</span><br>
                   <span class="s">D</span><br>
                   <span class="s">M</span><br>
                   <span class="s">A</span><br>
               </td>
    
              </tr>
             <tr>
                <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                 <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                 <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
               </svg></i>° T : 29</td>
    
                <td colspan="2">
                  
                 <div class="progress-wrapper" >
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:65%; background-color: red;"></div>
                   </div>
                  </div>  
             
               </td>
             </tr>
               <tr>
     
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> A : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:40%; background-color: green;"></div>
                   </div>
                  </div>  
    
    
                </td>
    
                 
                </tr>
              <tr>
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> B : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                   </div>
                  </div> 
    
    
                </td>
    
              </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
    
    
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
    
    
    
         </tr>
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
       </tr>
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
    
    
     </tr>
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
              
    
    
              <tr>
               <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> Door</td>
    
               <td> 
    
                 <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
                 </label>
    
    
    
               <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> H : 100
             
             </td>
    
    
             </tr>
    
             
            </tbody>
          </table>
         </div>
       </div>
    
    </div>
    
    
    <!--Notification-->
    <div class="col-md-3 equal-column" >
    
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
    
              <li class="nav-item">
                  <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Notification</span></a>
              </li>
          </ul>
          <div class="tab-content p-4">
                 
              <div class="tab-pane" id="messages">
                <div class="table-responsive" style="overflow: visible  ;">
                  <table class="table table-hover table-striped">
                      <tbody>                                    
                          <tr>
                              <td>
                                 <span class="float-right font-weight-bold">Time Line</span> Messages
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <span class="float-right font-weight-bold"></span> 
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <span class="float-right font-weight-bold"></span> 
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <span class="float-right font-weight-bold"></span> 
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <span class="float-right font-weight-bold"></span> 
                              </td>
                          </tr>
                      </tbody> 
                  </table>
                </div>
              </div>
       </div>
    
    
    
    </div>
    
    
    
    
    
    </div><!--End Row-->
    
    
    
    </div>
    
    
    
    
    <div class="col-md-3 equal-column">
    
      <div class="card" >
    
         <div class="table-responsive">
          <table class="table align-items-center">
            <tbody>
              <tr class="padma">
                 
               <td rowspan="12">
                   <span class="s">P</span><br>
                   <span class="s">A</span><br>
                   <span class="s">D</span><br>
                   <span class="s">M</span><br>
                   <span class="s">A</span><br>
               </td>
    
              </tr>
             <tr>
                <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                 <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                 <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
               </svg></i>° T : 29</td>
    
                <td colspan="2">
                  
                 <div class="progress-wrapper" >
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:65%; background-color: red;"></div>
                   </div>
                  </div>  
             
               </td>
             </tr>
               <tr>
     
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> A : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:40%; background-color: green;"></div>
                   </div>
                  </div>  
    
    
                </td>
    
                 
                </tr>
              <tr>
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> B : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                   </div>
                  </div> 
    
    
                </td>
    
              </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
    
    
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
    
    
    
         </tr>
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
       </tr>
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
    
    
     </tr>
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
              
    
    
              <tr>
               <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> Door</td>
    
               <td> 
    
                 <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
                 </label>
    
    
    
               <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> H : 100
             
             </td>
    
    
             </tr>
    
             
            </tbody>
          </table>
         </div>
       </div>
    
    </div>
    
    
    
    <div class="col-md-3 equal-column">
    
      <div class="card" >
    
         <div class="table-responsive">
          <table class="table align-items-center">
            <tbody>
              <tr class="padma">
                 
               <td rowspan="12">
                   <span class="s">P</span><br>
                   <span class="s">A</span><br>
                   <span class="s">D</span><br>
                   <span class="s">M</span><br>
                   <span class="s">A</span><br>
               </td>
    
              </tr>
             <tr>
                <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                 <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                 <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
               </svg></i>° T : 29</td>
    
                <td colspan="2">
                  
                 <div class="progress-wrapper" >
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:65%; background-color: red;"></div>
                   </div>
                  </div>  
             
               </td>
             </tr>
               <tr>
     
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> A : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:40%; background-color: green;"></div>
                   </div>
                  </div>  
    
    
                </td>
    
                 
                </tr>
              <tr>
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> B : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                   </div>
                  </div> 
    
    
                </td>
    
              </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
    
    
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
    
    
    
         </tr>
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
       </tr>
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
    
    
     </tr>
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
              
    
    
              <tr>
               <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> Door</td>
    
               <td> 
    
                 <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
                 </label>
    
    
    
               <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> H : 100
             
             </td>
    
    
             </tr>
    
             
            </tbody>
          </table>
         </div>
       </div>
    
    </div>
    
    <div class="col-md-3 equal-column">
    
      <div class="card" >
    
         <div class="table-responsive">
          <table class="table align-items-center">
            <tbody>
              <tr class="padma">
                 
               <td rowspan="12">
                   <span class="s">P</span><br>
                   <span class="s">A</span><br>
                   <span class="s">D</span><br>
                   <span class="s">M</span><br>
                   <span class="s">A</span><br>
               </td>
    
              </tr>
             <tr>
                <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                 <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                 <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
               </svg></i>° T : 29</td>
    
                <td colspan="2">
                  
                 <div class="progress-wrapper" >
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:65%; background-color: red;"></div>
                   </div>
                  </div>  
             
               </td>
             </tr>
               <tr>
     
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> A : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:40%; background-color: green;"></div>
                   </div>
                  </div>  
    
    
                </td>
    
                 
                </tr>
              <tr>
                <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                 <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                 <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
               </svg></i> B : 29</td>
                <td colspan="2"> 
    
                 <div class="progress-wrapper">
                   <div class="progress" style="height: 5px;">
                    <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                   </div>
                  </div> 
    
    
                </td>
    
              </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
    
    
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
    
    
    
         </tr>
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
       </tr>
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
    
    
     </tr>
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
    
    
    
     <tr>
       <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
      </svg></i> B : 29</td>
       <td colspan="2"> 
    
        <div class="progress-wrapper">
          <div class="progress" style="height: 5px;">
           <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
          </div>
         </div> 
    
    
       </td>
    
     </tr>
              
    
    
              <tr>
               <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> Door</td>
    
               <td> 
    
                 <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
                 </label>
    
    
    
               <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                 <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
               </svg></i> H : 100
             
             </td>
    
    
             </tr>
    
             
            </tbody>
          </table>
         </div>
       </div>
    
    </div>
    
    
     
      </div>
    </div>
    
    
    <div class="col-md-12">
        <div class="row">
         <div class="col-md-3 equal-column">
    
            <div class="card" >
               <div class="table-responsive">
                <table class="table align-items-center">
                  <tbody>
                    <tr class="padma">
                       
                     <td rowspan="12">
                         <span class="s">P</span><br>
                         <span class="s">A</span><br>
                         <span class="s">D</span><br>
                         <span class="s">M</span><br>
                         <span class="s">A</span><br>
                     </td>
      
                    </tr>
                   <tr>
                      <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                       <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                       <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
                     </svg></i>° T : 29</td>
      
                      <td colspan="2">
                        
                       <div class="progress-wrapper" >
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:65%; background-color: red;"></div>
                         </div>
                        </div>  
                   
                     </td>
                   </tr>
                     <tr>
           
                      <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                       <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                     </svg></i> A : 29</td>
                      <td colspan="2"> 
      
                       <div class="progress-wrapper">
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:40%; background-color: green;"></div>
                         </div>
                        </div>  
      
      
                      </td>
      
                       
                      </tr>
                    <tr>
                      <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                       <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                     </svg></i> B : 29</td>
                      <td colspan="2"> 
      
                       <div class="progress-wrapper">
                         <div class="progress" style="height: 5px;">
                          <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                         </div>
                        </div> 
      
      
                      </td>
      
                    </tr>
      
      
      
      
                   </tr>
                   <tr>
                     <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                      <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                    </svg></i> B : 29</td>
                     <td colspan="2"> 
      
                      <div class="progress-wrapper">
                        <div class="progress" style="height: 5px;">
                         <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                        </div>
                       </div> 
      
      
                     </td>
      
                   </tr>
      
      
      
      
                 </tr>
                 <tr>
                   <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                  </svg></i> B : 29</td>
                   <td colspan="2"> 
      
                    <div class="progress-wrapper">
                      <div class="progress" style="height: 5px;">
                       <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                      </div>
                     </div> 
      
      
                   </td>
      
                 </tr>
      
      
      
      
               </tr>
               <tr>
                 <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                </svg></i> B : 29</td>
                 <td colspan="2"> 
      
                  <div class="progress-wrapper">
                    <div class="progress" style="height: 5px;">
                     <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                    </div>
                   </div> 
      
      
                 </td>
      
               </tr>
      
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
      
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
      
      
               </td>
      
             </tr>
      
      
           </tr>
      
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
      
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
      
      
             </td>
      
           </tr>
      
      
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
      
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
      
      
             </td>
      
           </tr>
      
      
      
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
      
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
      
      
             </td>
      
           </tr>
                    
      
      
                    <tr>
                     <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                       <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                     </svg></i> Door</td>
      
                     <td> 
      
                       <label class="switch">
                         <input type="checkbox">
                         <span class="slider round"></span>
                       </label>
      
      
      
                     <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                       <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                     </svg></i> H : 100
                   
                   </td>
      
      
                   </tr>
      
                   
                  </tbody>
                </table>
               </div>
             </div>
    
         </div>
    
    
    
         <div class="col-md-3 equal-column">
    
          <div class="card" >
             <div class="table-responsive">
              <table class="table align-items-center">
                <tbody>
                  <tr class="padma">
                     
                   <td rowspan="12">
                       <span class="s">P</span><br>
                       <span class="s">A</span><br>
                       <span class="s">D</span><br>
                       <span class="s">M</span><br>
                       <span class="s">A</span><br>
                   </td>
    
                  </tr>
                 <tr>
                    <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                     <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                     <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
                   </svg></i>° T : 29</td>
    
                    <td colspan="2">
                      
                     <div class="progress-wrapper" >
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:65%; background-color: red;"></div>
                       </div>
                      </div>  
                 
                   </td>
                 </tr>
                   <tr>
         
                    <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                     <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                   </svg></i> A : 29</td>
                    <td colspan="2"> 
    
                     <div class="progress-wrapper">
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:40%; background-color: green;"></div>
                       </div>
                      </div>  
    
    
                    </td>
    
                     
                    </tr>
                  <tr>
                    <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                     <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                   </svg></i> B : 29</td>
                    <td colspan="2"> 
    
                     <div class="progress-wrapper">
                       <div class="progress" style="height: 5px;">
                        <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                       </div>
                      </div> 
    
    
                    </td>
    
                  </tr>
    
    
    
    
                 </tr>
                 <tr>
                   <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                  </svg></i> B : 29</td>
                   <td colspan="2"> 
    
                    <div class="progress-wrapper">
                      <div class="progress" style="height: 5px;">
                       <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                      </div>
                     </div> 
    
    
                   </td>
    
                 </tr>
    
    
    
    
               </tr>
               <tr>
                 <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                </svg></i> B : 29</td>
                 <td colspan="2"> 
    
                  <div class="progress-wrapper">
                    <div class="progress" style="height: 5px;">
                     <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                    </div>
                   </div> 
    
    
                 </td>
    
               </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
    
         </tr>
    
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
    
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
    
    
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
                  
    
    
                  <tr>
                   <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                     <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                   </svg></i> Door</td>
    
                   <td> 
    
                     <label class="switch">
                       <input type="checkbox">
                       <span class="slider round"></span>
                     </label>
    
    
    
                   <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                     <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                   </svg></i> H : 100
                 
                 </td>
    
    
                 </tr>
    
                 
                </tbody>
              </table>
             </div>
           </div>
    
       </div>
    
    
       <div class="col-md-3 equal-column">
    
        <div class="card" >
           <div class="table-responsive">
            <table class="table align-items-center">
              <tbody>
                <tr class="padma">
                   
                 <td rowspan="12">
                     <span class="s">P</span><br>
                     <span class="s">A</span><br>
                     <span class="s">D</span><br>
                     <span class="s">M</span><br>
                     <span class="s">A</span><br>
                 </td>
    
                </tr>
               <tr>
                  <td><i class="bi bi-thermometer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                   <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                   <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z"/>
                 </svg></i>° T : 29</td>
    
                  <td colspan="2">
                    
                   <div class="progress-wrapper" >
                     <div class="progress" style="height: 5px;">
                      <div class="progress-bar" style="width:65%; background-color: red;"></div>
                     </div>
                    </div>  
               
                 </td>
               </tr>
                 <tr>
       
                  <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                   <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                 </svg></i> A : 29</td>
                  <td colspan="2"> 
    
                   <div class="progress-wrapper">
                     <div class="progress" style="height: 5px;">
                      <div class="progress-bar" style="width:40%; background-color: green;"></div>
                     </div>
                    </div>  
    
    
                  </td>
    
                   
                  </tr>
                <tr>
                  <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                   <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                 </svg></i> B : 29</td>
                  <td colspan="2"> 
    
                   <div class="progress-wrapper">
                     <div class="progress" style="height: 5px;">
                      <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                     </div>
                    </div> 
    
    
                  </td>
    
                </tr>
    
    
    
    
               </tr>
               <tr>
                 <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                </svg></i> B : 29</td>
                 <td colspan="2"> 
    
                  <div class="progress-wrapper">
                    <div class="progress" style="height: 5px;">
                     <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                    </div>
                   </div> 
    
    
                 </td>
    
               </tr>
    
    
    
    
             </tr>
             <tr>
               <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
              </svg></i> B : 29</td>
               <td colspan="2"> 
    
                <div class="progress-wrapper">
                  <div class="progress" style="height: 5px;">
                   <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                  </div>
                 </div> 
    
    
               </td>
    
             </tr>
    
    
    
    
           </tr>
           <tr>
             <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
            </svg></i> B : 29</td>
             <td colspan="2"> 
    
              <div class="progress-wrapper">
                <div class="progress" style="height: 5px;">
                 <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
                </div>
               </div> 
    
    
             </td>
    
           </tr>
    
         </tr>
         <tr>
           <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
          </svg></i> B : 29</td>
           <td colspan="2"> 
    
            <div class="progress-wrapper">
              <div class="progress" style="height: 5px;">
               <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
              </div>
             </div> 
    
    
           </td>
    
         </tr>
    
    
       </tr>
    
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
    
    
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
    
    
    
       <tr>
         <td><i class="bi bi-droplet"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
        </svg></i> B : 29</td>
         <td colspan="2"> 
    
          <div class="progress-wrapper">
            <div class="progress" style="height: 5px;">
             <div class="progress-bar" style="width:20%; background-color: yellow;"></div>
            </div>
           </div> 
    
    
         </td>
    
       </tr>
                
    
    
                <tr>
                 <td><i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                   <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                 </svg></i> Door</td>
    
                 <td> 
    
                   <label class="switch">
                     <input type="checkbox">
                     <span class="slider round"></span>
                   </label>
    
    
    
                 <i class="bi bi-door-open-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                   <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                 </svg></i> H : 100
               
               </td>
    
    
               </tr>
    
               
              </tbody>
            </table>
           </div>

    
    
    
    
    
    
    <!--End Dashboard Content-->
          
        <!--start overlay-->
              <div class="overlay toggle-menu"></div>
            <!--end overlay-->
            
        </div>
        <!-- End container-fluid-->
        
        </div><!--End content-wrapper-->
       <!--Start Back To Top Button-->
        <a href="{{asset('javaScript:void()')}}" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
        
      <!--start color switcher-->
       <div class="right-sidebar">
        <div class="switcher-icon">
          <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">
          <p class="mb-0">Gaussion Texture</p>
          <hr>
          
          <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
          </ul>
    
          <p class="mb-0">Gradient Background</p>
          <hr>
          
          <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
            <li id="theme13"></li>
            <li id="theme14"></li>
            <li id="theme15"></li>
          </ul>
          
         </div>
       </div>
      <!--end color switcher-->
      
    </div><!--End wrapper-->
    
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
        
     <!-- simplebar js -->
      <script src="{{asset('plugins/simplebar/js/simplebar.js')}}"></script>
      <!-- sidebar-menu js -->
      <script src="{{asset('js/sidebar-menu.js')}}"></script>
      <!-- loader scripts -->
      <script  src="{{asset('js/jquery.loading-indicator.js')}}"></script>
      <!-- Custom scripts -->
      <script src="{{asset('js/app-script.js')}}"></script>
      <!-- Chart js -->
      
      <script src="{{asset('plugins/Chart.js/Chart.min.js')}}"></script>
     
      <!-- Index js -->
      <script src="{{asset('js/index.js')}}"></script>
    

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
