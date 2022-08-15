@extends('layout.main')

@section('main-page')
<div class="container-fluid">
  <div class="card">
    <div class="card-content">
      <h5 class="card-title">Form Input Persyaratan</h5>
      <form>
        @csrf
        <div class="row">
          <div class="input-field col s12 m12 l6">
            <select id="nik" name="nik">
              <option value="" disabled hidden selected>Pilih Nasabah</option>
              @foreach($nasabah as $item)
              <option value="{{ $item->id }}">{{ $item->nik . ' - ' . $item->name_by_identity }}</option>
              @endforeach
            </select>
          </div>
          <div class="input-field col s12 m12 l6">
            <input type="text" class="pickadate" placeholder="Tanggal Pendaftaran" />
          </div>
        </div>
        <div class="box-button">
          <button type="submit" class="btn waves-effect waves-light primary right">Submit</button>
        </div>
      </form>
    </div>
  </div>
    <script src="../../assets/libs/pickadate/lib/compressed/picker.js"></script>
    <script src="../../assets/libs/pickadate/lib/compressed/picker.date.js"></script>
    <script src="../../assets/libs/pickadate/lib/compressed/picker.time.js"></script>
    <script src="../../assets/libs/pickadate/lib/compressed/legacy.js"></script>
    <script src="../../assets/libs/moment/moment.js"></script>
    <script src="../../assets/libs/daterangepicker/daterangepicker.js"></script>
    <script src="../../dist/js/pages/forms/datetimepicker/datetimepicker.init.js"></script>
</div>
@endsection