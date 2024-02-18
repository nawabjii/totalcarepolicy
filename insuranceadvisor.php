<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Claim Assistance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
  <body>

  <?php include 'nav.php';?>
   <style>
    .iaf{
      width:600px;


    }
    .btn11{
      margin-left:11rem; 
      margin-bottom:1rem;
       width:180px;
    }
    .btn{
      width:400px;
       border:1px solid #000000;
        border-radius:20px;
    }
    .ratimg{
      width:230px; 
      margin-left:9.5rem;
      padding:0.8rem;

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




    @media (max-width: 768px) {
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
            margin-left: 2rem;

            

        }


    }

    @media (min-width: 1024px) {
    .hidend{
        display: none;
    }
  }
  

   </style>

<!--
  <h1 style="text-align:center; margin-top:4rem; ">Claim Assistance</h1>
  <p style="font-size:22px; text-align:center;">Don't worry, we are here to help you.</p>
-->

<div class="hidend">
<h1 style=" text-align:center; width:auto; margin-top:1rem;">Claim Assistance</h1>
  <p style="font-size:18px;text-align:center;width:auto;">Don't worry, we are here to help you.</p>

<div class="form1" style="display:flex; align-items:center; justify-content:center">
<div class="form11" >

    <form style="background-color:#FF7518;border:1px solid #000000; border-radius:15px;padding:1rem;" action="advisorform.php" method="post" >
    <div class="mb-3">
    <div style="padding-top:1rem;">
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
</div>
  </div>
  <div class="mb-3">
    
    <input type="text" name="vehiclenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vehicle Number">
  
  </div>
  <div class="mb-3">
    
    <input type="text" name="makenmodel" class="form-control" id="exampleInputPassword1" placeholder="Make & Model">
  </div>


<div class="mb-3" class="container">
   
    <input type="text" name="policynumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Policy Number">
    
  </div>


  <div class="mb-3" class="container">
    
    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number" >
    
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agreement">
    <label class="form-check-label" for="exampleCheck1"><p style="font-size:11px; color:white">By clicking, you agreed to our Privacy policy, Terms of Use & Disclaimer.</p></label>
  </div>
  <button class="btn11" type="submit" class="btn btn-primary" ><strong>Submit</strong></button>
  <h4 style="text-align:center; color:white">We are rated~</h4>
  <img class="ratimg" src="assests/images/shining_stars.webp" >
</form>
</div>
<img class="hideimg" src="assests/images/loannew.webp">

</div>

<!--
<div class="assbut">
<div  class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-right:1rem;">
  <button class="btn btn-primary me-md-2" type="button">For Any Assistance<br> Click Me</button>
  
</div>
</div>
  -->

  <div class="assbut">
  <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-right: 1rem;">
    <button class="btn btn-primary me-md-2" type="button">For Any Assistance<br> Click Me</button>
  </div>
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-right:1rem;">
  <button class="btn111" class="btn btn-primary me-md-2" type="button">For Any Assistance<br> Click Me</button>
  
</div>


<div class=hidenm style="text-align:center; margin-top:2rem;">
    <h1>
    Our Claim Assistance Process

    </h1>
    <p style="font-size:19px; color:#37444E; ">Claims assistance is a service provided by professionals who are responsible for mailing claims checks, and filing and processing claims into the <br>company's system. In easy words, we stand strong and fight for you and your loved ones to ensure that your loved ones claim every asset of yours.

</p>

</div>

<!-- for mobile view-->


<div style="width:auto; text-align:center;margin-top:2rem;">
    <h1>
    Our Claim Assistance Process

    </h1>
    <p>Claims assistance is a service provided by professionals who are responsible for mailing claims checks, and filing and processing claims into the <br>company's system. In easy words, we stand strong and fight for you and your loved ones to ensure that your loved ones claim every asset of yours.

</p>

</div>






<div class="hidenm" style="margin-top:4rem;">
<div style="display:flex; justify-content:center; margin-left:43rem;">
        <img src="assests/images/correct.png" class="rounded-pill" alt="..." style="width:40px; height:40px; margin-right:2rem; margin-top:2rem;"> 
        
            <div style=" text-align:center; border:2px solid orange; border-radius:50px;margin-right:10rem;  box-shadow: 2px 2px 2px 2px #888888;">
            <h3>Register</h3>
            <p  style="font-size:17px ;color:#74747A;">
            Provide essential personal and policy information for quick identification.</p>
        </div>
        
      </div>
      <div style="border-left: 6px dotted green; height: 100px; margin-left:44rem; margin-top:-1.7rem;">

        </div>

        <div style="display:flex; margin-top:-1rem;">
         
        <div style=" text-align:center; border:2px solid orange; border-radius:50px; width:500px; margin-left:10rem;  box-shadow: 2px 2px 2px 2px #888888;"> 
        <h3>Documentation</h3>
            <p style="font-size:17px; color:#74747A; padding:2px">
            Ensure the documentation is accurate and complete to expedite the claim review process.</p>
        </div>
        <div style="width:50%">
        <img src="assests/images/correct.png" class="rounded-pill" alt="..." style="width:40px; height:40px; margin-left:1.7rem; margin-top:1.6em;">
</div>
        
      </div>



      <div style="border-left: 6px dotted green; height: 100px; margin-left:44rem; margin-top:-2.4rem;">

        </div>


        <div style="display:flex; justify-content:center; margin-left:43rem; margin-top:-0.8rem;">
        <img src="assests/images/correct.png" class="rounded-pill" alt="..." style="width:40px; height:40px; margin-right:2rem; margin-top:1.5rem;"> 
        
            <div style=" text-align:center; border:2px solid orange; border-radius:50px;margin-right:10rem; box-shadow: 2px 2px 2px 2px #888888;">
            <h3>Claim Processing</h3>
            <p  style="font-size:17px ;color:#74747A; padding:8px;">
            Receive timely notifications acknowledging receipt of your claim.</p>
        
        </div>
      </div>
      <div style="border-left: 6px dotted green; height: 100px; margin-left:44rem; margin-top:-2.4rem;">

        </div>

        <div style="display:flex;margin-top:-1rem;">
         
        <div class="hidenm" style=" text-align:center; border:2px solid orange; border-radius:50px; width:500px; margin-left:10rem; box-shadow: 2px 2px 2px 2px #888888;"> 
        <h3>Claim Settlement</h3>
            <p style="font-size:17px; color:#74747A;padding:2px">
            Once the claim is approved, receive prompt notification of the settlement decision.</p>
        </div>
        <div style="width:50%">
        <img src="assests/images/correct.png" class="rounded-pill" alt="..." style="width:40px; height:40px; margin-left:1.7rem; margin-top:1.6em;">
</div>
        
      </div>

</div>

</div>











<div class="hidenm">

<h1 style="text-align:center; margin-top:4rem;">Claim Assistance</h1>
  <p style="font-size:22px; text-align:center;">Don't worry, we are here to help you.</p>
<div style="display:flex; align-items:center; justify-content:center">
<div style="width:600px; ">

    <form style="background-color:#FF7518; margin:2rem;border:1px solid #000000; border-radius:15px;padding:1rem;" action="advisorform.php" method="post">
    <div class="mb-3">
    <div style="padding-top:1rem;">
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
</div>
  </div>
  <div class="mb-3">
    
    <input type="text" name="vehiclenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vehicle Number">
  
  </div>
  <div class="mb-3">
    
    <input type="text" name="makenmodel" class="form-control" id="exampleInputPassword1" placeholder="Make & Model">
  </div>


<div class="mb-3" class="container">
   
    <input type="text" name="policynumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Policy Number">
    
  </div>


  <div class="mb-3" class="container">
    
    <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number" >
    
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
<img src="assests/images/loannew.webp">

</div>
<div >
<div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-right:1rem;">
  <button class="btn btn-primary me-md-2" type="button" style="width:400px; border:1px solid #000000; border-radius:20px;">For Any Assistance<br> Click Me</button>
  
</div>
</div>





<div style="text-align:center; margin-top:2rem;">
    <h1>
    Our Claim Assistance Process

    </h1>
    <p style="font-size:19px; color:#37444E;">Claims assistance is a service provided by professionals who are responsible for mailing claims checks, and filing and processing claims into the <br>company's system. In easy words, we stand strong and fight for you and your loved ones to ensure that your loved ones claim every asset of yours.

</p>

</div>
</div>




  <div class="hidend" style="margin-top: 2rem;">
  <div style="justify-content: center;">
    <div style="align-items: center; text-align: center;">
      
      <div style="border: 2px solid orange; border-radius: 50px; padding: 1rem; box-shadow: 2px 2px 2px 2px #888888; width:auto; height:150px;">
        <h3>Register</h3>
        <p style="font-size: 17px; color: #74747A;">Provide essential personal and policy information for quick identification.</p>
      </div>
    </div>
  
    <div style=" text-align: center; margin-top:1rem;">
      
      <div style="border: 2px solid orange; border-radius: 50px; padding: 1rem; box-shadow: 2px 2px 2px 2px #888888; width:auto; height:180px;">
        <h3>Documentation</h3>
        <p style="font-size: 17px; color: #74747A;">Ensure the documentation is accurate and complete to expedite the claim review process.</p>
      </div>
    </div>
  </div>
  
  <div style=" justify-content: center; margin-top: 1rem;">
    <div style="display: flex; align-items: center; text-align: center;">
     
      <div style="border: 2px solid orange; border-radius: 50px; padding: 1rem; box-shadow: 2px 2px 2px 2px #888888; width:auto; height:150px;">
        <h3>Claim Processing</h3>
        <p style="font-size: 17px; color: #74747A;">Receive timely notifications acknowledging receipt of your claim.</p>
      </div>
    </div>
  
    <div style=" align-items: center; text-align: center; margin-top:1rem;">
      
      <div style="border: 2px solid orange; border-radius: 50px; padding: 1rem; box-shadow: 2px 2px 2px 2px #888888; width:auto; height:150px;">
        <h3>Claim Settlement</h3>
        <p style="font-size: 17px; color: #74747A;">Once the claim is approved, receive prompt notification of the settlement decision.</p>
      </div>
    </div>
  </div>
</div>




<div style="text-align:center; margin-top:45px">
    <h2>
    Frequently Asked Questions
    </h2></div>

<div class="hidend" style=" margin-top:2rem;width:auto;">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item" style="margin-bottom: 1rem; border: 2px solid #74747A; border-radius: 15px;">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border-radius: 16px;">
          How long will the whole process take?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          The time period depends on your claim but we make sure to get it done as soon as possible for you whilst also giving you live updates from our end.
        </div>
      </div>
    </div>
    <!-- Add more accordion items as needed... -->
    <div class="accordion-item"  style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header" >
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border-radius:16px">
      What information will I need when lodging a claim?

      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        For the initial process you don't need any hassle of serious documentation, just fill in the form and our claim assistant manager will reach out to you and will take care of the rest.</div>
    </div>
  </div>
  <div class="accordion-item"  style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border-radius:16px">
      Shall I be in person or is it an Online process?

      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        YOU get to decide this, we can take care of the entire process online and you can also rely on our team to reach you out personally. </div>
    </div>
  </div>
  <div class="accordion-item"  style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree" style="border-radius:16px">
      How to get in touch with Total Care Policy for any queries?

      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      We will be more than happy to resolve any of your queries, You can email us at anil@totalcarepolicy.com</div>
  </div>



</div>



  </div>
</div>

<style>
  .accordion-item {
    border: 2px solid #74747A;
    border-radius: 15px;
    margin-bottom: 1rem;
  }

  .accordion-button {
    border-radius: 16px;
  }
</style>










    <div class="hidenm" style="width:80%; margin-left:8rem;">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item" style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  style="border-radius:16px">
      How long will the whole process take?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      The time period depends on your claim but we make sure to get it done as soon as possible for you whilst also giving you live updates from our end.</div>
    </div>
  </div>
  <div class="accordion-item"  style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header" >
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border-radius:16px">
      What information will I need when lodging a claim?

      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        For the initial process you don't need any hassle of serious documentation, just fill in the form and our claim assistant manager will reach out to you and will take care of the rest.</div>
    </div>
  </div>
  <div class="accordion-item"  style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border-radius:16px">
      Shall I be in person or is it an Online process?

      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        YOU get to decide this, we can take care of the entire process online and you can also rely on our team to reach you out personally. </div>
    </div>
  </div>
  <div class="accordion-item"  style="margin-bottom:1rem; border: 2px solid #74747A; border-radius:15px">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree" style="border-radius:16px">
      How to get in touch with Total Care Policy for any queries?

      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      We will be more than happy to resolve any of your queries, You can email us at anil@totalcarepolicy.com</div>
  </div>

</div>
</div>


</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


<script src="assests/js/snippet.js"></script>
    <?php include 'footer.php';?>
  </body>
</html>