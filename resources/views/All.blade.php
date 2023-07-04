@extends('template.master')
@section('content')
    <div class="preloader-background">
        <div class="preloader-wrapper">
            <div id="preloader"></div>
        </div>
    </div>
    <!-- START navigation -->
    <nav class="fix_topscroll logo_on_fixed  topbar navigation" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class=" brand-logo ">Lgarin211</a>
            <a href="#" data-target="slide-nav"
                class="waves-effect waves-circle navicon sidenav-trigger show-on-large">
                <i class="mdi mdi-menu"></i>
            </a>
        </div>
    </nav>
    <ul id="slide-nav" class="sidenav sidemenu">
        <li class="menu-close">
            <i class="mdi mdi-close"></i>
        </li>
        <li class="logo">
            <table id="namaTable">
                <thead>
                    <tr>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </li>
    </ul>
    <li class="copy-spacer"></li>
    <li class="copy-wrap">
        <div class="copyright">&copy; Copyright @ lgarin211</div>
        </ul>
    </li>
    </ul>
    <div class="login-bg access-welcome"></div>
    <div class="container login-area">
        <div class="section">
            <div class="row center" style="position: relative;">
                <h1 class="white-text center welcome-logo">
                    <a href="https://afergus.live">Dkamar</a>
                </h1>
                <h5 class="welcome-tagline white-text center">Hallo Ayok Cari Teman Sekamarmu.</h5>
                <div class="spacer-large"></div>
                <div class="spacer-large"></div>
                <div style="position: relative; width: 100%;">
                    <div class="white-text center">
                        <h1>Teman Kelas {{session()->get('Kelas')}}</h1>
                        <div class="row ">
                            <div class="col s12 pad-0">
                                <table class="colored primary" style="color: black;">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kontak</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            @php
                                                $u=[
                                                    'Kelas' => session()->get('Kelas'),
                                                    'GPL'=>session()->get('GPL')
                                                ];
                                                $A=DB::table('mhsrtb')->where($u)->get();
                                            @endphp
                                            @foreach ($A as $pi)
                                            <tr>
                                                <td>{{$pi->Name}}</td>
                                                <td><a href="https://wa.me/62{{$pi->Wa}}" target="_blank">{{$pi->Wa}}</a></td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="input-field sel-wrap sel-wrap col s12">
                            <select id="pulli">
                                <option value="" disabled>Choose your option</option>
                                <option value="{{ session()->get('Name') }}">{{ session()->get('Name') }}</option>
                            </select>
                            <label>Select</label>
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <div class="spacer"></div>
                    <div class="spacer"></div>
                    {{-- <a href="./f1.html" class='waves-effect waves-light btn-large bg-primary'> Daftarkan </a> --}}
                    <a href="" class='waves-effect waves-light btn-large bg-primary'> Cara Pakai </a>
                    &nbsp;&nbsp;&nbsp; <a href="#modal1058443539"
                        class='waves-effect waves-light btn-large bg-primary waves-effect waves-light btn modal-trigger'
                        onclick="openModal()"> Buat Hasil </a>
                    <div class="spacer"></div>
                    <div class="links">
                        <a href="#!.html" class='waves-effect'> Go Back </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Structure -->
    <div id="modal1058443539" class="modal  bottom-sheet">
        <pre class="modal-content " id="po">
        <div class="progress  red lighten-4">
            <div class="indeterminate red lighten-2" style="width: 20%"></div>
        </div>
    </pre>
        <div class="modal-footer ">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat" onclick="delleteHistory()">tutup</a>
            <a href="#!" class="waves-effect waves-green btn-flat" onclick="openModal()">Ulangi</a>
        </div>
    </div>
    <script>
        function formor() {
            fetch('/coreuv')
                .then(response => response.json())
                .then(data => {
                    sessionStorage.setItem('allspark', JSON.stringify(data));
                    console.log(data);
                })
                .catch(error => {
                    console.error('Terjadi kesalahan:', error);
                });
        }
        formor();

        function openModal() {
            formor();
            const pwda = document.getElementById('pulli').value;
            const o = `
    <div class="progress  red lighten-4">
        <div class="indeterminate red lighten-2" style="width: 20%"></div>
    </div>`;
            document.getElementById('po').innerHTML = o;
            const ref = `
    <table>
        <tr>
            <th>Nama Teman 1</th>
            <th>Nama Teman 2</th>
            <th>Presentase Kecocokan</th>
            <th>Alasan</th>
        </tr>
        <tr>
            <td>Jessen</td>
            <td>Ferren</td>
            <td>70%</td>
            <td>keduanya sama-sama menyukai suhu ruangan normal tanpa AC dan lebih nyaman tidur sendiri.</td>
        </tr>
    </table>`
            let apiKey = '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';
            const apiUrl = 'https://api.openai.com/v1/chat/completions';
            const potdatas = JSON.parse(sessionStorage.getItem('allspark'));
            let p={"pertanyaan": {
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
            }
            }
            let question = JSON.stringify(p)+JSON.stringify(potdatas)
            // question += " Calon pasangan untuk " + pwda + ", berikan persentase kecocokannya, Alasan Positif, Alasan Negatif, sajikan dalam bentuk html tabel";
            question += " Dari Data tersebut carikan 3 pasangan kamar untuk " + pwda + ", Hanya berikan persentase kecocokannya, Alasan Positif (spesifik), Alasan Negatif(spesifik), sajikan dalam bentuk html tabel";
            console.log(question);
            const headers = {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${apiKey}`
            };
            const data = {
                model: 'gpt-3.5-turbo',
                messages: getChatHistory().concat([{
                    role: 'user',
                    content: question
                }]),
                temperature: 1
            };
            console.log(data);
            fetch(apiUrl, {
                method: 'POST',
                headers,
                body: JSON.stringify(data)
            }).then(response => response.json()).then(result => {
                const datas = result.choices[0].message.content;
                document.getElementById("po").innerHTML = datas;
                console.log(datas);
                saveChatHistory([{
                    role: 'user',
                    content: "contoh " + ref
                }, {
                    role: 'assistant',
                    content: datas
                }]);
            }).catch(error => {
                console.error('Terjadi kesalahan:', error);
            });
        }

        function getChatHistory() {
            const chatHistory = JSON.parse(sessionStorage.getItem('chatHistory'));
            if (chatHistory) {
                return chatHistory;
            } else {
                return [];
            }
        }

        function saveChatHistory(messages) {
            const chatHistory = getChatHistory();
            chatHistory.push(...messages);
            sessionStorage.setItem('chatHistory', JSON.stringify(chatHistory));
        }

        function delleteHistory() {
            sessionStorage.removeItem('chatHistory');
        }

        function createRow(value) {
            var table = document.getElementById("namaTable");
            var row = table.insertRow();
            var cell = row.insertCell();
            cell.innerHTML = value;
        }

        function printdata() {
            // var pl={{}}
            // let potdatas = JSON.parse(sessionStorage.getItem('allspark'));
            // var jawaban = potdatas.jawaban;
            // for (var nama in jawaban) {
            //     console.log(nama);
            //     createRow(nama);
            //     document.getElementById("pulli").innerHTML += `<option value="${nama}">${nama}</option>`;
            // }
        }
        printdata();
    </script>
@endsection
