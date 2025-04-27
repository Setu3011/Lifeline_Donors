
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looking Blood</title>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <style>
        .logo {
            font-size: 50px;
            font-weight: bold;
            margin-left: 20px;
            font-family: 'Satisfy', cursive;
            background: linear-gradient(to right, rgb(245, 2, 2), rgb(245, 2, 2));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        nav {
            background-color: black;
            padding: 20px;
            margin: -20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        body {
            font-family: Arial, sans-serif;
            background: url('background.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .main1, .main2{
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .main3{
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            width: 100%;
            max-width: 900px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .q{
            width: 50px;
        }
        .form-control, select {
            font-family: Calibri;
            width: 30%;
            padding: 10px;
            margin: 5px auto;
            border: none;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.402);
        }
        .bt {
            background: linear-gradient(45deg, #800080, #ff4444);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 1rem;
        }
        .bt:hover {
            background: linear-gradient(45deg, #ff4444, #800080);
            transform: scale(1.05);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Lifeline Donor's</div>
        </nav>
    </header>

    <section class="main1">
        <h2>Want to Donate blood</h2>
        <table>
            <thead>
                <tr>
                    <th>Sr NO.</th>
                    <th>Location</th>
                    <th>Date & Time</th>
                    <th>Donate Blood</th>
                </tr>
            </thead>
            <tbody id="bloodBankTable">
                <tr>
                    <td>1</td>
                    <td>Ahemdabad Civil Hospital</td>
                    <td>23 July,2025 <br>Time : 1:00 pm</td>
                    <td><button class="bt">Donate</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Junagadh Civil Hospital</td>
                    <td>25 August,2025 <br>Time : 9:00 am</td>
                    <td><button class="bt">Donate</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Vapi Civil Hospital</td>
                    <td>19 October,2025 <br>Time : 10:00 am</td>
                    <td><button class="bt">Donate</button></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="main2">
        
        <!--    <tbody id="bloodBankTable">
                <tr><td colspan="10">No data available</td></tr>
            </tbody>
        </table> -->
        <table>
            <tbody id="bloodCamp">
                <tr><td>..</td></tr>
            </tbody>
        </table>

        <form action="">

        </form>
    </section>


     <!-- <section class="main3">
        <!-- <table>
            <thead>
                <tr>
                    <th>Hospital Name</th>
                    <th>A+</th>
                    <th>A-</th>
                    <th>B+</th>
                    <th>B-</th>
                    <th>AB+</th>
                    <th>AB-</th>
                    <th>O+</th>
                    <th>O-</th>
                </tr>
            </thead>
            <tbody id="bloodBankTable">
                <tr>
                    <td id="selectedHospitalName"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                    <td><input class="q" type="number" name="quantity" style="font-family: Calibri; width: 60%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"></td>
                </tr>
            </tbody>
        </table> -->

        <!-- <button class="bt" id="orderBtn" name="purchase">Order Now</button> -->
   <!-- </section> --> 
    <section>
        <center class="main3">
            <h2>Enter your Details</h2>
        <form action="Showinfo.php">
            <label for="">Name</label><br>
            <input type="text" placeholder="Enter your Name" name="uname" style="font-family: Calibri; width: 30%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"><br><br>
            <label for="">Age</label><br>
            <input type="number" placeholder="Enter your Age" name="age" min="18" max="60" style="font-family: Calibri; width: 30%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"><br><br>
            <label for="">Mobile Number</label><br>
            <input type="number" placeholder="Enter your Mobile Number" name="mno" style="font-family: Calibri; width: 30%; padding: 10px;margin-top: 5px;border: none;border-radius:50px; background: rgb(255,255,255,0.402);"><br><br>
            <button class="bt">Submit</button>
        </form>
        </center>
    </section>
<!-- 
    <script>
        const districtData = {
                "Ahmedabad": ["Ahmedabad City", "Bavla", "Daskroi", "Dhandhuka", "Dholera", "Dholka", "Mandal", "Sanand", "Viramgam"],
                "Amreli": ["Amreli", "Bagasara", "Dhari", "Jafrabad", "Khambha", "Kukavav", "Lathi", "Rajula", "Savarkundla"],
                "Anand": ["Anand", "Borsad", "Petlad", "Khambhat", "Sojitra", "Tarapur", "Umreth", "Anklav"],
                "Aravalli": ["Bayad", "Bhiloda", "Dhansura", "Malpur", "Meghraj", "Modasa"],
                "Banaskantha": ["Amirgadh", "Bhabhar", "Danta", "Deesa", "Dhanera", "Dantiwada", "Kankrej", "Lakhani", "Palanpur", "Suigam", "Tharad", "Vadgam", "Vav"],
                "Bharuch": ["Amod", "Ankleshwar", "Bharuch", "Hansot", "Jambusar", "Jhagadia", "Netrang", "Vagra", "Valia"],
                "Bhavnagar": ["Bhavnagar", "Botad", "Gadhada", "Ghogha", "Jesar", "Mahuva", "Palitana", "Sihor", "Talaja", "Umrala"],
                "Botad": ["Botad", "Gadhada", "Barvala", "Ranpur"],
                "Chhota Udaipur": ["Bodeli", "Chhota Udaipur", "Kavant", "Naswadi", "Pavi Jetpur", "Sankheda"],
                "Dahod": ["Dahod", "Devgad Baria", "Dhanpur", "Fatepura", "Garbada", "Limkheda", "Santrampur", "Jhalod"],
                "Dang": ["Ahwa", "Subir", "Waghai"],
                "Devbhoomi Dwarka": ["Bhanvad", "Dwarka", "Khambhalia", "Kalyanpur"],
                "Gandhinagar": ["Dehgam", "Gandhinagar", "Kalol", "Mansa"],
                "Gir Somnath": ["Gir Gadhada", "Kodinar", "Sutrapada", "Talala", "Una", "Veraval"],
                "Jamnagar": ["Dhrol", "Jamjodhpur", "Jamnagar", "Jodiya", "Kalavad", "Lalpur"],
                "Junagadh": ["Bhesan", "Junagadh", "Keshod", "Malia", "Manavadar", "Mangrol", "Mendarda", "Vanthali", "Visavadar"],
                "Kheda": ["Kheda", "Kapadvanj", "Kathlal", "Matar", "Mehmedabad", "Mahudha", "Nadiad", "Thasra", "Virpur"],
                "Kutch": ["Abdasa", "Anjar", "Bhachau", "Bhuj", "Gandhidham", "Lakhpat", "Mandvi", "Mundra", "Nakhatrana", "Rapar"],
                "Mahisagar": ["Balasinor", "Kadana", "Khanpur", "Lunawada", "Santrampur", "Virpur"],
                "Mehsana": ["Becharaji", "Jotana", "Kadi", "Kheralu", "Mehsana", "Satlasana", "Unjha", "Vijapur", "Visnagar"],
                "Morbi": ["Halvad", "Morbi", "Maliya", "Tankara", "Wankaner"],
                "Narmada": ["Dediapada", "Garudeshwar", "Nandod", "Sagbara", "Tilakwada"],
                "Navsari": ["Chikhli", "Gandevi", "Jalalpore", "Khergam", "Navsari", "Vansda"],
                "Panchmahal": ["Ghoghamba", "Godhra", "Halol", "Jambughoda", "Kalol", "Morwa Hadaf", "Shehera"],
                "Patan": ["Chanasma", "Harij", "Patan", "Radhanpur", "Sami", "Sidhpur"],
                "Porbandar": ["Kutiyana", "Porbandar", "Ranavav"],
                "Rajkot": ["Dhoraji", "Gondal", "Jamkandorna", "Jasdan", "Jetpur", "Kotda Sangani", "Lodhika", "Morbi", "Rajkot", "Upleta", "Wankaner"],
                "Sabarkantha": ["Bayad", "Dhansura", "Himatnagar", "Idar", "Khedbrahma", "Poshina", "Prantij", "Talod", "Vijaynagar"],
                "Surat": ["Bardoli", "Choryasi", "Kamrej", "Mahuva", "Mandvi", "Mangrol", "Olpad", "Palsana", "Umarpada"],
                "Surendranagar": ["Chotila", "Dhrangadhra", "Halvad", "Lakhtar", "Limbdi", "Muli", "Patdi", "Sayla", "Thangadh", "Wadhwan"],
                "Tapi": ["Dolvan", "Nizar", "Songadh", "Uchchhal", "Valod", "Vyara"],
                "Vadodara": ["Dabhoi", "Karjan", "Padra", "Savli", "Vadodara", "Waghodia"],
                "Valsad": ["Dharampur", "Kaprada", "Pardi", "Umbergaon", "Valsad", "Vapi"]
            };
            

            document.getElementById("orderBtn").addEventListener("click", function () {
                if (isLoggedIn) {
                    alert("Your order is placed successfully!");
                } else {
                    window.location.href = "loginpage.html"; // Redirect to login page
                }
            });
            


        window.onload = function () {
            const districtSelect = document.getElementById("district");
            for (const district in districtData) {
                let opt = document.createElement("option");
                opt.value = district;
                opt.textContent = district;
                districtSelect.appendChild(opt);
            }
        };

        function selectHospital(hospitalName) {
            document.getElementById("selectedHospitalName").textContent = hospitalName;
            // Optional: scroll to the purchase section
            document.querySelector(".main3").scrollIntoView({ behavior: "smooth" });
        }
        

        function updateCities() {
            const citySelect = document.getElementById("city");
            const selectedDistrict = document.getElementById("district").value;
            citySelect.innerHTML = `<option>Select City</option>`;

            if (districtData[selectedDistrict]) {
                districtData[selectedDistrict].forEach(city => {
                    let opt = document.createElement("option");
                    opt.value = city;
                    opt.textContent = city;
                    citySelect.appendChild(opt);
                });
            }
        }

        function filterResults() {
            let district = document.getElementById("district").value;
            let city = document.getElementById("city").value;

            if (district === "Select District" || city === "Select City") {
                alert("Please select district and city");
                return;
            }

            fetch(`lookblood.php?district=${encodeURIComponent(district)}&city=${encodeURIComponent(city)}`)
                .then(res => res.json())
                .then(data => {
                    const table = document.getElementById("bloodBankTable");
                    table.innerHTML = "";

                    if (data.length === 0) {
                        table.innerHTML = `<tr><td colspan="9">No data found</td></tr>`;
                        return;
                    }

                    data.forEach(row => {
                        table.innerHTML += `
                            <tr>
                                <td>${row["Hospital Name"]}</td>
                                <td>${row["A+"]}</td>
                                <td>${row["A-"]}</td>
                                <td>${row["B+"]}</td>
                                <td>${row["B-"]}</td>
                                <td>${row["AB+"]}</td>
                                <td>${row["AB-"]}</td>
                                <td>${row["O+"]}</td>
                                <td>${row["O-"]}</td>
                                <td><button class='bt' onclick="selectHospital('${row["Hospital Name"]}')">Purchase Blood</button></td>
                            </tr>
                        `;
                    });
                })
                .catch(error => {
                    console.error("Fetch error:", error);
                });
        }
    </script> -->
    <script>
    function showDonationInfo(hospitalName, dateTime) {
        const main2 = document.querySelector('.main2');
        main2.innerHTML = `
            <h2>Donation Details</h2>
            <p><strong>Hospital:</strong> ${hospitalName}</p>
            <p><strong>Date & Time:</strong> ${dateTime}</p>
            <button class="bt" onclick="confirmDonation()">Confirm Donation</button>
        `;
        main2.scrollIntoView({ behavior: "smooth" });
    }

    function confirmDonation() {
        alert("Thank you for your interest in donating blood!");
    }
</script>

    
</html>