<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </head>
  <body>

  <?php include 'nav.php';?>

<style>
  .promob{ 
    background-color:#C0C0CF;
    margin-left:17rem;
    margin-right:17rem;
    height:60px;
    text-align:center;
    margin-top:4rem;
    border:1px solid #ffffff;
    border-radius:30px;
  }
  @media (max-width: 768px) {
    .hidenm{
      display:none;
    }

    .iaf{
        width:310px;
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
          margin-left:3rem;
          
        }
        .ratimg{
          
          margin-left:1rem;

        }
        .hideimg{
          display:flex;
        }
        .assbut{
          display:none;}

        .hidenm{
          display:none;
        }

        .btn111{
            width:auto;
            background-color:blue;
            color:white;
           
            font-size:22px;
            margin-top:1rem;
            margin-left:1rem;

            

        }





  }

  .ratimg{
      width:230px; 
      margin-left:9.5rem;
      padding:0.8rem;

    }

 @media(min-width:1024px){
  .hidend{
    display:none;
  }

 }



</style>





<div class="hidenm">
   
        <h2 style="text-align:center;margin-top:0.5rem; border:1px solid black; border-radius:25px;background-color:blue;margin-top:1rem;width:800px;height:60px;color:white;margin-left:20rem; ">Fill The Below Form To Take Guidance From Us</h2>
    


    <div style="display:flex; align-items:center; justify-content:center">
<div style="width:600px; ">

    <form style="background-color:#FF7518; margin:2rem;border:1px solid #000000; border-radius:15px;padding:1rem;" action="productform.php" method="post">
    <div class="mb-3">
    <div style="padding-top:1rem;">
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
</div>
  </div>
  

  <div class="mb-3" class="container">
    
    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number" >
    
  </div>

  <div style="margin-bottom:1rem;">
  <select name="services" class="form-select" aria-label="Default select example">
  <option selected>Select Services</option>
  <option value="1">Health Insurance</option>
  <option value="2">Life Insurance</option>
  <option value="3">Home Insurance</option>
  <option value="3">Travel Insurance</option>
  <option value="3">Marine Insurance</option>
</select>
</div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement">
    <label class="form-check-label" for="exampleCheck1"><p style="font-size:11px; color:white">By clicking, you agreed to our Privacy policy, Terms of Use & Disclaimer.</p></label>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:11rem; margin-bottom:1rem; width:180px;"><strong>Submit</strong></button>
  <h4 style="text-align:center; color:white">We are rated~</h4>
  <img src="assests/images/shining_stars.webp" style="width:230px; margin-left:9.5rem;padding:0.8rem;">
</form>
</div>
</div>

</div>








<div class="hidend">
<h1 style=" text-align:center; width:auto; background:blue; color:white; border: 1px solid #000000; border-radius:25px">Fill The Below Form To Take Guidance From Us</h1>

<div class="form1" style="display:flex; align-items:center; justify-content:center">
<div class="form11" >

    <form style="background-color:#FF7518;border:1px solid #000000; border-radius:15px;padding:1rem;" action="productform.php" method="post" >
    <div class="mb-3">
    <div style="padding-top:1rem;">
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
</div>
  </div>
  

  <div class="mb-3" class="container">
    
    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number" >
    
  </div>
  <div style="margin-bottom:1rem;">
  <select name="services"  class="form-select" aria-label="Default select example">
  <option selected>Select Services</option>
  <option value="1">Health Insurance</option>
  <option value="2">Life Insurance</option>
  <option value="3">Home Insurance</option>
  <option value="3">Travel Insurance</option>
  <option value="3">Marine Insurance</option>
</select>
</div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement">
    <label class="form-check-label" for="exampleCheck1"><p style="font-size:11px; color:white">By clicking, you agreed to our Privacy policy, Terms of Use & Disclaimer.</p></label>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:3rem; margin-bottom:1rem; width:180px;"><strong>Submit</strong></button>
  <h4 style="text-align:center; color:white">We are rated~</h4>
  <img src="assests/images/shining_stars.webp" style="width:230px; margin-left:2rem;padding:0.8rem;">
</form>
</div>
</div>

















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="assests/js/snippet.js"></script>


<?php include 'footer.php';?>
  </body>
</html>