<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <style>
    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 2rem;
    }

    body {
        background-color: #d4d4d7;
        /* padding-bottom: 7.5rem; */
    }

    section {
        padding: 3rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .btn {
        display: inline-block;
        cursor: pointer;
        padding: 1rem 3rem;
        border: var(--border);
        font-size: 1.8rem;
        color: var(--sub-color);
        text-align: center;
        text-transform: capitalize;
        transition: .2s linear;
        margin-top: 1rem;
        background-color: var(--main-color);
    }

    .btn:hover {
        border-radius: 5rem;
        background-color: var(--sub-color);
        color: var(--main-color);
    }



    .reservation form {
        border: var(--border);
        padding: 5rem;
        color: gray;
        background-color: #ffffff;
        height: 680px;
        margin-top: 50px;
    }

    .reservation form .flex {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }
    </style>

</head>

<body>




    <!-- services section ends -->

    <!-- reservation section starts  -->

    <section class="reservation" id="reservation">



        <form action="" method="post">

            <div class="flex">

                <div class="row">
                    <div class="col-sm-12" style="width: 1070px; padding: 40px; ">
                        <div class="card" style="size:width 2500px; height: 500px; background-color:#f2f2f2">
                            <div class="card-body" style="color:black; padding-top:150px; padding-left:60px;">
                                <!-- <img src="Wayzaway_logo.png" class="rounded float-start"
                                    style="width:100px; height:100px;" alt="..."> -->

                                <h1>Imagine a place....</h1>

                                <br>

                                <div class="" style="color: gray;">
                                    <h4>Where you can tell only your friends and family about the places<br>
                                        you spent your weekends, holidays and time. A social network that<br>
                                        enhances real life connections you have with people you love</h4>

                                    <img src="people.png" alt=""
                                        style="height:300px; width: 300px; margin-left:500px; ">

                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

        </form>



    </section>

    <!-- reservation section ends -->


    <section class="reservation" id="reservation">



        <form action="" method="post">

            <div class="flex">

                <div class="row">
                    <div class="col-sm-12" style="width: 1070px; padding: 40px; ">
                        <div class="card" style="size:width 2500px; height: 500px; background-color:#f2f2f2">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </form>



    </section>

</body>

</html>