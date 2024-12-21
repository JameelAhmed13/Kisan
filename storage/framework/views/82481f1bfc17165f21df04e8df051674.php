<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Promotion and expansion of olive cultivation in Balochistan</title>

    <meta name="description" content="Promotion and expansion of olive cultivation in Balochistan" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Montserrat";
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <!--Start Main Header Two-->
    <header class="main-header main-header-one main-header-two">
        <div class="main-header-two__top">
            <div class="container-fluid p-0">
                <div class="main-header-two__top-inner container-fluid">
                    <div class="count-down row w-100 p-0">
                        <div class="col-lg-2 col-md-3 col-12 p-0 d-flex justify-content-center align-items-center">
                            <img src="<?php echo e(asset('assets/images/avatar/logo.png')); ?>" alt="" width="100">
                        </div>
                        <div class="col-lg-8 col-md-6 col-12 d-flex justify-content-center align-items-center ">
                            <!-- <h1>Countdown Timer</h1> -->
                            <div style="font-size: 20px">Online Registration Portal</div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-12 d-flex justify-md-content-end justify-content-center align-self-center mb-md-0 mb-2">

                            <a class="btn btn-mg-lg btn-sm btn-success me-2" href="<?php echo e(route('kissan.form')); ?>"><span class="p-1"> Registration</span> </a>
                            <a class="btn btn-lg-lg btn-sm btn-warning ms-2" href="<?php echo e(route('login')); ?>"> <span class="pr-1">Sign In</span> </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Top-->
    </header>
    <!--End Main Header -->
    <div class="card">
        <div class="car-header">
            <h3 class="text-center mt-2">Registration Form</h3>
        </div>
        <form action="">
            <div class="card-body row">
                <div class="col-6 mb-3">
                    <label for="cnic" class="form-label">Cnic</label>
                    <input type="text" class="form-control" id="cnic" placeholder="54400-0000000-0" onchange="handleCnic(this)">
                </div>
                <div class="col-6 mb-3" id="cnicImages"></div>
                <div class="col-12 mb-3" id="basicInfo"></div>
                <div class="col-12 mb-3" id="ntnInfo"></div>
                <div class="col-12 mb-3" id="provinceInfo"></div>
            </div>
        </form>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" referrerpolicy="no-referrer"></script><script>
    $(document).ready(function(){
        $('#cnic').mask('00000-0000000-0');
    });

    function handleCnic(cnic){
        let cnicNumber = cnic.value;
        if (cnicNumber.length == 15){
            $.ajax({
                url: "<?php echo e(route('kissan.checkingCnic')); ?>",
                data: {"cnic" : cnicNumber},
                success: function(result){
                    console.log(result)
                    $('#cnicImages').html('<div class="row">' +
                        '<div class="col-6">' +
                        '<label for="cnicFrontImage" class="form-label">Cnic Front Image</label>'+
                        '<input type="file" class="form-control" id="cnicFrontImage">' +
                        '</div>'+
                        '<div class="col-6">' +
                        '<label for="cnicBackImage" class="form-label">Cnic Back Image</label>'+
                        '<input type="file" class="form-control" id="cnicBackImage">' +
                        '</div>'
                    );

                    $('#basicInfo').html('<div class="row">' +
                        '<div class="col-6 mb-3">' +
                        '<label for="name" class="form-label">Name</label>'+
                        '<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">' +
                        '</div>'+
                        '<div class="col-6 mb-3">' +
                        '<label for="fatherName" class="form-label">Father/Husband Name</label>'+
                        '<input type="text" class="form-control" name="fatherName" id="fatherName" placeholder="Enter Father Name">' +
                        '</div>'+
                        '<div class="col-6 mb-3">' +
                        '<label for="phoneNo" class="form-label">Phone No</label>'+
                        '<input type="number" class="form-control" name="phoneNo" id="phoneNo" placeholder="Enter Phone No">' +
                        '</div>'+
                        '<div class="col-6 mb-3">' +
                        '<label for="mobileNo" class="form-label">Mobile No</label>'+
                        '<input type="number" class="form-control" name="mobileNo" id="phoneNo" placeholder="Enter Mobile No">' +
                        '</div>'+
                        '<div class="col-6 mb-3">' +
                        '<label for="isNtn" class="form-label">Is Ntn</label>' +
                        '<br/>'+
                        '<div class="form-check form-check-inline"> '+
                        '<input class="form-check-input" type="radio" name="isNtn" id="inlineRadio1" value="0" onchange="handleIsNtn(this)" '+
                        'label class="form-check-label" for="inlineRadio1">Yes</label>'+
                        '</div>'+
                        '<div class="form-check form-check-inline">'+
                        '<input class="form-check-input" type="radio" name="isNtn" id="inlineRadio2" value="1" checked onchange="handleIsNtn(this)">'+
                        '<label class="form-check-label" for="inlineRadio2">No</label>'+
                        '</div>'+
                        '</div>'

                    );
                }});
        }
        else {
            $('#cnicImages').html('')
            $('#basicInfo').html('')

        }
    }

    function handleIsNtn(ntn){
        let ntnNo = ntn.value;
        if (ntnNo == 0){
            $('#ntnInfo').html('<div class="row">' +
                '<div class="col-6 mb-3">' +
                '<label for="ntnNo" class="form-label">Ntn No</label>'+
                '<input type="number" class="form-control" name="ntnNo" id="ntnNo" placeholder="Enter Ntn No">' +
                '</div>'+
                '<div class="col-6 mb-3">' +
                '<label for="ntnAttachment" class="form-label">Ntn No</label>'+
                '<input type="file" class="form-control" name="ntnAttachment" id="ntnAttachment" placeholder="Enter Ntn No">' +
                '</div>'
            )

            $('#provinceInfo').html('<div class="row">' +
                '<div class="col-6 mb-3">' +
                '<label for="ntnNo" class="form-label">Ntn No</label>'+
                '<input type="number" class="form-control" name="ntnNo" id="ntnNo" placeholder="Enter Ntn No">' +
                '</div>'+
                '<div class="col-6 mb-3">' +
                '<label for="ntnAttachment" class="form-label">Ntn No</label>'+
                '<input type="file" class="form-control" name="ntnAttachment" id="ntnAttachment" placeholder="Enter Ntn No">'
            )
        }
        if(ntnNo == 1){
            $('#ntnInfo').html();
            $('#ntnInfo').html('<h3 style="color: red"> You Need To Register Ntn Before Moving Forward </h3>')
        }

    }
</script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Kisan\resources\views/admin/kisan/form.blade.php ENDPATH**/ ?>