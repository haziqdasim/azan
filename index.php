<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZAN - Waktu Solat </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background-color: white;
            color: black;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('assets/bg.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .active-prayer {
            border: 2px solid #00d4ff;
            background: rgba(0, 212, 255, 0.1);
            transform: scale(1.05);
        }

        .card {
            border-radius: 16px;
            height: 200px;
        }

        .bg-primary-solid {
            background-color: #0268a2 !important;
            color: white !important;
            transition: all 0.4s ease;
            transform: scale(1.02);
            z-index: 2;
        }

        .bg-primary-solid .opacity-50,
        .bg-primary-solid .btn-outline-secondary,
        .bg-primary-solid hr {
            color: white !important;
            border-color: white !important;
            opacity: 1 !important;
        }

        .bg-primary-solid .badge {
            background-color: white !important;
            color: #0268a2 !important;
        }

        .glass-card {
            /* The "Glass" effect */
            background: rgba(255, 255, 255, 0.15); /* Translucent white */
            backdrop-filter: blur(12px) saturate(180%); /* The blur + color boost */
            -webkit-backdrop-filter: blur(12px) saturate(180%);
            
             
            
            /* "Liquid" Sheen */
            background: linear-gradient(
                135deg, 
                rgba(255, 255, 255, 0.2) 0%, 
                rgba(255, 255, 255, 0.05) 100%
            );
        }

        .bebas{
            font-family: bebas;
        }

        .card-body{
            align-content: center;
        }

    </style>
</head>

<body class="vh-100 d-flex align-content-between flex-wrap p-2">

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md">
                <div class="glass-card rounded-5 p-4 mx-auto">
                    <div class="d-flex row g-2 justify-content-center fw-bold">
                        <div class="col-md-6 align-self-center">
                            <div class="text-start">
                                <img src="assets/logo.png" alt="logo" width="200">
                                <span class="fw-bold fs-5">Waktu Solat 🕋</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <span class="h3 fw-bolder" id="masihiDate">-- --- ----</span><br>
                                <span class="h4 text-primary" id="hijriDate">-- --- ----</span> <span class="h5 text-primary">Hijrah</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <div class="container content-wrapper position-relative">
            <span class="badge rounded-pill border px-4 py-3 mb-4 text-primary">
                <i class="fs-5 fa-solid fa-mosque me-1"></i>
                <span class="h6">Portal Waktu Solat</span>
            </span>
            <h1 class="fw-bolder text-navy" style="font-size: 96px;">
                Waktu Solat 🕋
            </h1>
            <p class="lead text-muted mb-5" id="currentZone"></p>


            <div class="d-flex justify-content-center gap-3 mb-5">
                <button class="btn btn-primary btn-lg rounded-pill px-4">
                    <i class="fa-solid fa-info me-1"></i>
                    Info Terkini
                </button>
                <button type="button" class="btn btn-light btn-lg rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#settingsModal">
                    <i class="fa-solid fa-map-location-dot me-1"></i>
                    Pilih Zon
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        
        <div class="row">
            <div class="col-md-10">
                <div class="bg-white shadow-lg rounded-5 p-4 mx-auto">
                    <div class="row g-2 justify-content-center text-uppercase fw-bold d-flex">
                        <div class="col">

                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <span class="opacity-50 fs-5">Subuh</span>
                                        <!-- <div class="btn btn-outline-secondary">
                                            <i class="fa-regular fa-sun"></i>
                                        </div> -->
                                    </div>
                                    <h1 class=" display-6 fw-bolder py-3" id="time-fajr">--:--</h1>
                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <span class="opacity-50 fs-5">Syuruk</span>
                                        <!-- <div class="btn btn-outline-secondary">
                                            <i class="fa-regular fa-sun"></i>
                                        </div> -->
                                    </div>
                                    <h1 class=" display-6 fw-bolder py-3" id="time-syuruk">--:--</h1>
                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <span class="opacity-50 fs-5">Zohor</span>
                                        <!-- <div class="btn btn-outline-secondary">
                                            <i class="fa-regular fa-sun"></i>
                                        </div> -->
                                    </div>
                                    <h1 class=" display-6 fw-bolder py-3" id="time-dhuhr">--:--</h1>
                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <span class="opacity-50 fs-5">Asar</span>
                                        <!-- <div class="btn btn-outline-secondary">
                                            <i class="fa-regular fa-sun"></i>
                                        </div> -->
                                    </div>
                                    <h1 class=" display-6 fw-bolder py-3" id="time-asr">--:--</h1>
                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <span class="opacity-50 fs-5">Maghrib</span>
                                        <!-- <div class="btn btn-outline-secondary">
                                            <i class="fa-regular fa-sun"></i>
                                        </div> -->
                                    </div>
                                    <h1 class=" display-6 fw-bolder py-3" id="time-maghrib">--:--</h1>
                                </div>
                            </div>

                        </div>

                        <div class="col">

                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <span class="opacity-50 fs-5">Ishak</span>
                                        <!-- <div class="btn btn-outline-secondary">
                                            <i class="fa-regular fa-moon"></i>
                                        </div> -->
                                    </div>
                                    <h1 class=" display-6 fw-bolder py-3" id="time-isha">--:--</h1>
                                </div>
                            </div>


                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-2 d-inline-flex">
                <div class="d-flex bg-primary-solid shadow-lg rounded-5 p-2 mx-auto justify-content-center" style="flex: auto;">
                    <div class="row g-2 justify-content-center text-uppercase fw-bold">
                        <div class="col d-flex justify-content-center align-items-center">

                            <h1 class="display-5 fw-bolder py-3 text-white" id="liveClock">00:00</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="settingsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Zon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Pilih Zon</label>
                    <select class="form-select" id="zoneSelect">
                        <option value="SGR01" selected>Selangor (Gombak, Petaling, Sepang, Hulu Langat, Hulu Selangor,
                            Shah Alam)</option>
                        <option value="SGR02">Selangor (Kuala Selangor, Sabak Bernam)</option>
                        <option value="SGR03">Selangor (Klang, Kuala Langat)</option>

                        <option value="JHR01">Johor (Pulau Aur dan Pulau Pemanggil)</option>
                        <option value="JHR02">Johor (Johor Bahru, Kota Tinggi, Mersing)</option>
                        <option value="JHR03">Johor (Kluang, Pontian)</option>
                        <option value="JHR04">Johor (Batu Pahat, Muar, Segamat, Gemas Johor)</option>

                        <option value="MLK01">Seluruh Negeri Melaka</option>

                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary rounded-pill px-4" onclick="saveSettings()">Tukar Sekarang</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const hijriMonths = ["Muharam", "Safar", "Rabiul Awal", "Rabiul Akhir", "Jamadil Awal", "Jamadil Akhir", "Rejab", "Sya'ban", "Ramadan", "Syawal", "Zulkaedah", "Zulhijjah"];
        const zoneNames = { "SGR01": "Selangor. Gombak, Petaling, Sepang, Hulu Langat, S.Alam", "SGR02": "Selangor. Kuala Selangor, Sabak Bernam", "SGR03": "Selangor. Klang, Kuala Langat", "JHR01": "Johor. Pulau Aur dan Pulau Pemanggil", "JHR02": "Johor. Johor Bahru, Kota Tinggi, Mersing", "MLK01": "Melaka. Melaka Tengah, Alor Gajah, Jasin", "WLY01": "Kuala Lumpur, Putrajaya" };

        let currentZone = localStorage.getItem('azanZone') || 'SGR01';
        let prayerDataTimes = {};

        function updateClock() {
            const now = new Date();
            document.getElementById('liveClock').innerText = now.toLocaleTimeString('en-GB');
            document.getElementById('masihiDate').innerText = now.toLocaleDateString('en-MY', {
                weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
            });
            updateUIStates(now);
        }

        function updateUIStates(now) {
            let currentActiveId = null;
            const sortedKeys = ['fajr', 'syuruk', 'dhuhr', 'asr', 'maghrib', 'isha'];

            // 1. Determine which ID should be active
            for (let i = 0; i < sortedKeys.length; i++) {
                const id = sortedKeys[i];
                const prayerDate = prayerDataTimes[id];

                if (prayerDate && now >= prayerDate) {
                    currentActiveId = id;
                }
            }

            // 2. Special Rule for Syuruk: If active for > 15 mins, move highlight to Zohor
            if (currentActiveId === 'syuruk') {
                const syurukTime = prayerDataTimes['syuruk'];
                const diffInMinutes = (now - syurukTime) / 1000 / 60;

                if (diffInMinutes >= 15) {
                    currentActiveId = 'dhuhr';
                }
            }

        
        }

        async function fetchPrayerTimes() {
            try {
                const response = await fetch(`https://www.e-solat.gov.my/index.php?r=esolatApi/takwimsolat&zone=${currentZone}&period=today`);
                const result = await response.json();

                if (result.status === "OK!" && result.prayerTime.length > 0) {
                    const todayData = result.prayerTime[0];

                    // Hijrah Date Formatting
                    const hijriParts = todayData.hijri.split('-');
                    const hijriFullDate = `${hijriParts[2]} ${hijriMonths[parseInt(hijriParts[1]) - 1]} ${hijriParts[0]}`;
                    document.getElementById('hijriDate').innerText = hijriFullDate;
                    document.getElementById('currentZone').innerText = `Zon: ${zoneNames[currentZone] || currentZone}`;

                    const prayerMapping = {
                        'fajr': todayData.fajr,
                        'syuruk': todayData.syuruk,
                        'dhuhr': todayData.dhuhr,
                        'asr': todayData.asr,
                        'maghrib': todayData.maghrib,
                        'isha': todayData.isha
                    };

                    for (const [id, timeStr] of Object.entries(prayerMapping)) {
                        const [h, m] = timeStr.split(':');
                        const t = new Date();
                        t.setHours(parseInt(h), parseInt(m), 0);
                        prayerDataTimes[id] = t;

                        document.getElementById(`time-${id}`).innerText = t.toLocaleTimeString('en-GB', {
                            hour: '2-digit', minute: '2-digit', hour12: true
                        }).toUpperCase();
                    }
                    // Initial UI update
                    updateUIStates(new Date());
                }
            } catch (error) {
                console.error("Fetch error:", error);
            }
        }

        function saveSettings() {
            currentZone = document.getElementById('zoneSelect').value;
            localStorage.setItem('azanZone', currentZone);
            fetchPrayerTimes();
            bootstrap.Modal.getInstance(document.getElementById('settingsModal')).hide();
        }

        setInterval(updateClock, 1000);
        updateClock();
        fetchPrayerTimes();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>