@extends('template.master') @section('content')
    <div class="container">
        <div class="section">
            <h5 class="pagetitle">Yuk Kita Isi dengan Jujur</h5>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <span id="pertanyaanContainer"></span>
            <div class="row">
                <div class="">
                    <button class="waves-effect waves-light btn-large bg-primary" onclick="handleFormSubmit()">Daftar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="backtotop">
        <a class="btn-floating btn primary-bg">
            <i class="mdi mdi-chevron-up"></i>
        </a>
    </div>
    <script>
        const apiKey = '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';
        const apiUrl = 'https://api.openai.com/v1/chat/completions';
        let potdatas = {
            "pertanyaan": {
                "nama": "Siapa Namamu?",
                "pertanyaan_1": "Jam berapa kamu tidur di malam hari?",
                "pertanyaan_2": "Apa agama kamu?",
                "pertanyaan_3": "Kondisi lampu tidur Mati / Menyala?",
                "pertanyaan_4": "berapa Suhu saat kamu Tidur (dalam celcus)?",
                "pertanyaan_5": "Memilih tidur sendiri atau tidak?",
                "pertanyaan_6": "kamu berasal dari SMA atau SMK?",
                "pertanyaan_7": "Apa hobi kamu?",
                "pertanyaan_8": "Apakah akan Sering menelpon keluarga?",
                "pertanyaan_9": "Terbiasa bangun sendiri atau alarm ?",
                "pertanyaan_10": "Apa pelajaran favoritmu di jenjang SMA/K?",
                "pertanyaan_11": "Apakah kamu mendengkur saat tidur?",
                "pertanyaan_12": "Apa tipe belajarmu?",
                "pertanyaan_13": "kamu aktif belajar di malam atau pagi hari?",
                "pertanyaan_14": "kamu seseorang yang introvert atau extrovert?",
                "pertanyaan_15": "Apa kamu akan mengajak teman ke kamar ?",
            },
            "jawaban": {}
        }
        if (sessionStorage.getItem('allspark') === null) {
            sessionStorage.setItem('allspark', JSON.stringify(potdatas));
            potdatas = JSON.parse(sessionStorage.getItem('allspark'));
        } else {
            potdatas = JSON.parse(sessionStorage.getItem('allspark'));
        }
        console.log(potdatas);

        function generateForm() {
            const jso = {
                "pertanyaan": {
                    "nama": ["Siapa Namamu?", "text1", "{{session()->get('Name')}}"],
                    "pertanyaan_1": ["Jam berapa kamu tidur di malam hari?", "text"],
                    "pertanyaan_2": ["Apa agama kamu?", "select", ["Kristen", "Katolik", "Konghucu", "Islam", "Hindu",
                        "Budha"
                    ]],
                    "pertanyaan_3": ["Kondisi lampu tidur Mati / Menyala?", "select", ["Mati", "Menyala"]],
                    "pertanyaan_4": ["berapa Suhu saat kamu Tidur (c)?", "number"],
                    "pertanyaan_5": ["Memilih tidur sendiri atau tidak?", "select", ["Tidur Sendiri",
                        "Tidak Tidur Sendiri"
                    ]],
                    "pertanyaan_6": ["kamu berasal dari SMA atau SMK?", "select", ["SMA", "SMK"]],
                    "pertanyaan_7": ["Apa hobi kamu?", "text"],
                    "pertanyaan_8": ["Apakah akan Sering menelpon keluarga?", "select", ["Ya Akan Sering",
                        "Mungkin Agak Sering", "Beberapa Saat", "Tidak Akan Sering"
                    ]],
                    "pertanyaan_9": ["Terbiasa bangun sendiri atau alarm ?", "select", ["Bangun Sendiri", "Alarm",
                        "Keduanya"
                    ]],
                    "pertanyaan_10": ["Apa pelajaran favoritmu di jenjang SMA/K?", "text"],
                    "pertanyaan_11": ["Apakah kamu mendengkur saat tidur?", "select", ["Ya", "Tidak"]],
                    "pertanyaan_12": ["Apa tipe belajarmu?", "select", ["Visual", "Auditorial", "Kinestetik",
                        "kombinasi dari ketiganya"
                    ]],
                    "pertanyaan_13": ["kamu aktif belajar di malam atau pagi hari?", "select", ["Malam", "Pagi"]],
                    "pertanyaan_14": ["kamu seseorang yang introvert atau extrovert?", "select", ["Introvert",
                        "Extrovert"
                    ]],
                    "pertanyaan_15": ["Apa kamu akan mengajak teman ke kamar ?", "select", ["Hanya saat Belajar",
                        "Akan Sering", "tidak akan", "dalam keadaan kusus"
                    ]],
                }
            };
            const pertanyaanContainer = document.getElementById('pertanyaanContainer');
            pertanyaanContainer.innerHTML = '';
            for (const key in jso.pertanyaan) {
                let pertanyaanInput = document.createElement('input');
                if (jso.pertanyaan[key][1] == "text") {
                    pertanyaanInput = `
      <div class="row">
          <div class="input-field col s12">
              <i class="mdi mdi-account-outline prefix"></i>
              <input id="${key}" name="${key}" type="text" class="validate" value="">
                  <label for="${key}">${jso.pertanyaan[key][0]}.</label>
              </div>
          </div>`}
           else if (jso.pertanyaan[key][1] == "text1") {
                    pertanyaanInput = `
        <div class="row">
          <div class="input-field col s12">
              <i class="mdi mdi-account-outline prefix"></i>
              <input id="${key}" name="${key}" type="text" class="validate" value="{{session()->get('Name')}}" readonly>
                  <label for="${key}">${jso.pertanyaan[key][0]}.</label>
              </div>
          </div>`
                } else if (jso.pertanyaan[key][1] === "select") {
                    pertanyaanInput = `
          <div class="row">
              <div class="input-field col s12">
                  <select class="validate" value="" id="${key}">
                      <option value="" disabled>Choose your option</option>`
                    for (const key2 in jso.pertanyaan[key][2]) {
                        pertanyaanInput += `
                      <option value="${jso.pertanyaan[key][2][key2]}">${jso.pertanyaan[key][2][key2]}</option>`
                    }
                    pertanyaanInput += `

                  </select>
                  <label>${jso.pertanyaan[key][0]}</label>
              </div>
          </div>
              `
                } else if (jso.pertanyaan[key][1] === "number") {
                    pertanyaanInput = `
          <div class="row">
              <div class="input-field col s12">
                  <i class="mdi mdi-account-outline prefix"></i>
                  <input id="${key}" name="${key}" type="number" class="validate" value="">
                      <label for="${key}">${jso.pertanyaan[key][0]}.</label>
                  </div>
              </div>`
                }
                pertanyaanContainer.innerHTML += pertanyaanInput;
            }
        }

        function handleFormSubmit() {
            const jso = {
                "pertanyaan_1": document.getElementById('pertanyaan_1').value,
                "pertanyaan_2": document.getElementById('pertanyaan_2').value,
                "pertanyaan_3": document.getElementById('pertanyaan_3').value,
                "pertanyaan_4": document.getElementById('pertanyaan_4').value,
                "pertanyaan_5": document.getElementById('pertanyaan_5').value,
                "pertanyaan_6": document.getElementById('pertanyaan_6').value,
                "pertanyaan_7": document.getElementById('pertanyaan_7').value,
                "pertanyaan_8": document.getElementById('pertanyaan_8').value,
                "pertanyaan_9": document.getElementById('pertanyaan_9').value,
                "pertanyaan_10": document.getElementById('pertanyaan_10').value,
                "pertanyaan_11": document.getElementById('pertanyaan_11').value,
                "pertanyaan_12": document.getElementById('pertanyaan_12').value,
                "pertanyaan_13": document.getElementById('pertanyaan_13').value,
                "pertanyaan_14": document.getElementById('pertanyaan_14').value,
                "pertanyaan_15": document.getElementById('pertanyaan_15').value
            };
            let name = document.getElementById("nama").value
            // potdatas.jawaban[name] = jso;
            var ump = jso;

            console.log(ump);


            sendDataViaGET('/Shadip', ump);
            // sessionStorage.setItem('allspark', JSON.stringify(ump));
            alert(name + " Sudah di Simpan")
            window.location.href = "/core";
        }

        function sendDataViaGET(url, data) {
            const query = Object.keys(data)
                .map(key => `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}`)
                .join("&");

            const fullUrl = `${url}?${query}`;
            console.log(fullUrl);

            return fetch(fullUrl, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    return data;
                })
                .catch(error => {
                    console.log(error);
                    throw error;
                });
        }

        generateForm();
    </script>
@endsection
