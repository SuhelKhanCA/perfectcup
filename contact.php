<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Conctact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
    <script type="text/javascript">
    $(document).ready(function () {

        $("#contact").click(function () {

            fname = $("#fname").val();
            email = $("#email").val();
            message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "sendmsg.php",
                data: "fname=" + fname + "&email=" + email + "&message=" + message,
                success: function (html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
                                             <strong>Message Sent!</strong> \ \
                                             </div>');

                    } else if (html == 'fname_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                             </div>');
                    
                    } else if (html == 'fname_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>First Name</strong> must exceed 2 characters. \ \
                                             </div>');
                                             
                    } else if (html == 'email_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must cannot exceed 50 characters. \ \
                                             </div>');
                    
                    } else if (html == 'email_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must exceed 2 characters. \ \
                                             </div>');
                                             
                    } else if (html == 'eformat') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> format incorrect. \ \
                                             </div>');
                                             
                    } else if (html == 'message_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must cannot exceed 50 characters. \ \
                                             </div>');
                    
                    } else if (html == 'message_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must exceed 2 characters. \ \
                                             </div>');


                    } else {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Error</strong> processing request. Please try again. \ \
                                             </div>');
                    }
                },
                beforeSend: function () {
                    $("#add_err2").html("loading...");
                }
            });
            return false;
        });
    });
</script>

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">MH Hall Melrose Place | AMU ALigarh, UP 202002 | 123.456.7890</div>

    <!-- Navigation -->
    <?php include_once 'nav.php' ?>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>The Perfect Cup</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7750.540254986178!2d78.07584659147274!3d27.91163273036144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a4e5bcbc4b51%3A0xdada713733d0e998!2sAligarh%20Muslim%20University!5e0!3m2!1sen!2sin!4v1725173023065!5m2!1sen!2sin' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></div>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">suhel.hata@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>MH Hall
                            <br>Aligarh AMU Campus, UP 202002</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">                           
                                <button type="submit"  id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2024</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
