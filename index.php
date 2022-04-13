<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Calculator</title>
</head>
<body>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="calc">
                <br> <br> <br> <br> <br>
                <h1>Calculatrice</h1>
            </div>
        </div>
    </div> -->
    
    <div class="container">
        <form class="calculatrice" name="calc" method="get" action="resultpage.php">

            <input type="text" readonly name="txt" class="value">
            <span class="num clear" onclick="calc.txt.value=''"> C</span>
            <span class="num" onclick="document.calc.txt.value+='/'" >/</span>
            <span class="num" onclick="document.calc.txt.value+='*'">*</span> 
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='7'">7</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='8'">8</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='9'">9</span>
            <span class="num minus" onclick="document.calc.txt.value+='-'">-</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='4'">4</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='5'">5</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='6'">6</span>
            <span class="num plus" onclick="document.calc.txt.value+='+'">+</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='1'">1</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='2'">2</span>
            <span class="num" name="chiffre" onclick="document.calc.txt.value+='3'">3</span> <br>
            <span class="num zero" onclick="document.calc.txt.value+='0'">0</span>
           <button type="submit" class="num equal boutton" name="boutton" 
           onclick="document.calc.txt.value =eval(calc.txt.value) ">=</button>

        </form>
    </div>


    <script type="text/javascript" src="JS/vanilla-tilt.js"></script>
    
         
    <script type="text/javascript">
	VanillaTilt.init(document.querySelector(".container"), {
		max: 25,
		speed: 400,
        glare: true,
        "max-glare": 0.2,
	});
      </script>

<!--
    <section class="py-5">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-4  boca">
                        <div class="zero"> 0 </div>
                        <i class="fas fa-circle"></i><i class="fas fa-circle"></i><i class="fas fa-circle"></i>
                    </div>
                </div>
        </div>
    </section> -->


    <!-- <script src="JS/bootstrap.bundle.min.js"></script> -->
    <script src="JS/all.min.js"></script>
    <script src="JS/calculator.js"></script>
</body>
</html>