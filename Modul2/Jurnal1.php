<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>

                    <!--  **********************  4  **************************     -->
                    <!-- Hasilnya perhitungan BMI taruh di sini yaaa!! 😊 -->
                    <!-- silakan taruh code kalian di bawah -->
                    <?php
                    if (isset($_POST['tinggi_badan'])){
                        $tinggi_badan = $_POST['tinggi_badan'];
                        $berat_badan = $_POST['berat_badan'];

                        if (empty($tinggi_badan) || empty($berat_badan)){
                            echo "Tinggi dan berat badan tidak boleh kosong!";
                        } else {
                            if (isset($_POST['submit'])){
                                $tinggi_badan = $_POST['tinggi_badan'];
                                $berat_badan = $_POST['berat_badan'];
                                $tinggi_badanfix = $tinggi_badan/100;
        
                                $bmi = $berat_badan/($tinggi_badanfix*$tinggi_badanfix);
        
                                if ($bmi <= 18.4){
                                    echo "Underweight";
                                }
        
                                if ($bmi >= 18.5 and $bmi <= 24.9 ){
                                    echo "Normal";
                                }
        
                                if ($bmi >= 25 and $bmi <= 39.9 ){
                                    echo "Overweight";
                                }
        
                                if ($bmi >= 40){
                                    echo "Obese";
                                }
                            }   
                        }
                    }
                
                    

                    
                    ?>

              
                    
                  
                                    
                    <!--  **********************  4  **************************     -->



                    <!--  **********************  5  **************************     -->
                    <!-- Hasil pesan error nya taruh di sini yaaa!! 😊  -->
                    <!-- silakan taruh code kalian di bawah -->
                    

                    <!--  **********************  5  **************************     -->


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>