<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

  <style>
    .mb-3{
        margin:1rem;
        
    }
    .p1{
        font-size:60px;
        text-align:center; 
        color:#742F68;
    }
    .btn1{

        margin-left:12rem;
        width:1050px; 
        margin-bottom:1rem;
         height:80px;
    }
    .form11{
        width:600px;
    }
    .btn11{
        margin-left:14rem; 
        margin-bottom:1rem;
        background-color:blue;
        color:white;
        height:40px;
        width:140px;
        border: 1px solid black;
        border-radius:25px;
       
    }
    .btn111{
        width:400px;
         border:1px solid #000000;
         border-radius:22px;
         background-color:blue;
         color:white;
         font-size:22px;
         padding:0.5rem;
    }
    .h1{
        text-align:center; 
        margin-top:auto;

    }



  </style>


<style>
      @media screen and (max-width:767px){
        .p1{
            font-size:22px;
            
            text-align:center;
            
        }
        .btn1{
            
            width:auto;
            height:130px;
            margin-left:-0.1rem;
            font-size:16px;



        }
        .form1{
            display:flex;
            flex-direction:column;
            width:auto;
        
        
        }
        .form11{
            width:310px;
        }
        .btn11{
           margin-left:6rem;
           background-color:blue;
           color:white;
           width:130px;
           height:40px;
        }
        .img1{
            width:80%;
        }
        .btn111{
            width:310px;
            background-color:blue;
            color:white;
           
            font-size:22px;
            margin-top:1rem;

            

        }
        .h1{
            margin-top:2rem;
        }

        }
      
    </style>






  <body>


  <?php include 'nav.php';?>

    <h1 class="h1">Total Care Policy</h1>
    <p class="p1">Instant Insurance Online</p>
    <button class=btn1 type="submit" class="btn btn-primary"><h3><strong>Call : +918105782369 or Fill below form to get a free Quote.</strong></h3></button>

<div class="form1" style="display:flex; align-items:center; justify-content:center">
<div class="form11">

<form style="background-color:#FF7518;border:1px solid #000000; border-radius:15px;" action="form.php" method="post">
    <div class="mb-3">
        <div style="padding-top:1rem;">
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name">
        </div>
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="vehiclenumber" aria-describedby="emailHelp" placeholder="Vehicle Number">
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="makenmodel" aria-describedby="emailHelp" placeholder="Make and Model">
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="contact" aria-describedby="emailHelp" placeholder="Phone Number">
    </div>

    <div class="mb-3" class="container">
        <input type="text" class="form-control" id="exampleInputEmail1" name="yom" aria-describedby="emailHelp" placeholder="Year Of Manufacture">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement">
        <label class="form-check-label" for="exampleCheck1">By clicking, you agreed to our Privacy policy, Terms of Use & Disclaimer.</label>
    </div>

    <button class="btn11" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<img class="img1" src="assests/images/loannew.webp">

</div>




<div >
<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-right:1rem;">
  <button class="btn111" class="btn btn-primary me-md-2" type="button">For Any Assistance<br> Click Me</button>
  
</div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


<script src="assests/js/snippet.js"></script>


<?php include 'footer.php';?>
  </body>
</html>