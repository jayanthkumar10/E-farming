<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Step Progress Bar</title>
    <link rel="stylesheet" href="progress.css">
    <style>
        body{
            background: aliceblue;
        }
        .container-1{
            display: flex;
            padding: 2rem;
        }

        .container-2{
            width: 30vw;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .container-1 button{
            padding: 1.3rem 1rem;
            border: none;
            background-color: deeppink;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;

        }

        .container-3{
            padding-left: 2rem;
        }

        #text-1{
            font-size: 2rem;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <div class="container-1">
        <div class="container-2">
            <button onclick="onLocClick(1)">Mangalgiri</button>
            <button onclick="onLocClick(2)">Vijayawada</button>
            <button onclick="onLocClick(3)">Guntur</button>
        </div>
        <div class="container-3">
            <p id="text-1">Welcome To Maps</p>
        <iframe 
        
            id="map-container-1"
            src="" 
            width="800" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <iframe 
            id="map-container-2"
            src="" 
            width="800" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
    </div>

    <script>
        let hLink = [
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d244954.53797888444!2d80.41457298873303!3d16.403753955791014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.5005186!2d80.6215903!4m5!1s0x3a35f1dca0f89323%3A0x15429b51232d3d9c!2snearest%20fertilizer%20store!3m2!1d16.4321318!2d80.5669064!5e0!3m2!1sen!2sin!4v1651341724072!5m2!1sen!2sin',
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d122448.21133743363!2d80.51806270291!3d16.449866123412725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.5005186!2d80.6215903!4m5!1s0x3a35f58c36193dc5%3A0x14a569ce4ec3f001!2sSUREKHA%20FERTILIZER%2C%20Near%20NTR%20Statue%2C%20Kaza%2C%20Andhra%20Pradesh%20522503!3m2!1d16.3883235!2d80.5417054!5e0!3m2!1sen!2sin!4v1651341784758!5m2!1sen!2sin',
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d244943.28486947043!2d80.40081738925416!3d16.412692683337823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.5005186!2d80.6215903!4m5!1s0x3a358b9f5cefc96f%3A0x410069883861e869!2sGREEN%20YARD%20ORGANIC%20VERMICOMPOST%2C%20Mahatma%20Gandhi%20Inner%20Ring%20Rd%2C%20near%20Ramasethu%20bashyam%20school%2C%20Guntur%2C%20Andhra%20Pradesh%20522034!3m2!1d16.3290611!2d80.4472598!5e0!3m2!1sen!2sin!4v1651341847249!5m2!1sen!2sin',
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d980015.796537338!2d80.00765569801038!3d16.36444879554951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.5005186!2d80.6215903!4m5!1s0x3a4a7552740affad%3A0x21e7ac0e00219116!2sKrishnasai%20Enterprises%2C%20Patnam%20Bazar%20Rd%2C%20Lalapet%2C%20Guntur%2C%20Andhra%20Pradesh%20522003!3m2!1d16.2902001!2d80.44441859999999!5e0!3m2!1sen!2sin!4v1651341891267!5m2!1sen!2sin',
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d122427.58195654293!2d80.50025829171241!3d16.482527152860282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.4659784!2d80.5073328!4m5!1s0x3a35efb4f3caa307%3A0x13795575b393b1f7!2sShop%20No.%202%2F47%2C%20Jaya%20Lakshmi%20Fertilizers%2C%20Mahatma%20Gandhi%20Wholesale%20Commercial%20Complex%2C%20Vijayawada%20Bypass%20Rd%2C%20Mahendra%20Nagar%2C%20Gollapudi%2C%20Vijayawada%2C%20Andhra%20Pradesh%20521225!3m2!1d16.538196!2d80.5905549!5e0!3m2!1sen!2sin!4v1651383870633!5m2!1sen!2sin',
            'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d122433.71083600161!2d80.50803300323427!3d16.472830309010078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.4659784!2d80.5073328!4m5!1s0x3a35fab1403de667%3A0xaa951925f7770005!2sRashtriya%20Chemicals%20%26%20Fertilizers%20Limited%2C%20RCF%20Ltd.%2C%20D.%20No.30-2-17%2C%20First%20Floor%2C%20Murthy%20Street%2C%20Vijaya%20Talkies%2C%20Backside%2C%20Eluru%20Rd%2C%20Vijayawada%2C%20520002!3m2!1d16.518236299999998!2d80.6484577!5e0!3m2!1sen!2sin!4v1651383925962!5m2!1sen!2sin',
        ]
        let mapContainer1 = document.getElementById("map-container-1")
        let mapContainer2 = document.getElementById("map-container-2")
        let textContainer = document.getElementById("text-1")

        const onLocClick = (loc) =>{

            switch (loc){
                case 1: 
                    mapContainer1.src = hLink[0]
                    mapContainer2.src = hLink[1]
                    textContainer.innerHTML = "Mangalgiri"
                    break
                case 2: 
                    mapContainer1.src = hLink[2]
                    mapContainer2.src = hLink[3]
                    textContainer.innerHTML = "Vijayawada"
                    break
                case 3: 
                    mapContainer1.src = hLink[4]
                    mapContainer2.src = hLink[5]
                    textContainer.innerHTML = "Guntur"
                    break
            }
        }
    </script>
</body>