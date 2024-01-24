<?php
 $title = "Careers | Panamed Philippines Inc."; 
 require_once 'component/import.php';
 require_once 'component/header.php';
 require_once 'component/navbar.php';
 ?>
 <style>
        .thank-you {
            position: relative;
            display: block;
            width: 100%;
            height: 80vh;
            text-align: center;
        }
        .thank-you h1{
            color:#616161 !important;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 0px;
            
        }
        .thank-you p{
            color:#616161 !important;
        }
        .thank-you .message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .thank-you .btn-get-started {
        font-size: 14px;
        background: #68A4C4!important;
        padding: 10px 15px!important;
        margin: 0px;
        color: #ffffff;
        }
        a .btn {
            color:white!important;
        }
    </style>
  <body>  
      <main>
      <?php (require_once 'component/navbar.php'); ?>
      <section class="thank-you">
      <div class="container">
    <div class="">
        <div class="message">
            <h1 style="font-size: 50px">Thank You !</h1>
            <p>Your message was sent successfully</p>
            </ul>
            <a href="home" class="btn-get-started waves-effect waves-light" type="button" >Back to Home</a>
        </div>
    </div>
    </div>
  </section>
      <?php include_once 'component/footer.php';?>
    </main>
  </body>