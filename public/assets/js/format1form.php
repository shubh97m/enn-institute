<?php 
session_start();
error_reporting(0);
$userprofile = $_SESSION['user_name'];
if($userprofile== true)
{

}
else{
    header('location:log_snup.php');
}
?>

<html>
<head>
    <title>SIGNUP </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <style>
        .edu {
   margin-top: 0px;
    margin-bottom:0px;
  }
  
  #homefont{
    margin-top: 1.1rem;
    transition: all 1;
    transition-timing-function: ease-in-out;
}
#homefont:hover{
    border-top : 3px lightcoral solid;

}
  #removetextarea,#removetextarea1,#removeoldlang{
    display: none; 
  }

  footer{
    background-size:cover;
    background-image:url(footer.jpg) ;
    background-repeat: repeat-y;
   background-attachment:inherit;
    padding-top:90px;
    padding-bottom:10px;
    -webkit-background-size:cover;
}
.social-icon
{
    letter-spacing: 0.5rem;
}
  </style>
</head>

<body>
    <!--header upper in the page -->    
<div class="container mt-1">
        <header id = "" >
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-dark" id="left-head-animation"> Get ready with a stunning CV </div>
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 col-md-2 col-sm-2 text-center text-danger buttonlogin">
                <?php echo "welcome ".$userprofile;?>
                   <a href="log_snup.php" class="buttonlogin text-dark btn"data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"> <span class="fas fa-lock text-danger"></span>Logout</a>
                </div>
                <hr>    
        </header>   
    
    </div>

    <section class="bg-light" id = "main-section">
    <nav class="navbar navbar-expand-lg navbar-expand-md  navbar-light mt-1 container">
        <a class="navbar-brand text-info " href="#"><h1>CV Builder</h1></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav1"> 
                <li class="nav-item" id = "homefont">
                  <a class="nav-link text-dark active fas fa-home fa-1x"  href="localcv.php" data-toggle="tooltip" title="you already on the home page"
                  data-placement="left"></a>
                </li>
                <li class="nav-item mt-3 ml-3" id = "homefont">
                  <a class="nav-link text-dark" href="resumetips.php" data-toggle="tooltip" title="check out tips to develop your cv better"
                  data-placement="bottom">Resume Tips</a>
                </li>
                <li class="nav-item mt-3 ml-3" id = "homefont">
                  <a class="nav-link text-dark" href="createcv.php" data-toggle="tooltip" title="click to create a cv from this link"
                  data-placement="bottom">Create CV</a>
                </li>
                <li class="nav-item mt-3 ml-3" id = "homefont">
                  <a class="nav-link text-dark" href="about.php" data-toggle="tooltip" title="details about us "
                  data-placement="bottom">About</a>
                </li>
                <li class="nav-item mt-3 ml-3" id = "homefont">
                        <a class="nav-link text-dark" href="contact.php">Contact Us</a>
                      </li>
              </ul>
  <!--      </div>-->
      </nav>

</section>
    <div class="container mt-1">
        <!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#home1">Basic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-toggle="pill" href="#home">Personal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1">Qualification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Other Skills </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu3">Experiences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu4">Languages</a>
            </li>
        </ul>

        <!--list catogries ends -->

        <!-- Tab panes -->
        <div class="container  mt-2  bg-light">
            <form action="show_format1.php"  method="POST" >                          
          <div class="row">
                <div class="col ">
                    <div class="tab-content">
                        <!--0 toggler starts here-->
                        <div class="tab-pane container active" id="home1">
                                <div class="form-row mt-2">
                                    <div class=" form-group col-md-4">
                                        <input type="text" class="form-control" placeholder="Full name " name="name">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="form-group col-md-4">
                                        <textarea  name="address" class="form-control" rows="3" cols="10" placeholder ="input your full address"> </textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class=" form-group col-md-4">
                                        <input type="mail" class="form-control" placeholder="Email Id " name="email">
                                    </div>
                                    <div class=" form-group col-md-4">
                                        <input type="number" class="form-control" placeholder="Phone number " name="cell">
                                        
                                    </div>
                                </div>
                              
                           
                        </div>
                        <!--0 toggler ends here -->
                        <div class="tab-pane container " id="home">
                        
                            <div class="form-row mt-2">
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Father Name</label>
                                    <input type="text" name="fname" id="name " class="form-control" required>
                                </div>
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Surname</label>
                                    <input type="text" name="sname" id=" " class="form-control">
                                </div>
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Date of Birth</label>
                                    <input type="date" name="dob" id=" " class="form-control">
                                </div>
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Religion</label>
                                    <input type="text" name="dharm" id="dharm" class="form-control">
                                </div>
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Domicile</label>
                                    <input type="text" name="domicile" id="domicile " class="form-control">
                                </div>
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Nationality</label>
                                    <input type="text" name="nationality" id="Nationality " class="form-control">
                                </div>
                                <div class="form-group ml-3 col-md-4">
                                    <label for="name">Marital Status</label>
                                    <input type="text" name="ms" id=" " class="form-control">
                                </div>
                            </div>
                            <!--row ends -->
                        </div>
                        <!--1st toggler  ends -->


                        <!--2nd toggler  starts -->
                        <div class="tab-pane container fade" id="menu1">
                            <div class="form-row edu ">
                                <div class="form-group col-md-8 ">
                                    <label for="name">Matriculation</label>
                                    <input type="text" name="tenth" id="title " class="form-control"
                                     placeholder="#input percentage with passing year">
                                </div>
                            </div>
                            <div class="form-row edu ">
                                <div class="form-group  col-md-8">
                                    <label for="name">Intermediate</label>
                                    <input type="name" name="inter" id="company" class="form-control"
                                    placeholder="#input percentage with passing year">
                                </div>
                            </div>
                            <div class="form-row edu ">
                                <div class="form-group  col-md-8">
                                    <label for="name">Graduation</label>
                                    <input type="name" name="graduation" id="company" class="form-control"
                                    placeholder="#input percentage with passing year">
                                </div>
                            </div>
                            <div class="form-row edu ">
                                <div class="form-group  col-md-8">
                                    <label for="name">Post Graduation</label>
                                    <input type="name" name="pg" id="company" class="form-control"
                                    placeholder="#input percentage with passing year">
                                </div>
                            </div>
                        </div>
                        <!--1st row ends -->
                        <hr>

                        <!--2 toggler  ends -->

                        <!--3rd toggler  starts -->
                        <div class="tab-pane fade" id="menu2">
                            <div class="row">        
                                <div class="col-md-5" id="addCol">
                                    <textarea id="pl" class="form-control " name="skills" placeholder="Your skills" required>                                   
                                    </textarea>
                                </div>
                                <div class="col-md-7 text-left" id='addremovebtn'>
                                    <a class="btn btn-outline-primary" id="addtextarea1" href='#menu2'>Add More Row</a>
                                    <a class="btn btn-outline-danger" id="removetextarea1" href='#menu2'>Remove Row</a>

                                </div>                           
                            </div>
                       
                        </div><!-- row ends -->

                        <!--3 toggler  ends -->

                        <!--4th toggler  starts -->
                        <div class="tab-pane  fade" id="menu3">
                            <div class="row">
                                <div class="col-md-5" id="addcol1">
                                    <textarea id="pl" class="form-control" name ="xperiences" placeholder="input something" required>  </textarea>
                                </div>

                                <div class="col-md-7 text-left" id='addtxt'>
                                    <a class="btn btn-outline-primary" id="addtextarea" href='#menu3'>Add More Row</a>
                                    <a class="btn btn-outline-danger" id="removetextarea" href='#menu3'>Remove Row</a>
                                </div>

                            </div>
                        </div>
                        <!--4th toggler  ends -->

                        <!--5th toggler starts here-->
                        <div class="tab-pane  fade" id="menu4">
                            <div class="row">
                                <div class="col-md-5" id="addinputtext">
                                    <input text ="text" name ="lang1" id="pl" class="form-control" placeholder="input something" required> <br>
                                    <input text ="text" name ="lang2" id="pl" class="form-control" placeholder="input something" required>

                                </div>

                                <div class="col-md-7 text-left " id='addtxt'>
                                    <a class="btn btn-outline-primary" id="addnewlang" href='#menu4'>Add More Row</a>
                                    <a class="btn btn-outline-danger" id="removeoldlang" href='#menu4'>Remove Row</a>

                                </div>

                                <div class="row mt-5 text-center p-3">
                                    <div class="col-lg-12 text-center ">
                                        <input type="submit" value="Submit your details" class="btn btn-outline-success mr-2 ml-5">
                                        <button type="reset" class="btn btn-outline-info mr-2"> Reset fields</button>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--div of tab content ends -->
                <!--tab content container cols  -->
            </div>
            </form>
            <!--tab content container rows ends -->
        </div>
        <!--container ends -->
        <!--tab container ends -->
    </div>
    <div style="height:175px;" ></div>

    <footer class="footer">
            <div class="container-fluid">
                <div class="row  ">
                <div class="col sm-12  text-center ">
                    <div class="social-icon ">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-pinterest"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-google-plus"></i></a>
                            <a href="https://dribbble.com/shubh65M"><i class="fab fa-dribbble"></i></a>
                            
                </div>
                
                <div class="copyright">
                    <p>
                        &copy; <b>CVbuider.co.in <b>
                        </p> 
            </div> 
           </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script>
        // tab 3 work goes here

        let item4 = document.querySelector('#addcol');
        let item5 = document.querySelector('#addtextarea1');
        let item6 = document.querySelector('#removetextarea1');


        item5.addEventListener('click', function () {


            let ele1 = document.createElement('textarea');
            ele1.className = 'form-control mt-2';
            ele1.placeholder = "input your further details in the box";
            item6.style.display = "inline";
            ele1.name = "experience1";

            item4.appendChild(ele1);

        });

        item6.addEventListener('click', function () {
            item4.removeChild(item4.lastChild);

        })


        // tab 4  work goes here

        let item1 = document.querySelector('#addcol1');
        let item2 = document.querySelector('#addtextarea');
        let item3 = document.querySelector('#removetextarea');


        item2.addEventListener('click', function () {


            let ele1 = document.createElement('textarea');
            ele1.className = 'form-control mt-2';
            ele1.placeholder = "input your further details in the box";
            item3.style.display = "inline";
            ele1.name = "experience1";

            item1.appendChild(ele1);

        });

        item3.addEventListener('click', function () {
            item1.removeChild(item1.lastChild);

        })

        // tab 5 work done here   

        let item7 = document.querySelector('#addinputtext');
        let item8 = document.querySelector('#addnewlang');
        let item9 = document.querySelector('#removeoldlang');


        item8.addEventListener('click', function () {


            let ele1 = document.createElement('input');
            ele1.className = 'form-control mt-2';
            ele1.placeholder = "input your further details in the box";
            ele1.type = "text";
            item9.style.display = "inline";
            item7.appendChild(ele1);

        });

        item9.addEventListener('click', function () {
            item7.removeChild(item7.lastChild);

        })
// tab 5 work ends here ..
    </script>
</body>

</html>