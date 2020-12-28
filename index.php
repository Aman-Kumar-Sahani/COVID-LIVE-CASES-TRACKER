<!DOCTYPE html>
<html lang="en">
<head>
<title>Information</title>
    <?php include 'links/links.php';?>
    <?php include 'css/style.php';?>
</head>
<body onload = "fetch()">

<nav class="navbar sticky-top navbar-expand-lg  nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler text-center bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav xtext-capitalize hov_er">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">precaution</a>
      </li>
    </ul>
  </div>
</nav>

<div class = "container">
    <div class="row pt-5">
            <div class = "col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/pic.jpeg" width = "350" height = "350" alt="">
                </div>
            </div>
            <div class = "col-lg-7 col-md-7 col-12 order-lg-2 order-1 pl-9">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <!-- <p>"In the fight to end this crisis, we truly can't afford to lose anyone behind"</p> -->
                    <h1 id = "jqStyle">"In the fight to end this crisis, we truly can't afford to lose anyone behind..."</h1>
                </div>
            </div>
    </div><br>
    <div class="row ">
            <div class = "col-lg-1 col-md-1 col-12 order-lg-1 order-2">
                
            </div>
            <div class = "col-lg-11 col-md-11 col-12 order-lg-2 order-1 pl-9">
                <div class=" w-100 h-100 banner-text">
                    <h2 id = "anim"></h2>
                </div>
            </div>
    </div>
</div>
<br><br><br><br>
<!-- ************************Corona Latest Update************************* -->
<section class = "corona_update  container-fluid">
    <div class = "mb-3">
        <h3 class = "text-uppercase text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
    </div>
    <div class=" table-responsive scrollable table-sticky">
        <table class = "table table-bordered table-striped text-center" id = "tbval">
            <tr>
              <th>Country</th>
              <th>TotalConfirmed</th>
              <th>TotalRecovered</th>
              <th>TotalDeaths</th>
              <th>NewRecovered</th>
              <th>NewDeaths</th>
            </tr>
        </table>
    </div>
  
</section>
                <!-- ***************** About Section ************** -->
    <div class="container-fluid sub_section pt-5 pb-5" id = "aboutid">
        <div class = "section_header text-center mb-5 mt-4">
            <h1>About COVID-19</h1>
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5" >
                <img src="images/about3.jpeg" class = "img-fluid" width = "500" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12" >
                <h2 id = "jqStyle2">WHAT IS COVID-19(CORONA-VIRUS)</h2>
                    <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.  
                        In humans, several coronaviruses are known to cause respiratory infections ranging from the common 
                        cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory 
                        Syndrome (SARS).
                        The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>

                <p>What is COVID-19?COVID-19 is the infectious disease caused by the most recently discoveredcoronavirus.
                    This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.
                    COVID-19 is now a pandemic affecting many countries globally.</p>
                    </div>
        </div><br>
        <div class="container">
            <div class="text-right">
                <!-- <h3>For Further Details Regarding COVOD-19</h3> -->
                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" class="btn btn-info" target = "_blank" role="button">Know More</a>
            </div> 
        </div>
    </div>
<!-- //////////////////////////// Corona Virus Symptoms ////////////////// -->
    <div class="container-fluid  pt-5 pb-5" id = "sympid">
        <div class = "section_header text-center mb-5 mt-4">
            <h1 id = "jqStyle3">Coronavirus symptoms</h1>
        </div>
        <div class="continer">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class = "text-center">
                         <img src="images/cough.jpeg" class = "img-fluid" width = "150" height = "150" alt="">
                         <br>
                         <figcaption style="font-size:25px"><b>Cough</b></figcaption>
                    </figure>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class = "text-center">
                         <img src="images/run2.jpeg" class = "img-fluid" width = "150" height = "150" alt="">
                         <br>
                         <figcaption style="font-size:25px"><b>Running Nose</b></figcaption>
                    </figure>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class = "text-center">
                         <img src="images/fever2.jpeg" class = "img-fluid" width = "150" height = "150" alt="">
                         <br>
                         <figcaption style="font-size:25px"><b>Fever</b></figcaption>
                    </figure>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class = "text-center">
                         <img src="images/tired2.jpeg" class = "img-fluid" width = "150" height = "150" alt="">
                         <br>
                         <figcaption style="font-size:25px"><b>Tiredness</b></figcaption>
                    </figure>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class = "text-center">
                         <img src="images/cold.jpeg" class = "img-fluid" width = "120" height = "120" alt="">
                         <br>
                         <figcaption style="font-size:25px"><b>Cold</b></figcaption>
                    </figure>
                
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class = "text-center">
                         <img src="images/breathing.jpeg" class = "img-fluid" width = "100" height = "100" alt="">
                         <br>
                         <figcaption style="font-size:25px"><b>Breathing Problems</b></figcaption>
                    </figure>
                    
                </div>
            </div>
        </div>
    </div>

<!-- ///////////////// Prevention Against Corona Virus ////////////////// -->

    <div class="container-fluid sub_section pt-5 pb-5" id = "preventid">
        <div class = "section_header text-center mb-5 mt-4">
            <h1 id = "jqStyle4">Prevention Against COVID-19</h1>
        </div>

    <div class = "container">
        <div class="row">
            <div class = "col-lg-4 col-md-4 col-12 mt-5">
                <div class = "row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                            <img src="images/hand.jpeg" class = "img-fluid" width = "90" 
                            height = "90" alt="">
                        </figure>
                   </div>
                   <div class = "col-lg-8 col-md-8 col-12">
                             <p style="">Wash Your Hand Regularly for 20 Seconds ,with soap and water or alchol
                                 based hand rub</p>
                    </div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-4 col-12 mt-5">
                <div class = "row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                            <img src="images/cover3.png" class = "img-fluid" width = "200" 
                            height = "200" alt="">
                        </figure>
                   </div>
                   <div class = "col-lg-8 col-md-8 col-12">
                         <p>Cover yoour nose and mouth with a disposable tissue or flexed elbow when 
                        when you cough or sneeze.</p>    
                    </div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-4 col-12 mt-5">
                <div class = "row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                            <img src="images/sd3.jpeg" class = "img-fluid" width = "100" 
                            height = "150" alt="">
                        </figure>
                   </div>
                   <div class = "col-lg-8 col-md-8 col-12">
                             <p>Avoid colse contact(1 meter or 3 feet) distance with the people who are unwell.
                                 </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class = "col-lg-4 col-md-4 col-12 mt-5">
                <div class = "row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                            <img src="images/house1.png" class = "img-fluid" width = "200" 
                            height = "200" alt="">
                        </figure>
                   </div>
                   <div class = "col-lg-8 col-md-8 col-12">
                             <p>Stay Home and self-isolate from others in the household if
                                 you feel unwell.</p>
                    </div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-4 col-12 mt-5">
                <div class = "row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                            <img src="images/tv3.png" class = "img-fluid" width = "90" 
                            height = "90" alt="">
                        </figure>
                   </div>
                   <div class = "col-lg-8 col-md-8 col-12">
                             <p>Stay informed by watching news & follow the guidliness of Governmnet of India.
                    </div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-4 col-12 mt-5">
                <div class = "row">
                   <div class="col-lg-4 col-md-4 col-12">
                        <figure class = "text-center">
                            <img src="images/sick.png" class = "img-fluid" width = "90" 
                            height = "90" alt="">
                        </figure>
                   </div>
                   <div class = "col-lg-8 col-md-8 col-12">
                             <p> If you have fever,cough,and difficulty in breathing , visit the nearest hospital.
                                </p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
<div class="container scrolltop float-right pr-5">
    <i class = "fa fa-arrow-up" onclick = "topfunction()" id = "myBtn"></i>
</div>

<!-- ////////////////// Footer ////////////////// -->
    <footer class = "mt-5">
        <div class ="footer_style text_white text-center container fluid">
            <p>Copyright By Aman Kumar Sahani</p>
        </div>        
    </footer>


    <script>
    ////// Fetching the data using api of covid-19 live status /////////
        function fetch(){
            $.get("https://api.covid19api.com/summary",

                function (data){
                    // console.log(data['Countries'].length);
                    var tbval = document.getElementById('tbval');
                    for(var i=1; i<(data['Countries'].length);i++){

                        var x = tbval.insertRow();
                        x.insertCell(0);
                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                        tbval.rows[i].cells[0].style.background = "#7a4a91";
                        tbval.rows[i].cells[0].style.color = "#fff";

                        x.insertCell(1);
                        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                        tbval.rows[i].cells[1].style.background = "#4bb7d8";
               
                        x.insertCell(2);
                        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                        tbval.rows[i].cells[2].style.background = "#4bb7d8";

                        x.insertCell(3);
                        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                        tbval.rows[i].cells[3].style.background = "#f36e23";

                        x.insertCell(4);
                        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                        tbval.rows[i].cells[4].style.background = "#4bb7d8";

                        x.insertCell(5);
                        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                        tbval.rows[i].cells[5].style.background = "#9cc850";
                    }
                }
            );
        }
            $(document).ready(function(){
                $('#jqStyle').mouseenter(function(){
                    $(this).css('color','gray');
                });
                $('#jqStyle').mouseleave(function(){
                    $(this).css('color','black');
                });
            });

            $(document).ready(function(){
                $('#jqStyle2').mouseenter(function(){
                    $(this).css('color','blue');
                });
                $('#jqStyle2').mouseleave(function(){
                    $(this).css('color','black');
                });
            });
            $(document).ready(function(){
                $('#jqStyle3').mouseenter(function(){
                    $(this).css('color','blue');
                });
                $('#jqStyle3').mouseleave(function(){
                    $(this).css('color','black');
                });
            });
            $(document).ready(function(){
                $('#jqStyle4').mouseenter(function(){
                    $(this).css('color','blue');
                });
                $('#jqStyle4').mouseleave(function(){
                    $(this).css('color','black');
                });
            });
    </script>
 </body>
</html>



