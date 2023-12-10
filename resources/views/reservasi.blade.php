@extends('layouts.app')

@section('content')
<link href="FrontEnd/public/frontend/css/style.css" rel="stylesheet">
<div div class="bg-image" style="background-image: url(asset/BG2.png); height: 75vh">
<div class="container mt-4 pt-4" >
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
              <div class="row mb-5">
                <div class="col-lg-7 intro">
                 <h1 style="color: white;"><strong>Reservasi Device</strong> Dengan Satu Sentuhan</h1>
                </div>
              </div>

              <form class="trip-form">
                <div class="row align-items-center">
                 <div class="mb-3 mb-md-0 col-md-4">
                    <select name="category_id" id="category_id" class="custom-select form-control">
                      <option value="">Pilih Device</option>
                      <option value="1">PS5 1</option>
                      <option value="2">PS5 2</option>
                      <option value="3">Xbox 1</option>
                      <option value="4">Xbox 2</option>
                      <option value="5">Komputer</option>
                      <option value="5">Pump Dance</option>

                    </select>
                 </div>
                 <div class="mb-3 mb-md-0 col-md-4">
                    <select name="penumpang" id="penumpang" class="custom-select form-control">
                      <option value="">Waktu</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="5">6</option>
                      <option value="5">7</option>
                      <option value="5">8</option>
                    </select>
                 </div>

                 <div class="mb-3 mb-md-0 col-md-4">
                    <button type="submit" class="btn btn-primary btn-lg" style="padding: 4% 40%;">Submit</button>
                 </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      <div class="site-section">
      <div class="container bg-light bg-gradient"  style="margin-top: 20%;">
        <h2 class="section-heading"><strong>Jadwal Device Jenis Device</strong></h2>
        <p class="mb-3 mt-2" style="margin-left: 1%">Jadwal dapat berubah sewaktu-waktu</p>
            <p class=""  style="font-size: 40px; margin-left: 1%">1. 08:15 - 09:15<br>2. 09:45 - 10:45<br>3. 10:15 - 11:15<br>4. 11:45 - 12:45<br>5. 13:15 - 14:15<br>6. 14:45 - 15:45<br>7. 15:15 - 16:15<br>8. 16:45 - 17:45</p>            
        </div>
      </div>
      </div>
    </div>
<style>
    #carouselControl {
        max-width: 100%;
        margin: auto;
        height: 100%;
    }
</style>
@endsection