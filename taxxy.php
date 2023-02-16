<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE CSS Sheet-->
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>TAXXY:Tax Calculator</title>

</head>

<body>
    <h1>Taxxy: A Tax Calculator</h1>

    <form>
        <div class="box">
             <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Salary:</label>
        
            <div class="col-sm-10">
                <input type="salary" class="form-control form-control-sm" id="colFormLabelSm" placeholder="">
            </div>
               
            <label>Type:</label>

                <label class="form-flex">
                        <input type="radio" id="Bi-Monthly" name="user_type" value="Bi-Monthly" checked="checked" style="margin-left: 2rem;" />
                        <span class="sub-link">Bi-Monthly</span>                       
                </label>

                <label class="form-flex">
                        <input type="radio" id="Monthly" name="user_type" value="Monthly" checked="checked" style="margin-left: 2rem;"  />
                        <span class="sub-link">Monthly</span>
                </label>
            <div class="button">
		    <button type="compute" class="btn btn-success">Compute</button>
            </div>
        </div>
       
        

        </div>
        
        


    </form>
       
        