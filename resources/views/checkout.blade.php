<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購物車</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/checkout.css">

</head>

<body>
    <main id="checkout">
        <div class="container">
            <div class="content row m-auto p-5">
                <h1>購物車</h1>
                <!-- 進度條 開始 -->
                <div class="progress-block my-5">
                    <div class="progress_wrapper">
                        <div class="step_item">
                            <div class="step grey" data-tex="確認購物車">
                                <div class="box">1</div>
                            </div>
                        </div>

                        <div class="step_item">
                            <div class="step grey" data-tex="確認購物車">
                                <div class="box">2</div>
                            </div>
                        </div>

                        <div class="step_item">
                            <div class="step grey" data-tex="確認購物車">
                                <div class="box">3</div>
                            </div>
                        </div>

                        <div class="step_item">
                            <div class="step grey" data-tex="確認購物車">
                                <div class="box">4</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- 進度條 結束-->
                <!-- 訂單明細 -->
                <div class="detail">
                    <span>訂單明細</span>
                </div>

            </div>
        </div>
    </main>


    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/48055bd9f0.js" crossorigin="anonymous"></script>
</body>

</html>