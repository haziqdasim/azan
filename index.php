<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background-color: white;
            color: black;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .active-prayer {
            border: 2px solid #00d4ff;
            background: rgba(0, 212, 255, 0.1);
            transform: scale(1.05);
        }

        .card {
            border-radius: 16px;
        }

        .bg-primary-solid {
            background-color: #0d6efd !important;
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
            color: #0d6efd !important;
        }
    </style>
</head>

<body class="vh-100 d-flex align-content-between flex-wrap p-4">

    <header>

        <div class="d-flex align-items-center">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top px-4">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="#">
                        <!-- <img src="#" alt="Logo" width="30" class="me-2"> -->
                        AZAN
                    </a>
                    <div class="ms-auto d-none d-lg-flex align-items-center gap-3">
                        <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal"
                            data-bs-target="#settingsModal">
                            <i class="fa-solid fa-map-location-dot me-1"></i>
                            Pilih Zon
                        </button>
                    </div>
                </div>
            </nav>
        </div>
        
    </header>


    <div class="container-fluid text-center">

    </div>

    <div class="container-fluid text-center">
        <div class="container content-wrapper position-relative">
            <span class="badge rounded-pill border px-3 py-2 mb-4 text-primary">
                <i class="fa-solid fa-mosque me-1"></i>
                Portal Waktu Solat
            </span>
            <h1 class="display-3 fw-bold text-navy">
                Waktu Solat Malaysia
            </h1>
            <p class="lead text-muted mb-5">
                Pusat ibadah dan komuniti masyarakat.
            </p>
            <div class="d-flex justify-content-center gap-3 mb-5">
                <button class="btn btn-primary btn-lg rounded-pill px-5">
                    <i class="fa-solid fa-info me-1"></i>
                    Info Terkini
                </button>
                <button class="btn btn-outline-secondary btn-lg rounded-pill px-5 bg-white">
                    <i class="fa-regular fa-heart text-primary me-1"></i>
                    Infak Masjid
                </button>
            </div>
        </div>
    </div>
    
    <div class="container-fluid text-center">
        <div class="bg-white shadow-lg rounded-5 p-4 mx-auto">
            <div class="row g-2 justify-content-center text-uppercase fw-bold">
                <div class="col">

                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="opacity-50">Subuh</span>
                                <div class="btn btn-outline-secondary">
                                    <i class="fa-regular fa-sun"></i>
                                </div>
                            </div>
                            <h1 class="card-title fw-bolder py-3" id="time-fajr">--:--</h1>
                            <hr class="border-secondary opacity-25">
                            <span class="badge bg-secondary">Iqamah</span>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="opacity-50">Syuruk</span>
                                <div class="btn btn-outline-secondary">
                                    <i class="fa-regular fa-sun"></i>
                                </div>
                            </div>
                            <h1 class="card-title fw-bolder py-3" id="time-syuruk">--:--</h1>
                            <hr class="border-secondary opacity-25">
                            <span class="badge bg-secondary">Iqamah: -</span>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="opacity-50">Zohor</span>
                                <div class="btn btn-outline-secondary">
                                    <i class="fa-regular fa-sun"></i>
                                </div>
                            </div>
                            <h1 class="card-title fw-bolder py-3" id="time-dhuhr">--:--</h1>
                            <hr class="border-secondary opacity-25">
                            <span class="badge bg-secondary">Iqamah</span>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="opacity-50">Asar</span>
                                <div class="btn btn-outline-secondary">
                                    <i class="fa-regular fa-sun"></i>
                                </div>
                            </div>
                            <h1 class="card-title fw-bolder py-3" id="time-asr">--:--</h1>
                            <hr class="border-secondary opacity-25">
                            <span class="badge bg-secondary">Iqamah</span>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="opacity-50">Maghrib</span>
                                <div class="btn btn-outline-secondary">
                                    <i class="fa-regular fa-sun"></i>
                                </div>
                            </div>
                            <h1 class="card-title fw-bolder py-3" id="time-maghrib">--:--</h1>
                            <hr class="border-secondary opacity-25">
                            <span class="badge bg-secondary">Iqamah</span>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="opacity-50">Ishak</span>
                                <div class="btn btn-outline-secondary">
                                    <i class="fa-regular fa-moon"></i>
                                </div>
                            </div>
                            <h1 class="card-title fw-bolder py-3" id="time-isha">--:--</h1>
                            <hr class="border-secondary opacity-25">
                            <span class="badge bg-secondary">Iqamah</span>
                        </div>
                    </div>


                </div>
            </div>

            <div class="footer-info d-flex justify-content-between mt-4 text-muted small border-top pt-3">
                <div>
                    <i class="fa-regular fa-clock text-primary"></i>
                    <span><span class="h6 text-dark fw-bolder" id="liveClock">00:00:00</span> • <span class="h6"
                            id="hijriDate">-- --- ----</span>
                        <span class="h6">Hijrah</span> • <span class="h6" id="masihiDate">-- --- ----</span></span>
                </div>
                <div>
                    <span><span id="currentZone"></span> • Sumber: <a href="https://www.e-solat.gov.my/"
                            target="_blank">e-Solat JAKIM</a></span>
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
                            S.Alam)</option>
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
                    <button type="button" class="btn btn-primary" onclick="saveSettings()">Tukar Sekarang</button>
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

            // 3. Update the UI
            sortedKeys.forEach(id => {
                const card = document.getElementById(`time-${id}`).closest('.card');
                const iqamahBadge = card.querySelector('.badge');
                const prayerDate = prayerDataTimes[id];

                // Handle Iqamah Display
                if (id === 'syuruk') {
                    iqamahBadge.style.display = 'show'; // Syuruk has no iqamah
                } else if (prayerDate) {
                    iqamahBadge.style.display = 'inline-block';
                    const iqamahDate = new Date(prayerDate.getTime() + 5 * 60000);
                    iqamahBadge.innerText = `Iqamah: ${iqamahDate.toLocaleTimeString('en-GB', {
                        hour: '2-digit', minute: '2-digit', hour12: true
                    }).toUpperCase()}`;
                }

                // Apply Solid Primary Color
                if (id === currentActiveId) {
                    card.classList.add('bg-primary-solid', 'shadow');
                } else {
                    card.classList.remove('bg-primary-solid', 'shadow');
                }
            });
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