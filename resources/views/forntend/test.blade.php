<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover to Animate JSON Icon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #animationBox {
            position: relative;
            max-width: 200px;
            max-height: 200px;
            margin: 50px auto;
            border: 2px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
        }
        #animationContainer {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">JSON Animation from Image Tag</h1>
        <div class="form-group text-center">
            <img id="jsonImage" src="icon.png" data-json-path="{{ asset('frontend/assets/json_file/alphabet_a_lottie.json')}}" alt="Animation" class="img-fluid" style="cursor: pointer;">
        </div>
        <div id="animationBox" class="d-none">
            <div id="animationContainer"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.9/lottie.min.js"></script>
    <script>
        let animation = null;
        document.getElementById('jsonImage').addEventListener('click', function () {
            const jsonPath = this.getAttribute('data-json-path');
            console.log(jsonPath);
            if (jsonPath) {
                fetch(jsonPath)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(animationData => {
                        if (animation) {
                            animation.destroy();
                        }
                        animation = lottie.loadAnimation({
                            container: document.getElementById('animationContainer'),
                            renderer: 'svg',
                            loop: true,
                            autoplay: true,
                            animationData: animationData
                        });
                        document.getElementById('animationBox').classList.remove('d-none');
                        const animationBox = document.getElementById('animationBox');
                        animationBox.addEventListener('mouseenter', function () {
                            animation.goToAndPlay(0, true);
                        });
                    })
                    .catch(error => console.error('Error loading JSON:', error));
            }
        });
    </script>
</body>
</html>
